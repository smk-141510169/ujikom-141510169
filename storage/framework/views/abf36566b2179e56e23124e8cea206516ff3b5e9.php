<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->permision == 'admin'): ?>
<div class="container">
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Selamat Datang
                            <small>Hai, <?php echo e(Auth::user()->name); ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>Home
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Anda Login Sebagai Admin
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="container">
        <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Selamat Datang
                            <small>Hai, <?php echo e(Auth::user()->name); ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>Home
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Anda Login Sebagai Pegawai
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.aa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>