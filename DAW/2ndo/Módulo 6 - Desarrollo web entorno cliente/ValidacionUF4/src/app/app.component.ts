import { Component } from '@angular/core';
import { BotonesService } from './botones.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  title = 'ValidacionUF4';

  constructor(public botonesService: BotonesService) { }

  botonGET() {
    this.botonesService.get().subscribe(data => {
      window.alert(JSON.stringify(data))
    });
  }

  botonPOST() {
    this.botonesService.post({
      name: "Axel",
      job: "Programador",
    }).subscribe(data => {
      window.alert(JSON.stringify(data))
    });
  }

  botonPUT() {
    this.botonesService.put({
      name: "Axel 2",
      job: "Empleado de Burger King",
    }).subscribe(data => {
      window.alert(JSON.stringify(data))
    });
  }

  botonDELETE() {
    this.botonesService.delete().subscribe(data => {
      window.alert(JSON.stringify(data))
    });
  }
}
