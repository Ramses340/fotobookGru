<!-- View/usuario/create -->

<?php $this->extend("plantilla"); ?>

<?php $this->section("titulo"); ?>
Pedidos
<?php $this->endSection(); ?>
<?php $this->section("content"); ?>
    <section class="row">
        <div class ="col-12 card">
            <div class="card-header">
           
                <a href="http://localhost/fotobook/public/index.php?/usuarios/create"  class="btn btn-success"> 
                    <i class="bi bi-plus" ></i>
                Nuevo Pedido </a>

            </div>
            <div class="card-body">
                
            

            <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">ID</th>
                                                <th>Usuario ID</th>
                                                <th>Evento ID</th>
                                                <th style="width: 40px">Lista de productos</th>
                                                <th> Total </th>
                                                <th> Estado </th>
                                                <th> Fecha de creación </th>
                                                <th> Fecha de salida </th>
                                                <th> Acciones </th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach ($usuarios as $usuario): ?>
                                            <tr class="align-middle">
                                                <td><?= $usuario["id"];   ?>  </td>
                                                <td><?= $usuario["usuario_id"];   ?>  </td>
                                                <td><?= $usuario["evento_id"];   ?>  </td>
                                                <td><?= $usuario["lista_productos"];   ?>  </td>
                                                <td><?= $usuario["total"];   ?>  </td>
                                                <td><?= $usuario["estado"];   ?>  </td>
                                                <td><?= $usuario["created_at"];   ?>  </td>
                                                <td><?= $usuario["updated_at"];   ?>  </td>
                                            
                                                <td>
                                                
                                                <a href="http://localhost/fotobook/public/index.php?/usuarios/<?=$usuario["id"];?>/edit" 
                                                class="btn btn-success btn-sm"> <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <a href="http://localhost/fotobook/public/index.php?/usuarios/<?=$usuario["id"];?>" 
                                                class="btn btn-success btn-sm"> <i class="bi bi-pencil-square"></i> view
                                                </a>
                                              

                                                <button 
                                                onClick="eliminar(<?= $usuario["id"]; ?>)"                                            
                                                class="btn btn-danger btn-sm">
                                                <i class= "bi bi-trash3"> </i>
                                                </button>

                                                </td>
                                            </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>








        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

          function eliminar(id){

            Swal.fire({
  title: "Estas seguro?",
  text: "El registro se eliminara permanentemente!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Si, eliminar para siempre!"
}).then((result) => {
  if (result.isConfirmed) {
    
    location.href = "http://localhost/fotobook/public/index.php?/usuarios/<?=$usuario["id"];?>/delete" 
    //href.location = `/usuarios/<?=$usuario["id"];?>/delete`

  }
});


          }

    </script>                                        



    

    <?php $this->endSection(); ?>