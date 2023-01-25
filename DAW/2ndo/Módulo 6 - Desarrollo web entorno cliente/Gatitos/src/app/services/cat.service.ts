import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Cat } from '../models/cat.model';

@Injectable({
  providedIn: 'root',
})
export class CatService {
  readonly baseUrl = 'https://api.thecatapi.com/v1/images/search';

  readonly apiKey =
    'api_key=live_KpvRwLwWopKmRoFbbl7c0M7ntu5v8c45oPmisGGEkLHcPA3y1zW4tOXamZEWY261';

  constructor(private http: HttpClient) {}

  getCats(amount?: number) {
    let url: string = this.baseUrl;

    if (amount) {
      url += '?' + this.apiKey + '&limit=' + amount;
    }
    return this.http.get<Cat[]>(url);
  }
}
