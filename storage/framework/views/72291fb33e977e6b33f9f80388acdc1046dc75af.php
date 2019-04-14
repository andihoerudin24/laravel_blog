<?php /* C:\xampp\htdocs\laravel_blog\resources\views/front.blade.php */ ?>
<?php $__env->startPush('nav'); ?>
<ul class="nav-menu nav navbar-nav">
    <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="cat-4"><a href="<?php echo e(route('artikel.kategori',$item->slug)); ?>"><?php echo e($item->nama_kategori); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- post Atas -->
            <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
                <div class="post post-thumb">
                    <a class="post-img" href="#">
                        <img src="<?php echo e(asset('uploads/'.$a->gambar)); ?>" alt="" width="300" height="300"></a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html"><?php echo e($a->kategori->nama_kategori); ?></a>
                            <span class="post-date"><?php echo e($a->created_at->diffForHumans()); ?></span>
                        </div>
                        <h3 class="post-title"><a href="#">
                                <?php echo e($a->judul); ?>

                            </a></h3>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- /post Atas -->
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Recent Posts</h2>
                </div>
            </div>
            <div class="clearfix visible-md visible-lg"></div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="clearfix visible-md visible-lg"></div>

                    <!-- post Content-->
                    <?php $__currentLoopData = $artikelall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="#">
                                <img src="<?php echo e(asset('uploads/'.$all->gambar)); ?>" alt="" height="250px" width="250px"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">
                                        <?php echo e($all->kategori->nama_kategori); ?>

                                    </a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title">
                                    <a href="<?php echo e(route('artikel.detail',$all->judul)); ?>">
                                        <?php echo e($all->judul); ?>

                                    </a></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- /post Content -->

                    <div class="clearfix visible-md visible-lg"></div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- post widget Terkait -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Most Read</h2>
                    </div>
                    <?php $__currentLoopData = $artikelterkait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $terkait): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post post-widget">
                        <a class="post-img" href="#">
                            <img src="<?php echo e(asset('uploads/'.$terkait->gambar)); ?>" alt="" width="80px" height="80px"></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="<?php echo e(route('artikel.detail',$terkait->judul)); ?>">
                                    <?php echo e($terkait->judul); ?>

                                </a></h3>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <!-- /row Terkait -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
<?php $__env->startPush('categoris'); ?>
<ul class="footer-links">
    <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="<?php echo e(route('artikel.kategori',$item->slug)); ?>"><?php echo e($item->nama_kategori); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>