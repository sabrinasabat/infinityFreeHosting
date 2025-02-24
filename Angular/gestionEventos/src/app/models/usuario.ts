export class Usuario {
  id?: number; //ID opcional (generado automaticamente)
  nombre: string;
  email: string;
  contrasena?: string; //opcional para evitar exponerla

  constructor(nombre: string, email: string, contrasena?: string, id?: number){
    this.id = id;
    this.nombre = nombre;
    this.email = email;
    this.contrasena = contrasena;
  }
}
