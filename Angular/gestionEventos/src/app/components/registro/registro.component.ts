import { Component } from '@angular/core';
import {AuthService} from '../../services/auth.service';
import {Router} from '@angular/router';
import {Usuario} from '../../models/usuario';

@Component({
  selector: 'app-registro',
  standalone: false,
  templateUrl: './registro.component.html',
  styleUrl: './registro.component.css'
})
export class RegistroComponent {

  nombre: string = '';
  email: string = '';
  contrasena: string = '';
  mensajeError: string = '';

  constructor(private authService: AuthService, private router: Router){}

    registrarUsuario(){
      const nuevoUsuario = new Usuario(this.nombre, this.email, this.contrasena);

      this.authService.registrar(nuevoUsuario).subscribe(
        () =>{
          alert('Usuario registrado con succeso. Ya puedes iniciar la sesión.');
          this.router.navigate(['/login']);
        },
        (error) =>{
          this.mensajeError = 'Error al registrar el usuario. Intenta de nuevo.';
        }
      );

    }
  }

