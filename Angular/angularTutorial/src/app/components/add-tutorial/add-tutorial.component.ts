import { Component } from '@angular/core';
import {Tutorial} from '../../models/tutorial.model';
import {TutorialService} from '../../services/tutorial.service';

@Component({
  selector: 'app-add-tutorial',
  standalone: false,

  templateUrl: './add-tutorial.component.html',
  styleUrl: './add-tutorial.component.css'
})
export class AddTutorialComponent {
  tutorial: Tutorial = { //variable global
    title: '',
    description: '',
    published: false
  }
  submitted = false; //variable global

  constructor(private tutorialService: TutorialService) {

  } //constructor

  safeTutorial(): void{
    const data = { //vamos a rellenar con los valores que tenemos en la variable tutorial
      title: this.tutorial.title,
      description: this.tutorial.description
    }
    this.tutorialService.create(data)
      .subscribe({ // Subscribe es importante, porque el observable no se ejecuta hasta que no se subscribe
        next: (res) => {
          console.log(res);
          this.submitted = true; //Si ha funcionado, cambiamos el valor de submitted a true
        },
        error: (err) => {
          console.log(err);
          console.error(err);
        }
      })
  }
}
