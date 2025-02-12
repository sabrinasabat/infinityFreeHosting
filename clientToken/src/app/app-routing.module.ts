import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RegistrarComponent} from './components/registrar/registrar.component';
import {AppComponent} from './app.component';
import {LoginComponent} from './components/login/login.component';
import {HomeComponent} from './components/home/home.component';

const routes: Routes = [
  //la ruta por defecto hay que ser app component
  {path: '', component: AppComponent},
  {path: 'registrar', component: RegistrarComponent}, //la ruta para el registrar
  {path: 'login', component: LoginComponent}, //la ruta para el login
  {path: 'home', component: HomeComponent} //la ruta para el home
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
