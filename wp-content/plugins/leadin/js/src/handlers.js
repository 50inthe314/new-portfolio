import {
  onConnect,
  onDisconnect,
  onUpgrade,
  onPageReload,
  onInitNavigation,
  onClearQueryParam,
  onGetDomain,
  onGetAssetsPayload,
  onEnterFullScreen,
  onExitFullScreen,
  onSyncRoute,
  onGetPortalInfo,
} from './api/hubspotPluginApi';
import {
  connect,
  disconnect,
  getDomain,
  clearPortalIdPolling,
} from './api/wordpressApi';
import { adminUrl } from './constants/leadinConfig';
import { initNavigation, syncRoute } from './navigation';
import enterFullScreen, { exitFullScreen, checkFullScreen } from './fullscreen';
import { portalDomain, portalId } from './constants/leadinConfig';

onConnect((portalInfo, reply) => {
  connect(
    portalInfo,
    () => {
      clearPortalIdPolling();
      reply();
    },
    reply.bind(null, { error: 'Error connecting to the portal' })
  );
});

onDisconnect((message, reply) => {
  disconnect(
    reply,
    reply.bind(null, { error: 'Error disconnecting from the portal' })
  );
});

onUpgrade((message, reply) => {
  reply();
  location.href = `${adminUrl}plugins.php`;
});

onPageReload((message, reply) => {
  reply();
  window.location.reload(true);
});

onInitNavigation((message, reply) => {
  reply();
  initNavigation();
});

onClearQueryParam((message, reply) => {
  reply();
  let currentWindowLocation = window.location.toString();
  if (currentWindowLocation.indexOf('?') > 0) {
    currentWindowLocation = currentWindowLocation.substring(
      0,
      currentWindowLocation.indexOf('?')
    );
  }
  const newWindowLocation = `${currentWindowLocation}?page=leadin`;
  window.history.pushState({}, '', newWindowLocation);
});

onGetDomain((message, reply) => {
  getDomain(data => {
    if (data.domain) {
      reply({ data: data.domain });
    }
  });
});

onGetAssetsPayload((message, reply) => {
  reply();
});

onEnterFullScreen((message, reply) => {
  enterFullScreen();
  reply();
});

onExitFullScreen((message, reply) => {
  exitFullScreen();
  reply();
});

onSyncRoute((route, reply) => {
  checkFullScreen(route);
  syncRoute(route);
  reply();
});

onGetPortalInfo((message, reply) => {
  reply({ data: { portalDomain, portalId } });
});
