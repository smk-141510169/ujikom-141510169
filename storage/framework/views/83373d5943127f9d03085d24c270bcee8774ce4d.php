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
                                <i class="fa fa-edit"></i> Lembur Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Lembur Pegawai</div></h2>

                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                         <div class="table-responsive">
                         <div class="form-group input-group">
                            <form action="lembur_pegawai/?created_at=created_at">
                                <div class="form-group input-group">
                                <input type="text" class="form-control" name="created_at">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                                </div>
                                <h6>**Search diambil bedasarkan tanggal buat</h6>
                            </form>
                        </div>
                        <hr>
                       
                        <a href="<?php echo e(url('lembur_pegawai/create')); ?>" class="btn btn-primary"><i>Tambah Data</a></i>

                         <hr>   
                            <table class="table table-bordered table-hover">

                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Kode Kategori Lembur</center></th>
                                        <th><center>NIP Pegawai</center></th>
                                        <th><center>Nama Pegawai</center></th>
                                        <th><center>Jumlah Jam</center></th>
                                        <th><center>Besaran Uang</center></th>
                                        <th><center>Total</center></th>
                                        <th><center>Tanggal Buat</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <?php 
                                $no=1;
                                 ?>
                                <?php $__currentLoopData = $lembur_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td><center><?php echo e($no++); ?></center></td>
                                        <td><center><?php echo e($data->kategori_lembur->kode_lembur); ?></center></td>
                                        <td><center><?php echo e($data->pegawai->nip); ?></center></td>
                                        <td><center><?php echo e($data->pegawai->User->name); ?></center></td>
                                        <td><center><?php echo e($data->jumlah_jam); ?></center></td>
                                        <td><center>Rp.<?php echo e($data->kategori_lembur->besaran_uang); ?></center></td>
                                        <td><center>Rp.<?php echo e($data->jumlah_jam*$data->kategori_lembur->besaran_uang); ?></center></td>
                                        <td><center><?php echo e($data->created_at); ?></center></td>
                                        <td><center>

                                        <a title="Mengubah Data" href="<?php echo e(route('lembur_pegawai.edit',$data->id)); ?>" class="btn btn-success"><i class="fa fa-edit"> Edit</a></i>

                                        <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Menghapus Data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</a></i>

                                        <?php echo $__env->make('hapus.delete',['url'=>route('lembur_pegawai.destroy',$data->id),'model'=>$data], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        </center>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </table>
                            <h6>**Besaran uang diambil dari tabel kategori lembur sesuai kode lembur</h6>
                            <h6>**Total diambil besaran uang dikali jam lembur</h6>
                          <?php echo e($lembur_pegawai->links()); ?>

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
                    Anda Tidak Berhak Mengakses Halaman Lembur 
                    Pegawai
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.aa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>