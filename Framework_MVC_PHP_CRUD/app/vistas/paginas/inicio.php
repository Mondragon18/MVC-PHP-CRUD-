<?php require RUTA_APP . '/vistas/inc/header.php' ?>

<!-- graficos -->

<section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Panel de Control</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active color-principal">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de administrador
              </a>
              <a href="paginas.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> producto <span class="badge">39</span></a>
              <a href="entradas.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ventas <span class="badge">45</span></a>
              <a href="<?php echo RUTA_URL ?>/paginas/user" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios <span class="badge">112</span></a>
            </div>

            <div class="well">
              <h4>Espacio en disco</h4>
              <div class="progress">
                  <div class="barra-progreso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                      40%
              </div>
            </div>
            <h4>Ancho de banda </h4>
            <div class="progress">
                <div class="barra-progreso" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                    75%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">

              <!-- últimos usuarios -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Últimos usuarios</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Registrado</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($datos['usuarios'] as $usuario) : ?>
                            <tr>
                                <td><?php echo $usuario->id_usuario ?></td>
                                <td><?php echo $usuario->nombre ?></td>
                                <td><?php echo $usuario->email ?></td>
                                <td><?php echo $usuario->telefono ?></td>
                                <td><?php echo $usuario->f_registro ?></td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
              </div>

               <!-- Vista rápida del sitio -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Vista Rápida</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 508</h2>
                    <h4>Usuarios</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 17</h2>
                    <h4>Paginas</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                    <h4>Entradas</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 15,336</h2>
                    <h4>Visitantes</h4>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>

<p><?php
    // echo RUTA_APP;
?></p>



<!-- <ul> -->
    <?php
        // foreach($datos['articulos'] as $articulo) :
    ?>
        <!-- <li> -->
            <?php
         // echo $articulo->titulo; ?>
        <!-- </li> -->
    <?php
        // endforeach;
     ?>
<!-- </ul> -->

<?php require RUTA_APP. '/vistas/inc/footer.php' ?>
