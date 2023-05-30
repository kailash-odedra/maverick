<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/style.css">
      <!-- Customized Bootstrap Stylesheet -->
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
  
 <!-- page Navigation -->
 <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
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
                    <a class="nav-link" href="{{url('/Subservice')}}">Our Service</a>
                    <ul>
                    <li><a href="#">Digital Marketing</a></li>
                    <li><a href="#">Web design & Development</a></li>
                    <li><a href="#">Mobile app design & Devlopment</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Marketing strategy</a></li>
                    <li><a href="#">Social & Corporate Events</a></li> 
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



    <!-- Service Section -->
    <section>
     <!-- Page Header Start -->
        <header id="yourHeader" ><br />
            <div class="container-fluid page-header">
                <h1 class="display-5 text-uppercase text-white mb-5">BLOG's </h1>
                <div class="d-inline-flex text-white">
                    <h6 class="text-uppercase m-0"><a href=""></a></h6>
                    <h6 class="text-white m-0 px-3"></h6>
                    <h6 class="text-uppercase text-white m-0"></h6>
                </div>
            </div>
        </header>
     <!-- Page Header Start -->
    </section>

<!--post-->
<div>
    <section class="posts section">
        <div class="container">
            <div class="row">
                <!-- /section title -->
                <!-- single blog-->
                @foreach($blog as $blogs)
                    <article class="col-lg-4 col-md-6">
                        <div class="post-item">
                            <div class="media-wrapper">
                                <img loading="lazy" src="{{asset('assets').'/'.$blogs->Image}}" alt="amazing caves coverimage" class="img-fluid">
                            </div>

                            <div class="content">
                            <a href="single-post.html"></a>
                                <h3 class="text-uppercase"><span style="color:red">{{$blogs->Title}} </span></h3>
                            </div>
                            <div class="form-group col-12 mb-0">
                                <a href="{{url('/blogs-detail/'.$blogs->Slug)}}">
                                        <button type="submit" class="btn button rounded w-md mt-3 submit text-center">Read More</button>
                                    </div>
                                </a>

                            </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</div>

 
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<!-- <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script> -->

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>


   

   
    <section id="banner">
        <div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('assets/imgs/Form-Background-2.webp');
    height: 400px;">
            <div class="mask">
                <div class="row">
                    
                </div>
                <div class="d-flex justify-content-left align-items-left h-100">
                    <div class="col-md-6 text-white">
                        <h1 class="mb-3" style="color: red;">Still Not Convinced ?</h1>
                        <h4 class="mb-3 mt-5">Let Us do A free Analysis Of your <br>Current Marketing.
                        </h4>
                        <p class="mt-5" style="color:#f3f5f9"> What the worst that can happe You get more customer</p>
                        <a class="btn btn-outline-light btn-lg mt-5" href="#!" role="button">Free Marketing Analysis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero -->
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
            <span class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>,Created By <a href="https://www.devcrud.com" target="_blank">Maverick.</a>  All rights reserved </span>     
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


</body>

</html>