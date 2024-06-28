
        
<!-- Vertically centered Modal ELIMINAR EQUIPO -->
<a type="button" class="text-warning" data-bs-toggle="modal" data-bs-target="#modalEditar{{$equipo->id}}">
    <i class="bi bi-pencil"></i>
</a>

<div class="modal fade" id="modalEditar{{$equipo->id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Actualizar datos de equipo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.equipos.update', $equipo->id) }}" method="post" >
                @csrf
                @method('put')
                <div class="col-12">
                    <label for="nombre" class="form-label">
                        Nombre del equipo
                    </label>
                    <div class="input-group has-validation">
                        <span class="input-group-text text-white bg-dark" id="iconoNombre">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <input type="text" name="nombre" class="form-control text-dark" id="nombre"
                            value="{{ $equipo->nombre ?? old('nombre') }}" placeholder="Ingrese nombre completo" required>
    
                        <div class="invalid-feedback">Por favor, ingrese nombre del equipo! </div>
                    </div>
                    @error('nombre')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <div class="modal-footer">
      
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
    </div>
</div><!-- End Vertically centered Modal ELIMINAR EQUIPO-->


