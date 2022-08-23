// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

function redireccionarPagina() {
	window.location.href = "http://localhost/doGet/PuppyMatch/vistas/agregar_perfil.php?";
	}
    
    var validar_contraseña = document.getElementById('validar_contraseña');

    validar_contraseña.addEventListener('submit', function(w){
        w.preventDefault();
        console.log('me diste un clic')
    
        var datos = new FormData(validar_contraseña);
    
        console.log(datos);
        console.log(datos.get('correo'));
        console.log(datos.get('contraseña'));
        console.log(datos.get('confirmarcontraseña'));
    
    
        fetch('../clases/validar_contraseña.php',{
            method: 'POST',
            body: datos
        })
            .then( res => res.json())
            .then(data =>{
                console.log(data)
    
                if(data === 'correcto'){
                    respuesta.innerHTML = `
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100%!important;">
                            <strong>ESPERE UN MOMENTO...</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php  ?></div>
                    `
                    setTimeout("redireccionarPagina()", 2000);


                }else if(data === 'error'){
                    respuesta.innerHTML = `
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100%!important;">
                            <strong>LAS CONTRASEÑAS NO COINCIDEN.</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `
                }
            })
            
    })
    
    var respuesta = document.getElementById('respuesta');