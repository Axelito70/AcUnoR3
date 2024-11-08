//URL: dirreccion externa
//URI: direccion interna
const validar_usuario = () => {
    let email = document.getElementById('email-id').value;
    let pass = document.getElementById('pass-id').value;
    let data = new FormData();
    data.append("email",email); //añade datos al formulario
    data.append("pass",pass); //añade datos al formulario
    fetch("app/controller/login.php",{
        method:"POST",
        body: data
    }).then(respuesta => respuesta.json())
    .then(async respuesta => {
        if (respuesta[0] == 1) {
            await Swal.fire({icon: "success",title:`${respuesta[1]}`});
            window.location="inicio";
        }else {
            Swal.fire({icon: "error",title:`${respuesta[1]}`});
        }
    });
}

const registrar_usuario = () => {
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('pass').value;
    let data = new FormData();
    data.append("nombre",nombre); //añade datos al formulario
    data.append("apellido",apellido); //añade datos al formulario
    data.append("email",email); //añade datos al formulario
    data.append("pass",pass); //añade datos al formulario
    fetch("app/controller/registro.php",{
        method:"POST",
        body: data
    }).then(respuesta => respuesta.json())
    .then(async respuesta => {
        if (respuesta[0] == 1) {
            await Swal.fire({icon: "success",title:`${respuesta[1]}`});
            window.location="login";
        }else {
            Swal.fire({icon: "error",title:`${respuesta[1]}`});
        }
    });
}

window.addEventListener('DOMContentLoaded',() => {
    //LOGIN
    if (document.getElementById('btn-saludar')) {
        document.getElementById('btn-saludar').addEventListener('click',() => {
            validar_usuario();
        });                
    }
    //REGISTRO
    if (document.getElementById('btn-registrar')) {
        document.getElementById('btn-registrar').addEventListener('click',() => {
            registrar_usuario();
        });        
    }
}); 
/*
window.addEventListener('DOMContentLoaded', () => {
    const btnSaludar = document.getElementById('btn-saludar');
    if (btnSaludar) {
        btnSaludar.addEventListener('click', () => {
            window.location.href = './login';  // Redirige a la vista de login
        });
    }

    const btnRegistrar = document.getElementById('btn-registrar');
    if (btnRegistrar) {
        btnRegistrar.addEventListener('click', () => {
            window.location.href = './registro';  // Redirige a la vista de registro
        });
    }
});
*/
