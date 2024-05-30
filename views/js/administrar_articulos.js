$(document).ready(function () {
  ajaxVerArticulos();
})

function ajaxVerArticulos() {
  $.ajax({
    url: "/../../controllers/action/ver-articulos.php",
    success: function (result) {
      console.log(result);
      insertarArticulosEnTabla(JSON.parse(result));
    },
    error: function (xhr) {
      alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
    }
  });
}

function truncateText(text, maxLength) {
  if (!text) {
    return ''; // Si el texto es null o undefined, devuelve una cadena vacía
  }
  if (text.length > maxLength) {
    return text.substring(0, maxLength) + '...';
  }
  return text;
}


function insertarArticulosEnTabla(result) {
  console.log(result);
  let articulos = '';
  $.each(result, function (i) {
    const descripcionTruncada = truncateText(result[i].descripcion, 20);
    articulos += '<tr id=' + result[i].ID_Articulo + '>'
      + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].ID_Articulo + '</td>'
      + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].nombre + '</td>'
      + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + descripcionTruncada + '</td>'
      + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].precio + '</td>'
      + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].ID_Vendedor + '</td>'
      + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Fecha + '</td>'
      + '<td class="data-list" width="150" class="text-center" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'
      + '<div class="btn-container">'
      + '<a class="editarArticulo btn btn-sm" data-id="' + result[i].ID_Articulo + '" style="background-color: #007BFF; color: #fff;" role="button" aria-pressed="true">'
      + '<i class="fas fa-edit"></i> Editar</a>'
      + '</div>'
      + '<div class="btn-container">'
      + '<a data-id="' + result[i].ID_Articulo + '" class="deleteArticulo btn btn-danger btn-sm" role="button" aria-pressed="true">'
      + '<i class="fas fa-trash-alt"></i> Eliminar</a>'
      + '</div></td>'
      + '</tr>';
  });

  $("#articulosRegistrados tbody").append(articulos);
  insertarDatosArticuloEnModal();
}

function insertarDatosArticuloEnModal() {
  $('.editarArticulo').click(function () {
    var articuloID = $(this).data('id');
    console.log(articuloID);
    $.ajax({
      url: '/../../controllers/action/verArticuloPorId.php?idArticulo=' + articuloID,
      success: function (response) {
        var articulo = JSON.parse(response);
        console.log(articulo);
        $("#modalEditarArticulo").modal('show');
        $("#modalEditarArticulo input[name='ID_Articulo']").val(articulo.ID_Articulo);
        $("#modalEditarArticulo input[name='vendedor']").val(articulo.ID_Vendedor);
        $("#modalEditarArticulo input[name='nombre']").val(articulo.nombre);
        $("#modalEditarArticulo input[name='descripcion']").val(articulo.descripcion);
        $("#modalEditarArticulo input[name='precio']").val(articulo.precio);
        $("#modalEditarArticulo input[name='fecha']").val(articulo.Fecha);
      },
      error: function (err) {
        console.error('Error:', err);
      }
    });
  });

  $('.deleteArticulo').click(function () {
    var articuloID = $(this).data('id');
    Swal.fire({
      title: '¿Estás seguro?',
      text: 'Esta acción no se puede deshacer.',
      icon: 'warning',
      confirmButtonColor: '#3085d6',
      showCancelButton: true,
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, eliminarlo'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: '/../../controllers/action/eliminarArticulo.php?idArticulo=' + articuloID,
          success: function (response) {
            var result = JSON.parse(response);

            Swal.fire({
              icon: result.estado ? 'success' : 'error',
              title: result.msg,
              showConfirmButton: false,
              timer: 1500
            }).then(function () {
              // Recarga la página después de cerrar SweetAlert
              location.reload();
            });
          },
          error: function (err) {
            console.error('Error:', err);
          }
        });
      }
    });
  });
}
