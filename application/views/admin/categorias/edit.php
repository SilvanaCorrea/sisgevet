        
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias
        <small>Editar</small>
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
             <form class="form-horizontal" action="<?php echo base_url();?>mantenimiento/categorias/update" method="POST">
             <input type="hidden" value="<?php echo $categoria->id;?>" name="idCategoria">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $categoria->nombre?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="comment" class="col-sm-2 control-label">Descripción:</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="3" id="comment" name="descripcion" style="resize:none"><?php echo $categoria->descripcion?></textarea>
                      
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

            
            
<!--                        <form action="<?php echo base_url();?>mantenimiento/categorias/update" method="POST">
                            <input type="hidden" value="<?php echo $categoria->id;?>" name="idCategoria">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $categoria->nombre?>">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $categoria->descripcion?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>-->
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
