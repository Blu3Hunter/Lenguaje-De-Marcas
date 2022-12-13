import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import * as moment from 'moment';
import { MaterialModule } from './material-module';


import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { TareaComponent } from './tarea/tarea.component';
import { TareaComponentComponent } from './tarea-form/tarea-form.component';

@NgModule({
  declarations: [
    AppComponent,
    TareaComponent,
    TareaComponentComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MaterialModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
