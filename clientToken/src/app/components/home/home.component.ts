import { Component } from '@angular/core';
import { TokenService} from '../../services/token.service';

@Component({
  selector: 'app-home',
  standalone: false,

  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {

  protectedData: any = null;
  errorMensaje: string = '';

  constructor(private tokenService: TokenService){} //constructor

  getProtectedToken(){

    const token = localStorage.getItem('token');
    console.log('Token almacenado: ', token);

    //metodo para obtener el token
    this.tokenService.getProtectedToken().subscribe({ //hago la peticion
      next: (response) => { //si todo va bien
        console.log('Datos del usuario: ', response); //muestro los datos del usuario
        this.protectedData = response; //almaceno los datos del usuario
      },
      error: (error) => { //si hay un error
        this.errorMensaje = 'Error al obtener los datos del usuario';
        console.log(error); //muestro el error
      }
    });
  }
}
