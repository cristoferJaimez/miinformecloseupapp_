

function updatevalue() {
    let domain = document.getElementById("name").value;
    //Se actualiza en municipio inm
    document.getElementById("domain").value = domain;
}


function page(page){
    let pag = document.getElementById(page);
    pag.innerHTML = "pagina";
}