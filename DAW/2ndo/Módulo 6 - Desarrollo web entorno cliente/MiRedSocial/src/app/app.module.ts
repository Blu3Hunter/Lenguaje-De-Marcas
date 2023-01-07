import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ListausuariosComponent } from './listausuarios/listausuarios.component';
import { RegistrousuariosComponent } from './registrousuarios/registrousuarios.component';
import {FormBuilder, FormControl, FormGroup, ReactiveFormsModule, Validators} from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    ListausuariosComponent,
    RegistrousuariosComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
