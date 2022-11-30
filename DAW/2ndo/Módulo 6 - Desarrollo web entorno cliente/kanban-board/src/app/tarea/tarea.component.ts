import { Component, Input, OnInit } from '@angular/core';
import { Tarea } from '../models/tarea-model';
import * as moment from 'moment';

@Component({
  selector: 'app-tarea',
  templateUrl: './tarea.component.html',
  styleUrls: ['./tarea.component.css'],
})
export class TareaComponent implements OnInit {
  @Input() tarea: Tarea;
  constructor() {
    this.tarea = {
      lista: '',
      img: '',
      titulo: '',
      usuarios: [{ img: '', alt: '' }],
      fechaFin: new Date(),
    };
  }

  fechas(fechaFin: any) {

    var today = moment();
    var momentB = moment(fechaFin, 'YYYY-MM-DD');

    var red = 'red'
    var orange = 'orange'
    var gray = 'gray'


    if (today > momentB && this.tarea.lista == 'Finalizadas') {
      return red;
    } else if (today < momentB && this.tarea.lista == 'Progreso') {
      return orange;
    } else {
      return gray;
    }
  }
  ngOnInit(): void {}
}
