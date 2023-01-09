import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

//TODO: Definir las ruta/s que correspondan
const routes: Routes = [
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PagesRoutingModule { }
