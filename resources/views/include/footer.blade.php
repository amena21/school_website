<footer>

<div class="footer-widgets-wrapper">

<div class="container">
<div class="column dt-sc-one-fourth first">
<aside class="widget widget_text">
<h3 class="widgettitle red_sketch"> About {{$data->title}}</h3>
<p> {{$data->short_description}}</p>
<ul>
<li> <a href="#"> English Grammar Class </a> </li>
<li> <a href="#"> Music class </a> </li>
<li> <a href="{{url('/login')}}"> admin access </a> </li>

</ul>
</aside>
</div>
<div class="column dt-sc-one-fourth">
<aside class="widget widget_recent_entries">
<h3 class="widgettitle green_sketch"> Latest Post </h3>
<ul>

@foreach($data3 as $data3)
<li>
<a href="#">
<img src="/blogimage/{{$data3->image}}" alt="" title="">
</a>
<h6><a href="#"> {{$data3->title}} </a></h6>
<span> {{$data3->date}} </span>
</li>
@endforeach



<!-- <li>
<a href="#">
<img src="{{asset('assets/images/blog_list2.jpg')}}" alt="" title="">
</a>
<h6><a href="#"> Amazing post with all goodies </a></h6>
<span> March 23, 2014 </span>
</li>
<li>
<a href="#">
<img src="{{asset('assets/images/blog_list3.jpg')}}" alt="" title="">
</a>
<h6><a href="#"> Amazing post with all goodies </a></h6>
<span> March 23, 2014 </span>
</li> -->
</ul>
</aside>
</div>
<div class="column dt-sc-one-fourth">
<aside class="widget tweetbox">
<h3 class="widgettitle yellow_sketch"><a href="#"> Twitter Feeds </a></h3>
<div id="tweets_container"></div>
</aside>
</div>
<div class="column dt-sc-one-fourth">
<aside class="widget widget_text">
<h3 class="widgettitle steelblue_sketch">Contact</h3>
<div class="textwidget">


<p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span> {{$data1->address}}</p>
<p class="dt-sc-contact-info"><span class="fa fa-phone"></span> {{$data1->phone}} </p>
<p class="dt-sc-contact-info"><span class="fa fa-envelope"></span><a href=""> <span class="__cf_email__" data-cfemail="">{{$data1->email}}</span> </a></p>
</div>
</aside>

</div>
</div>

</div>

<div class="copyright">
<div class="container">
<p class="copyright-info">© 2022 . All rights reserved. Design by <a href="" target="_blank" title=""> i2D Communications Limited </a></p>
<div class="footer-links">
<p>Follow us</p>
<ul class="dt-sc-social-icons">
<li class="facebook"><a href="{{$data1->fblink}}"><img src="{{asset('assets/images/facebook.png')}}" alt="" title=""></a></li>
<!-- <li class="twitter"><a href="{{$data1->address}}"><img src="{{asset('assets/images/twitter.png')}}" alt="" title=""></a></li> -->

</ul>
</div>
</div>
</div>
</footer>

</div>

<a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-easing-1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.inview.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/validation.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.tipTip.minified.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/twitter/jquery.tweet.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/shortcodes.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/jquery-transit-modified.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/js/greensock.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/js/layerslider.transitions.js')}}"></script>

<script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: 'js/layerslider/skins/'}) } }); </script>
</body>


</html>