import { NgModule}  from '@angular/core';
import { RouterModule,Routes } from '@angular/router';
import { TutorialListComponent } from './tutorial-list/tutorial-list.component';

export const routes: Routes = [
  { path: '', component: TutorialListComponent }, // Rota principal
];
@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
