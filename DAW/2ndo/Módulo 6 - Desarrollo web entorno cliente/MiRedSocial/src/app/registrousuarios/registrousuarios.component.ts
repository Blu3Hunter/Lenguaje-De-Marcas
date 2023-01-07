import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import {
  AbstractControl,
  FormBuilder,
  FormControl,
  FormGroup,
  Validators,
} from '@angular/forms';

@Component({
  selector: 'app-registrousuarios',
  templateUrl: './registrousuarios.component.html',
  styleUrls: ['./registrousuarios.component.css'],
})
export class RegistrousuariosComponent implements OnInit {
  isSubmit: boolean = false;
  constructor(private fb: FormBuilder) {}

  @Output() nuevoUsuario = new EventEmitter<any>();

  ngOnInit(): void {}

  /**
   * Aquí creamos los campos necesarios para crear el usuario con el FormBuilder
   */

  registrarUsuario = this.fb.group(
    {
      nom: new FormControl('', [Validators.required]),
      cognoms: new FormControl('', [Validators.required]),
      edat: new FormControl('', [Validators.required]),
      descripcio: new FormControl('', [
        Validators.required,
        Validators.minLength(4),
      ]),
      correu: new FormControl('', [Validators.required, Validators.email]),
      clau: new FormControl('', [Validators.required]),
      clauMatch: new FormControl('', [Validators.required]),
    },
    {
      validator: this.ConfirmedValidator('clau', 'clauMatch'),
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

    if (this.registrarUsuario.valid) {
      console.log(this.registrarUsuario.value);
      // return alert('esta todo bien illo');
      // this.listas.push(k_PENDIENTES_LISTA);
      this.nuevoUsuario.emit(this.registrarUsuario.value);
    } else {
    }
  }
}
