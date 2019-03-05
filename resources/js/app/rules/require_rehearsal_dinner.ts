export default {
  passes(
    value: any,
    parameters = [],
    data: {
      guest: {
        allowed_rehearsal_dinner: boolean;
      };
    },
  ) {
    return (
      value === true ||
      value === false ||
      !data.guest ||
      !data.guest.allowed_rehearsal_dinner
    );
  },

  message() {
    return "This :field has this message to display";
  },
};
