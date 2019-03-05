import require_dinner_entree from "@app/rules/require_dinner_entree";
import require_rehearsal_dinner from "@app/rules/require_rehearsal_dinner";
import require_rehearsal_dinner_entree from "@app/rules/require_rehearsal_dinner_entree";

export default {
  /*
  |--------------------------------------------------------------------------
  | Custom Rules
  |--------------------------------------------------------------------------
  |
  | You can supply your custom rules here
  |
  */

  rules: {
    require_dinner_entree,
    require_rehearsal_dinner,
    require_rehearsal_dinner_entree,
  },
};
