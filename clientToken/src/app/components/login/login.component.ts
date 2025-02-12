import { Component } from '@angular/core';
import { TokenService} from '../../services/token.service';


@Component({
  selector: 'app-login',
  standalone: false,

  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent {

  usuari: string = 'joan';
  contrasenya: string = 'contrasenya123';
  errorMensaje: string = '';

  constructor(private tokenService: TokenService) {} //constructor

  login(){ //metodo para hacer login
    this.tokenService.login(this.usuari, this.contrasenya).subscribe({ //hago la peticion
      next: (response) => { //si todo va bien
        console.log('login ok', response); //muestro los datos del usuario

        if(response && response.token){ //si hay token
          document.cookie = `token=${response.token}`; //para almacenar el token en la cookie
          localStorage.setItem('token', response.token); //podría almacenar aqui, pero seria menos seguro
        } else {
          this.errorMensaje = 'Error. No hay token'; //si no hay token
        }
      },
      error: (error) => { //si hay un error
        this.errorMensaje = 'error al hacer login', error;
        this.errorMensaje = error.error.message; //muestro el error
      }
    });
  }
}




