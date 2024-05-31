$(document).ready(function () {
    insertarDatosUsuarioEnModal();

    function insertarDatosUsuarioEnModal() {
        var userID = $(".idUsuario").data('id');
        console.log(userID);
        $.ajax({
            url: '/../../controllers/actionadmin/verUsuarioPorId.php?idUsuario=' + userID,
            success: function (response) {
                var usuario = JSON.parse(response);
                console.log(response);
                $("#formLogin").modal('show');
                $("#formLogin input[name='nombres']").val(usuario.Nombre);
                $("#formLogin input[name='apellidos']").val(usuario.Apellido);
                $("#formLogin input[name='email']").val(usuario.Correo_Institucional);
                $("#formLogin input[name='codigo']").val(usuario.Codigo_Estudiantil);
                $("#formLogin input[name='celular']").val(usuario.Celular);
                $("#formLogin input[name='biografia']").val(usuario.Biografia);

                // Seleccionar el programa del usuario en el select correspondiente
                var programaSelect = $("#formLogin select[name='programa']");
                programaSelect.val(usuario.Id_Programa);
            },
            error: function (err) {
                console.error('Error:', err);
            }
        });
    }

    $('form').on('submit', function (event) {
        event.preventDefault();
        if ($(this).attr('id') === 'formLogin') {
            var nombre = $.trim($("input[name='nombres']").val());
            var apellido = $.trim($("input[name='apellidos']").val());
            var emailRegistro = $.trim($("input[name='email']").val());
            var passwordRegistro = $.trim($("input[name='new_pass']").val());
            var confirmPassword = $.trim($("input[name='c_pass']").val());
            var telefono = $.trim($("input[name='celular']").val());
            var tipoUsuario = $("select[name='user-type']").val();
            var codigoEstudiantil = $.trim($("input[name='codigo']").val());
            var programa = $("select[name='programa']").val();

            if (nombre.length === 0 || apellido.length === 0 || emailRegistro.length === 0 || telefono.length === 0 || tipoUsuario === null || codigoEstudiantil.length === 0 || programa === null) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Debe completar todos los campos en el formulario de registro',
                });
                event.preventDefault();
                return false;
            }
            if (passwordRegistro !== confirmPassword) {
                Swal.fire({
                  icon: 'error',
                  title: 'Las contraseñas no coinciden',
                });
                return false;
              }
        }
        // Hacer la solicitud AJAX
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this), // Usar FormData para incluir archivos
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                var result = JSON.parse(response);

                // Muestra el mensaje de éxito
                Swal.fire({
                    icon: result.estado ? 'success' : 'error',
                    title: result.msg,
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    if (!result.estado) {

                    } else {
                        location.reload();
                    }

                });
            },
            error: function (err) {
                console.error('Error:', err);
            }
        });
    });
});
