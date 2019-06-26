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
        location.href="http://localhost:9090/crearTitulo.php";
    });
}


function confirmarEliminacion(id){
    let ops = confirm('¿Estas seguro de eliminar el Titulo?');
    if(ops == true){
        location.href = 'http://localhost:9090/controllers/eliminarTitulo.php?IdTitulo='+id;
    }
}

function abrirTitulo(id,nombre){
    console.log('http://localhost:9090/Titulo.php?IdTitulo='+id+'&Nombre='+nombre);
    location.href = 'http://localhost:9090/Titulo.php?IdTitulo='+id+'&NombreTitulo='+nombre;
}

//------------------------------------------------------------------------

//------------------este codigo para Titulo.php-----------------------
function agregarTomo(idTitulo,nombre){
    console.log(nombre);
    location.href = 'http://localhost:9090/crearTomo.php?idTitulo='+idTitulo+'&NombreTitulo='+nombre;
}

function confirmarEliminacionTomo(idTomo,idTitulo,nombreTitulo){
    let opt = confirm('¿Estas seguro de eliminar el Tomo?');
    if(opt == true){
        location.href = 'http://localhost:9090/controllers/eliminarTomo.php?IdTomo='+idTomo+'&IdTitulo='+idTitulo+'&NombreTitulo='+nombreTitulo;
    }
}

function abrirTomo(idTomo,numeroTomo,nombreTitulo){
    location.href = 'http://localhost:9090/Tomo.php?IdTomo='+idTomo+'&NumeroTomo='+numeroTomo+'&NombreTitulo='+nombreTitulo;
}
//------------------------------------------------------------------------

//------------------este codigo para Tomo.php-----------------------
function agregarNumero(IdTomo,NumeroTomo,NombreTitulo){
    location.href = "http://localhost:9090/crearNumero.php?IdTomo="+IdTomo+"&NumeroTomo="+NumeroTomo+"&NombreTitulo="+NombreTitulo;
}
//------------------------------------------------------------------
