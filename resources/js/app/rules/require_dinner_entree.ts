export default {
  passes(
    value: any,
    parameters = [],
    data: {
      guest_rsvp: {
        attending: boolean;
      };
    },
  ) {
    return value || !data.guest_rsvp.attending;
  },

  message() {
    return "This :field has this message to display";
  },
};
