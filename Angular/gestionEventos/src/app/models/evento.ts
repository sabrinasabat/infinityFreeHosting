export class Evento {
  id?: number;
  nombre: string;
  fecha: string;
  capacidad: number;

  constructor(nombre: string, fecha: string, capacidad: number, id?: number){
    this.id = id;
    this.nombre = nombre;
    this.fecha = fecha;
    this.capacidad = capacidad;

  }
}
