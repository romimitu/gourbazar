<?php $__env->startSection('title'); ?>
GOUR BAZAR | BUY MANGO ONLINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">    
        <div class="product-page">
            <div class="breadcrumbs_area">
                <div class="container">
                    <nav class="breadcrumbs">
                        <a href="/shop" title="Back to the frontpage">প্রথম পাতা</a>
                        <span aria-hidden="true">&rsaquo;</span>
                        <span><?php echo e($product->name); ?></span>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="product-single">
                    <div class="col-sm-7 text-center">       
                        <div class="main-product-image">
                            <img src="/<?php echo e($product->image); ?>" alt='' title="Hills Embroidered"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <h2 class="product_name"><?php echo e($product->name); ?></h2>
                            <h5 class="product_price">প্রতি কেজি ৳<?php echo e($product->price); ?></h5>
                            <div class="product-description">
                                <?php echo $product->description; ?>

                                <strong><?php echo $product->promo_details; ?></strong>
                            </div>          
                        </div>
                        <div class="buy-product">
                            <form action=" " method="post" >         
                                <div class="form-group text-center">
                                    <label for="Quantity" class="">Quantity</label>
                                    <input type="number" value="20" min="20" max="200" step="10" class="form-control text-center">
                                </div>            
                                <div class="add-to-cart">
                                    <button type="submit" name="add" class="btn btn-lg btn-success uppercase">
                                        <span id="AddToCartText">Add to Bag </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="share text-center">            
                            <ul class="footer-social inline-list">
                                <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h3>পণ্য পর্যালোচনা</h3>
                <div class="col-sm-8">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">মতামত 4.56(120 comments)</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">আপনার মতামত দিন</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h4>Section 1</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec urna aliquam, ornare eros vel</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <form id="ratingsForm">
                                    <label for="name" class="col-sm-4">Full name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label for="email" class="col-sm-4">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control">
                                    </div>
                                    <label for="ratings" class="col-sm-4">Ratings</label>
                                    <div class="col-sm-8">
                                    <div class="stars">
                                        <input type="radio" name="star" class="star-1" id="star-1"/>
                                        <label class="star-1" for="star-1">1</label>
                                        <input type="radio" name="star" class="star-2" id="star-2"/>
                                        <label class="star-2" for="star-2">2</label>
                                        <input type="radio" name="star" class="star-3" id="star-3"/>
                                        <label class="star-3" for="star-3">3</label>
                                        <input type="radio" name="star" class="star-4" id="star-4"/>
                                        <label class="star-4" for="star-4">4</label>
                                        <input type="radio" name="star" class="star-5" id="star-5"/>
                                        <label class="star-5" for="star-5">5</label>
                                        <span></span>
                                    </div>                                        
                                    </div>
                                    <label for="message" class="col-sm-4">Comments</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                <div class="text-right">
                                    <input type="submit" class="btn btn-success" value="SUBMIT">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>