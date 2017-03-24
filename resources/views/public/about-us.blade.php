@extends('public.layouts.master')
@section('title')
GOUR BAZAR | BUY MANGO ONLINE
@endsection
@section('content')
<main class="main-content">
	<div class="page-header" style="background-image: url(/frontend/images/about-banner.jpg)">
	  	<div class="page-header-container hover-target">
		    <div class="page-header-content underline-animation">
		      	<p>গৌড়বাজার</p>
		      	<h2>আমাদের সম্পর্কে </h2>
		    </div>
	  	</div>
	</div>
	<div class="scroll-offset">
	  	<div class="container">
		    <div class="centered-section-title hover-target">
		      	<h2 class="underline-animation">আমাদের লক্ষসমূহ অনন্য, সুন্দর ও কাল্পনিক স্থান থেকে অনুপ্রাণিত !</h2>
		    </div>
		    <div class="flex-centered-parent page-section">
		      	<div class="col-sm-5">		        
		        	<img src="/frontend/images/about.jpg" class="img-responsive" alt="">
		      	</div>
		      	<div class="col-sm-7">
			        <div class="half-copy">
						<h3 class="key-line">গৌড়বাজার সম্পর্কে</h3>
						<h2>আমরা নুতুনত্ত্ব ও সৃষ্টিশীল চিন্তা ধারায় বিশ্বাসী </h2>
						<p>আমাদের এই কোম্পানিটি হচ্ছে বাংলাদেশের সর্ব পশ্চিমের জেলা চাঁপাইনবাবগঞ্জ ভিক্তিক একটি প্রারম্ভিক কোম্পানী। চাঁপাইনবাবগঞ্জ জেলা নকশী কাঁথা, রেশম, কাঁসা ও আমের জন্যে বিখ্যাত। শুধুই বিখ্যাত না এসকল ক্ষেত্রে চাঁপাইনবাবগঞ্জকে বাংলাদেশের রাজধানী বলা হয় । চাঁপাইনবাবগঞ্জ জেলা প্রাচীন নিদের্শন ও ইতিহাস-ঐতিহ্য তে ভরপুর । প্রাচীন বাংলার রাজধানী ছিল গৌড় যার অংশ হচ্ছে চাঁপাইনবাবগঞ্জ । চাঁপাইনবাবগঞ্জ এর ঐতিহ্যের কথা ভেবেই আমাদের কোম্পানিটির নাম দিয়েছি গৌড়বাজার ।  আমের রাজধানী হচ্ছে  চাঁপাইনবাবগঞ্জ, তাই আমরা এই প্রতিষ্ঠানটি প্রতিষ্ঠালগ্নে সারা বাংলাদেশে আম সরবরাহ দেয়ার লক্ষ্য নিয়ে কাজ শুরু করি ২০১৫ সালের শেষের দিকে । বর্তমানে গৌড়বাজার বাংলাদেশের বাজারে আম সরবরাহ করার পাশাপাশি বাংলাদেশের দ্বিতীয় বৃহত্তম স্থলবন্দর সোনামসজিদ বন্দর থেকে বিভিন্ন প্রকারের পাথর সরবরাহ করে থাকে । ভবিষ্যতে আমরা চাঁপাইনবাবগঞ্জ জেলার ইতিহাস-ঐতিহ্য এর অংশ নকশী কাঁথা ও রেশম কাপড় সারা দেশে সরবরাহ করব।</p>
			        </div>
		      	</div>
		    </div>
	    	<div class="about-time-line page-section">
			    <div class="centered-section-title hover-target">
			      	<h2 class="underline-animation">হামরা চাঁপাইয়ের </h2>
			    </div>
				@foreach($teams as $team)
	     		<div class="col-sm-3 time-line-event">
			        <img src="/{{$team->image}}" class="img-responsive" alt="">
			        <div class="above-line">
			          	<h3>{{$team->name}}</h3>
			          	<h4 class="location-pin icon icon-ra_location">{{$team->position}}</h4>
			          	{!!$team->description!!}
	                    <div class="member-social">            
	                        <ul>
	                            <li><a href="mailto:{{$team->email}}"><i class="fa fa-envelope"></i></a></li>
	                            <li><a target="_blank" href="http://facebook.com/{{$team->facebook}}"><i class="fa fa-facebook"></i></a></li>
	                            <li><a target="_blank" href="http://twitter.com/{{$team->twitter}}"><i class="fa fa-twitter"></i></a></li>
	                        </ul>   
	                    </div>
			        </div>
			        <div class="time-line-dots">
			          	<div class="time-line-line"></div>
			        </div>
	      		</div>
	      		@endforeach	      		
	    	</div>
	  	</div>
	</div>
	<div class="scroll-offset">
	  	<div class="container">
		    <div class="centered-section-title page-section hover-target">
		      	<h2 class="underline-animation">These are the five things that make us who we are.</h2>
		    </div>
		    <div class="half-section flex-centered-parent">
		      	<div class="col-sm-5  flex-centered-children">
			        <div class="half-copy">
			          	<h3 class="key-line">01. Inspiration</h3>
			          	<p>It’s what gets us going in the mornings and makes life interesting. Appreciate beauty: see, feel, hear and share it!</p>
			        </div>
		     	</div>
		      	<div class="col-sm-2 half-divider"></div>
		      	<div class="col-sm-5 flex-centered-children">
		      		<img src="/frontend/images/inspiration.jpg" class="img-responsive" alt="">
		      	</div>
		    </div>
		    <div class="half-section flex-centered-parent">
		      	<div class="col-sm-5  flex-centered-children">
			        <div class="half-copy">
			        	<h3 class="key-line">02. Self Care</h3>
			          	<p>The old adage rings true, “Take care of yourself before taking care of others.”  Creating a space that reflects who you are makes you feel good.</p>
			        </div>
		      	</div>
		      	<div class="col-sm-2 half-divider"></div>
		      	<div class="col-sm-5 flex-centered-children">
		      		<img src="/frontend/images/self-care.jpg" class="img-responsive" alt="">
		      	</div>
		    </div>
		    <div class="half-section flex-centered-parent">
		      	<div class="col-sm-5  flex-centered-children">
			        <div class="half-copy">
			        	<h3 class="key-line">03. Creativity</h3>
			          	<p>Work through ideas and make time to play, experiment, discover, create, and challenge yourself. Keep growing.</p>
			        </div>
		      	</div>
		      	<div class="col-sm-2 half-divider"></div>
		      	<div class="col-sm-5 flex-centered-children">
		      		<img src="/frontend/images/creativity.jpg" class="img-responsive" alt="">
		    	</div>
		    </div>
		    <div class="half-section flex-centered-parent">
		      	<div class="col-sm-5  flex-centered-children">
			        <div class="half-copy">
			          	<h3 class="key-line">04. Presence</h3>
			          	<p>Staying present and focused is a constant challenge but so important for being connected to the world. Similarly, owning items of quality that you love creates a true relationship with your space.</p>
			        </div>
		      	</div>
		      	<div class="col-sm-2 half-divider"></div>
	      		<div class="col-sm-5 flex-centered-children">
		      		<img src="/frontend/images/presence.jpg" class="img-responsive" alt="">
		      	</div>
		    </div>
		    <div class="half-section flex-centered-parent">
		      	<div class="col-sm-5  flex-centered-children">
		        	<div class="half-copy">
		          		<h3 class="key-line">05. Responsibility</h3>
		          		<p>You don’t have to compromise design, quality and value to produce products responsibly. It’s not about perfection, but striving towards better.</p>
		        	</div>
		      	</div>
		      	<div class="col-sm-2 half-divider"></div>
		      	<div class="col-sm-5 flex-centered-children">
		      		<img src="/frontend/images/responsibility.jpg" class="img-responsive" alt="">
		      	</div>
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

  </main>
@endsection