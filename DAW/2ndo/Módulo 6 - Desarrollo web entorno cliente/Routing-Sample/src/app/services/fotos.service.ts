import { Injectable } from '@angular/core';
import {Foto} from "../models/foto.model";

@Injectable({
  providedIn: 'root'
})
export class FotosService {
  fotos: Foto[] = [
    {id: 1, img: 'https://picsum.photos/200/300', dsc: 'Foto de prova 1'},
    {id: 2, img: 'https://picsum.photos/200/300', dsc: 'Foto de prova 2'},
    {id: 3, img: 'https://picsum.photos/200/300', dsc: 'Foto de prova 3'},
    {id: 4, img: 'https://picsum.photos/200/300', dsc: 'Foto de prova 4'},
    {id: 5, img: 'https://picsum.photos/200/300', dsc: 'Foto de prova 5'}
  ];

  constructor() { }

  getFotos(): Foto[] {
    return this.fotos;
  }

  getFotoById(id: number): Foto {

    let photo: Foto = {'id': -1, img: '', dsc:''};

    this.fotos.forEach((value: Foto) => {
      if (value.id === id) {
        photo = value;
      }
    });

    return photo;
  }
}
