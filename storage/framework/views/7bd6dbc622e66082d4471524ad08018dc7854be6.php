<?php /* C:\xampp\htdocs\laravel_blog\resources\views/front/about.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startPush('nav'); ?>
<ul class="nav-menu nav navbar-nav">
    <?php $__currentLoopData = $categori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="cat-4"><a href="<?php echo e(route('artikel.kategori',$item->slug)); ?>"><?php echo e($item->nama_kategori); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopPush(); ?>
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <ul class="page-header-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </ul>
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="section-row">
                    <p>Lorem ipsum dolor sit amet, ea eos tibique expetendis, tollit viderer ne nam. No ponderum
                        accommodare
                        eam, purto nominavi cum ea, sit no dolores tractatos. Scripta principes quaerendum ex has, ea
                        mei omnes
                        eruditi. Nec ex nulla mandamus, quot omnesque mel et. Amet habemus ancillae id eum, justo
                        dignissim mei
                        ea, vix ei tantas aliquid. Cu laudem impetus conclusionemque nec, velit erant persius te mel. Ut
                        eum
                        verterem perpetua scribentur.</p>
                    <figure class="figure-img">
                        <img class="img-responsive" src="./img/about-1.jpg" alt="">
                    </figure>
                    <p>Vix mollis admodum ei, vis legimus voluptatum ut, vis reprimique efficiendi sadipscing ut. Eam ex
                        animal
                        assueverit consectetuer, et nominati maluisset repudiare nec. Rebum aperiam vis ne, ex summo
                        aliquando
                        dissentiunt vim. Quo ut cibo docendi. Suscipit indoctum ne quo, ne solet offendit hendrerit nec.
                        Case
                        malorum evertitur ei vel.</p>
                </div>
                <div class="row section-row">
                    <div class="col-md-6">
                        <figure class="figure-img">
                            <img class="img-responsive" src="./img/about-2.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h3>Our Mission</h3>
                        <p>Id usu mutat debet tempor, fugit omnesque posidonium nec ei. An assum labitur ocurreret qui,
                            eam
                            aliquid ornatus tibique ut.</p>
                        <ul class="list-style">
                            <li>
                                <p>Vix mollis admodum ei, vis legimus voluptatum ut.</p>
                            </li>
                            <li>
                                <p>Cu cum alia vide malis. Vel aliquid facilis adolescens.</p>
                            </li>
                            <li>
                                <p>Laudem rationibus vim id. Te per illum ornatus.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <!-- /row -->
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