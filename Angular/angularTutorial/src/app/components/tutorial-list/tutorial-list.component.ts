import {Component, OnInit} from '@angular/core';
import { TutorialService } from '../../services/tutorial.service';
import { Tutorial} from '../../models/tutorial.model';

@Component({
  selector: 'app-tutorial-list',
  standalone: false,

  templateUrl: './tutorial-list.component.html',
  styleUrl: './tutorial-list.component.css'
})
export class TutorialListComponent implements OnInit {
  listaDeTuroriales: Tutorial[] = [];

  constructor(private tutorialService: TutorialService){}

  ngOnInit(): void {
    this.obtenerListaDeTuroriales();
  }

  obtenerListaDeTuroriales(): void {
    this.tutorialService.getAll().subscribe(
      (datos) => {
        this.listaDeTuroriales = datos;
        console.log("Lista de tutoriales obtenida.", datos)
      },
      (error) => {
        console.log("Error al obtener la lista de tutoriales.", error)
      }
    )
  }



}
