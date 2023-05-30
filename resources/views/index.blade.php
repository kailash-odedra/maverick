<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Maverick Modern Marketing Solution</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
</head>
<div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="{{asset('assets/images/gmail.png')}}" width="32" height="32">
            <p><a href="https://plus.google.com/codexworld" target="_blank">Mail Us <br>Now</a></p>
        </li>
        <li>
            <img src="{{asset('assets/images/images.jpeg')}}" width="32" height="32">
            <p><a href="https://www.pinterest.com/codexworld" target="_blank">Call Us <br>Now</a></p>
        </li>
        <li>
            <img src="{{asset('assets/images/Facebook.png')}}" width="32" height="32">
            <p><a href="https://www.facebook.com/codexworld" target="_blank">Like Us on<br>Facebook</a></p>
        </li>
        <li>
            <img src="{{asset('assets/images/twitter.png')}}" width="32" height="32">
            <p><a href="https://twitter.com/codexworldblog" target="_blank">Follow Us on<br>Twitter</a></p>
        </li>
        
        <li>
            <img src="{{asset('assets/images/linkedin.png')}}" width="32" height="32">
            <p><a href="https://www.linkedin.com/company/codexworld" target="_blank">Follow Us on<br>LinkedIn</a></p>
        </li>
        <li>
            <img src="{{asset('assets/images/youtube.jpeg')}}" width="32" height="32">
            <p><a href="http://www.youtube.com/codexworld" target="_blank">Subscribe on<br>YouYube</a></p>
        </li>
        
    </ul>
