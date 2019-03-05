import { ServiceProvider } from "varie";
import GuestService from "@app/services/GuestService";

/*
|--------------------------------------------------------------------------
| App Service Provider
|--------------------------------------------------------------------------
| You can bind various items to the app here, or can create other
| custom providers that bind the container
|
*/
export default class GuestServiceProvider extends ServiceProvider {
  public async register() {
    this.app.singleton("GuestService", GuestService);
  }
}
