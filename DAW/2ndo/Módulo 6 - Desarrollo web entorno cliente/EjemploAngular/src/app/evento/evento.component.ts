import { Component, Input,OnInit } from '@angular/core';
import { Evento } from '../models/evento.model';

@Component({
  selector: 'app-evento',
  templateUrl: './evento.component.html',
  styleUrls: ['./evento.component.css'],
})
export class EventoComponent implements OnInit {

  @Input() evento: Evento;

  constructor() {
    this.evento = {
      titulo: 'Clase de Angular',
      direccion: 'Ilerna',
      fecha: new Date(),
    };
  }

  ngOnInit(): void {}
}
