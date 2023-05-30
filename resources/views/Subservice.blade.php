
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/service.css')}}" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="{{asset('assets/imgs/logo.png')}}" alt="">

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
                           @foreach($all_service as $all_services)
                            <li><a href="{{url('/service/'.$all_services->Slug)}}">{{$all_services->Title}}</a></li>
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
    <section>
        <header id="yourHeader" ><br />
            <div style="height: 50vh;  background-size: cover; background-position: center; background-image: url({{asset('assets/imgs/fullbanner.jpeg')}})" class="position-relative w-100">
                <div class="position-absolute text-white d-flex flex-column align-items-center justify-content-center" style="top:0; right: 0; bottom: 0; left: 0; ">
                    
                    <h2 class="mb-4 mt-2 font-weight-bold text-center text-white">{{$service->Title}}</h2>
                    <div class="text-center">
                    
                    </div>
                </div>
            </div>
        </header>
    </section>
    <!-- end of header -->


   
  <!-- Service Section -->
  <section  id="service" class="section pt-1">
        <div class="container">
            <!-- <h4 class="section-title text-center"> Service</h4> -->
            <h6 class="section-subtitle text-centre">
            <div class="row">
            @foreach($Subservice as $Subservices)
                <div class="col-md-3 mt-3">
                    <div class="card mb-2 mb-md-2">
                        <div class="card-body">
                             <small class="text-primary font-weight-bold"></small> 
                           
                             <div class="section-title-icone text-center">
                                <img src="{{asset('assets/imgs/discover.webp')}}" width="60" height="60" alt="">
                                </div>
                                <h5 class="card-title text-bold text-center "> {{$Subservices->Title}}<h5>
                            <p class="mb-1 text-center text-bold">{{$Subservices->Title}}</p>
                           <div class="form-group col-11 mb-0 section-title-btn-button text-center ">
                                <button type="submit" class="btn button rounded w-md mt-2 submit"><a href="#sub{{$Subservices->id}}">Start here</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                <!-- <div class="col-md-3">
                    <div class="card mb-2 mb-md-2">
                        <div class="card-body">

                             <small class="text-primary font-weight-bold"></small> 
                             <div class="section-title-icone text-center">
                                <img src="{{asset('assets/imgs/consultation (1).webp')}}" width="60" height="66" alt="">
                                </div>
                             
                             
                            <h5 class="card-title mt-4 text-center"> I need Consulting</h5>
                                                                                                                          
                            <p class="mb-1 text-center">let us help you find one </p>
                            <div class="form-group col-11 mb-0 section-title-btn-button text-center ">
                                <button type="submit" class="btn button rounded w-md mt-2 submit">Start here</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="card mb-2 mb-md-2">
                        <div class="card-body">
                             <small class="text-primary font-weight-bold"></small> 
                             <div class="section-title-icone text-center">
                                <img src="{{asset('assets/imgs/strategy (1).webp')}}" width="60" height="60" alt="">
                                </div>

                            <h5 class="card-title mt-4 text-center"> I need Strategy <h5>
                            <p class="mb-1 text-center">let us help you find one </p>
                            <div class="form-group col-11 mb-0 section-title-btn-button text-center ">
                                <button type="submit" class="btn button rounded w-md mt-2 submit">Start here</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-2 mb-md-2">
                        <div class="card-body">
                             <small class="text-primary font-weight-bold"></small> 
                             <div class="section-title-icone text-center ">
                                <img src="{{asset('assets/imgs/public-relation.webp')}}" width="60" height="60" alt="">
                                </div>

                            <h5 class="card-title mt-4 text-center"> I need PR <h5>
                            <p class="mb-1 text-center">let us help you find one </p>
                            <div class="form-group col-11 mb-0  section-title-btn-button text-center ">
                                <button type="submit" class="btn button rounded w-md mt-2 submit ">Start here</button>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div> 
        </div>   
    </section>
    <!-- End OF Service Section -->
    
 <!--  stratagy -->


    <section id="why-us" class="" style="background-color: #f3f5f9; text-color:white">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-left align-items-stretch  order-2 order-lg-1">

            <div class="content align-content-start">
              <h3 class="text-uppercase align-content-left"><span style="color:orange">CONSULTING </span> & BUSINESS STRATEGY </h3>
              <div class="elementor-widget-container">
                <p><span style="color:black">Marketing gives the best return when the marketing and the business strategy are closely aligned. At Maverick, we believe in a full funnel approach, and have the resources to help you align every part of your business with your marketing. As a result, our clients experience a tightly integrated customer funnel, capable of maximizing conversion at every touchpoint.</span></p>
              </div> 
                <div>
                <button type="submit" class="btn button rounded w-md mt-2 submit">Call us</button>

                </div>  
            </div>
            
          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset("assets/imgs/government-1.webp")}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-left" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/imgs/non-profit.webp')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3 class="text-uppercase"><span style="color:orange">BRAND </span> STRATEGY</h3>
            <div class="elementor-widget-container">
            <p class="fst-italic">
            <span style="color:black">
            Your brand is not what you tell your customers about your company; it’s what your customers tell their friends about your company. That’s why it’s critical to take control of that narrative, and have a strategy to maintain it. At Maverick, we help our clients develop a clear brand message, then work together to ensure that message is given to the right person, at the right place, at the right time.
            </span>
            </p>
            </div>

            <div>
            <button type="submit" class="btn button rounded w-md mt-2 submit">Call us</button>

            </div>

          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <section id="why-us" class="" style="background-color: #f3f5f9; text-color:white">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content align-content-start">
              <h3 class="text-uppercase text-bold"><span style="color:orange">CONSULTING</span>& BUSINESS STRATEGY </h3>
              <div class="elementor-widget-container">
                <p><span style="color:black">Marketing gives the best return when the marketing and the business strategy are closely aligned. At Maverick, we believe in a full funnel approach, and have the resources to help you align every part of your business with your marketing. As a result, our clients experience a tightly integrated customer funnel, capable of maximizing conversion at every touchpoint.</span></p>
              </div> 
              <div>
              <button type="submit" class="btn button rounded w-md mt-2 submit">Call us</button>

              </div>  
            </div>
            
          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset("assets/imgs/government-1.webp")}}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
          
        </div>

      </div>
    </section>

    
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-left" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/imgs/non-profit.webp')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3 class="text-uppercase"><span style="color:orange">BRAND </span> STRATEGY</h3>
            <div class="elementor-widget-container">
            <p class="fst-italic">
            <span style="color:black">
            Your brand is not what you tell your customers about your company; it’s what your customers tell their friends about your company. That’s why it’s critical to take control of that narrative, and have a strategy to maintain it. At Maverick, we help our clients develop a clear brand message, then work together to ensure that message is given to the right person, at the right place, at the right time.
            </span>
            </p>
            </div>

            <div>
            <button type="submit" class="btn button rounded w-md mt-2 submit">Call us</button>

            </div>

          </div>
        </div>
      </div>
    </section>
   
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
            <span class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>,Created By <a href="#" style="color:orange" target="_blank">Maverick.</a>  All rights reserved </span>     
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

