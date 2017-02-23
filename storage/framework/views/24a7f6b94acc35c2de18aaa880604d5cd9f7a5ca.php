<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Data Pegawai</div>
                <div class="panel-body">
                    
                         <?php echo Form ::model($pegawai,['method'=>'PATCH','route'=>['pegawai.update',$pegawai->id],'files'=>true]); ?>

                       
       
                   

                        <div class="form-group<?php echo e($errors->has('nip') ? ' has-error' : ''); ?>">
                            <label for="nip" class="col-md-4 control-label">NIP</label>

                            <div class="col-md-6">
                                <input id="nip" type="text" class="form-control" name="nip" value="<?php echo e($pegawai->nip); ?>" required autofocus>

                                <?php if($errors->has('nip')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nip')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>

                            <div class="col-md-6">
                                 <select name="jabatan_id" class="form-control">
                                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($data->id); ?>" <?php if ($pegawai->jabatan_id==$data->id) {echo "selected";} ?>><?php echo e($data->nama_jabatan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>

                                <?php if($errors->has('jabatan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jabatan_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                               <select name="golongan_id" class="form-control">
                                <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($data->id); ?>" <?php if ($pegawai->golongan_id==$data->id) {echo "selected";} ?>><?php echo e($data->nama_golongan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>

                                <?php if($errors->has('golongan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('golongan_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                            <div class="form-group">        
                                <form enctype="multipast/form-data" method="post">
                                    <label for="photo" class="col-md-4 control-label">Upload</label>
                                        <input type="file" name="photo" value="<?php echo e($pegawai->photo); ?>" required>
                            </div>

                    </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">  
                                <button type="submit" class="btn btn-primary">
                                    
                                         Simpan 
                                    
                                </button>
                            </div>
                        </div>
                        <?php echo Form :: close(); ?>

               
            </div>
        </div>
     </div>
</div>

                       
                    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>