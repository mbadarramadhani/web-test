<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<center><h1>SELAMAT DATANG</h1>
        <h1>DI PENGADAAN BARANG SMK ASSALAAM BANDUNG</h1><br></center>
        <center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if (app('laratrust')->hasRole('admin')) : ?>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e(DB::table('suppliers')->count()); ?></h3>

                <p> Data Supplier</p>
              </div>
              <div class="icon">
                <i class="fas fa-truck"></i>
              </div>
              <a href="pengadaanbarang/supplier" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo e(DB::table('barangs')->count()); ?></h3>

                <p>Barang</p>
              </div>
              <div class="icon">
                <i class="fas fa-archive"></i>
              </div>
              <a href="pengadaanbarang/barang" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e(DB::table('barang_masuks')->count()); ?></h3>

                <p>Barang Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-download"></i>
              </div>
              <a href="pengadaanbarang/barang-masuk" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e(DB::table('barang_keluars')->count()); ?></h3>

                <p>Barang Keluar</p>
              </div>
              <div class="icon">
                <i class="fas fa-upload"></i>
              </div>
              <a href="pengadaanbarang/barang-keluar" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <?php endif; // app('laratrust')->hasRole ?>
        <center><img src="<?php echo e(asset('img/smk.png')); ?>" alt="..." /></center>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

 <?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/willyap/Sites/wordpress/PengadaanBarang_PKL_Laravel/resources/views/home.blade.php ENDPATH**/ ?>