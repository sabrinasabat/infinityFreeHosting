document.getElementById('personaForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita enviament per defecte

    // Crear la classe Persona
    class Persona {
        constructor(nom, edat, dni) {
            this.nom = nom;
            this.edat = edat;
            this.dni = dni;
        }
    }

    // Obtenir els valors del formulari
    const nom = document.getElementById('nom').value;
    const edat = document.getElementById('edat').value;
    const dni = document.getElementById('dni').value;

    // Crear una instancia de Persona
    const persona = new Persona(nom, edat, dni);

    // Construir la URL amb els parametres
    debugger;
    const url = new URL('formulario.php', window.location.href);
    url.searchParams.append('nom', persona.nom);
    url.searchParams.append('edat', persona.edat);
    url.searchParams.append('dni', persona.dni);

    // Redirigir a la URL amb els paràmetres
    window.location.href = url;
});