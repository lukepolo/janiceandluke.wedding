import { injectable, inject } from "inversify";

@injectable()
export default class GuestService {
  protected httpService;

  constructor(@inject("HttpService") httpService) {
    this.httpService = httpService;
  }

  show(guest) {
    return this.httpService.get(`/api/guest/${guest}`);
  }

  search(lastName) {
    return this.httpService.get(`/api/guest?search=${lastName}`);
  }

  update(guest, data) {
    return this.httpService.put(`/api/guest/${guest.id}`, data);
  }
}
