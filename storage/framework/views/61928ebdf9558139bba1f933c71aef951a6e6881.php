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
                                <i class="fa fa-edit"></i> Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Pegawai</div></h2>
                <form enctype="multipart/form-data">
                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                                <div class="table-responsive">
                       	 
                        <div class="form-group input-group">
                            <form action="pegawai/?nip=nip">
                                <div class="form-group input-group">
                                <input type="text" class="form-control" name="nip">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
                                </div>
                                <h6>**Search diambil bedasarkan nip pegawai</h6>
                            </form>
                        </div>
                        </div>
                        <hr>
                        <a href="<?php echo e(url('pegawai/create')); ?>" class="btn btn-primary"><i>Tambah Data</a></i>
                         <hr>   
                        
                           <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIP</center></th>
                                        <th><center>Nama Pegawai</center></th>
                                        <th><center>Jabatan</center></th>
                                        <th><center>Golongan</center></th>
                                        <th><center>Foto Pegawai</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <?php 
                                $no=1;
                                 ?>
                                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td><center><?php echo e($no++); ?></center></td>
                                        
                                        <td><center><?php echo e($data->nip); ?></center></td>
                                        <td><center><?php echo e($data->user->name); ?></center></td>
                                        <td><center><?php echo e($data->jabatan->nama_jabatan); ?></center></td>
                                        <td><center><?php echo e($data->golongan->nama_golongan); ?></center></td>
                                        <td><center><img src="<?php echo e(asset('image/'.$data->photo)); ?>" height="50" width="50"></center></td>
                                        <td><center>
                                        <a title="Mengedit Data " href="<?php echo e(route('pegawai.edit',$data->id)); ?>" class="btn btn-success"><i class="fa fa-edit"> Edit</a></i>
                                        
                                        <!--<a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Menghapus Data" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"> Hapus</a></i>

                                        <?php echo $__env->make('hapus.delete',['url'=>route('pegawai.destroy',$data->id),'model'=>$data], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>-->

                                        </center>
                                        </td>
                                    </tr>
                                   </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </table>
                            <h6>**Untuk mengedit nama pegawai lewat tabel user</h6>
                            <h6>**Untuk mengghapus data pegawai lewat tabel user</h6>
                             <?php echo e($pegawai->links()); ?>

                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
            </form>
        </div>
    </div>
</div>
<?php else: ?>
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
                                <i class="fa fa-edit"></i> Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Data Pegawai</div></h2>
                <form enctype="multipart/form-data">
                <div class="panel-body">
                     <div class="col-lg-12">
                        <h1></h1>
                        <div class="table-responsive">
                        
                        <!--<div class="form-group input-group">
                            <form action="siswa/?nama_siswa=nama_siswa">
                                <input type="text" name="nama_siswa" placeholder="search">
                                <input type="submit" class="btn btn-success" value="search">
                                <a href="<?php echo e('/siswa'); ?>" class="btn btn-danger"><i> Reset</a></i>
                            </form>
                        </div>-->
                     
                         <hr>   
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIP</center></th>
                                        <th><center>Nama Pegawai</center></th>
                                        <th><center>Jabatan</center></th>
                                        <th><center>Golongan</center></th>
                                        <th><center>Foto Pegawai</center></th>
                                        
                                    </tr>
                                </thead>
                                <?php 
                                $no=1;
                                 ?>
                                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td><center><?php echo e($no++); ?></center></td>
                                        
                                        <td><center><?php echo e($data->nip); ?></center></td>
                                        <td><center><?php echo e($data->user->name); ?></center></td>
                                        <td><center><?php echo e($data->jabatan->nama_jabatan); ?></center></td>
                                        <td><center><?php echo e($data->golongan->nama_golongan); ?></center></td>
                                        <td><center><img src="<?php echo e(asset('image/'.$data->photo)); ?>" height="50" width="50"></center></td>
                                        
                                    </tr>
                                   </tbody>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </table>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.aa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>