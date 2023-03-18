<!DOCTYPE html>
<html>
<head>
    <title>Silla</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>
    <div class="container mt-5">
    <h1><img src="../../public/img/Silla.jpg" width="100"height="100">Sillas</h1>
        <hr>
        <div class="row">
            <div class="col-12 mb-2">
                <button id="nuevo" class="btn btn-success" data-toggle="modal" data-target="#modalSilla">Nuevo</button>
            </div>
            <div class="col-12">
                <table id="tablaSilla" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Material</th>
                            <th>Asiento</th>
                            <th>Tamaño</th>
                            <th>Diseño</th>
                            <th>Numeropatas</th>
                            <th>$Color</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id=listaSillas>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalSilla tabindex="-1" role="dialog" aria-labelledby="modalSillaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="formSilla" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSillaLabel">Nueva Silla</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="idSillas" id="idSillas">
                        <div class="form-group">
                            <label for="Material">Material</label>
                            <input type="text" class="form-control" id="Material" name="Material" required>
                        </div>
                        <div class="form-group">
                            <label for="Asiento">Asiento</label>
                            <input type="text" class="form-control" id="Asiento" name="Asiento" required>
                        </div>
                        <div class="form-group">
                            <label for="Tamaño">Tamaño</label>
                            <input type="text" class="form-control" id="Tamaño" name="Tamaño" required>
                        </div>
                        <div class="form-group">
                            <label for="Diseño">Diseño</label>
                            <input type="text" class="form-control" id="Diseño" name="Diseño" required>
                        </div>
                        <div class="form-group">
                            <label for="Numeropatas">Numeropatas</label>
                            <input type="text" class="form-control" id="Numeropatas" name="Numeropatas" required>
                        </div>
                        <div class="form-group">
                            <label for="Color">Color</label>
                            <input type="text" class="form-control" id="Color" name="Color" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <!-- Importación de las librerías jQuery y Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Importación de la librería datatables y nuestro archivo Silla.js -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <!--<script src="../../public/js/Silla.js"></script>-->
    <script src="../../public/js/Silla.script.js"></script>
</body>
</html>