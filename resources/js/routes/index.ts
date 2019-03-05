import RouterInterface from "varie/lib/routing/RouterInterface";

import middleware from "./middleware";
import ErrorViews from "@views/errors";
import RSVP from "@views/rsvp/RSVP.vue";
import Invite from "@views/invite/Invite.vue";
import Welcome from "@views/welcome/Welcome.vue";

export default function($router: RouterInterface) {
  /*
  |--------------------------------------------------------------------------
  | Your default routes for your application
  |--------------------------------------------------------------------------
  |
  */
  $router.route("/", Welcome).setName("home");
  $router.layout("rsvp").group(() => {
    $router.route("RSVP", RSVP);
  });
  $router.layout("invite").group(() => {
    $router.route("invite/guest/:guest", Invite).setName("invite.guest");
  });

  $router.route("*", ErrorViews.Error404);
}
