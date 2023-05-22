import { Injectable } from '@angular/core';
import { HttpClient } from "@angular/common/http";
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class BotonesService {

  constructor(private http: HttpClient) { }

  get() {
    return this.http.get('https://reqres.in/api/users?page=2')
  }

  post(user: any): Observable<any> {
    return this.http.post('https://reqres.in/api/users', user)
  }

  put(user: any): Observable<any> {
    return this.http.post('https://reqres.in/api/users/2', user);
  }

  delete(): Observable<any> {
    return this.http.delete('https://reqres.in/api/users/2');
  }

}
