import state from "./state";
import actions from "./actions";
import getters from "./getters";
import mutations from "./mutations";
import StoreModule from "varie/lib/state/StoreModule";
import { injectable, inject, unmanaged } from "inversify";

@injectable()
export default class GuestFoodOptionsStore extends StoreModule {
  constructor(@inject("HttpService") httpService) {
    super();
    this.setName("foodoptions")
      .addState(state)
      .addActions(actions(httpService))
      .addMutations(mutations)
      .addGetters(getters);
  }
}
