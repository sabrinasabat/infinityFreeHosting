import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root' // Já está correto
})
export class TutorialService {
  private baseUrl = 'http://localhost:8081/api/tutorials';

  constructor(private http: HttpClient) {} // Certifique-se de que o HttpClient está sendo injetado

  getAll(): Observable<any> {
    return this.http.get(this.baseUrl);
  }

  get(id: any): Observable<any> {
    return this.http.get(`${this.baseUrl}/${id}`);
  }

  create(tutorialNuevo: any): Observable<any> {
    return this.http.post(this.baseUrl, tutorialNuevo);
  }

  update(id: any, tutorialActualizado: any): Observable<any> {
    return this.http.put(`${this.baseUrl}/${id}`, tutorialActualizado);
  }

  delete(id: any): Observable<any> {
    return this.http.delete(`${this.baseUrl}/${id}`);
  }

  deleteAll(): Observable<any> {
    return this.http.delete(this.baseUrl);
  }

  findByPublished(): Observable<any> {
    return this.http.get(`${this.baseUrl}/published`);
  }
}
