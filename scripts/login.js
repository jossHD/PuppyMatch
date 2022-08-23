
  function home() {
    window.location.href = "http://localhost/doGet/PuppyMatch/vistas/home.php";
}

var inicia_sesion = document.getElementById('inicia_sesion');

inicia_sesion.addEventListener('submit', function(v) {
    v.preventDefault();
    console.log('me diste un clic')

    var datos = new FormData(inicia_sesion);

    console.log(datos);
    console.log(datos.get('email'))
    console.log(datos.get('contraseña'))


    fetch('../clases/login.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data => {
            console.log(data)

            if (data === 'error') {
                respuesta.innerHTML = `
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					LLENA TODOS LOS CAMPOS
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				`
            } else if (data === 'invalido') {
                respuesta.innerHTML = `
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					LAS CREDENCIALES NO COINCIDEN
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				`
            } else if (data === 'correcto') {
                respuesta.innerHTML = `
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					Redireccionando...
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				`
                setTimeout("home()", 3000);
            } 
        })
})

var respuesta = document.getElementById('respuesta');


