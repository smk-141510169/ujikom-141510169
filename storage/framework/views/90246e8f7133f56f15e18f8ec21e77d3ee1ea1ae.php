<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             
                            <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i> Menu
                            </li>
                            <li>
                                <i class="fa fa-edit"></i> Jabatan
                            </li>
                            <li class="active">
                                <i class="fa fa-eyes"></i> Show
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Detail Data</div>

                <div class="panel-body">
                   
                       <div class="form-group">
                           <label for="id" class="col-sm-12 control-label">Kode Jabatan </label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" id="id" placeholder="<?php echo e($jabatan->kode_jabtan); ?>" readonly>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="id" class="col-sm-12 control-label">Nama Jabatan </label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" id="id" placeholder="<?php echo e($jabatan->nama_jabatan); ?>" readonly>
                           </div>
                       </div>
                       <div class="form-group">
                            <div class="col-sm-10">
                                <a href="<?php echo e(url('jabatan')); ?>" class="btn btn-success">Back</a>   
                           </div>
                       </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>