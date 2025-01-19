<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<h2>Halaman Barang Masuk</h2>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-12">
  <h2 class="card-header">Barang Masuk
      <a href="<?php echo e(route('barang-masuk.create')); ?>" class="btn btn-primary float-right col-sm-2 ml-3"><span class="fa fa-plus">&nbsp;</span> tambah</a>
      <button onclick = "window.print()" class = "btn btn-primary float-right col-sm-2 ml-3"><span class = "fa fa-print">&nbsp;</span> Print</button>
</h2>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang Masuk</th>
                        <th>Kode Pengajuan</th>
                        <th>Tanggal Masuk</th>
                        <th>Supplier</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Penerima</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 <?php $no=1 ?>
                    <!-- data -->
                    <?php $__currentLoopData = $masuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($no++); ?></td>
                        <td class="text-center"><?php echo e($data->kode_barang_masuk); ?></td>
                        <td class="text-center"><?php echo e($data->pengajuan->kode_pengajuan); ?></td>
                        <td class="text-center"><?php echo e($data->tanggal_masuk); ?></td>
                        <td class="text-center"><?php echo e($data->supplier->nama_supplier); ?></td>
                        <td class="text-center"><?php echo e($data->barang->nama); ?></td>
                        <td class="text-center"><?php echo e($data->qty); ?></td>
                        <td class="text-center"><?php echo e($data->harga); ?></td>
                        <td class="text-center"><?php echo e($data->satuan->nama_satuan); ?></td>
                        <td class="text-center"><?php echo e($data->user->name); ?></td>
                        <td class="text-center">
                            <form class="text-center" action="<?php echo e(route('barang-masuk.destroy',$data->id)); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                    <a href="<?php echo e(route('barang-masuk.edit',$data->id)); ?>" class="btn btn-warning">Edit</a>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/willyap/Sites/wordpress/PengadaanBarang_PKL_Laravel/resources/views/barang-masuk/index.blade.php ENDPATH**/ ?>