 <!-- Modal Dialog Scrollable FORMULARIO DE REGISTRAR O CREAR EQUIPO-->
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearBombero">
     <i class="bi bi-plus"></i> Agregar un nuevo equipo
 </button>
 <div class="modal fade" id="modalCrearBombero" tabindex="-1">
     <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Formulario para registrar bombero</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="{{ route('admin.equipos.store') }}" method="post"
                     class="row g-3 needs-validation text-start" enctype="multipart/form-data" novalidate>
                     @csrf
                     @method('post')

                     <div class="col-12">
                         <label for="nombre" class="form-label">
                             Nombre del equipo
                         </label>
                         <div class="input-group has-validation">
                             <span class="input-group-text text-white bg-dark" id="iconoNombre">
                                 <i class="bi bi-person-circle"></i>
                             </span>
                             <input type="text" name="nombre" class="form-control text-dark" id="nombre"
                                 value="{{ old('nombre') ?? '' }}" placeholder="Ingrese nombre completo" required>

                             <div class="invalid-feedback">Por favor, ingrese nombre del equipo! </div>
                         </div>
                         @error('nombre')
                             <div class="text-danger">{{ $message }}</div>
                         @enderror
                     </div>
                     
              

                     <div class="col-12">
                         <button class="btn btn-primary w-100" type="submit">Crear equipo</button>
                     </div>

                 </form>

             </div>
         </div>
     </div>
 </div><!-- End Modal Dialog Scrollable-->
