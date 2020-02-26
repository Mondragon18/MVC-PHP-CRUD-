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
                <h3 class="panel-title">Entradas
                    <ul class="navbar-right">
                        <a type="button" data-toggle="modal" data-target="#addPage"><li class="btn-insert btn btn-success float-right">
                            Insertar
                        </li></a>
                        <!-- <li class=" btn-insert btn btn-success float-right">
                            <a href="paginas/agregar" class="nav-link"></a>
                        </li> -->
                    </ul>
                </h3>

              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filtrar usurios...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                       <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($datos['usuarios'] as $usuario) : ?>
                            <tr>
                                <td><?php echo $usuario->id_usuario ?></td>
                                <td><?php echo $usuario->nombre ?></td>
                                <td><?php echo $usuario->email ?></td>
                                <td><?php echo $usuario->telefono ?></td>
                                <td><a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $usuario->id_usuario?>">Editar</a></td>
                                <td><a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $usuario->id_usuario?>">Borrar</a></td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>


    <!-- modal agregar usuario -->

  <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="<?php echo RUTA_URL; ?>/paginas/agregar" method="POST">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLPabel">Agregar Usuarios</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nombre: </label>
              <input type="text" name="nombre" class="form-control" placeholder="nombre completo...">
            </div>
          <div class="form-group">
            <label>E-Mail:</label>
            <input type="text" name="email" class="form-control" placeholder="Agregar correo electronico...">
          </div>
          <div class="form-group">
              <label>Telefono: </label>
              <input type="text" name="telefono" class="form-control" placeholder="Agregar numero de telefono...">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
    </div>
  </div>
</div>

<?php require RUTA_APP. '/vistas/inc/footer.php' ?>
