<?php $__env->startSection('title'); ?>
GOUR BAZAR | BUY MANGO ONLINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content">    
        <div class="product-page">
            <div class="container">
                <nav class="breadcrumbs">
                    <a href="#" title="Back to the frontpage">Home</a>
                    <span aria-hidden="true">&rsaquo;</span>
                    <span>Hills Embroidered Pillow II</span>
                </nav>
                <div class="product-single">
                    <div class="col-sm-7 text-center">       
                        <div class="main-product-image">
                            <img src="/frontend/images/pillow-back-small.jpg" alt='' title="Hills Embroidered"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <h2 class="product_name">Hills Embroidered Pillow II</h2>
                            <h5 class="product_price uppercase h5">
                                <span class="money"><span id="ProductPrice">$329.00</span></span>            
                            </h5>
                            <div class="product-description">
                                <p>Our one of a kind, hand-embroidered pillows are a collaboration with embellishment designer <span style="text-decoration: underline;"><a href="#" target="_blank">Sarah Laskow</a></span>. This pillow features detailed embroidery by Sarah Laskow on our <a href="#" target="_blank"><span style="text-decoration: underline;">Hills fabric</span></a> in Gray-wood with a silver linen reverse. This pillow is truly one of a kind and a special item for your home or as a gift! <span>Learn more about this collaboration </span><span style="text-decoration: underline;"><a href="#" target="_blank">here</a></span><span>.</span></p>
                                <p><em>16"x20"</em></p>
                                <p><em>Gray-wood, Silver</em></p>
                                <p><em>100% linen</em></p>
                                <p><em>Signature exposed brass zipper</em></p>
                                <p><em>25/75 down feather insert included</em></p>
                                <p><em>Made in Rhode Island and New York</em></p>
                                <p><em><strong><em>Please note no discounts can be applied to this item.</em></strong></em></p>
                                <p><strong>Please enjoy free shipping nationwide!</strong></p>
                            </div>          
                        </div>
                        <div class="buy-product">
                            <form action=" " method="post" >         
                                <div class="form-group text-center">
                                    <label for="Quantity" class="">Quantity</label>
                                    <input type="number" value="1" min="1" class="form-control text-center">
                                </div>            
                                <div class="add-to-cart">
                                    <button type="submit" name="add" class="btn btn-warning uppercase">
                                        <span id="AddToCartText">Add to Bag </span>
                                        <span class="unicode">&#x2022</span>
                                        <span class="money"><span id="ButtonPrice">$329.00</span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="share text-center">            
                            <ul class="footer-social inline-list">
                                <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <aside class="grid page-margin">
                <div class="grid__item">
                    <h3 class="section-title underline-animation hover-target">Related</h3>
                    <div class="grid-uniform">
                        <div class="grid__item col-sm-3 product-grid-item">
                            <a class="product-image-tile" href="#">
                                <div class="reveal">
                                    <img class="img-responsive" src="/frontend/images/pillow-back-small.jpg" alt="Hills Emroidered Pillow" />     
                                </div>
                            </a>
                            <div class="figcaption hover">
                                <a href="#"><p class="collection-product-title">Hills Emroidered Pillow</p>
                                    <p class="price_wrapper"><span class="price"><span class="money">$359.00</span></span></p>
                                </a>
                            </div>
                        </div>  
                    </div>
                </div>
            </aside>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>