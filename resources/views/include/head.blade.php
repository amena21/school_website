<!DOCTYPE HTML>

<html lang="en-gb" class="no-js"> 


<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>School Website</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon" />
<link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/shortcodes.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel='stylesheet' id='layerslider-css' href="{{asset('assets/css/layerslider.css')}}" type='text/css' media='all' />

<link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" media="all" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<link href="../../../fonts.googleapis.com/cssea9f.css?family=Lato:300,400,700,300italic,400italic,700italic" rel='stylesheet' type='text/css'>
<link href="../../../fonts.googleapis.com/css5c84.css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel='stylesheet' type='text/css'>
<link href="../../../fonts.googleapis.com/css76b9.css?family=Bubblegum+Sans" rel='stylesheet' type='text/css'>

<script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
</head>
<body class="main">

<div class="wrapper">

<header>
<div class="container">
<div class="logo">
<a href="index.html" title="Kids Life"><img src="{{asset('assets/images/logo.png')}}" alt="Kids Life" title="Kids Life"></a>
</div>
<div class="contact-details">
<p class="">{{$data1->email}}
<span class="fa fa-envelope"></span>
</p>
<p class="phone-no">
<i>{{$data1->phone}}</i>
<span class="fa fa-phone"></span>
</p>

</div>
</div>

<div id="menu-container">
<div class="container">

<nav id="main-menu">
<div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
<ul id="menu-main-menu" class="menu">
<li class=""> <a href="index"> Home </a>

<a class="dt-menu-expand">+</a>
</li>
<li class="yellow"> <a href="about"> About us </a> </li>
<li class="green"> <a href="gallery"> Gallery </a> </li>


<a class="dt-menu-expand">+</a>
</li>

<li class="menu-item-simple-parent menu-item-depth-0 lavender"><a href="blog" title="">Blog</a>

<a class="dt-menu-expand">+</a>
</li>

<li class="pink"><a href="contact" title="">Contact us</a></li>
</ul>
</nav>

<ul class="dt-sc-social-icons">
<li><a href="{{$data1->fblink}}" title="Facebook" class="dt-sc-tooltip-top facebook"><span class=" fa fa-facebook "></span></a></li>
<li><a href="{{$data1->youtubelink}}" title="Youtube" class="dt-sc-tooltip-top youtube"><span class=" fa fa-youtube "></span></a></li>
<li><a href="{{$data1->twitter}}" title="twitter" class="dt-sc-tooltip-top twitter"><span class=" fa fa-twitter "></span></a></li>
<!-- <li><a href="{{'login'}}" title="Login">Login</a></li>    -->
</ul>

</div>
</div>

</header>