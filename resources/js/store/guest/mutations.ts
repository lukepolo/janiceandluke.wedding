import { GuestState } from "./stateInterface";

export default function() {
  return {
    setGuest: (state: GuestState, data) => {
      state.guest = data;
    },
    setSearchResults: (state: GuestState, data) => {
      state.searchResults = data;
    },
  };
}
