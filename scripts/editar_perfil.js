
function redireccionarPagina() {
	window.location.href = "http://localhost/doGet/PuppyMatch/vistas/perfil.php";
	}

var editar_perfil = document.getElementById('editar_perfil');

editar_perfil.addEventListener('submit', function(w){
	w.preventDefault();
	console.log('me diste un clic')

	var datos = new FormData(editar_perfil);

	console.log(datos);
	console.log(datos.get('nombres'));
    console.log(datos.get('apellidos'));
	console.log(datos.get('telefono'));
	console.log(datos.get('contraseña'));
	console.log(datos.get('direccion'));
    console.log(datos.get('acerca_de_mi'));
	console.log(datos.get('file'));


	fetch('../clases/editar_perfil.php',{
		method: 'POST',
		body: datos
	})
		.then( res => res.json())
		.then(data =>{
			console.log(data)

            if(data === 'correcto'){
				respuesta.innerHTML = `
					<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100%!important;">
						<strong>SE EDITÓ CORECTAMENTE.</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				`
				setTimeout("redireccionarPagina()", 3000);
			}else if(data === 'error'){
				respuesta.innerHTML = `
					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100%!important;">
						<strong>ALGO SALIO MAL.</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				`
            }
		})
})

var respuesta = document.getElementById('respuesta');