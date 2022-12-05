import { Usuario } from "./usuario-model";
export interface Tarea {
id: number;
lista: string;
img: string | null;
titulo: string;
usuarios: Usuario[];
fechaFin: Date | null;
}