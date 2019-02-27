import { GuestState } from "./stateInterface";

export default function() {
  return {
    setSearchResults: (state: GuestState, data) => {
      state.searchResults = data;
    },
  };
}
