import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Entrada} from '../models/entrada';
import {Observable} from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class EntradaService {
  private apiUrl = 'http://localhost:8081/entradas';


  constructor(private http:HttpClient) { }

  comprarEntradas(entrada: Entrada): Observable<Entrada>{
    return this.http.post<Entrada>(this.apiUrl, entrada);

  }
}
