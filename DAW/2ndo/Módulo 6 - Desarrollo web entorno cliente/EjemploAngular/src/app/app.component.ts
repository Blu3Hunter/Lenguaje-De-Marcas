import { Component } from '@angular/core';
import { Evento } from './models/evento.model';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'EjemploAngular';


  listaEventos: Evento[] = [
    
    {
      titulo: "Evento 1", direccion: "C/ La palma 33", fecha: new Date()
    },

    {
      titulo: "Evento 2", direccion: "C/ La palma 45", fecha: new Date()
    }
  ]



}
