<?php

require_once "clases/conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$sql_naves = "SELECT * FROM naves";
$result_naves = mysqli_query($conexion, $sql_naves);

?>

<div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered small" id="cargarProceso">
            <thead class="text-center" style="">
                <tr>
                    <th style="font-size:14px;">Nombre</th>
                    <th style="font-size:14px;">Actividad</th>
                    <th style="font-size:14px;">País</th>
                    <th style="font-size:14px;">Tipo</th>
                    <th style="font-size:14px;">Combustible</th>
                    <th style="font-size:14px;">Descripción</th>

                </tr>
            </thead>

            <tbody>
                <?php
                while ($view = mysqli_fetch_row($result_naves)) {
                ?>
                    <tr class="text-center">
                        <td><?= $view[1]; ?></td>
                        <td><?= $view[2]; ?></td>
                        <td><?= $view[3]; ?></td>
                        <td><?= $view[4]; ?></td>
                        <td><?= $view[5]; ?></td>
                        <td><?= $view[6]; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    var table = $('#cargarProceso').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
            "infoEmpty": "Mostrando 0 de 0 de 0 Registros",
            "infoFiltered": "(Filtrado de _MAX_ total Registros)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    });
</script>