import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import {HttpClientModule} from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { EventosListComponent } from './components/eventos-list/eventos-list.component';
import { EventoDetalleComponent } from './components/evento-detalle/evento-detalle.component';
import { ComprarEntradaComponent } from './components/comprar-entrada/comprar-entrada.component';
import { LoginComponent } from './components/login/login.component';
import { RegistroComponent } from './components/registro/registro.component';
import {FormsModule} from "@angular/forms";

@NgModule({
  declarations: [
    AppComponent,
    EventosListComponent,
    EventoDetalleComponent,
    ComprarEntradaComponent,
    LoginComponent,
    RegistroComponent
  ],
    imports: [
        BrowserModule,
        AppRoutingModule,
        FormsModule,
        HttpClientModule
    ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
