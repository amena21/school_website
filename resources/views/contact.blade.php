@include('include.head');

<div id="main">

<div class="breadcrumb-section">
<div class="container">
<h1>Contact</h1>
<div class="breadcrumb">
<a href="index">Home</a>
<span class="fa fa-angle-double-right"></span>
<span class="current">Contact</span>
</div>
</div>
</div>


<div class="container">

<section id="primary" class="content-full-width">
<!-- <div id="map"> 
<img src="{{asset('assets/images/mega_menu_blog_img1.jpg')}}" alt="" title=""> 
</div> -->
<div class="dt-sc-hr"> </div>

<div class="column dt-sc-three-fourth first contact_form_outer">
<form name="frcontact" class="contact-form" method="post" action="">
<h2>We'd Like to Hear From You!</h2>
<p class="column dt-sc-one-third first">
<input id="name" name="txtname" type="text" placeholder="Name" required="">
</p>
<p class="column dt-sc-one-third">
<input id="email" name="txtemail" type="email" placeholder="Email ID" required="">
</p>
<p class="column dt-sc-one-third">
<input id="subject" name="txtsubject" type="text" placeholder="Subject" required="">
</p>
<p>
<textarea id="comment" name="txtmessage" placeholder="Message"></textarea>
</p>
<div id="ajax_contact_msg"> </div>
<p>
<input name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Send Email">
</p>
</form>
</div>


<div class="column dt-sc-one-fourth class_hours">
<h2>Class Hours</h2>
<ul class="class_hours">

@foreach($data9 as $data9)
<li>{{$data9->day}} <span>{{$data9->open_time}} am - {{$data9->close_time}} pm</span></li>
@endforeach
</ul>
<div class="dt-sc-hr-small"></div>
<p><strong><span class="highlighter">We care</span> about your dearest</strong></p>

</div>

</section>

</div>

</div>
@include('include.footer');