export default {
  /*
  |--------------------------------------------------------------------------
  | Mode
  |--------------------------------------------------------------------------
  |
  | Configure the router mode.
  |
  | Supported : "hash", "history", "abstract"
  |
  */

  mode: "history",

  /*
  |--------------------------------------------------------------------------
  | Base
  |--------------------------------------------------------------------------
  |
  | The base URL of the app.
  |
  */

  base: "/",

  /*
  |--------------------------------------------------------------------------
  | Link active class
  |--------------------------------------------------------------------------
  |
  | When a link is active this class will be attached to it.
  |
  */

  linkActiveClass: "router-link-active",

  /*
  |--------------------------------------------------------------------------
  | Link exact class
  |--------------------------------------------------------------------------
  |
  | When a link exactly matches the current url this class will be attached to it.
  |
  */

  linkExactActiveClass: "router-link-exact-active",

  /*
  |--------------------------------------------------------------------------
  | Scroll Behavior
  |--------------------------------------------------------------------------
  |
  | Allows for a customized global scrolling function
  |
  */

  scrollBehavior: (to, from, savedPosition) => {
    if (to.hash) {
      return {
        selector: to.hash,
        offset: { x: 0, y: 50 },
      };
    }
    return { x: 0, y: 0 };
  },

  /*
  |--------------------------------------------------------------------------
  | Query Parser
  |--------------------------------------------------------------------------
  |
  | Provide custom query string parser.
  |
  */

  parseQuery: null,

  /*
  |--------------------------------------------------------------------------
  | Stringify function
  |--------------------------------------------------------------------------
  |
  | Provide custom query stringify function.
  |
  */

  stringifyQuery: null,

  /*
  |--------------------------------------------------------------------------
  | Fallback links
  |--------------------------------------------------------------------------
  |
  | Controls whether the router should fallback to hash mode when the
  | browser does not support history.pushState. Defaults to true.
  |
  */

  fallback: true,
};
