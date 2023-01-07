import { Component } from '@angular/core';
import { User } from './models/user-model';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = 'MiRedSocial';
  users: User[] = [];
  flag: boolean = false;
  nom: any = this.users;
  counter: number = 0;
  constructor() {
    const UsersJSON: string = `{
      "usuaris": [
      {
      "nom": "Pere",
      "cognoms": "Porras",
      "edat": 25,
      "descripcio": "Soltero super guapo y morenote",
      "correu": "pporras@gmail.com",
      "clau": "123456"
      },
      {
      "nom": "Pilar",
      "cognoms": "Ponas",
      "edat": 18,
      "descripcio": "Soltera amable y simpática",
      "correu": "pponas@gmail.com",
      "clau": "123456"
      }
      }`;

    const UsersDict: any = JSON.parse(UsersJSON);
    this.users = UsersDict['usuaris'];
  }

  // Registrar usuario
  upload(nuevoUsuario: any) {
    this.counter = 0;
    this.flag = false;
    this.users.push(nuevoUsuario);
  }

  changeFlag() {
    this.flag = !this.flag;
  }

  hideData() {
    return (this.flag = false);
  }

  showData() {
    return (this.flag = true);
  }

  increaseCounterer() {
    this.counter++;
  }
}
