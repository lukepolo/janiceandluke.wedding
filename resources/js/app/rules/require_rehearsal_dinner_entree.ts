export default {
  passes(
    value: any,
    parameters = [],
    data: {
      guest_rsvp: {
        attending_rehearsal_dinner: boolean;
      };
    },
  ) {
    return value || !data.guest_rsvp.attending_rehearsal_dinner;
  },

  message() {
    return "This :field has this message to display";
  },
};
