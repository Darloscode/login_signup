
function validatelogin(){
    var mail = document.getElementById('email');
    var pass = document.getElementById('pass');
    var errorin = document.getElementById('errorin');

    var message = [];   
    
    var enter = false

    var expreemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(mail.value === "" || pass.value === ""){
        message.push('Debe llenar todos campos '+'<i class="fa-solid fa-circle-exclamation"></i>');
        enter = true
    }else if(!expreemail.test(mail.value)){
        message.push("Ingrese un email válido "+'<i class="fa-solid fa-circle-exclamation"></i>');
        enter = true
    }    

    errorin.innerHTML = message.join('<br>');

    if(enter){
        return false
    }else{
        location.href ="../conexion/login.php";
    }
}


function validateregister(){

    var name = document.getElementById('name');
    var surname = document.getElementById('surname');
    var email = document.getElementById('mail');
    var pass2 = document.getElementById('pass2');
    var pass3 = document.getElementById('pass3');    
    var errorup = document.getElementById('errorup');
    
    var message = [];   
    
    var enter = false

    var expreemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;        
    var expremane = /^[-]?[0-9]+[\.]?[0-9]+$/;
    

    if(name.value === "" || surname.value === "" || email.value === "" || pass2.value === "" || pass3.value === ""){        
        message.push('Debe llenar todos campos '+'<i class="fa-solid fa-circle-exclamation"></i>');                    
        enter = true
    }else if(!expreemail.test(email.value)){
        message.push("Ingrese un email válido "+'<i class="fa-solid fa-circle-exclamation"></i>')        
        enter = true
    }

    if(expremane.test(name.value)){
        message.push("Ingrese un nombre válido "+'<i class="fa-solid fa-circle-exclamation"></i>')
        enter = true
    }else if(name.value.length>10){
        message.push("El nombre es muy largo "+'<i class="fa-solid fa-circle-exclamation"></i>')        
        enter = true
    }

    if(expremane.test(surname.value)){
        message.push("Ingrese un apellido válido "+'<i class="fa-solid fa-circle-exclamation"></i>')        
        enter = true        
    }else if(surname.value.length>15){
        message.push("El apellidos es muy largo "+'<i class="fa-solid fa-circle-exclamation"></i>')        
        enter = true        
    }
    
    if(pass2.value !== pass3.value){
        message.push("Las contraseñas no coinciden "+'<i class="fa-solid fa-circle-exclamation"></i>')        
        enter = true
    }
    
    errorup.innerHTML = message.join('<br>');

    if(enter){
        return false
    }else{
        location.href ="../conexion/register.php";
    }

}

