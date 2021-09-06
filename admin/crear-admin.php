<?php include_once 'funciones/sesiones.php'; 
 include_once 'templates/header.php'; 
 include_once 'funciones/funciones.php'; 
 include_once 'templates/barra.php'; 
 include_once 'templates/navegacion.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear administrador</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear administrador</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear administrador</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
				<div class="row">
					<div class="col-md-8">
        			<div class="card-body">
								<form role="form" name="crear-admin" id="crear-admin" method="post" action="insertar-admin.php">
									<div class="card-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Usuario</label>
											<input type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Nombre de usuario">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Tu nombre</label>
											<input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Tu nombre completo">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
										</div>
									</div>
									<!-- /.card-body -->

									<div class="card-footer">
										<input type="hidden" name="agregar-admin" value="1">
										<button type="submit" class="btn btn-primary">Añadir</button>
									</div>
								</form>
							</div>
					</div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

	<?php include_once 'templates/footer.php'; ?>