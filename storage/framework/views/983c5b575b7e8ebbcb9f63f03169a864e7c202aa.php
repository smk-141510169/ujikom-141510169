<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Data</div>
                <div class="panel-body">
                   

<?php echo Form ::open (['url'=>'golongan']); ?>

<div class="form-group">
    <?php echo Form :: label('kode_golongan','Kode Golongan'); ?>

    <?php echo Form :: text('kode_golongan',null,['class'=>'form-control','required']); ?>

                       
                       
</div>
<div class="form-group">
    <?php echo Form :: label('nama_golongan','Nama Golongan'); ?>

    <?php echo Form :: text('nama_golongan',null,['class'=>'form-control','required']); ?>

</div>
<div class="form-group">
    <?php echo Form :: label('besaran_uang','Besaran Uang'); ?>

    <?php echo Form :: text('besaran_uang',null,['class'=>'form-control','required']); ?>

</div>

<div class="form-group">
    <?php echo Form :: submit('Simpan',['class'=>'btn btn-success form-control']); ?>

</div>
<?php echo Form :: close(); ?>

                    
                </div>
            </div>
        </div>
    </div>
</div>

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>