import { Component } from '@angular/core';

import { TutorialService } from './services/tutorial.service';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  standalone: false,
  styleUrl: './app.component.css'
})
export class AppComponent {
  title = 'angularTutorial';

  //Creamos un constructor para poder utilizar el servicio
  constructor(private tutorialService: TutorialService) {}

  //función para eliminar todos los tutoriales
  deleteAllTutorials(){
    if(confirm("¿Seguro que vas a deletar todo los tutoriales?")){
      this.tutorialService.deleteAll().subscribe(
        response => {
          console.log("Tutoriales eliminados correctamente", response);
          alert("Todos los tutoriales han sido eliminados.");
        },
        error => {
          console.error("Error al eliminar los tutoriales", error)
        }
      )
    }
  }
}
