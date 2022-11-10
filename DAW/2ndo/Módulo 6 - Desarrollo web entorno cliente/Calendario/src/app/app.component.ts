import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = 'calendario';
  semana: Array<any>;
  septiembre: Array<any>;
  octubre: Array<any>;
  constructor() {
    this.semana = ['L', 'M', 'X', 'J', 'V', 'S', 'D'];
    this.septiembre = [
      '',
      '',
      '',
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9,
      10,
      11,
      12,
      13,
      14,
      15,
      16,
      17,
      18,
      19,
      20,
      21,
      22,
      23,
      24,
      25,
      26,
      27,
      28,
      29,
      30,
    ];
    this.octubre = [
      '',
      '',
      '',
      '',
      '',
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9,
      10,
      11,
      12,
      13,
      14,
      15,
      16,
      17,
      18,
      19,
      20,
      21,
      22,
      23,
      24,
      25,
      26,
      27,
      28,
      29,
      30,
      31,
    ];
  }
  setFestive(day: number, month: string) {
    for (let i = 0; i < festivos.length; i++) {
      if (day == festivos[i]['day'] && month == festivos[i]['month']) {
        return festivos[i]['festive'];
      }
    }
    return '';
  }

}

type diasFestivos = Array<{ day: number; month: string; festive: string }>;

const festivos: diasFestivos = [
  { day: 12, month: 'octubre', festive: 'fiestaNacional' },
  { day: 31, month: 'octubre', festive: 'fiestaCentro' },
  { day: 11, month: 'septiembre', festive: 'fiestaRegional' },
  { day: 29, month: 'septiembre', festive: 'fiestaLocal' },
];
