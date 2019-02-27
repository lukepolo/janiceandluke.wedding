import { injectable, inject } from "inversify";

@injectable()
export default class GuestService {
  protected httpService;

  constructor(@inject("HttpService") httpService) {
    this.httpService = httpService;
  }

  search(lastName) {
    return this.httpService.get(`api/guest?search=${lastName}`);
  }

  update() {}
}
