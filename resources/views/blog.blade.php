@include('include.head');
<div id="main">

<div class="breadcrumb-section">
<div class="container">
<h1>Blog</h1>
<div class="breadcrumb">
<a href="index.html">Home</a>
<span class="fa fa-angle-double-right"></span>
<span class="current">Blog</span>
</div>
</div>
</div>


<div class="container">

<section id="primary" class="content-full-width">

@foreach($data10 as $data10)

<div class="dt-sc-one-column">
<article class="blog-entry">
<div class="blog-entry-inner">
<div class="entry-meta">
<a href="blog_details" class="blog-author"><img src="{{asset('assets/images/rounded-bg-img.jpg')}}" alt="" title=""></a>
<div class="date">

<p> {{$data10->date}}</p>
</div>

</div>
<div class="entry-thumb">
<a href="blog_details"><img src="/blogimage/{{$data10->image}}" alt="" title=""></a>
</div>
<div class="entry-details">
<div class="entry-title">
<h3><a href="blog_details"> {{$data10->title}} </a></h3>
</div>

<div class="entry-body">
<p>{{$data10->description1}}.</p>
</div>
<a href="blog_details" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>
</div>
</div>
</article>
</div>


@endforeach



</section>

</div>

</div>

@include('include.footer');