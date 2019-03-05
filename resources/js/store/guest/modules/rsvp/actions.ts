import { ActionContext } from "vuex";
import RootState from "../../../rootState";
import { RsvpState } from "./stateInterface";

export default function(httpService) {
  return {
    sampleAction: (context: ActionContext<RsvpState, RootState>, data) => {
      return httpService.post("/some-url", {
        data,
      });
    },
  };
}
