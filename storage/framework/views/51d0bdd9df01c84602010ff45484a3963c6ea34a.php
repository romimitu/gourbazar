<?php $__env->startSection('title'); ?>
GOUR BAZAR | BUY MANGO ONLINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="main-content">
    <div class="page-header" style="background-image: url(/frontend/images/contact-banner.jpg)">
        <div class="page-header-container hover-target">
            <div class="page-header-content underline-animation">
                <p>আমাদের সাথেই থাকুন</p>
                <h2>যোগাযোগ</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="centered-section-title page-section page-section-first hover-target">
            <h2 class="underline-animation">প্রশ্ন? অভিযোগ? পরমর্শ? যাই হোক না কেন, আমরা সবসময় আপনার সাথেই আছি!!</h2>
        </div>
        <div class="half-section contact-us">
            <div class="col-sm-5">
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">যে কোন প্রয়োজনে</h3>
                    <p>মোবাইল ০১৭৬২৮৬২৮১৫<br><a href="mailto:info@gourbazar.com">info@gourbazar.com</a></p>
                </div>
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">ঠিকানা</h3>
                    <p>খাসেরহাট বাজার, বিনোদপুর<br>
                      শিবগঞ্জ, চাঁপাইনবাবগঞ্জ<br>
                      ৬৩৪২</p>
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