/**
 * Cambiando el diseño
 */
///Agregar un elemento a la lista

//Almacenamos el form en una variable mediante su ID
var form = document.getElementById('formAgregar');
//Almacenamos La lista en una variable mediante su ID
var lista = document.getElementById('items');
//
var filtro = document.getElementById('filtro');
//Creamos el evento para el form
form.addEventListener('submit', agregarItem);
//Creamos la función que llamaremos en el evento
function agregarItem(e) {
    //La funcion preventDefault permite cancelar la funcion si es cancelable
    e.preventDefault();
    //Creamos el nuevo item tomando el texto el componente item
    var nuevoItem = document.getElementById('item');
    if(nuevoItem.value !== ''){
        //Creamos la etiqueta y la almacenamos en una variable
        var li = document.createElement('li');
        //Le damos un estilo dandole una clase CSS
        li.className = 'list-group-item';
        //Creamos un nuevo nodo de texto en la etiqueta dando el texto del textbox
        li.appendChild(document.createTextNode(nuevoItem.value));
        //Creamos el botón
        var botonDel = document.createElement('Button');
        //Le damos un estilo al botón con className
        botonDel.className = 'btn btn-danger btn-small float-right eliminar';
        //Le damos un nodo de texto al botón
        botonDel.appendChild(document.createTextNode('X'));
        //Juntamos el boton con el li
        li.appendChild(botonDel);
        //Juntamos el botón con el li
        lista.appendChild(li);
        //Limmpiamos el input
        nuevoItem.value = '';
    }else{
        alert('El cuadro está vacío');
    }
}

/*Eliminar elementos de la lista*/
//eventa click de la lista
lista.addEventListener('click',eliminarItem);
//Función para eliminar un Item de la lista
function eliminarItem(e) {
    if(e.target.classList.contains('eliminar')){
        if(confirm('¿Seguro que desea eliminar el elemento?')){
            var li = e.target.parentElement;
            lista.removeChild(li);
        }
    }
}
//Evento del teclado en el campo de fintrol
filtro.addEventListener('keyup', filtrarItems);
//Funcion para filtrar elementos de la lista
function filtrarItems(e) {
    var texto = e.target.value.toLowerCase();
    var items = lista.getElementsByTagName('li');
    Array.from(items).forEach(function(item){
        var itemNombre = item.firstChild.textContent;
        if(itemNombre.toLowerCase().indexOf(texto) != -1){
            item.style.display = 'block';
        }else{
            item.style.display = 'none';
        }

    });
}

