const formContainer = document.querySelector('.option__guardar');
const inputText= document.querySelector('.option__guardar input');

inputText.addEventListener('keyup', ()=>{
    if(inputText.value != ""){
        formContainer.classList.add('active');
    }else{
        formContainer.classList.remove('active');
    }
});

const btnSubmit = document.querySelector('.option__guardar button');
const containerError = document.querySelector('.acortador-error');


formContainer.onsubmit= (e)=>{
    e.preventDefault();
}

btnSubmit.addEventListener('click', ()=>{
    let xrh = new XMLHttpRequest();
    xrh.open("POST", "http://localhost/proyectosPHP/AcortadorLink/controller/GuardarUrlController.php", true);
    xrh.onload = ()=>{
        if(xrh.readyState === XMLHttpRequest.DONE){
            if(xrh.status === 200){
                let data = xrh.response;
                if(data === "success"){
                    error("Se guardo correctament", "active-success");
                    mostrarTodos();
                }else{
                    error(data, "active-danger");
                }
            }
        }
    }
    let formData = new FormData(formContainer);
    xrh.send(formData);
    formContainer.classList.remove('active');
    inputText.value = "";
});

function error(text, clase){
    containerError.textContent = text;
    containerError.classList.add(clase);

    setTimeout(() => {
        containerError.classList.remove(clase);
    }, 5000);
}

const contenedorBody = document.querySelector('.wrapper');
mostrarTodos();

function mostrarTodos(){

    let xrh = new XMLHttpRequest();
    xrh.open("POST", "http://localhost/proyectosPHP/AcortadorLink/controller/MostrarTodosController.php", true);
    xrh.onload = ()=>{
        if(xrh.readyState === XMLHttpRequest.DONE){
            if(xrh.status === 200){
                let data = xrh.response;
                contenedorBody.innerHTML = data;
            }
        }
    }
    xrh.send();
}


const containerSearch = document.querySelector('.container__search');
const inputSearch = containerSearch.querySelector('input');

inputSearch.addEventListener('keyup', buscarUrl);

function buscarUrl(){

    if(inputSearch != ""){
        let xrh = new XMLHttpRequest();
        xrh.open("POST", "http://localhost/proyectosPHP/AcortadorLink/controller/BuscarUrlController.php", true);
        xrh.onload = ()=>{
            if(xrh.readyState === XMLHttpRequest.DONE){
                if(xrh.status === 200){
                    let data = xrh.response;
                    if(data !== ""){
                        contenedorBody.innerHTML = data;
                    }else{
                        contenedorBody.innerHTML = '<div style="padding: 2rem; color: red;">No se encontro datos</div>';
                    }
                }
            }
        }
        let formData = new FormData();
        formData.append("search", inputSearch.value);
        xrh.send(formData);
    }else{
        mostrarTodos();
    }
}