<x-app-layout>

	<div class="container-fluid">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos Generales</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="cli_des">Nombre y Apellido / Razón Social</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-regular fa-user"></i></span>
                  	</div>
                    <input type="text" class="form-control" id="cli_des" placeholder="Nombre del Cliente">
                	</div>
                  </div>

                  <div class="form-group">
                    <label for="cli_des">Cédula de Identidad / R.I.F.</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-solid fa-id-card"></i></span>
                  	</div>
                    <input type="text" class="form-control" id="cli_des" placeholder="CI o Rif">
                	</div>
                  </div>

                  <div class="form-group">
                    <label for="cli_des">Dirección</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-solid fa-map-pin"></i></span>
                  	</div>
                    <input type="text" class="form-control" id="direc1" placeholder="Dirección">
                	</div>
                  </div>

                  <div class="form-group">
                    <label for="cli_des">Teléfono</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-solid fa-phone"></i></span>
                  	</div>
                    <input type="text" class="form-control" id="telofonos" placeholder="Teléfono">
                	</div>
                  </div>

                  <div class="form-group">
                    <label for="cli_des">Email</label>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-solid fa-envelope"></i></span>
                  	</div>
                    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico">
                	</div>
                  </div>
                

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
              </form>
  			</div>
        
    </div>

</x-app-layout>