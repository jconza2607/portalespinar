<div class="modal fade" id="modalCreateUsers" tabindex="-1" aria-labelledby="modalAgregarUsersLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarUsersLabel">Agregar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formAgregarUsers" data-parsley-validate="true" action="{{ route('users.store') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar Contraseña:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="role">Rol:</label>
                            <select name="role" id="role" class="form-control" required>
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
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