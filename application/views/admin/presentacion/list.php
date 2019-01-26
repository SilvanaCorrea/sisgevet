<!--Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Presentacion
            <small>Listado</small>
        </h1>
    </section>
    <!--Main content-->
    <section class="content">
        <!--Default box-->
        <div class="box box-solid" >
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/presentacion/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Presentación</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover display nowrap" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($presentacion)):?>
                                    <?php foreach($presentacion as $p):?>
                                        <tr>
                                            <td><?php echo $p->id;?></td>
                                            <td><?php echo $p->nombre;?></td>
                                            <td><?php echo $p->descripcion;?></td>
                                            <td>
                                                <a href="<?php echo base_url()?>mantenimiento/presentacion/edit/<?php echo $p->id;?>" class="btn btn-warning btn-xs"><span class="fa fa-pencil"></span></a>
                                                <a href="<?php echo base_url();?>mantenimiento/presentacion/delete/<?php echo $p->id;?>" class="btn btn-danger btn-remove btn-xs"><span class="fa fa-trash-o"></span></a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>