import { injectable, inject } from "inversify";

@injectable()
export default class GuestService {
  protected httpService;

  constructor(@inject("HttpService") httpService) {
    this.httpService = httpService;
  }

  get() {
    return this.httpService.get("");
  }

  update() {}
}
