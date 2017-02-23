<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Register Lembur Pegawai</div>
                <div class="panel-body">
                     <form class="form-horizontal" action="<?php echo e(route('lembur_pegawai.store')); ?>" method="POST">    
                     
                    <div class="form-group<?php echo e($errors->has('pegawai_id') ? ' has-error' : ''); ?>">
                            <label for="pegawai_id" class="col-md-4 control-label">NIP & Nama Pegawai</label>
                                <div class="col-md-6">
                                    <select type="text" name="pegawai_id" class="form-control">
                                    <option value="">Pilih</option>
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo $data->id; ?>"><?php echo $data->nip; ?> - <?php echo $data->User->name; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <?php if($errors->has('pegawai_id')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('pegawai_id')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                    </div>

                    
                    <div class="form-group<?php echo e($errors->has('jumlah_jam') ? ' has-error' : ''); ?>">
                            <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam </label>
                                <div class="col-md-6">
                                    <input type="number" name="jumlah_jam" placeholder="Jumlah Jam" class="form-control">
                                    <?php if($errors->has('jumlah_jam')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('jumlah_jam')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4" >
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        


                       
                    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>