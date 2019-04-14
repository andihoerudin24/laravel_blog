<?php /* C:\xampp\htdocs\laravel_blog\resources\views/categori1/create.blade.php */ ?>
  <?php $__env->startSection('title','Dahboard'); ?>
  <?php $__env->startSection('page-title','Home'); ?>
  <?php $__env->startSection('content'); ?>
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Kategori</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="<?php echo e(route('categori.store')); ?>" method="POST">
            <?php echo method_field('POST'); ?>
            <?php echo csrf_field(); ?>
          <div class="box-body">
            <div class="form-group">
              <?php if($errors->has('nama_kategori')): ?>
                <div class="alert alert-danger">
                    <strong><?php echo e($errors->first('nama_kategori')); ?></strong>
                </div>
               <?php endif; ?>
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" name="nama_kategori" placeholder="Kategori"  value="<?php echo e(old('nama_kategori')); ?>">
            </div>
            <div class="form-group">
               <?php if($errors->has('slug')): ?>
                <div class="alert alert-danger">
                    <strong><?php echo e($errors->first('slug')); ?></strong>
                </div>
               <?php endif; ?>
              <label for="exampleInputEmail1">Slug Kategori</label>
              <input type="text" class="form-control" name="slug" placeholder=" Slug Kategori"  value="<?php echo e(old('nama_kategori')); ?>">
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit"  class="btn btn-primary">Submit</button>
            <a href="<?php echo e(route('categori.index')); ?>" class="btn btn-danger">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>