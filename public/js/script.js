//ocultar sidebar
$('.fa-bars').on('click', function(){
    $('.content').toggleClass('open');
});

//dropdown sidebar
$(".item").on('click', function() {
    //$(this).children().toggleClass('active');
    if($(this).children().hasClass('active2')){
        $(this).children().removeClass('active2');
   }else{
        $(this).children().toggleClass('active');
   }
});

//mantener dropdown al actualizar o cambiar la pagina
$(".op").on('click', function() {
   if($(this).parent().hasClass('active')){
        $(this).parent().toggleClass('active');
   }
   if($(this).parent().hasClass('active2')){
        $(this).parent().toggleClass('active');
    }
});

//mostrar formulario creacion
function openCreateForm(){
    document.getElementById("createForm").style.visibility="visible";
    document.getElementById("createForm").style.display="inline";
    document.getElementById("mask").style.visibility="visible";
}
//ocultar formulario creacion
function closeCreateForm(){
    document.getElementById("createForm").style.visibility="hidden";
    document.getElementById("createForm").style.display="none";
    document.getElementById("mask").style.visibility="hidden";
}

//mostrar formulario creacion
function openUpdateForm(){
    document.getElementById("updateForm").style.visibility="visible";
    document.getElementById("updateForm").style.display="inline";
    document.getElementById("mask").style.visibility="visible";
}
//ocultar formulario creacion
function closeUpdateForm(){
    document.getElementById("updateForm").style.visibility="hidden";
    document.getElementById("updateForm").style.display="none";
    document.getElementById("mask").style.visibility="hidden";
}

$("#tabla tbody tr").on("click", function(event){
    var id= $(this).find("td:nth-child(1)").html();   
    var name= $(this).find("td:nth-child(2)").html();  
    document.getElementById("id").value = id;
    document.getElementById("editLegend").innerHTML = name;
});

//select con buscador select2
$(document).ready(function() {
    $('.select2').select2({
        placeholder: 'Escriba aqui: ',
        language: {
          noResults: function() {
            return 'No se encontro resultado';
          },
        },
      });
});

//activar dataTable
$(document).ready( function () {  
    $('#dataTable').DataTable( {
     language: {
         search: "Buscar en la tabla:",
         info: "Mostrando _TOTAL_ elementos",
         infoEmpty: "Mostrando _TOTAL_ elementos",
         infoFiltered: "(Filtrado de un total de _MAX_)",
         zeroRecords: "No se encontro resultado",
         lengthMenu: "Mostrar _MENU_ entradas",
         paginate: {
         first: "Primero",
         last: "Ultimo",
         next: "Siguiente",
         previous: "Anterior"
     },
     }
 } );
 
 $('#dataTable').show(3000);
 } );

