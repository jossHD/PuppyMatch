
function redireccionarPagina() {
	window.location.href = "http://localhost/doGet/PuppyMatch/vistas/mascota.php";
	}

var agregar_mascota = document.getElementById('agregar_mascota');

agregar_mascota.addEventListener('submit', function(w){
	w.preventDefault();
	console.log('me diste un clic')

	var datos = new FormData(agregar_mascota);

	console.log(datos);
	console.log(datos.get('nombre'));
    console.log(datos.get('edad'));
    console.log(datos.get('acerca_de_mi'));
    console.log(datos.get('sexo'));
	console.log(datos.get('raza'));
	console.log(datos.get('tipo'));
    console.log(datos.get('file'));

	fetch('../clases/agregar_mascota.php',{
		method: 'POST',
		body: datos
	})
		.then( res => res.json())
		.then(data =>{
			console.log(data)

			if (data === 'error') {
				respuesta.innerHTML = `
					<div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100%!important;">
						<strong>ALGO SALIO MAL.</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				`
			}else if(data === 'correcto'){
				respuesta.innerHTML = `
					<div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100%!important;">
						<strong>SE AGREGÓ UN PRODUCTO.</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				`
				setTimeout("redireccionarPagina()", 3000);
			}
		})
})

var respuesta = document.getElementById('respuesta');