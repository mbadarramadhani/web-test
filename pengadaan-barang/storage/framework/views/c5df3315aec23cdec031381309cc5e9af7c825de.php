<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<h2>Halaman Supplier</h2>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-10">
  <h2 class="card-header">Supplier <a href="<?php echo e(route('supplier.create')); ?>" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>
</h2>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Harga / Unit</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                <?php $no=1 ?>
                    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($data->nama_supplier); ?></td>
                            <td><?php echo e($data->no_telepon); ?></td>
                            <td><?php echo e($data->alamat); ?></td>
                            <td>Rp.<?php echo e($data->harga); ?></td>
                            <td><?php echo e($data->ket); ?></td>
                            <td>
                                <form class="text-center" action="<?php echo e(route('supplier.destroy',$data->id)); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                    <a href="<?php echo e(route('supplier.edit',$data->id)); ?>" class="btn btn-warning far fa-edit"></a>
                                    <button type="submit" class="btn btn-danger delete-confirm">Delete</button>                                </form>
                                </form>
                            </td>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/willyap/Sites/wordpress/PengadaanBarang_PKL_Laravel/resources/views/supplier/index.blade.php ENDPATH**/ ?>