import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import * as moment from 'moment';
import {MatDatepickerModule} from '@angular/material/datepicker';


import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { TareaComponent } from './tarea/tarea.component';
import { TareaComponentComponent } from './tarea-component/tarea-component.component';

@NgModule({
  declarations: [
    AppComponent,
    TareaComponent,
    TareaComponentComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
