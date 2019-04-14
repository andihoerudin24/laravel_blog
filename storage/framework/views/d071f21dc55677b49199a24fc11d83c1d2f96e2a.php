<?php /* C:\xampp\htdocs\laravel_blog\resources\views/categori1/index.blade.php */ ?>
<?php $__env->startPush('customcss'); ?>
<script src="<?php echo e(asset('plugins/datatables/dataTables.bootstrap.css')); ?>"></script>
<?php $__env->stopPush(); ?>
  <?php $__env->startSection('title','Dahboard'); ?>
  <?php $__env->startSection('page-title','Categori'); ?>
  <?php $__env->startSection('content'); ?>
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Categori</h3>
      <div class="pull-right">
          <a href="<?php echo e(route('categori.create')); ?>" class="btn btn-info">Tambah Data</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Kategori</th>
          <th>Slug</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td>
                        <?php echo e($item->nama_kategori); ?>

                    </td>
                    <td><?php echo e($item->slug); ?></td>
                    <td>
                        <a href="<?php echo e(route('categori.edit',$item->id)); ?>" class="btn btn-info">Edit</a>

                        <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger">
                                <span class="fa fa-trash"></span>
                                <form action="<?php echo e(route('categori.destroy',$item->id)); ?>" method="POST">
                                     <?php echo csrf_field(); ?>
                                     <?php echo method_field('DELETE'); ?>
                                </form>
                         </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  <?php $__env->startPush('datatables'); ?>
  <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plugins/datatables/datatables.bootstrap.min.js')); ?>"></script>
  <?php $__env->stopPush(); ?>
  <?php $__env->startPush('customdatatables'); ?>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
  <?php $__env->stopPush(); ?>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>