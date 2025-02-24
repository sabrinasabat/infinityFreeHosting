import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {LoginComponent} from './components/login/login.component';
import {RegistroComponent} from './components/registro/registro.component';
import {EventosListComponent} from './components/eventos-list/eventos-list.component';
import {EventoDetalleComponent} from './components/evento-detalle/evento-detalle.component';
import {ComprarEntradaComponent} from './components/comprar-entrada/comprar-entrada.component';

const routes: Routes = [
  {path: 'login', component: LoginComponent},
  {path: 'registro', component: RegistroComponent},
  {path: '', redirectTo: '/login', pathMatch: 'full'}, //redireecciona para login si no hay ruta
  {path: 'eventos', component: EventosListComponent},
  {path: 'eventos/:id', component: EventoDetalleComponent},
  {path: 'comprar/:id', component: ComprarEntradaComponent},
  {path: '**', redirectTo:'/login'} //rutas invalidas redirecciona al login
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
