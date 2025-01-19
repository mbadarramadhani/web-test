<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>

<h2>Halaman Barang Masuk</h2>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-10">
  <h2 class="card-header">Barang Masuk
    <a href="<?php echo e(route('barang-masuk.index')); ?>" class="btn btn-default float-right col-sm-2"><span class="fa fa-arrow-left">&nbsp;</span> Kembali</a>
</h2>
  <div class="card-body">
    <div class="col-md-12">
        <form role="form" action="<?php echo e(route('barang-masuk.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Kode Barang Masuk</label>
                    <input class="form-control boxed" placeholder="Kode" required="required" name="kode_barang_masuk" type="text" value="<?php echo e($kode); ?>" id="kode" readonly>
                </div>
                <div class="form-group">
                    <label>Kode Pengajuan</label>
                    <select name="pengajuan_id" class="form-control" required="required">

                            <?php $__currentLoopData = $pengajuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($data->status == 1): ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->kode_pengajuan); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" class="form-control <?php $__errorArgs = ['tanggal_masuk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tanggal masuk" value="<?php echo e(old('tanggal_masuk')); ?>">
                    <?php $__errorArgs = ['tanggal_masuk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                </div>
                <div class="form-group">
                    <label>Supplier</label>
                    <select name="supplier_id" class="form-control">

                            <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_supplier); ?>| <?php echo e($data->ket); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Barang</label>
                    <select name="barang_id" class="form-control" required="required">

                            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->kode_barang); ?> | <?php echo e($data->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" name="qty" class="form-control <?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Masukan Qty" value="<?php echo e(old('qty')); ?>">
                    <?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label>Harga Barang</label>
                    <select name="harga" class="form-control" required="required">

                            <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->harga); ?>"> <?php echo e($data->nama_supplier); ?> | <?php echo e($data->ket); ?> | Rp.<?php echo e($data->harga); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Estimasi Harga</label>
                    <select name="perkiraan_biaya" class="form-control" required="required">

                            <?php $__currentLoopData = $pengajuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($data->status == 1): ?>
                                <option value="<?php echo e($data->perkiraan_biaya); ?>"><?php echo e($data->kode_pengajuan); ?> | Rp.<?php echo e($data->perkiraan_biaya); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Satuan Barang</label>
                    <select name="satuan_id" class="form-control" required="required">

                            <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_satuan); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>

                <div class="form-group">
                    <label>Penerima</label>
                    <select name="user_id" class="form-control" >

                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-default" type="reset">Batal</button>
                </div>
            </form>
        </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

 <?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/willyap/Sites/wordpress/PengadaanBarang_PKL_Laravel/resources/views/barang-masuk/create.blade.php ENDPATH**/ ?>