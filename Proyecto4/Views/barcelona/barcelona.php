<?php require_once('../html/head2.php') ?>




<div class="row">

    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Lista de Jugadores del Barcelona</h5>

                <div class="table-responsive">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_jugador">
                        Nuevo Jugador
                    </button>
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nombre</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Apellido</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Numero</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Edad</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Rol</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody 
                        id="tabla_Jugadores">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ventana Modal-->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal_jugador" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="form_jugadores">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Jugadores</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" required class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="Apellido">Apellido</label>
                        <input type="text" required class="form-control" id="Apellido" name="Apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <label for="Numero">Numero</label>
                        <input type="text" required class="form-control" id="Numero" name="Numero" placeholder="Numero">
                    </div>
                    <div class="form-group">
                        <label for="Edad">Edad</label>
                        <input type="text" required class="form-control" id="Edad" name="Edad" placeholder="Edad">
                    </div>
                    <div class="form-group">
                        <label for="Rol">Rol</label>
                        <select name="Rol" id="Rol" class="form-control">
                            <option value="Jugador">Jugador</option>
                            <option value="Portero">Portero</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../html/script2.php') ?>

<script src="barcelona.controller.js"></script>
<script src="barcelona.model.js"></script>