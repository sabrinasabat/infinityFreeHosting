import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Usuario} from '../models/usuario';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  //URL de la API
  private apiUrl = 'http://localhost:8081/auth';

  constructor(private http: HttpClient) { } //Inyectamos el servicio HttpClient

  //Metodo para registrar un usuario
  registrar(usuario: Usuario): Observable<Usuario>{ //Recibe un objeto de tipo Usuario y devuelve un Observable de tipo Usuario
    return this.http.post<Usuario>(`${this.apiUrl}/registro`, usuario); //Hacemos una peticion POST a la API
  }

  //Metodo para iniciar sesion
  //el <any> es para que no haya problemas con el tipo de dato que devuelve la API
  login(email: string, contrasena: string): Observable<any>{ //Recibe un email y una contrasena y devuelve un Observable
    //Hacemos una peticion POST a la API
    return this.http.post(`${this.apiUrl}/login`, {email, contrasena});
  }
}
