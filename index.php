<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Estilos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <title>Naves | Lorenzo Yanet</title>
</head>

<body>
    <!-- CUERPO-->
    <div class="mt-4" data-overlay="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="m-b-20">
                        <h3>Crear una nave nueva</h3>
                    </div>
                    <div class="m-b-20">
                        <form method="POST" id="agregarNave">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="actividad">Actividad</label>
                                <input class="form-control" id="actividad" name="actividad" type="text" placeholder="Actividad" required>
                            </div>
                            <div class="form-group">
                                <label for="pais">País</label>
                                <input class="form-control" id="pais" name="pais" type="text" placeholder="País" required>
                            </div>
                            <div class="form-group">
                                <label for="Tipo">Tipo</label>

                                <select class="form-control" name="tipo" id="tipo" required>
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="Vehículos Lanzadera">Vehículos Lanzadera</option>
                                    <option value="Naves No Tripuladas">Naves No Tripuladas</option>
                                    <option value="Naves Tripuladas">Naves Tripuladas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="combustible">Combustible</label>
                                <input class="form-control" id="combustible" name="combustible" type="text" placeholder="Combustible" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="21" rows="5"></textarea>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-primary btn-block" id="btnGuardar" name="btnGuardar" type="">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-8 mx-auto text-center">
                    <div class="m-b-20">
                        <h3>Listado de naves</h3>
                    </div>
                    <div class="m-b-20">
                        <div id="tableResult"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- script Necesarios -->
<script src="js/sweetalert2@11.js"></script>
<script src="js/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<!-- Fin script Necesarios -->

<!-- Funcion para hacer insert -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#tableResult').load('tabla_naves.php');
    });

    $('#btnGuardar').click(function() {
        var nombre = document.getElementsByName("nombre")[0].value;
        var actividad = document.getElementsByName("actividad")[0].value;
        var pais = document.getElementsByName("pais")[0].value;
        var tipo = document.getElementsByName("tipo")[0].value;
        var combustible = document.getElementsByName("combustible")[0].value;
        var descripcion = document.getElementsByName("descripcion")[0].value;

        if ((nombre == "") || (actividad == "") || (pais == "") || (tipo == "") || (combustible == "") || (descripcion == "")) {
            Swal.fire({
                icon: 'error',
                title: 'Campos vacíos. Por favor, verifique.',
                showConfirmButton: false,
                timer: 1800
            })
        } else {

            datos = $('#agregarNave').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/agregarNave.php",
                success: function(r) {
                    console.log(r)
                    if (r == 1) {
                        $('#agregarNave')[0].reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Se ha creado una nave.',
                            showConfirmButton: true
                        })
                        $('#tableResult').load('tabla_naves.php');

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error en la consulta.',
                            showConfirmButton: false
                        })
                    }
                }
            });
        }
    });
</script>