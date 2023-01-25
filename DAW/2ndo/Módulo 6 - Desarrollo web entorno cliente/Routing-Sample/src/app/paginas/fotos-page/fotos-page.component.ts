import { Component } from '@angular/core';
import { Foto } from '../../models/foto.model';
import { ActivatedRoute, Router } from '@angular/router';
import { FotosService } from '../../services/fotos.service';

@Component({
  selector: 'app-fotos-page',
  templateUrl: './fotos-page.component.html',
  styleUrls: ['./fotos-page.component.css'],
})
export class FotosPageComponent {
  images: Foto[] = [];

  constructor(
    private readonly router: Router,
    private readonly route: ActivatedRoute,
    private fotos: FotosService
  ) {}

  ngOnInit() {
    this.images = this.fotos.getFotos();
  }

  verImagen(image: Foto): void {
    this.router.navigate(['/main/fotos-details', image.id], {
      relativeTo: this.route,
    });
  }
}
