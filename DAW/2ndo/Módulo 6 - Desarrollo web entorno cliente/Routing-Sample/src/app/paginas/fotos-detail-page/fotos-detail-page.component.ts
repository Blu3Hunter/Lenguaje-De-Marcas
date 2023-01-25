import { Component } from '@angular/core';
import {ActivatedRoute} from "@angular/router";
import {Subscription} from "rxjs";
import {FotosService} from "../../services/fotos.service";
import {Foto} from "../../models/foto.model";

@Component({
  selector: 'app-fotos-detail-page',
  templateUrl: './fotos-detail-page.component.html',
  styleUrls: ['./fotos-detail-page.component.css']
})
export class FotosDetailPageComponent {

  foto: Foto = {id: -1, img: '', dsc: ''};
  private sub: any;

  constructor(
    private readonly route: ActivatedRoute,
    private fotos: FotosService
  ) {}

  ngOnInit() {
    this.sub = this.route.params.subscribe(params => {
      const id: number = +params['id']; // (+) converts string 'id' to a number
      this.foto = this.fotos.getFotoById(id);
    });
  }

  ngOnDestroy() {
    this.sub.unsubscribe();
  }
}
