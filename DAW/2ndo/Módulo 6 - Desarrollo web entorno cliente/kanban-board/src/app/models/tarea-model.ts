import { Usuario } from "./usuario-model";

export interface Tarea {
  lista: string;
  img: string | null;
  titulo: string;
  usuarios: Usuario[];
  fechaFin: Date | null;
}
