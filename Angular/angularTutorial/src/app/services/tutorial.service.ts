import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Observable} from 'rxjs';
import {Tutorial} from '../models/tutorial.model';


const baseUrl = 'http://localhost:8081/api/tutorials';

@Injectable({ //Esto es una constante trabajando en angular. Nos indica que vamos a trabajar con injectables
  providedIn: 'root' //Es una especie de servicios que podemos utilizar en componentes y directivas: Nos sirve para reutilizar códigos
}) //Vamos a poder utilizar en nuestros componentes.

export class TutorialService {

  constructor(private http: HttpClient) { }

  getAll(): Observable<Tutorial[]> {
    return this.http.get<Tutorial[]>(baseUrl); //Necesitamos poner el <> para indicar que es un array de tutoriales
  }

  get(id: any): Observable<Tutorial>{ //pasamos un any porque hemos definido el id como any
    return this.http.get(`${baseUrl}/${id}`);
  }

  create(data:any): Observable<any>{ //ponemos data porque es lo que vamos a enviar
    return this.http.post(baseUrl, data);
  }

  delete(id:any): Observable<any>{
    return this.http.delete(`${baseUrl}/${id}`);
  }

  deleteAll(): Observable<any>{
    return this.http.delete(baseUrl);
  }

  /* -------------------------------------- intentando crear published
  findByPublished(published:any): Observable<Tutorial[]>{
    return this.http.get<Tutorial[]>(`${baseUrl}/${published}`)
    return this.http.get<Tutorial[]>(`${baseUrl}?published=${published}`);
  }*/

  findByPublished(): Observable<Tutorial[]>{
    return this.http.get<Tutorial[]>(`${baseUrl}/published`);
  }

  // -------------------------------------- intentando crear update
  update(id:any, data:any): Observable<any>{
    return this.http.put(`${baseUrl}/${id}`, data);
  }

  // Pasamos el Observable<Tutorial[]> cuando sé que tipo de dato espero recibir = una lista de tutoriales
  // Pasamos el Observable<Tutorial> cuando sé que tipo de dato espero recibir = un solo tutorial
  // Pasamos el Observable<any> cuando NO SÉ exactamente qué tipo de dato espero recibir

  //falta implementar el update
  //falta implementar el published










}
