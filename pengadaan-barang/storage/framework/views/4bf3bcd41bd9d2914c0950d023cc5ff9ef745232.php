<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<h2>Halaman Riwayat Transaksi</h2>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-12">
  <h2 class="card-header">Riwayat Transaksi
    <button onclick = "window.print()" class = "btn btn-primary float-right  col-sm-2 mr-3"><span class = "fa fa-print">&nbsp;</span> Print</button>
</h2>
  <div class="card-body">
    <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>

                        <th class = "text-center">No</th>
                        <th class = "text-center">Kode Transaksi</th>
                        <th class = "text-center">Jenis Transaksi</th>
                        <th class = "text-center">Nama Barang</th>
                        <th class = "text-center">Tanggal Transaksi</th>
                        <th class = "text-center">Qty</th>
                        <th class = "text-center">Harga</th>
                        <th class = "text-center">Total Biaya</th>
                        <th class = "text-center">perkiraan Biaya</th>
                        <th class = "text-center">Keterangan</th>
                        <th class = "text-center">Penerima / Pengeluar</th>
                        <th class = "text-center">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                 <?php $no=1 ?>
                    <!-- data -->
                    <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($no++); ?></td>
                        <td class="text-center"><?php echo e($data->kode); ?></td>
                        <td class="text-center"><?php echo e($data->jenis); ?></td>
                        <td class="text-center"><?php echo e($data->barang->nama); ?></td>
                        <td class="text-center"><?php echo e($data->tanggal_transaksi); ?></td>
                        <td class="text-center"><?php echo e($data->qty); ?></td>
                        <td class="text-center">Rp.<?php echo e($data->harga); ?></td>
                        <td class="text-center">Rp.<?php echo e($data->total_biaya); ?></td>
                        <td class="text-center">Rp.<?php echo e($data->perkiraan_biaya); ?></td>

                        <?php if($data->perkiraan_biaya == $data->total_biaya): ?>
                            <td class="text-center">Total Dan Perkiraan Sama Rp.<?php echo e($data->total_biaya); ?></td>
                        <?php elseif($data->total_biaya <= $data->perkiraan_biaya): ?>
                            <td class="text-center">Lebih Rp.<?php echo e($data->ket); ?></td>
                        <?php elseif($data->total_biaya >= $data->perkiraan_biaya): ?>
                            <td class="text-center">Kurang Rp.<?php echo e($data->ket); ?></td>
                        <?php endif; ?>
                        <td class="text-center"><?php echo e($data->user->name); ?></td>
                        <td class="text-center">
                            <form class="text-center" action="<?php echo e(route('transaksi.destroy',$data->id)); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/willyap/Sites/wordpress/PengadaanBarang_PKL_Laravel/resources/views/transaksi/index.blade.php ENDPATH**/ ?>