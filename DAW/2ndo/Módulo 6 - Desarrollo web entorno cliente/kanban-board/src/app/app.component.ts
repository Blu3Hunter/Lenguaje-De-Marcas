import { Component } from '@angular/core';
import { Tarea } from './models/tarea-model';

const k_PENDIENTES_LISTA: string = "Pendientes";
const k_PROGRESO_LISTA: string = "Progreso";
const k_FINALIZADAS_LISTA: string = "Finalizadas";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  listas: string[] = [];
  tareas: Tarea[];

  constructor() {
    const tareasJSON: string = `{
      "tareas": [
        { "lista": "${k_FINALIZADAS_LISTA}", "img": "https://picsum.photos/300/200", "titulo": "Tarea 1: Diseño UI", "usuarios": [{"img": "https://picsum.photos/300/300", "alt": "Usuario"}], "fechaFin": "2019-01-16" },
        { "lista": "${k_PROGRESO_LISTA}", "img": "https://picsum.photos/300/200", "titulo": "Tarea 2: Diseño de todo el Backend", "usuarios": [], "fechaFin": "2022-11-09" },
        { "lista": "${k_PENDIENTES_LISTA}", "img": null, "titulo": "Tarea 3: Diseño de la base de datos", "usuarios": [{"img": "https://picsum.photos/300/300", "alt": "Usuario"}, {"img": "https://picsum.photos/300/300", "alt": "Usuario"}], "fechaFin": "2022-11-16" },
        { "lista": "${k_PENDIENTES_LISTA}", "img": null, "titulo": "Tarea 4: Implementar todo el Front-End", "usuarios": [], "fechaFin": null }
      ]
    }`;

    const tareasDict: any = JSON.parse(tareasJSON);
    this.tareas = tareasDict['tareas'];

    this.listas.push(k_PENDIENTES_LISTA);
    this.listas.push(k_PROGRESO_LISTA);
    this.listas.push(k_FINALIZADAS_LISTA);
  }
}
