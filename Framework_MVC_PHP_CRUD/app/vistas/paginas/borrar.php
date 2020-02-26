<?php require RUTA_APP . '/vistas/inc/header.php' ?>


<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index.html">Panel de Control</a></li>
      <li class="active">Usuarios</li>
    </ol>
  </div>
</section>


<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="index.html" class="list-group-item active color-principal">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control
          </a>
          <a href="paginas.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Paginas <span class="badge">39</span></a>
          <a href="entradas.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Entradas <span class="badge">45</span></a>
          <a href="usuarios.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios <span class="badge">112</span></a>
        </div>

        <div class="well">
          <h4>Espacio en Disco</h4>
          <div class="progress">
            <div class="barra-progreso" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
              40%
            </div>
          </div>
          <h4>Ancho de Banda </h4>
          <div class="progress">
            <div class="barra-progreso" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              75%
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <!-- Website Overview -->
        <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Borrar usuario</h3>
            </div>
            <div class="panel-body">             
                <form action="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $datos['id_usuario']; ?>" method="POST">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Nombre: </label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $datos['nombre']; ?>">
                          </div>
                          <div class="form-group">
                            <label>E-Mail:</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $datos['email']; ?>">
                          </div>
                          <div class="form-group">
                            <label>Telefono: </label>
                            <input type="text" name="telefono" class="form-control" value="<?php echo $datos['telefono']; ?>" >
                          </div>
                        </div>
                        <div class="modal-footer">
                          
                          <button type="submit" class="btn btn-primary">Borrar usuario</button>
                        </div>
                      </form>
                      

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>


<?php require RUTA_APP. '/vistas/inc/footer.php' ?>
