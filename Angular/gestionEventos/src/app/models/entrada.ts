export class Entrada {

  id?: number;
  eventoId: number;
  usuarioId: number;
  cantidad: number;

  constructor(eventoId: number, usuarioId: number, cantidad: number, id?: number) {
    this.id = id;
    this.eventoId = eventoId;
    this.usuarioId = usuarioId;
    this.cantidad = cantidad;
  }
}
