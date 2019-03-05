import { RsvpState } from "./stateInterface";

export default function() {
  return {
    SAMPLE_GETTER: (state: RsvpState) => {
      return state;
    },
  };
}
