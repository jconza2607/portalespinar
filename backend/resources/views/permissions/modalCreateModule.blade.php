<div class="modal fade" id="modalCreateModule" tabindex="-1" aria-labelledby="modalAgregarModuleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarModuleLabel">Agregar Module de Acceso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formAgregarModule" data-parsley-validate="true" action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nombre del Rol:</label>
                        <input type="text" name="name" class="form-control me-2" required>
                    </div>
                
                    <div class="form-group mt-3">
                        <label>Permisos:</label>
                        @foreach($permissions as $permission)
                            <div class="form-check">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}" class="form-check-input">
                                <label>{{ $permission->name }}</label>
                            </div>
                        @endforeach
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
