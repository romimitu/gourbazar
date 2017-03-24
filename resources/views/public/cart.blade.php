@extends('public.layouts.master')
@section('title')
GOUR BAZAR | BUY MANGO ONLINE
@endsection
@section('content')
<main class="main-content">
    <div class="page-header" style="background-image: url(/frontend/images/cart-banner.jpg)">
        <div class="page-header-container hover-target">
            <div class="page-header-content underline-animation">
                <p>গৌড়বাজার থেকে পণ্য ক্রয়ের জন্য আপনাকে ধন্যবাদ</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="centered-section-title page-section page-section-first hover-target">
            <h2 class="underline-animation">এই পণ্যটি নিশ্চিত করতে নিচের ফরমটি পূরণ করুন এবং সাবমিট করুন ।</h2>
        </div>
        <div class="half-section contact-us">
            <div class="col-sm-5">
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">পণ্যের বিবরণ</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>পণ্যের নাম</td>
                                <td>পণ্যের পরিমান</td>
                                <td>প্রতি কেজি মূল্য</td>
                                <td>সর্বমোট মুল্য</td>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>হিমসাগর আম</td>
                                <td>৪০ কেজি</td>
                                <td>৮০</td>
                                <td>৩২০০ টাকা</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="centered-contact-content">
                    <h3 class="underline-animation hover-target">যে কোন প্রয়োজনে</h3>
                    <p>মোবাইল ০১৭৬২৮৬২৮১৫<br><a href="mailto:info@gourbazar.com">info@gourbazar.com</a></p>
                </div>
            </div>
            <div class="col-sm-2 half-divider"></div>
            <div class="col-sm-5">
                <form method="post" action="/" class="contact-form" >
                    <label class="">Full Name</label>
                    <input type="text" class="form-control" value="">
                    <label class="">Email</label>
                    <input type="email" class="form-control" value="">
                    <label class="">Phone Number</label>
                    <input type="tel" class="form-control" pattern="[0-9\-]*" value="">
                    <label class="">Address Line 1</label>
                    <textarea rows="2" class="form-control" placeholder="House no, Road no, Area"></textarea>
                    <label class="">Address Line 2</label>
                    <textarea rows="2" class="form-control" placeholder="Thana, City or District, Post Code"></textarea>
                    <div class="u-centered">
                        <input type="submit" class="btn btn-success" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection