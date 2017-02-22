<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->permision == 'admin'): ?>

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
                            <li class="active">
                                <i class="fa fa-edit"></i> Kategori Lembur
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Kategori Lembur</div></h2>

                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                        <!--<div class="form-group input-group">
                            <form action="matadiklat/?nama_mata_diklat=nama_mata_diklat">
                                <input type="text" name="nama_mata_diklat" placeholder="search">
                                <input type="submit" class="btn btn-success" value="search">
                                <a href="<?php echo e('/matadiklat'); ?>" class="btn btn-danger"><i> Reset</a></i>
                            </form>
                        </div>-->
                        <hr>
                        <div class="table-responsive">
                        <a href="<?php echo e(url('kategorilembur/create')); ?>" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Kode Lembur</center></th>
                                        <th><center>Nama Jabatan</center></th>
                                        <th><center>Nama Golongan</center></th>
                                        <th><center>Besaran Uang</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <?php 
                                $no=1;
                                 ?>
                                <?php $__currentLoopData = $kategorilembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td><center><?php echo e($no++); ?></center></td>
                                        <td><center><?php echo e($data->kode_lembur); ?></center></td>
                                        <td><center><?php echo e($data->jabatan->nama_jabatan); ?></center></td>
                                        <td><center><?php echo e($data->golongan->nama_golongan); ?></center></td>
                                        <td><center>Rp.<?php echo e($data->besaran_uang); ?></center></td>
                                        <td><center>

                                        <a title="Mengubah Data" href="<?php echo e(route('kategorilembur.edit',$data->id)); ?>" class="btn btn-success"><i class="fa fa-edit"> Edit</a></i>

                                        <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Menghapus Data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</a></i>

                                        <?php echo $__env->make('hapus.delete',['url'=>route('kategorilembur.destroy',$data->id),'model'=>$data], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        </center>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </table>
                          <?php echo e($kategorilembur->links()); ?>

                        </div>
                    </div>
                </div>
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
                            Peringatan - Haram Kembali
                            <small></small>
                        </h1>
                        
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    Anda Tidak Berhak Mengakses Halaman Kategori Lembur
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.aa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>