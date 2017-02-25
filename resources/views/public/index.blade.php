@extends('public.layouts.master')
@section('title')
GOUR BAZAR | BUY MANGO ONLINE
@endsection
@section('content')
 	<div class="interactive-picture homepage-hero-image" style="background-image: url('/frontend/images/slider2.jpg');">
		<!-- <div class="interactive-pin" id="ip1"><a href="#" class="picture-target" target="_self">1</a></div>  -->
		<div class="interactive-pin" id="ip2"><a href="#" class="picture-target" target="_self">1</a></div>
		<div class="interactive-pin" id="ip3"><a href="#" class="picture-target" target="_self">2</a></div>
		<div class="interactive-pin" id="ip4"><a href="#" class="picture-target" target="_self">3</a></div>
		<!-- <div class="interactive-pin" id="ip5"><a href="#" class="picture-target" target="_self">5</a></div>   -->
    </div>
    <div class="picture-cta-container">
      	<!-- <div class="picture-cta ip1 pin-left">
	        <div class="cta-frame">
				<img src="/frontend/images/ip_1_image.jpg" alt="" />
				<p>Hills Emroidered Pillow</p>
				<span>This pillow features our Hills fabric in Tangerine with detailed embroidery by Sarah Laskow and a striped reverse.</span>
				<a href="#">Shop Now</a>
	        </div>
      	</div> -->
      	<div class="picture-cta ip2 pin-right">
	        <div class="cta-frame">
				<img src="/frontend/images/ip_2_image.jpg" alt="" />
				<p>Stripe Sashiko Stitch Pillow</p>
				<span>Our one of a kind, hand-embroidered pillows are a collaboration with embellishment designer Sarah Laskow.</span>
				<a href="#">Shop Now</a>
	        </div>
      	</div>
		<div class="picture-cta ip3 pin-left">
			<div class="cta-frame">
				<img src="/frontend/images/ip_3_image.jpg" alt="" />
				<p>Waves Embroidered Pillow II</p>
				<span>This pillow is truly one of a kind and a special item for your home or as a gift! Learn more about this collaboration here.</span>
				<a href="#">Shop Now</a>
			</div>
		</div>
		<div class="picture-cta ip4 pin-right">
			<div class="cta-frame">
				<img src="/frontend/images/ip_4_image.jpg" alt="" />
				<p>Stripe Sashiko Stitch Pillow II</p>
				<span>Our one of a kind, hand-embroidered pillows are a collaboration with embellishment designer Sarah Laskow.</span>
				<a href="#">Shop Now</a>
			</div>
		</div>
		<!-- <div class="picture-cta ip5 pin-left">
			<div class="cta-frame">
				<img src="/frontend/images/ip_5_image.jpg" alt="" />
				<p>Spots Embroidered Pillow</p>
				<span>This pillow features detailed embroidery by Sarah Laskow on our Spots fabric in Stone Gray and a silver linen reverse.</span>
				<a href="#">Shop Now</a>
			</div>
		</div> -->
    </div>
    <div class="half-half-block">
        <div class="container">
	        <div class="flex-center border-bottom half-container">
	            <div class="col-sm-6 half-block border-right">
	                <h3>We believe in the art of making.</h3>
	                <p>Which, simply put, means our process is just as important as our product.</p>
	            </div>
	            <div class="col-sm-4 col-sm-offset-1 img-center">
	                <img class="img-responsive" src="/frontend/images/mango.jpg" alt="" />
	            </div>
	        </div>
        </div>
    </div>

	<div class="one-thirds-block">
        <div class="container ">
		@foreach($services as $service)
          	<div class="grid_item col-sm-4">
	            <div class="third-item" style="background-image:url(/{{$service->image}})">
	             	<div class="one-third-cta">
		                <div class="one-third-cta-container">
		                  	<a href="#">
			                    <h3>{{$service->title}}</h3>                    
			                    <ul>
			                      <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
			                      <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
			                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			                    </ul>
		                  	</a>
		                </div>
	              	</div>
	            </div>
	            <p class="one-third-header">{{$service->title}}</p>
          	</div>
        @endforeach
        </div>
    </div>
    <div class="homepage-custom">
      	<div class="homepage-custom__parallax">
	        <div class="text-center">
	          	<a href="/shop">
		            <div class="mega-button">
		              	<div class="mega-button-content underline-animation hover-target">
			                <span>আম ক্রয় করুন</span>
			                <h1>সুস্বাদু ও ফর্মালিন মুক্ত বিশুদ্ধ আম</h1>
		              	</div>
		            </div>
	          	</a>
	        </div>
      	</div>
    </div>
	
	<div class="homepage-collection">
      	<div class="container">      
	        <div class="custom-section-header">
		      	<h1 class="section-title">আপনার পছন্দের আম</h1>
		      	<h4 class="section-subtitle">এই মুহূর্তে সব থেকে বেশি বিক্রিত</h4>
	        </div>      
	        <div class="grid-uniform">
	          	<div class="grid_item col-sm-4 product-grid-item">
		            <a class="product-image-tile" href="#">
		              	<div class="reveal">
			                <img class="img-responsive" src="/frontend/images/pillow-front-small.jpg" alt="Ripple Fabric in Blush" />
			                <div class="hidden">
			                  	<img class="img-responsive" src="/frontend/images/pillow-back-small.jpg" alt="Ripple Fabric in Blush" />
			                </div>      
		              	</div>
		            </a>
		            <div class="figcaption hover">
		              	<a href="#">
			                <p class="collection-product-title">Ripple Fabric in Blush</p>
			                <p class="price_wrapper">
			                  	<span class="price">From<span class="money">$3.00</span></span>        
			                </p>
		              	</a>
		            </div>
	          	</div>
	          	<div class="grid_item col-sm-4 product-grid-item">
		            <a class="product-image-tile" href="#">
		              	<div class="reveal">
			                <img class="img-responsive" src="/frontend/images/pillow-front-small.jpg" alt="Shibori Napkins in Gray-Lilac" />     
			                <div class="hidden">
			                  	<img class="img-responsive" src="/frontend/images/pillow-back-small.jpg" alt="Shibori Napkins in Gray-Lilac" />
			                </div>      
		             	</div>
		            </a>
		            <div class="figcaption hover">
		              	<a href="#">
			                <p class="collection-product-title">Shibori Napkins in Gray-Lilac</p>
			                <p class="price_wrapper">
			                  	<span class="price">From<span class="money">$90.00</span></span>     
			                </p>
		              	</a>
		            </div>
	          	</div>
	          	<div class="grid_item col-sm-4 product-grid-item" >
		            <a class="product-image-tile" href="#">
		              	<div class="reveal">
		                	<img class="img-responsive" src="/frontend/images/pillow-front-small.jpg" alt="Water Pillow" />
			                <div class="hidden">
			                  	<img class="img-responsive" src="/frontend/images/pillow-back-small.jpg" alt="Water Pillow" />
			                </div>
		              	</div>
		            </a>
		            <div class="figcaption hover">
		              	<a href="#">
			                <p class="collection-product-title">Water Pillow</p>
			                <p class="price_wrapper">
			                  	<span class="price"><span class="money">$314.00</span></span>
			                </p>
		              	</a>
		            </div>
	          	</div>
        	</div>
      	</div>
    </div>

    <div class="custom-section">
      	<div class="container">
	        <div class="custom-section-header">
	          	<h1 class="section-title">আমাদের ব্লগ</h1>
	          	<h4 class="section-subtitle">আম ও আমাদের সর্বশেষ অবস্থা জানতে সর্বদা চোখ রাখুন</h4>
	        </div>
	        <div class="simple-carousel">
			@foreach($blogs as $blog)
	          	<div class="tile-image hover-target" style="background-image: url(/{{$blog->image}})">
	             	<a target="_blank" href="#"> 
	            		<div class="tile-cta">
	              			<div class="border-tile underline-animation">
				                <p>বিস্তারিত পড়ুন</p>
				                <h3>{{$blog->title}}</h3>
	              			</div>
	            		</div>
	             	</a> 
	          	</div>
			@endforeach
	        </div>
      	</div>
    </div>

    <div class="u-solid">
      	<div class="container">
	        <div class="back-2-back-section">  
	          	<div class="custom-section-header">
		            <h1 class="section-title">আমাদের কার্যধারা </h1>
		            <h4 class="section-subtitle">সরাসরি আমের রাজধানী থেকে আপনার বাড়ি</h4>
	          	</div>  
	          	<div class="process-carousel story-carousel">
		            <div class="tile-image " style="background-image: url(/frontend/images/home_process_1_image2966.jpg)">
		              	<div class="overlay-light"></div>
		              	<div class="tile-cta">
			                <div class="border-tile">
			                  	<p class="tile-title">EXPERIMENTING</p>
			                  	<p class="tile-body">The first stages of making - gathering inspiration, sketching, painting - are often lost in the development of today’s commercial products. Our process always starts here.</p>
			                </div>
		              	</div>
		            </div>
		            <div class="tile-image " style="background-image: url(/frontend/images/home_process_2_image2966.jpg)">
		              	<div class="overlay-light"></div>
		              	<div class="tile-cta">
			                <div class="border-tile">
			                  	<p class="tile-title">CREATING THE ARTWORK</p>
			                  	<p class="tile-body">Once we’ve had the chance to play with our ideas, it’s time to bring them to life by defining motifs we’ve developed, scaling them and sending them off.</p>
			                </div>
		              	</div>
		            </div>
		            <div class="tile-image " style="background-image: url(/frontend/images/home_process_3_image2966.jpg)">
		              	<div class="overlay-light"></div>
			            <div class="tile-cta">
			                <div class="border-tile">
			                  	<p class="tile-title">SAMPLING</p>
			                  	<p class="tile-body">It takes a bit of trial and error to get things - color, technique, quality - right. This step allows us to assess each product in a more finalized form.</p>
			                </div>
		              	</div>
		            </div>
	          	</div>
	        </div>
      	</div>
    </div>
@endsection