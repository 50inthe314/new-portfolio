import { onMessage, postMessage } from '../lib/Interframe';

function createHandler(key) {
  return onMessage.bind(null, key);
}

export const onClearQueryParam = createHandler('leadin_clear_query_param');
export const onConnect = createHandler('leadin_connect_portal');
export const onDisconnect = createHandler('leadin_disconnect_portal');
export const onEnterFullScreen = createHandler('leadin_enter_fullscreen');
export const onExitFullScreen = createHandler('leadin_exit_fullscreen');
export const onGetAssetsPayload = createHandler('leadin_get_assets_payload');
export const onGetDomain = createHandler('leadin_get_wp_domain');
export const onInitNavigation = createHandler('leadin_init_navigation');
export const onPageReload = createHandler('leadin_page_reload');
export const onUpgrade = createHandler('leadin_upgrade');
export const onSyncRoute = createHandler('leadin_sync_route');
export const onGetPortalInfo = createHandler('leadin_get_portal_info');

export function changeRoute(route) {
  postMessage('leadin_change_route', route).catch(() => location.reload(true));
}

export function getAuth() {
  return postMessage('leadin_get_auth');
}

export function searchForms(searchQuery = '') {
  return postMessage('leadin_search_forms', searchQuery);
}

export function getForm(formId) {
  return postMessage('leadin_get_form', formId);
}

export function sendEvent(eventName, eventProperty) {
  return postMessage('leadin_track_event', { eventName, eventProperty });
}
