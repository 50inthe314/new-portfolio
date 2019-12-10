import $ from 'jquery';

import Raven, { configureRaven } from './lib/Raven';
import { addExternalLinks } from './menu';
import { portalId } from './constants/leadinConfig';
import { initInterframe } from './lib/Interframe';
import { startPortalIdPolling } from './api/wordpressApi';
import './handlers';

function main() {
  initInterframe();

  // Enable App Navigation only when viewing the plugin
  if (window.location.search.indexOf('page=leadin') !== -1) {
    if (!portalId) {
      startPortalIdPolling();
    }
  }

  $(document).ready(() => {
    addExternalLinks();
  });
}

configureRaven();
Raven.context(main);
