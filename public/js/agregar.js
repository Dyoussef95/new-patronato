function agregar() {


	$.post("archivo.php",{"texto":document.getElementById("nombre").value});
}


