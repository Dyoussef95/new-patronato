//activar dataTable Administrativo
$(document).ready( function () {  
    $('#dataTableAdministrativo').DataTable( {
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

 //activar dataTable Tecnico
$(document).ready( function () {  
    $('#dataTableTecnico').DataTable( {
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