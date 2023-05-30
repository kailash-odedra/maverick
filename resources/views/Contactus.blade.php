
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Template Main CSS File -->
  <link href="assets/css/service.css" rel="stylesheet">

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

                            <a type="contact" href="#contact" class="btn button rounded w-md">Contact</a>
                            <!-- <a href="#contact" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"><p class="contact"></p></a> -->
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <section>
        <header id="yourHeader" ><br />
            <div style="height: 50vh;  background-size: cover; background-position: center; background-image: url('assets/imgs/fullbanner.jpeg')" class="position-relative w-100">
                <div class="position-absolute text-white d-flex flex-column align-items-center justify-content-center" style="top:0; right: 0; bottom: 0; left: 0; ">
                    
                    <h2 class="mb-4 mt-2 font-weight-bold text-center text-white">CONTACT US</h2>
                    <div class="text-center">
                    
                    </div>
                </div>
            </div>
        </header>
    </section>
    <!-- end of header -->

    <section id="contact" class="contact mt-5">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="email">
                <i class="fa-light fa-phone"></i>
                <h4>Email:</h4>
                <p>info@website.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+ 123-456-7890</p>
              </div>
            </div>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" placeholder="Your Name" class="form-control" id="name" required>
                </div>
                <div class="form-group row-md-6">
                  <label for="name">Your Email</label>
                  <input type="email"  placeholder="Your Email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="row">

              <div class="form-group col-md-6">
                <label for="name">Mobile</label>
                <input type="text" placeholder="Your Mobile" class="form-control" name="mobile" id="mobile" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Subject</label>
                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
              </div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control"  placeholder="Message" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">submit</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
   
 <section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        
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

