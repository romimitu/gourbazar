<?php $__env->startSection('title'); ?>
GOUR BAZAR | BUY MANGO ONLINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">
        <div class="page-head" style="background-image: url('/frontend/images/shop_banner.jpg');">
            <div class="page-header-container hover-target">
                <div class="page-header-content underline-animation">
                    <h2>All Collections</h2>        
                </div>
            </div>
        </div>
        <div class="main-content-area">    
            <div class="container">    
                <div class="col-sm-3">
                    <h5>Collections</h5>
                    <ul class="collection-nav">
                        <li class="collection-nav--active"><a href="#">All Collections</a></li>
                        <li><a href="#">Artwork</a></li>
                        <li><a href="#">Fabric by the Yard</a></li>
                        <li><a href="#">Featured</a></li>
                    </ul>
                    <h5>Tags</h5>
                    <ul class="collection-nav">
                        <li class="collection-nav--active"><a href="#">All Tags</a></li>
                        <li><a title="Tangerine" href="#">Blush - Tangerine</a></li>
                        <li><a title="fabric by the yard" href="#">fabric by the yard</a></li>
                    </ul>
                </div>   
                <div class="col-sm-9">    
                    <div class="grid-uniform collection-products">
                        <div class="product-grid-item col-sm-4">
                            <a class="product-image-tile" href="#">
                                <div class="reveal">
                                    <img class="img-responsive" src="/frontend/images/pillow-front-small.jpg" alt="Pillow in Multi" />      
                                    <div class="hidden">
                                        <img class="img-responsive" src="/frontend/images/pillow-back-small.jpg" alt="Pillow in Multi" />
                                    </div>      
                                </div>
                            </a>
                            <div class="figcaption hover">
                                <a href="#">
                                    <p class="collection-product-title">Pillow in Multi</p>
                                    <p class="price_wrapper"><span class="price"><span class="money">$239.00</span></span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>