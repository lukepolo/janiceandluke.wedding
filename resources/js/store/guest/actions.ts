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
    show: (context: ActionContext<GuestState, RootState>, guest) => {
      return guestService.show(guest).then(({ data }) => {
        context.commit("setGuest", data);
        return data;
      });
    },
    update: (
      context: ActionContext<GuestState, RootState>,
      { guestForm, plusOneForm },
    ) => {
      let requests = [];
      requests.push(
        new Promise((resolve, reject) => {
          guestService
            .update(guestForm.guest, guestForm)
            .then(({ data }) => {
              resolve(data);
            })
            .catch((error) => {
              reject(error);
            });
        }),
      );

      if (plusOneForm) {
        requests.push(
          new Promise((resolve, reject) => {
            guestService
              .update(plusOneForm.guest, plusOneForm)
              .then(({ data }) => {
                resolve(data);
              })
              .catch((error) => {
                reject(error);
              });
          }),
        );
      }

      return Promise.all(requests);
    },
  };
}
