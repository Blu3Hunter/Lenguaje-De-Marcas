import { Component, Input, OnInit } from '@angular/core';
import { User } from '../models/user-model';
@Component({
  selector: 'app-listausuarios',
  templateUrl: './listausuarios.component.html',
  styleUrls: ['./listausuarios.component.css']
})
export class ListausuariosComponent implements OnInit {
  @Input() item: any  

  constructor() { }

  ngOnInit(): void {
  }

}
