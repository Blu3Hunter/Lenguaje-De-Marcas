import { Component, Input } from '@angular/core';
import { Tarea } from './models/tarea-model';

const k_PENDIENTES_LISTA: string = 'Pendientes';
const k_PROGRESO_LISTA: string = 'Progreso';
const k_FINALIZADAS_LISTA: string = 'Finalizadas';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  listas: string[] = [];
  tareas: Tarea[];


  //hiding info box
  visible = true

  constructor() {
    const tareasJSON: string = `{
      "tareas": [
      { "id": 0, "lista": "${k_FINALIZADAS_LISTA}", "img":
      "https://picsum.photos/300/200", "titulo": "Tarea 1: Diseño UI",
      "usuarios": [{"email": "lponts@ilerna.com", "img":
      "https://picsum.photos/300/300", "nick": "Juan", "alt":
      "Usuario"}], "fechaFin": "2019-01-16" },
      { "id": 2, "lista": "${k_PENDIENTES_LISTA}", "img": null,
      "titulo": "Tarea 3: Diseño de la base de datos", "usuarios":
      [{"email": "jdominguez@ilerna.com", "img":
      "https://picsum.photos/200/200", "nick": "Jose", "alt": "Usuario"},
      { "email": "lponts@ilerna.com", "img":
      "https://picsum.photos/100/100", "nick": "Laura", "alt":
      "Usuario"}], "fechaFin": "2022-11-16" },
      { "id": 3, "lista": "${k_PENDIENTES_LISTA}", "img": null,
      "titulo": "Tarea 4: Implementar todo el Front-End", "usuarios": [],
      "fechaFin": null }
      ]
      }`;

    const tareasDict: any = JSON.parse(tareasJSON);
    this.tareas = tareasDict['tareas'];

    this.listas.push(k_PENDIENTES_LISTA);
    this.listas.push(k_PROGRESO_LISTA);
    this.listas.push(k_FINALIZADAS_LISTA);


  }

  test() {
    this.visible = false
  }



}
