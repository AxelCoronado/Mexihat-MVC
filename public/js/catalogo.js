var categoria = document.getElementById('Categoria');
categoria.addEventListener("change",()=>{
	var opcionSeleccionada = categoria.options[categoria.selectedIndex].text;
		
	if (opcionSeleccionada =="flores") {
		let diseños = document.getElementById("Flor");
		var colorAAgregar;
		colorAAgregar = document.createElement("img");
		colorAAgregar.textContent = "Selecciona un color";
		listaColores.appendChild(colorAAgregar);
		function recorreColores(element,index,array){
			colorAAgregar = document.createElement("option");
			colorAAgregar.textContent = element;
			listaColores.appendChild(colorAAgregar);	
		}
		colores.forEach(recorreColores);
	}
	if (opcionSeleccionada =="Cubano") {
		limpiarOpciones();
		let coloresCubano = ["Ivory", "Negro"];
		var colorAAgregar;
		colorAAgregar = document.createElement("option");
		colorAAgregar.textContent = "Selecciona un color";
		listaColores.appendChild(colorAAgregar);
		function recorreColores(element,index,array){
			colorAAgregar = document.createElement("option");
			colorAAgregar.textContent = element;
			listaColores.appendChild(colorAAgregar);	
		}
		coloresCubano.forEach(recorreColores);
	}
})
function limpiarOpciones(){
	var listaColores = document.getElementById('list');
	while(listaColores.firstChild){
		listaColores.removeChild(listaColores.firstChild);
	}
}
	
