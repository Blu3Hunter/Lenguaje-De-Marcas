import { Component } from '@angular/core';
import { FormControl } from '@angular/forms';
import { Cat } from 'src/app/models/cat.model';
import {  CatService } from 'src/app/services/cat.service';

@Component({
  selector: 'app-main-page',
  templateUrl: './main-page.component.html',
  styleUrls: ['./main-page.component.css']
})
export class MainPageComponent {
  limitControl: FormControl = new FormControl(2);
  cats: Cat[] = [];
  //TODO: Acabar la página
  constructor(
    public catservice: CatService
  ) { }


  search(): void {
    const limit: number = (this.limitControl.value);
    this.catservice.getCats(limit).subscribe({
      next: (value: Cat[]) => {
        this.cats = [];
        this.cats = value;
      }
    })
  }

}
