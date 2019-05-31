//-------------este es el codigo para crearUsuario.html-----------------
let botonCancelar = document.getElementById('btnCancelar');

if(botonCancelar != null){
    botonCancelar.addEventListener('click',()=>{
        console.log("Estas Entrado?");
        location.href="http://localhost:9090/index.html";
    });
}

//-----------------------------------------------------------------------


//------------------este codigo para bienvenido.php-----------------------
const btnAddTitulo = document.getElementById('btn-addTitulo');

if(btnAddTitulo != null){
    btnAddTitulo.addEventListener('click',()=>{
        console.log("Estas adentro?");
        location.href="http://localhost:9090/agregarTitulo.php";
    });
}
//------------------------------------------------------------------------