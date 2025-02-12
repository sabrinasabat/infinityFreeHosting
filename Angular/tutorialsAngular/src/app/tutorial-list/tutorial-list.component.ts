import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TutorialService } from '../tutorial.service';
import { catchError, of } from 'rxjs';

@Component({
  selector: 'app-tutorial-list',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './tutorial-list.component.html',
  styleUrls: ['./tutorial-list.component.css']
})
export class TutorialListComponent implements OnInit {
  tutorials: any;

  constructor(private tutorialService: TutorialService) {}

  ngOnInit(): void {
    this.retrieveTutorials();
  }

  retrieveTutorials(): void {
    this.tutorialService.getAll()
      .pipe(
        catchError((error) => {
          console.error('Error fetching tutorials:', error);
          return of([]); // Retorna um array vazio em caso de erro
        })
      )
      .subscribe((data) => {
        this.tutorials = data;
        console.log(data);
      });
  }
}
