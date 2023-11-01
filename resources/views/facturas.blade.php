<x-app-layout>

	<div class="container-fluid">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Funciones</h3>
              </div>
          	</div>

          	<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Datos Principales</h3>
              </div>
              
              <div class="card-body">
              	  
              	  <div class="row">

                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Número:</label>
                        <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="fas fa-solid fa-hashtag"></i></span>
	                  	</div>
                        <input type="text" class="form-control" placeholder="1234" disabled>
                      	</div>
                      </div>
                    </div>
                    
                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Emisión:</label>
                        <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
	                  	</div>
                        <input type="text" class="form-control" placeholder="31/10/2023" disabled>
                    	</div>
                      </div>
                    </div>

                    <div class="col-sm-2">
                      <div class="form-group">
                        <label>Vencimiento:</label>
                        <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
	                  	</div>
                        <input type="text" class="form-control" placeholder="31/10/2023" disabled>
                    	</div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Condición:</label>
                        <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="fas fa-solid fa-money-bill"></i></span>
	                  	</div>
                        <input type="text" class="form-control" placeholder="Contado" disabled>
                      	</div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Status:</label>
                        <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="fas fa-solid fa-cash-register"></i></span>
	                  	</div>
                        <input type="text" class="form-control" placeholder="Cobrada" disabled>
                      	</div>
                      </div>
                    </div>
                  
                  </div>

                  <div class="row">
                  	
                  	<div class="col-sm-8">
	                  <div class="form-group">
	                    <label for="cli_des">Cliente:</label>
	                    <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="fas fa-solid fa-users"></i></span>
	                  	</div>
	                    <select class="form-control select2bs4" disabled="disabled" >
		                    <option selected="selected">MATERIALES MAHIFE 2024, C.A.</option>
		                    <option>Alaska</option>
		                    <option>California</option>
		                    <option>Delaware</option>
		                    <option>Tennessee</option>
		                    <option>Texas</option>
		                    <option>Washington</option>
	                  	</select>
		                </div>
		              </div>  
                   	</div>

                   	<div class="col-sm-4">
	                  <div class="form-group">
	                    <label for="cli_des">Vendedor:</label>
	                    <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="fas fa-solid fa-briefcase"></i></span>
	                  	</div>
	                    <select class="form-control select2bs4" disabled="disabled" >
		                    <option selected="selected">{{ Auth::user()->name }}</option>
	                  	</select>
		                </div>
		              </div>  
                   	</div>
              
                  </div>

                  <div class="row">
                  	
                  	<div class="col-sm-2">

                  	<button type="button" class="btn btn-block btn-outline-secondary disabled">Guardar</button>

                  	</div>

                  	<div class="col-sm-2">

                  	<button type="button" class="btn btn-block btn-outline-secondary disabled">Limpiar</button>

                  	</div>

                  </div>
            </div>

     		</div>

     		<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Carga de Productos / Servicios</h3>
              </div>
              	
              	<div class="card-body">

              	<div class="row">
            
              		<div class="col-sm-8">
	                  <div class="form-group">
	                    <label for="cli_des">Artículo:</label>
	                    <div class="input-group mb-3">
	                    <div class="input-group-prepend">
	                    <span class="input-group-text"><i class="fas fa-solid fa-box-archive"></i></span>
	                  	</div>
	                    <select class="form-control select2bs4" disabled="disabled" >
		                    <option selected="selected">Seleccione un producto...</option>
		                    <option>RECARGA DE AGUA MINERAL - BOTELLÓN PREMIER</option>
		                    <option>California</option>
		                    <option>Delaware</option>
		                    <option>Tennessee</option>
		                    <option>Texas</option>
		                    <option>Washington</option>
	                  	</select>
		                </div>
		              </div>  
                   	</div>

                </div>

                </div>              
          	
          	</div>

</x-app-layout>