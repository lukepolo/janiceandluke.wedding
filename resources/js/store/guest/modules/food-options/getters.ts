import { FoodOptionsState } from "./stateInterface";

export default function() {
  return {
    SAMPLE_GETTER: (state: FoodOptionsState) => {
      return state;
    },
  };
}
