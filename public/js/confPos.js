list4.addEventListener("change",()=>{
	color.setAttribute("src","img/"+list3.selectedOptions[0].value+"/"+list4.selectedOptions[0].value+"/"+list.selectedOptions[0].value+".png")
})

var listaSombrero = document.getElementById('list3');
listaSombrero.addEventListener("change",()=>{
	var opcionSeleccion = listaSombrero.options[listaSombrero.selectedIndex].text;
	var listaPosiciones = document.getElementById('list4');
		
	if (opcionSeleccion =="Indiana") {
		limpiarOpciones();
		let posiciones = ["Frente","Lado"];
		var posicionAAgregar;
		posicionAAgregar = document.createElement("option");
		posicionAAgregar.textContent = "Selecciona un posición";
		listaPosiciones.appendChild(posicionAAgregar);
		function recorreposiciones(element,index,array){
			posicionAAgregar = document.createElement("option");
			posicionAAgregar.textContent = element;
			listaPosiciones.appendChild(posicionAAgregar);	
		}
		posiciones.forEach(recorreposiciones);
	}
	if (opcionSeleccion =="Cubano") {
		limpiarOpciones();
		let posicionesCubano = ["Lado"];
		var posicionAAgregar;
		posicionAAgregar = document.createElement("option");
		posicionAAgregar.textContent = "Selecciona una posición";
		listaPosiciones.appendChild(posicionAAgregar);
		function recorreposiciones(element,index,array){
			posicionAAgregar = document.createElement("option");
			posicionAAgregar.textContent = element;
			listaPosiciones.appendChild(posicionAAgregar);	
		}
		posicionesCubano.forEach(recorreposiciones);
	}
})
function limpiarOpciones(){
	var listaPosiciones = document.getElementById('list4');
	while(listaPosiciones.firstChild){
		listaPosiciones.removeChild(listaPosiciones.firstChild);
	}
}