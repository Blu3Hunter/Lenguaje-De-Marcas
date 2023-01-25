import { Component } from '@angular/core';
import {Router} from "@angular/router";

@Component({
  selector: 'app-articulos-page',
  templateUrl: './articulos-page.component.html',
  styleUrls: ['./articulos-page.component.css']
})
export class ArticulosPageComponent {
  constructor(
    private readonly router: Router
  ) { }

  verDetalles(): void {

  }
}
