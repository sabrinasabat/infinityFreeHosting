import {Component, OnInit} from '@angular/core';
import {Evento} from '../../models/evento';
import {EventoService} from '../../services/evento.service';


@Component({
  selector: 'app-eventos-list',
  standalone: false,
  templateUrl: './eventos-list.component.html',
  styleUrl: './eventos-list.component.css'
})
export class EventosListComponent implements OnInit{
  eventos: Evento[] = [];

  constructor(private eventoService: EventoService){}

  ngOnInit(): void{
    this.obtenerEventos();
  }

  obtenerEventos():void{
    this.eventoService.listarEventos().subscribe(
      (data) =>{
        this.eventos = data;
      },
      (error)=>{
        console.error('Error al obtener los eventos', error);
      }
    );
  }

}
