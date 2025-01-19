<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<h2>Halaman Pengajuan Barang Masuk</h2>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-12">
  <h2 class="card-header">Pengajuan Barang Masuk<a href="<?php echo e(route('permintaan.create')); ?>" class="btn btn-primary float-right col-sm-2"><span class="fa fa-plus">&nbsp;</span> tambah</a>

</h2>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Kode Pengajuan</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Perkiraan Biaya</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 <?php $no=1 ?>
                    <!-- data -->
                    <?php $__currentLoopData = $pengajuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($no++); ?></td>
                        <td class="text-center"><?php echo e($data->tanggal); ?></td>
                        <td class="text-center"><?php echo e($data->kode_pengajuan); ?></td>
                        <td class="text-center"><?php echo e($data->barang->nama); ?></td>
                        <td class="text-center"><?php echo e($data->qty); ?></td>
                        <td class="text-center">Rp.<?php echo e($data->perkiraan_biaya); ?></td>
                        <?php if($data->status == 1): ?>
                                <td>
                                    <div class="p-2 mb-2 bg-success text-white">Sudah Disetujui</div>
                                </td>
                                <?php elseif($data->status ==2): ?>
                            <td>
                                <div class="p-2 mb-2 bg-primary text-white">Sudah Transaksi</div>
                            </td>
                            <?php else: ?>
                                <td>
                                    <div class="p-3 mb-2 bg-danger text-white">Menunggu Persetujuan</div>
                                </td>
                            <?php endif; ?>
                        <td class="text-center">
                            <form class="text-center" action="<?php echo e(route('permintaan.destroy',$data->id)); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                    <a href="<?php echo e(route('permintaan.edit',$data->id)); ?>" class="btn btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/willyap/Sites/wordpress/PengadaanBarang_PKL_Laravel/resources/views/permintaan/index.blade.php ENDPATH**/ ?>