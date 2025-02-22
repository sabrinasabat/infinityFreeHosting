import { Injectable } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root' //servicio global
})
export class TokenService {

  private servidorProfe = 'http://85.214.40.240:3000'; //servidor del profe


  constructor(private http: HttpClient) { } //inyecto el servicio http

  login(usuari: string, contrasenya: string): Observable<any>{ //metodo para hacer login
    const body = JSON.stringify({usuari, contrasenya}); //convertiendo a json
    const headers = new HttpHeaders({'Content-Type': 'application/json'}); //cabecera
    return this.http.post(`${this.servidorProfe}/login`, body, {headers}); //hago la peticion
  }

  getProtectedToken(): Observable<any>{ //metodo para obtener el token
    const token = localStorage.getItem('token'); // pillamos el token de localstorage

    if(!token){ //si no hay token
      throw new Error('No hay token');
    }

    const headers = new HttpHeaders({ //cabecera
      'Authorization': `Bearer ${token}`,//añadir el token a la cabecera
      'Content-Type': 'application/json' //indico que es un json
    });

    return this.http.get(`${this.servidorProfe}/protected`, {headers}); //hago la peticion
  }
}
