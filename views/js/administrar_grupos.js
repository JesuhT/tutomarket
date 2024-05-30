$(document).ready(function () {
  ajaxVerGrupos();
});

function ajaxVerGrupos() {
  $.ajax({
    url: "/../../controllers/action/ver-grupos.php",
    success: function (result) {
      console.log(result);
      insertaGruposEnTabla(JSON.parse(result));
    },
    error: function (xhr) {
      alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
    }
  });
}

function insertaGruposEnTabla(result) {
  console.log(result);
  let grupo = '';
  $.each(result, function (i) {
    grupo += '<tr id=' + result[i].Id_Monitoria + '>'
      + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Id_Monitoria + '</td>'
      + '<td class="data-list" width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Id_Monitor + '</td>'
      + '<td class="data-list" width="100" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">' + result[i].Materia + '</td>'
      + '<td class="data-list data-list-description " width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px; ">' + result[i].Fecha + '</td>'
      + '<td class="data-list " width="150" class="text-center" style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'
      + '<div class="btn-container">'
      + '<a class="editargrupo btn btn-sm" data-id="' + result[i].Id_Monitoria + '" style="background-color: rgb(142, 68, 173); color: #fff;" role="button" aria-pressed="true">'
      + '<i class="fas fa-edit"></i> Editar</a>'
      + '</div>'
      + '<div class="btn-container">'
      + '<a  data-id="' + result[i].Id_Monitoria + '" class="deletegrupo btn btn-danger btn-sm" role="button" aria-pressed="true">'
      + '<i class="fas fa-trash-alt"></i> Eliminar</a>'
      + '</div></td>'
      + '</tr>';
  });

  $("#gruposRegistrados tbody").append(grupo);
  insertarDatosGruposenModal();
}

function insertarDatosGruposenModal() {
  $('.editargrupo').click(function () {
    var grupoID = $(this).data('id');
    console.log(grupoID);
    $.ajax({
      url: '/../../controllers/action/verGrupoporId.php?Id_Monitoria=' + grupoID,
      success: function (response) {
        var grupo = JSON.parse(response);
        console.log(response);
        $("#modalEditarGrupo").modal('show');
        $("#modalEditarGrupo input[name='Id_Monitoria']").val(grupo.Id_Monitoria);
        $("#modalEditarGrupo input[name='Id_Monitor']").val(grupo.Id_Monitor);
        $("#modalEditarGrupo input[name='Materia']").val(grupo.Materia);
        $("#modalEditarGrupo input[name='Fecha']").val(grupo.Fecha);
      },
      error: function (err) {
        console.error('Error:', err);
      }
    });
  });

  $('.deletegrupo').click(function () {
    var grupoID = $(this).data('id');

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
          url: '/../../controllers/action/eliminarGrupo.php?Id_Monitoria=' + grupoID,
          success: function (response) {
            var result = JSON.parse(response);

            Swal.fire({
              icon: result.estado ? 'success' : 'error',
              title: result.msg,
              showConfirmButton: false,
              timer: 1500
            }).then(function () {
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
