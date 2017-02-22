<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Kategori Lembur</div>
                <div class="panel-body">
                    
                         <?php echo Form ::model($kategorilembur,['method'=>'PATCH','route'=>['kategorilembur.update',$kategorilembur->id]]); ?>              

                        <div class="form-group">
                            <div class="col-md-6">
                            <?php echo Form :: label('kode_lembur','Kode Lembur'); ?>

                            
                                <?php echo Form :: text('kode_lembur',null,['class'=>'form-control','required']); ?>

                            </div>
                        </div>

                        
                        <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="jabatan_id" class="col-md-4 control-label">Kode Jabatan</label>

                            <div class="col-md-6">
                                <select class="form-control" name="jabatan_id">
                                    <option >PILIH</option>
                                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->nama_jabatan; ?></option>
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
                        <div class="col-md-6">
                <label for="golongan_id" class="col-md-1 control-label">KodeGolongan</label>
                                <select class="form-control" name="golongan_id">
                                    <option >PILIH</option>
                                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->nama_golongan; ?></option>
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
                            <div class="col-md-6">
                            <?php echo Form :: label('besaran_uang','Besaran Uang'); ?>

                              <?php echo Form :: text('besaran_uang',null,['class'=>'form-control','required']); ?>

                            </div>
                        </div>    
    
                  

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-0">  
                            <hr>
                                <button type="submit" class="btn btn-primary">
                                    <div class="col-md-6">
                                         Simpan Data
                                    
                                </button>
                            </div>
                            </div>
                        </div>
                        <?php echo Form :: close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
        


                       
                    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>