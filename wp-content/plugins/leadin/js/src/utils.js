export function log(...args) {
  try {
    if (window.localStorage.LEADIN_DEBUG) {
      args.unshift('[Leadin]');
      console.log(...args);
    }
  } catch (e) {
    //
  }
}
