import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AuthGuard } from '../guards/auth.guard';
import { MainPageComponent } from './main-page/main-page.component';

//TODO: Definir las ruta/s que correspondan
const routes: Routes = [
  { path: '', component: MainPageComponent },
  {
    path: '', loadChildren: () => import('./pages.module').then((m) => m.PagesModule),
    canActivate: [AuthGuard]
  },
  { path: '**', redirectTo: '/', pathMatch: 'full' },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class PagesRoutingModule { }
