<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<h2>Halaman Barang</h2>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-12">
  <h2 class="card-header">Data Barang
      <?php if (app('laratrust')->hasRole('admin|superadmin')) : ?>
      <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary float-right col-sm-2 ml-3"><span class="fa fa-plus">&nbsp;</span> tambah</a>
      <?php endif; // app('laratrust')->hasRole ?>
      <button onclick = "window.print()" class = "btn btn-primary float-right col-sm-2 ml-3"><span class = "fa fa-print">&nbsp;</span> Print</button>
</h2>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Stok</th>
                        <th>Satuan Barang</th>
                        
                        <th>Ket</th>
                        <?php if (app('laratrust')->hasRole('admin|superadmin')) : ?>
                        <th>Aksi</th>
                        <?php endif; // app('laratrust')->hasRole ?>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1 ?>
                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($data->kode_barang); ?></td>
                            <td><?php echo e($data->nama); ?></td>
                            <td><?php echo e($data->kategori->kategori); ?></td>
                            <td><?php echo e($data->qty); ?></td>
                            <td><?php echo e($data->satuan->nama_satuan); ?></td>
                            
                            <td><?php echo e($data->ket); ?></td>
                            <?php if (app('laratrust')->hasRole('admin|superadmin')) : ?>
                            <td>
                                <form class="text-center" action="<?php echo e(route('barang.destroy',$data->id)); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                    <a href="<?php echo e(route('barang.edit',$data->id)); ?>" class="btn btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger delete-confirm">Delete</button>                                </form>
                            </td>
                            <?php endif; // app('laratrust')->hasRole ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
  </div>
</div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

 <?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>
    <script>
        $(".delete-confirm").click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/willyap/Sites/wordpress/PengadaanBarang_PKL_Laravel/resources/views/barang/index.blade.php ENDPATH**/ ?>