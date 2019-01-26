        
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Categorías</h3>
            </div>
            
            <?php if($this->session->flashdata("error")):?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>

                 </div>
            <?php endif;?>

            <form class="form-horizontal" action="<?php echo base_url();?>mantenimiento/categorias/store" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de categoría">
                  </div>
                </div>
                <div class="form-group">
                  <label for="comment" class="col-sm-2 control-label">Descripción:</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="3" id="comment" name="descripcion" placeholder="Descripción" style="resize:none"></textarea>
                  </div>
                </div> 
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a href="<?php echo base_url();?>mantenimiento/categorias" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