</div>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.png" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                     <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link" href="#">Our Service</a>
                        <ul>
                        @foreach($service as $services)
                            <li><a href="{{url('/service/'.$services->Slug)}}">{{$services->Title}}</a></li>
                        @endforeach

                      </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about-us')}}">About Us</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/blogs')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/team')}}">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <div class="float-top">

                            <a type="contact" href="{{url('/contact-us')}}" class="btn btn-primary rounded w-md mt-3">Contact</a>
                            <!-- <a href="#contact" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="contact"></p></a> -->
                        </div>
                    </li>
                   
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">Maverick Landing Page</h1>
            <h1 class="title">Maverick </h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">Our Service</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Voluptates architecto provident deserunt.</h6>

            <div class="row">
                <?php $i=1 ?>
                @foreach($service as $services)
                <div class="col-md-4 mt-3">
                    <div class="card mb-4 mb-md-4">

                        <div class="card-body">
                            <small class="text-primary font-weight-bold">0{{$i}}</small>
                            <a href="{{url('/service/'.$services->Slug)}}">
                                <h5 class="card-title mt-2"> {{$services->Title}} <h5>
                            </a>
                        <p class="mb-1">{{$services->Description}}</p>
                        </div>
                        
                    </div>
                </div>
                <?php $i++ ?>
               @endforeach
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <!--<section class="section" id="about">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-between">-->
    <!--            <div class="col-md-6 pr-md-5 mb-4 mb-md-0">-->
    <!--                <h6 class="section-title mb-0">About Company</h6>-->
    <!--                <h6 class="section-subtitle mb-4">Architecto provident deserunt</h6>-->
    <!--                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate molestiae temporibus et tenetur unde quasi, cum nemo quo, molestias architecto alias voluptatibus corrupti corporis earum. Necessitatibus maxime modi ipsam, quod!</p>-->
    <!--                <img src="assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">-->
    <!--            </div>-->
    <!--            <div class="col-md-6 pl-md-5">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-6">-->
    <!--                        <img src="assets/imgs/about-1.jpg" alt="" class="w-100 shadow-sm">-->
    <!--                    </div>-->
    <!--                    <div class="col-6">-->
    <!--                        <img src="assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">-->
    <!--                    </div>-->
    <!--                    <div class="col-12 mt-4">-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo iusto quidem laborum atque, sapiente ipsa excepturi fuga cum sed in assumenda eos quasi harum culpa laboriosam nulla, incidunt quae. Voluptatum.</p>-->
    <!--                        <p><b>Aliquid fuga sunt velit, temporibus molestias ab. Ipsa nesciunt totam, aliquid dignissimos.</b><br>-->
    <!--                        </p>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ut a dolorem, consectetur, eos suscipit consequatur magnam est dolore obcaecati adipisci expedita, vero, iste ducimus qui numquam animi facilis officia?</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>              -->
    <!--    </div>-->
    <!--</section>-->
    <section class="section" id="about">
        <div class="container">
            <div class="row justify-content-between">
            
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6 class="section-title mb-0">About Company</h6>
                    <h6 class="section-subtitle mb-4">{{$about[0]->title}}</h6>
                    <p>{{$about[0]->description}}</p>
                    <img src="{{asset('storage/').'/'.$about[0]->image}}" alt="" class="w-100 mt-3 shadow-sm">
                </div>

                 <div class="col-md-6 pr-md-5 mt-4 mb-md-0">
                    <img src="{{asset('storage/').'/'.$about[1]->image}}" alt="" class="w-100 mt-3 shadow-sm">
                    <h6 class="section-subtitle mt-4 mb-4">{{$about[1]->title}}</h6>
                    <p>{{$about[1]->description}}</p>
                    
                </div>
                
            </div>              
        </div>
    </section>
    <!-- End OF About Section -->
    
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Our CLients</h3>
          <p>Meet our happy clients</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460379/client-5.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="https://bootstrapmade.com/demo/themes/NewBiz/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio-section">
        <div class="container">
            <h6 class="section-title text-center">Our Portfolio</h6>
            <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>
            <div class="filters">
                <a href="#" data-filter=".new" class="active">
                    New
                </a>
                <a href="#" data-filter=".advertising">
                    Advertising
                </a>
                <a href="#" data-filter=".branding">
                    Branding
                </a>
                <a href="#" data-filter=".web">
                    Web
                </a>
            </div>
            <div class="portfolio-container"> 
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>   
                    </div>             
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div> 
                    </div>                         
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSTISING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>    
                    </div>              
                </div> 
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>

                <div class="col-md-6 col-lg-4 advertising"> 
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSITING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                       
                </div> 
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">WEB</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                       <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERSITING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                       
                </div> 
                <div class="col-md-6 col-lg-4 advertising new"> 
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">ADVERTISING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                            
                </div> 
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div> 
                    </div>
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                     
                </div> 
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                    
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                      
                </div> 
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">BRANDING</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>                                                   
                </div>
            </div>   
        </div>            
    </section>
    <!-- End of portfolio section -->

    <!-- Blog Section -->
    <!--<section class="section" id="blog">-->
    <!--    <div class="container">-->
    <!--        <h6 class="section-title mb-0 text-center">Latest Blog</h6>-->
    <!--        <h6 class="section-subtitle mb-5 text-center">Architecto provident deserunt eveniet libero</h6>-->

    <!--        <div class="row">-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="card border-0 mb-4">-->
    <!--                    <img src="assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">-->
    <!--                    <div class="card-body">                         -->
    <!--                        <h6 class="card-title">Pariatur Omnis Harum quae sint.</h6>-->
    <!--                        <p>Fuga quae ratione inventore Perferendis porro.</p>-->
    <!--                        <a href="javascript:void(0)" class="small text-muted">Go To The Blog</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="card border-0 mb-4">-->
    <!--                    <img src="assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">-->
    <!--                    <div class="card-body">                         -->
    <!--                        <h6 class="card-title"> Harum Quae Porro</h5>-->
    <!--                        <p>Fuga quae ratione inventore Perferendis porro.</p>-->
    <!--                        <a href="javascript:void(0)" class="small text-muted">Go To The Blog</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="card border-0 mb-4">-->
    <!--                    <img src="assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">-->
    <!--                    <div class="card-body">                         -->
    <!--                        <h6 class="card-title">Qui optio neque alias</h6>-->
    <!--                        <p>Fuga quae ratione inventore Perferendis porro.</p>-->
    <!--                        <a href="javascript:void(0)" class="small text-muted">Go To The Blog</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
     <section class="section" id="blog">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Latest Blog's</h6>
            <h6 class="section-subtitle mb-5 text-center">Architecto provident deserunt eveniet libero</h6>

            <div class="row">
                @foreach($blog as $blogs)
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <img src="{{ asset('assets').'/'.$blogs->Image}}" alt="" class="card-img-top w-100">
                            <div class="card-body">                         
                                <h6 class="card-title">{{$blogs->Title}}</h6>
                                <a href="{{ ('/blogs-detail/'.$blogs->Slug) }}" class="small text-muted">Go To The Blog</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Blog Section -->

    <!-- Testmonial Section -->
    <!--<section class="section" id="testmonial">-->
    <!--    <div class="container">-->
    <!--        <h6 class="section-title text-center mb-0">Testmonials</h6>-->
    <!--        <h6 class="section-subtitle mb-5 text-center">What Our Clients Says</h6>-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-4 my-3 my-md-0">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-body">-->
    <!--                        <div class="media align-items-center mb-3">-->
    <!--                            <img class="mr-3" src="assets/imgs/avatar.jpg" alt="">-->
    <!--                            <div class="media-body">-->
    <!--                                <h6 class="mt-1 mb-0">John Doe</h6>-->
    <!--                                <small class="text-muted mb-0">Business Analyst</small>     -->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4 my-3 my-md-0">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-body">-->
    <!--                        <div class="media align-items-center mb-3">-->
    <!--                            <img class="mr-3" src="assets/imgs/avatar-1.jpg" alt="">-->
    <!--                            <div class="media-body">-->
    <!--                                <h6 class="mt-1 mb-0">Maria Garcia</h6>-->
    <!--                                <small class="text-muted mb-0">Insurance Agent</small>      -->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4 my-3 my-md-0">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-body">-->
    <!--                        <div class="media align-items-center mb-3">-->
    <!--                            <img class="mr-3" src="assets/imgs/avatar-2.jpg" alt="">-->
    <!--                            <div class="media-body">-->
    <!--                                <h6 class="mt-1 mb-0">Mason Miller</h6>-->
    <!--                                <small class="text-muted mb-0">Residential Appraiser</small>        -->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Testmonials</h6>
            <h6 class="section-subtitle mb-5 text-center">What Our Clients Says</h6>
            <div class="row">
            @foreach($testmonials as $testmonials)
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="{{asset('storage/').'/'.$testmonials->image}}" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">{{$testmonials->name}}</h6>
                                    <small class="text-muted mb-0">{{$testmonials->designation}}</small>     
                                </div>
                            </div>
                            <p class="mb-0">{{$testmonials->details}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

    <!-- Contact Section -->
   <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4" style="color:bisque">+ 123-456-7890</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4" style="color:bisque">201, Pushti Sparsh Arcade, Nr. Shell Petrol Pump, Sabarmati, Ahmedabad</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0" style="color:bisque">info@website.com</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <h4 class="mb-4">Contact Us</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="Name" placeholder="Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="Mobile" placeholder="Mobile">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="Subject" placeholder="Subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="Message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Message"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3 submit">Send</button>
                            </div>    
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>,Created By <a href="https://www.devcrud.com" target="_blank">Maverick.</a>  All rights reserved </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
