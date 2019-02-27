import { ActionContext } from "vuex";
import RootState from "../rootState";
import { GuestState } from "./stateInterface";
import GuestService from "@app/services/GuestService";

export default function(guestService: GuestService) {
  return {
    search: (context: ActionContext<GuestState, RootState>, lastName) => {
      return guestService.search(lastName).then(({ data }) => {
        context.commit("setSearchResults", data);
        return data;
      });
    },
  };
}
