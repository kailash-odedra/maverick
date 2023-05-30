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
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #777;
        }

        /*h1 {*/
        /*    font-size: 36px;*/
        /*    color: #ffff;*/
        /*    font-weight: bold;*/
        /*}*/

        h3 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }



        #team i {
            font-size: 26px;
            color: #555;
        }

        #team p {
            font-weight: 500;
        }

        #team .card {
            border-radius: 0;
            box-shadow: 5px 5px 15px #e74c3c;
            transition: all 0.3s ease-in;
            -webkit-transition: all 0.3s ease-in;
            -moz-transition: all 0.3s ease-in;
        }

        #team .card:hover {
            background: #ff6e42;
            color: #fff;
            border-radius: 5px;
            border: none;
            box-shadow: 5px 5px 10px #9e9e9e;
        }

        #team .card:hover h3,
        #team .card:hover i {
            color: #fff;
        }
    </style>
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
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle h1">Maverick Team Page</h1>
            <h1 class="title h1">Maverick </h1>  

        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- <section class="section" id="testmonial"></section> -->
    <section id="team">
        <div class="container my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1>Our Team</h1>
                    <p class="my-3">
                        The Meet the Team page is one of the essential parts of your agency website because it shows that there is a team behind the work you do and what position the employees work in, and it helps the people visiting your website figure out who to get in touch with. Most importantly, it makes your agency more human.
                    </p>
                </div>
            </div>
            <div class="row">
            @foreach($team as $teams)

                <div class="col-lg-3 col-md-6 pt-1">
                    <div class="card h-100">
                        <div class="card-body">
                            <img class="img-fouild rounded w-75 mb-3"
                                src="{{asset('storage/').'/'.$teams->image}}"
                                alt="lucy">
                            <h3>{{$teams->name}}</h3>
                            <h5>{{$teams->designation}}</h5>
                            <p>{{$teams->details}}.</p>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>
    <!-- <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Our Team</h6>
            <h6 class="section-subtitle mb-5 text-center">What Our Clients Says</h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">John Doe</h6>
                                    <small class="text-muted mb-0">Business Analyst</small>     
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-1.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                    <small class="text-muted mb-0">Insurance Agent</small>      
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-2.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Mason Miller</h6>
                                    <small class="text-muted mb-0">Residential Appraiser</small>        
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
