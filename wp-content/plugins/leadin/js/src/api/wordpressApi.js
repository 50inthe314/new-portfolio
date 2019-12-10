import $ from 'jquery';

import Raven from '../lib/Raven';
import { ajaxUrl, nonce } from '../constants/leadinConfig';

function makeRequest(action, method, payload, success, error) {
  const url = `${ajaxUrl}?action=${action}&_ajax_nonce=${nonce}`;
  const ajaxPayload = {
    url,
    method,
    contentType: 'application/json',
    success:
      typeof success === 'function'
        ? Raven.wrap(data => success(JSON.parse(data)))
        : undefined,
    error: Raven.wrap(jqXHR => {
      let message;
      try {
        message = JSON.parse(jqXHR.responseText).error;
      } catch (e) {
        message = jqXHR.responseText;
      }

      Raven.captureMessage(
        `AJAX request failed with code ${jqXHR.status}: ${message}`
      );

      if (typeof error === 'function') {
        error();
      }
    }),
  };

  if (payload) {
    ajaxPayload.data = JSON.stringify(payload);
  }

  $.ajax(ajaxPayload);
}

function post(action, payload, success, error) {
  return makeRequest(action, 'POST', payload, success, error);
}

function get(action, success, error) {
  return makeRequest(action, 'GET', null, success, error);
}

const getPortal = () => get('leadin_get_portal');
let portalPollingTimeout;
let stopPortalPolling = false;

export function startPortalIdPolling() {
  portalPollingTimeout = setTimeout(() => {
    getPortal(data => {
      if (data.portalId) {
        location.reload(true);
      } else if (!stopPortalPolling) {
        startPortalIdPolling();
      }
    }, startPortalIdPolling);
  }, 5000);
}

export function clearPortalIdPolling() {
  clearTimeout(portalPollingTimeout);
  stopPortalPolling = true;
}

export const connect = (portalInfo, success, error) =>
  post('leadin_registration_ajax', portalInfo, success, error);

export const disconnect = post.bind(null, 'leadin_disconnect_ajax', {});
export const getDomain = get.bind(null, 'leadin_get_domain');
