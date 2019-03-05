import { GuestState } from "./stateInterface";

export default function() {
  return {
    SAMPLE_GETTER: (state: GuestState) => {
      return state;
    },
  };
}
