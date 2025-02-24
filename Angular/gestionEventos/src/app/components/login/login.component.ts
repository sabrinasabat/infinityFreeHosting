import { Component } from '@angular/core';
import {AuthService} from '../../services/auth.service';
import {Router} from '@angular/router';

@Component({
  selector: 'app-login',
  standalone: false,
  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent {
  email: string = '';
  contrasena: string = '';
  erro : string = '';

  constructor(private authService: AuthService, private router: Router) {
  }

  hacerLogin(){
    this.authService.login(this.email, this.contrasena).subscribe(
      (response) => {
        localStorage.setItem('token', response.token);
        this.router.navigate(['eventos']); //redirecciona para la lista de eventos
      },
      (error) => {
        this.erro = 'Credenciales inválidas. Intente de nuevo.';
      }
    );
  }
}
