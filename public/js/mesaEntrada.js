//select con buscador select2
$(document).ready(function () {
  $('.select2').select2({
    placeholder: 'Escriba aqui el nombre: ',
    language: {
      //boton para agregar nuevo al no encontrar resultados
      //para definir la accion a realizar al hacer click, se debe crear un metodo noResultsButtonClicked()
      noResults: function () {
        return '<button id="no-results-btn" class="btn btn-info" onclick="noResultsButtonClicked()">No se encontro resultado. Click para agregar</a>';
      },
    },
    escapeMarkup: function (markup) {
      return markup;
    },
  });
});





function noResultsButtonClicked() {
  location.href = 'mesa-entrada/create'
}

$(document).ready(function () {
  // Setup - add a text input to each footer cell
  $('#dataTableMesaEntrada thead tr').clone(true).appendTo('#dataTableMesaEntrada thead');
  $('#dataTableMesaEntrada thead tr:eq(1) th').each(function (i) {
    var title = $(this).text();
    $(this).html('<input type="text" placeholder="Buscar por ' + title + '" />');

    $('input', this).on('keyup change', function () {
      if (table.column(i).search() !== this.value) {
        table
          .column(i)
          .search(this.value)
          .draw();
      }
    });
  });

  var table = $('#dataTableMesaEntrada').DataTable({

    

    orderCellsTop: true,

    language: {
      search: "Buscar en la tabla para agregar nuevo asistido:",
      info: "Mostrando _TOTAL_ elementos",
      infoEmpty: "Mostrando _TOTAL_ elementos",
      infoFiltered: "(Filtrado de un total de _MAX_)",
      zeroRecords: '<button id="no-results-btn" class="btn btn-info" onclick="noResultsButtonClicked()">No se encontro resultado. Click para agregar</a>',
      lengthMenu: "Mostrar _MENU_ entradas",
      paginate: {
        first: "Primero",
        last: "Ultimo",
        next: "Siguiente",
        previous: "Anterior"
      },
    },
    fixedHeader: true
  });

  table.rows().every( function () {
    this.child( 'Row details for row: '+this.index() );
  } );
 
  $('#dataTableMesaEntrada tbody').on( 'click', 'tr', function () {
      var child = table.row( this ).child;
  
      if ( child.isShown() ) {
          child.hide();
      }
      else {
          child.show();
      }
  } );



});

