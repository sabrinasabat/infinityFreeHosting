import {Component, OnInit} from '@angular/core';
import {Evento} from '../../models/evento';
import {ActivatedRoute} from '@angular/router';
import {EventoService} from '../../services/evento.service';
import {EntradaService} from '../../services/entrada.service';
import {Entrada} from '../../models/entrada';

@Component({
  selector: 'app-comprar-entrada',
  standalone: false,
  templateUrl: './comprar-entrada.component.html',
  styleUrl: './comprar-entrada.component.css'
})
export class ComprarEntradaComponent implements OnInit{
  evento!: Evento; // !significa que no es null
  cantidad: number = 1;
  mensaje: string = '';
  erro: string = '';

  constructor(private route: ActivatedRoute, private eventoService: EventoService, private entradaService: EntradaService) {}

  ngOnInit(): void{
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
          this.erro = 'No fue posible cargar los detalles del evento';
        }
      );
    } else {
      this.erro = 'Id invalido';
    }
  }

  comprarEntrada():void{
    if(!this.evento){
      this.erro = 'Evento no encontrado';
      return;
    }

    const nuevaEntrada = new Entrada(this.evento.id!, 1, this.cantidad);

    this.entradaService.comprarEntradas(nuevaEntrada).subscribe(
      () => {
        this.mensaje = 'Compra realizada con succeso!!';
        this.erro = '';
      },
      (error) => {
        console.error('Error al comprar la entrada', error);
        this.erro = 'No fue posible realizar la compra';
        this.mensaje = '';
      }
    );
  }
}
