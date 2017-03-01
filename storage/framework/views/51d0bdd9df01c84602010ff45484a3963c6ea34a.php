<?php $__env->startSection('title'); ?>
GOUR BAZAR | BUY MANGO ONLINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="main-content">
    <div class="page-header" style="background-image: url(/frontend/images/generic_header_image2966.jpg)">
        <div class="page-header-container hover-target">
            <div class="page-header-content underline-animation">
                <p>Get in Touch</p>
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="centered-section-title page-section page-section-first hover-target">
            <h2 class="underline-animation">Questions? Concerns? Pattern Mixing Tips? Whatever you’ve got, we’re all ears.</h2>
        </div>
        <div class="half-section contact-us">
            <div class="col-sm-5">
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">Hours of Operation</h3>
                    <p>We’re in the studio brainstorming, designing, and working away to create the best product we can from 9-5pm EST.</p>
                </div>
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">General Inquiries</h3>
                    <p>Phone 718 369 0016 <br><a href="mailto:hello@rebeccaatwood.com">hello@rebeccaatwood.com</a></p>
                </div>
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">Address</h3>
                    <p>67 35th St. <br>
                      Unit 22 / Suite B528 <br>
                      Brooklyn, NY <br>
                      11232</p>
                </div>
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">Press & Media</h3>
                    <p>For press and media inquiries, contact us at
                    <a href="mailto:hello@rebeccaatwood.com">hello@rebeccaatwood.com</a></p>
                </div>
            </div>
            <div class="col-sm-2 half-divider"></div>
            <div class="col-sm-5">
                <form method="post" action="/" class="contact-form" >
                    <label for="ContactFormName" class="">Name</label>
                    <input type="text" class="form-control" autocapitalize="words" value="">
                    <label for="ContactFormEmail" class="">Email</label>
                    <input type="email" class="form-control" autocorrect="off" autocapitalize="off" value="">
                    <label for="ContactFormPhone" class="">Phone Number</label>
                    <input type="tel" class="form-control" pattern="[0-9\-]*" value="">
                    <label for="ContactFormMessage" class="">Message</label>
                    <textarea rows="10" class="form-control" ></textarea>
                    <div class="u-centered">
                        <input type="submit" class="btn btn-default uppercase" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>