import { ActionContext } from "vuex";
import RootState from "../../../rootState";
import { FoodOptionsState } from "./stateInterface";

export default function(httpService) {
  return {
    sampleAction: (
      context: ActionContext<FoodOptionsState, RootState>,
      data,
    ) => {
      return httpService.post("/some-url", {
        data,
      });
    },
  };
}
