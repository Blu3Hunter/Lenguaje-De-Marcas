import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { MatFormFieldModule } from '@angular/material/form-field';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

@Component({
  selector: 'app-tarea-form',
  templateUrl: './tarea-form.component.html',
  styleUrls: ['./tarea-form.component.css'],
})
export class TareaComponentComponent {


  @Output() cancelTaskEmmiter = new EventEmitter<boolean>();

  @Output() guardarForm: EventEmitter<string> = new EventEmitter<string>();

  taskForm = new FormGroup({
    taskTitle: new FormControl('', [Validators.required]),
    taskOptions: new FormControl('', [Validators.required]),
    date: new FormControl(''),
    imgUrl: new FormControl(''),
  });

  onSubmit() {
    if (!this.taskForm.valid) {
    } else {
      this.guardarForm.emit(JSON.stringify(this.taskForm.value));
    }
  }


  cancelTask() {
    this.cancelTaskEmmiter.emit(true);
  }



  cositas() {
    

    
  }

}
