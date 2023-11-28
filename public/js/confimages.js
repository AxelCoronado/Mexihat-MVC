list.addEventListener("change",()=>{
	color.setAttribute("src","./../public/img/"+list3.selectedOptions[0].value+"/"+list4.selectedOptions[0].value+"/"+list.selectedOptions[0].value+".png")
})

list2.addEventListener("change",()=>{
	designs.setAttribute("src","./../public/img/Diseños/"+list2.selectedOptions[0].value+".png")
})

list3.addEventListener("change",()=>{
	color.setAttribute("src","./../public/img/"+list3.selectedOptions[0].value+"/"+list3.selectedOptions[0].value+".png")
})
list4.addEventListener("change",()=>{
	color.setAttribute("src","./../public/img/"+list3.selectedOptions[0].value+"/"+list4.selectedOptions[0].value+"/"+list3.selectedOptions[0].value+".png")
})

var listaSombreros = document.getElementById('list3');
listaSombreros.addEventListener("change",()=>{
	var opcionSeleccionada = listaSombreros.options[listaSombreros.selectedIndex].text;
	var listaColores = document.getElementById('list');
		
	if (opcionSeleccionada =="Indiana") {
		limpiarOpciones();
		let colores = ["Blanco","Ivory","Paja","Verde","Rosa","Rojo","Amarillo","Marrón","Negro"];
		var colorAAgregar;
		colorAAgregar = document.createElement("option");
		colorAAgregar.textContent = "Seleccione un color";
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
		let coloresCubano = ["Ivory","Negro"];
		var colorAAgregar;
		colorAAgregar = document.createElement("option");
		colorAAgregar.textContent = "Seleccione un color";
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
	

var listaSombrero = document.getElementById('list3');
listaSombrero.addEventListener("change",()=>{
	var opcionSeleccion = listaSombrero.options[listaSombrero.selectedIndex].text;
	var listaPosiciones = document.getElementById('list4');
		
	if (opcionSeleccion =="Indiana") {
		limpiarOpcionesPos();
		let posiciones = ["Frente","Lado"];
		var posicionAAgregar;
		posicionAAgregar = document.createElement("option");
		posicionAAgregar.textContent = "Seleccione una posición";
		listaPosiciones.appendChild(posicionAAgregar);
		function recorreposiciones(element,index,array){
			posicionAAgregar = document.createElement("option");
			posicionAAgregar.textContent = element;
			listaPosiciones.appendChild(posicionAAgregar);	
		}
		posiciones.forEach(recorreposiciones);
	}
	if (opcionSeleccion =="Cubano") {
		limpiarOpcionesPos();
		let posicionesCubano = ["Lado"];
		var posicionAAgregar;
		posicionAAgregar = document.createElement("option");
		posicionAAgregar.textContent = "Seleccione una posición";
		listaPosiciones.appendChild(posicionAAgregar);
		function recorreposiciones(element,index,array){
			posicionAAgregar = document.createElement("option");
			posicionAAgregar.textContent = element;
			listaPosiciones.appendChild(posicionAAgregar);	
		}
		posicionesCubano.forEach(recorreposiciones);
	}
})
function limpiarOpcionesPos(){
	var listaPosiciones = document.getElementById('list4');
	while(listaPosiciones.firstChild){
		listaPosiciones.removeChild(listaPosiciones.firstChild);
	}
}