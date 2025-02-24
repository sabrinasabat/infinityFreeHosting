import {Component, OnInit} from '@angular/core';
import {Evento} from '../../models/evento';
import {ActivatedRoute} from '@angular/router';
import {EventoService} from '../../services/evento.service';

@Component({
  selector: 'app-evento-detalle',
  standalone: false,
  templateUrl: './evento-detalle.component.html',
  styleUrl: './evento-detalle.component.css'
})
export class EventoDetalleComponent implements OnInit{
  evento: Evento | undefined; //defino la variable evento del tipo evento y la asigno el valor de indefinido
  error: string = '';

  constructor(private route: ActivatedRoute, private eventoService: EventoService) {}

  ngOnInit(): void {
    this.obtenerDetallesEvento();
  }

  obtenerDetallesEvento(): void{
    const id = Number(this.route.snapshot.paramMap.get('id'));

    if(!isNaN(id)){
      this.eventoService.obtenerEvento(id).subscribe(
        (data) => {
          this.evento = data;
        },
        (error) => {
          console.error('Error al obtener detalles del evento', error);
          this.error = 'No fue posible cargar los detalles del evento';
        }
      );
    } else {
      this.error = 'Id Invalido.';
    }
  }
}
