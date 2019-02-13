import RouterInterface from "varie/lib/routing/RouterInterface";

import middleware from "./middleware";
import ErrorViews from "@views/errors";
import RSVP from "@views/rsvp/RSVP.vue";
import Welcome from "@views/welcome/Welcome.vue";

export default function($router: RouterInterface) {
  /*
  |--------------------------------------------------------------------------
  | Your default routes for your application
  |--------------------------------------------------------------------------
  |
  */
  $router.route("/", Welcome).setName("home");
  $router.route("/RSVP", RSVP);

  $router.route("*", ErrorViews.Error404);
}
