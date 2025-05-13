<div class="modal fade" id="modalCreatePermission" tabindex="-1" aria-labelledby="modalAgregarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarPermissionsLabel">Agregar Permisos de Acceso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('permissions.store_permission') }}"  data-parsley-validate="true" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nombre del Permiso:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>            
                   <!-- Botones -->
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-theme">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
