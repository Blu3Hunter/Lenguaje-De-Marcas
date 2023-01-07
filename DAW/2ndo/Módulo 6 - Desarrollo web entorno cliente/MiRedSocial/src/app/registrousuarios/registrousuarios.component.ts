import { Component, OnInit } from '@angular/core';
import {
  AbstractControl,
  FormBuilder,
  FormControl,
  FormGroup,
  ValidationErrors,
  ValidatorFn,
  Validators,
} from '@angular/forms';

@Component({
  selector: 'app-registrousuarios',
  templateUrl: './registrousuarios.component.html',
  styleUrls: ['./registrousuarios.component.css'],
})
export class RegistrousuariosComponent implements OnInit {
  resultado!: string;
  isSubmit: boolean = false;
  constructor(private fb: FormBuilder) {}

  ngOnInit(): void {}

  /**
   * Aquí creamos los campos necesarios para crear el usuario con el FormBuilder
   */

  registrarUsuario = this.fb.group(
    {
      nombre: new FormControl('', [Validators.required]),
      apellido: new FormControl('', [Validators.required]),
      edad: new FormControl('', [Validators.required]),
      descripcion: new FormControl('', [
        Validators.required,
        Validators.minLength(4),
      ]),
      email: new FormControl('', [Validators.required, Validators.email]),
      password: new FormControl('', [Validators.required]),
      passwordMatch: new FormControl('', [Validators.required]),
    },
    {
      validator: this.ConfirmedValidator('password', 'passwordMatch'),
    }
  );

  /**
   *  Con este get creamos una key para controlar los errores del formulario
   */

  get formControl(): { [key: string]: AbstractControl } {
    return this.registrarUsuario.controls;
  }

  /**
   *
   * @param controlName
   * @param matchingControlName
   * @returns Compara ambas contraseñas. En caso que esten bien devuelve true, en caso
   * de que esten incorrectas devuelve error
   */

  ConfirmedValidator(controlName: string, matchingControlName: string) {
    return (formGroup: FormGroup) => {
      const control = formGroup.controls[controlName];
      const matchingControl = formGroup.controls[matchingControlName];
      if (
        matchingControl.errors &&
        !matchingControl.errors['confirmedValidator']
      ) {
        return;
      }
      if (control.value !== matchingControl.value) {
        matchingControl.setErrors({ confirmedValidator: true });
      } else {
        matchingControl.setErrors(null);
      }
    };
  }

  /**
   *
   * @returns Comparamos si el formulario está bien, si está bien se enviará, si no se notificará al usuario.
   */

  submit() {
    this.isSubmit = true;
    console.log(this.registrarUsuario.value);
    if (this.registrarUsuario.valid) {
      return alert('esta todo bien illo');
    } else {
      return alert('onde vas loco, hay algo mal...');
    }
  }



}
