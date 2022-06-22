@include('include.head');
<div id="main">

<div class="breadcrumb-section">
<div class="container">
<h1>About us</h1>
<div class="breadcrumb">
<a href="index.html">Home</a>
<span class="fa fa-angle-double-right"></span>
<span class="current">About us</span>
</div>
</div>
</div>


<div class="container">

<section id="primary" class="content-full-width">
<div class="column dt-sc-one-half first">
<div class="about-slider-wrapper">

<li> <img src="/aboutimage/{{$data->image}}" alt="" title=""> </li>
<!-- <li> <img src="{{asset('assets/images/activity2.jpg')}}" alt="" title=""> </li>
<li> <img src="{{asset('assets/images/activity3.jpg')}}" alt="" title=""> </li> -->

</div>
</div>

<div class="column dt-sc-one-half">
<h2>About us</h2>
<p>{{$data->short_description}}.</p>
<!-- <a href="#" class="dt-sc-button small read-more"> Read More <span class="fa fa-chevron-circle-right"> </span></a> -->
</div>

<div class="dt-sc-hr"></div>

<div class="dt-sc-one-half column first">
<h2>Our Principle's Message</h2>
<div class="author-details">
<div class="author-thumb">
 <!-- <img class="item-mask" src="/aboutimage/{{$data->image}}" alt="" title=""> -->
<img src="{{asset('assets/images/founder.jpg')}}" alt="" title=""> 
</div>
<div class="author-description">
<h5><a href="">{{$data->foundername}}</a></h5>
<span class="author-role">{{$data->founderdesignation}}</span>


<p>{{$data->message}} </p>
</div>
</div>
</div>


<div class="dt-sc-one-half column">
<h2>Some Words from Parents</h2>
<div class="dt-sc-testimonial-carousel-wrapper">
<ul class='dt-sc-testimonial-carousel'>
@foreach($data7 as $data7)

<li>
<div class='dt-sc-testimonial'>
<blockquote><q>{{$data7->message}} .</q></blockquote>
<!-- <div class='author'>
 <img src="{{asset('assets/images/parent.jpg')}}" alt="" title="">
</div> -->
<div class="author-meta">
<p> {{$data7->name}}  </p>
<span>{{$data7->designation}} </span>
<span class="author-rating rating-4"></span>
</div>
</div>
</li>




@endforeach
</ul>
<div class="carousel-arrows">
<a href="#" class="testimonial-prev"><span class="fa fa-angle-left"></span></a>
<a href="#" class="testimonial-next"><span class="fa fa-angle-right"></span></a>
</div>
</div>
</div>

<div class="dt-sc-hr"></div>
<h2 class="dt-sc-hr-green-title">Our Teachers</h2>

@foreach($data8 as $data8)
<div class="column dt-sc-one-fourth first">
<div class="dt-sc-team">
<div class="image">
<img class="item-mask" src="/teacherimage/{{$data8->image}}" alt="" title="">
<img src="/teacherimage/{{$data8->image}}" alt="" title="">
<div class="dt-sc-image-overlay">
<a href="#" class="link"><span class="fa fa-facebook"></span></a>
<a href="#" class="zoom"><span class="fa fa-twitter"></span></a>
</div>
</div>
<div class="team-details">
 <h4> {{$data8->name}}</h4>
<h6> {{$data8->designation}} </h6>

</div>
</div>
</div>


@endforeach




<div class="dt-sc-hr"></div>


</section>

</div>

</div>

@include('include.footer');