import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Evento } from '../models/evento';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class EventoService {

  private apiUrl = 'http://localhost:8081/eventos';

  constructor(private http: HttpClient) { }

  listarEventos(): Observable<Evento[]>{
    return this.http.get<Evento[]>(this.apiUrl);
  }

  obtenerEvento(id: number): Observable<Evento>{
    return this.http.get<Evento>(`${this.apiUrl}/${id}`);
  }
}
