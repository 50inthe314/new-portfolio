import $ from 'jquery';

import Raven from './Raven';

export default class EventBus {
  constructor() {
    this.bus = $({});
  }

  trigger(...args) {
    this.bus.trigger(...args);
  }

  on(event, callback) {
    this.bus.on(event, Raven.wrap(callback));
  }
}
