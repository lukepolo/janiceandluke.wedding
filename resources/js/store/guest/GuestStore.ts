import state from "./state";
import actions from "./actions";
import getters from "./getters";
import mutations from "./mutations";
import { injectable, inject } from "inversify";
import StoreModule from "varie/lib/state/StoreModule";
import GuestRsvpStore from "@store/guest/modules/rsvp/GuestRsvpStore";
import GuestFoodOptionsStore from "@store/guest/modules/food-options/GuestFoodOptionsStore";

@injectable()
export default class GuestStore extends StoreModule {
  constructor(@inject("GuestService") guestService) {
    super();
    this.setName("guest")
      .addState(state)
      .addActions(actions(guestService))
      .addMutations(mutations)
      .addGetters(getters)
      .addModule(GuestRsvpStore)
      .addModule(GuestFoodOptionsStore);
  }
}
