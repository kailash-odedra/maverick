<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
      <!-- Customized Bootstrap Stylesheet -->
      <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

      <style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

body {
  background-color: hsl(0, 0%, 100%);
  font-family: system-ui, sans-serif;
  font-size: 1.15rem;
}
p {
  text-align: justify;
}
h1 {
  font-size: 2.5rem;
}
h2 {
  font-size: 2rem;
}
h3 {
  font-size: 1.6rem;
}
/* variables */
:root {
  /* colors */
  --ad5-color-primary-hsl: 250, 84%, 54%;
  --ad5-color-bg-hsl: 0, 0%, 100%;
  --ad5-color-contrast-high-hsl: 230, 7%, 23%;
  --ad5-color-contrast-higher-hsl: 230, 13%, 9%;
  --ad5-color-contrast-medium-hsl: 225, 4%, 47%;
  --ad5-color-accent-hsl: 342, 89%, 48%;
  --ad5-color-contrast-lower-hsl: 220, 75%, 36%;

  /* spacing */
  --ad5-space-xs: 0.5rem;
  --ad5-space-md: 1.25rem;
  --ad5-space-lg: 2rem;
  --ad5-space-sm: 0.75rem;

  /* typography */
  --ad5-text-md: 1.2rem;
  --ad5-text-base: 1rem;
  --ad5-text-sm: 0.833rem;
  --ad5-text-sm: 0.833rem;
}

@media (min-width: 64rem) {
  :root {
    /* spacing */
    --ad5-space-xs: 0.75rem;
    --ad5-space-md: 2rem;
    --ad5-space-lg: 3.125rem;
    --ad5-space-sm: 1.125rem;

    /* typography */
    --ad5-text-md: 1.5625rem;
    --ad5-text-base: 1.25rem;
    --ad5-text-sm: 1rem;
    --ad5-text-sm: 1rem;
  }
}

/* component */

/* utility classes */
:where(.ad5-media-wrapper-16\:9) {
  position: relative;
  height: 0;
}

.ad5-media-wrapper-16\:9 {
  padding-bottom: 56.25%;
}

.ad5-media-wrapper-16\:9 > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ad5-media-wrapper-16\:9 > *:not(iframe) {
  object-fit: cover;
}

@media (min-width: 90rem) {
  .ad5-text-component__block--outset {
    width: calc(100% + 12rem);
  }

  .ad5-text-component__block--outset img {
    display: block;
    width: 100%;
  }

  .ad5-text-component__block--outset:not(.ad5-text-component__block--right) {
    margin-left: -6rem;
  }

  .ad5-text-component__block--right.ad5-text-component__block--outset {
    margin-right: -6rem;
  }
}

.ad5-gap-xs {
  gap: var(--ad5-space-xs);
}

.ad5-grid {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
}

.ad5-grid > * {
  min-width: 0;
  grid-column-end: span 12;
}

@media (min-width: 48rem) {
  .ad5-text-component__block--left,
  .ad5-text-component__block--right {
    width: 45%;
  }

  .ad5-text-component__block--left img,
  .ad5-text-component__block--right img {
    display: block;
    width: 100%;
  }

  .ad5-text-component__block--left {
    float: left;
    margin-right: calc(var(--ad5-space-sm) * var(--ad5-space-multiplier, 1));
  }

  .ad5-text-component__block--right {
    float: right;
    margin-left: calc(var(--ad5-space-sm) * var(--ad5-space-multiplier, 1));
  }
}

@media (min-width: 90rem) {
  .ad5-text-component__block--left,
  .ad5-text-component__block--right {
    width: 50%;
  }
}

.ad5-text-center {
  text-align: center;
}

.ad5-text-gap-md {
  --ad5-space-multiplier: 1.25;
}

.ad5-line-height-lg {
  line-height: 1.58;
}

.ad5-text-component :where(h1, h2, h3, h4) {
  line-height: var(--ad5-heading-line-height, 1.2);
  margin-top: calc(var(--ad5-space-md) * var(--ad5-space-multiplier, 1));
  margin-bottom: calc(var(--ad5-space-sm) * var(--ad5-space-multiplier, 1));
}

.ad5-text-component :where(p, blockquote, ul li, ol li) {
  line-height: var(--ad5-body-line-height, 1.4);
}

.ad5-text-component :where(ul, ol, p, blockquote, .ad5-text-component__block) {
  margin-bottom: calc(var(--ad5-space-sm) * var(--ad5-space-multiplier, 1));
}

.ad5-text-component :where(ul, ol) {
  padding-left: 1.25em;
}

.ad5-text-component ul :where(ul, ol),
.ad5-text-component ol :where(ul, ol) {
  padding-left: 1em;
  margin-bottom: 0;
}

.ad5-text-component ul {
  list-style-type: disc;
}

.ad5-text-component ol {
  list-style-type: decimal;
}

.ad5-text-component img {
  display: block;
  margin: 0 auto;
}

.ad5-text-component figcaption {
  margin-top: calc(var(--ad5-space-xs) * var(--ad5-space-multiplier, 1));
  font-size: var(--ad5-text-sm);
  text-align: center;
}

.ad5-text-component em {
  font-style: italic;
}

.ad5-text-component strong {
  font-weight: bold;
}

.ad5-text-component s {
  text-decoration: line-through;
}

.ad5-text-component u {
  text-decoration: underline;
}

.ad5-text-component mark {
  background-color: hsla(var(--ad5-color-accent-hsl), 0.2);
  color: inherit;
}

.ad5-text-component blockquote {
  padding-left: 1em;
  border-left: 4px solid hsl(var(--ad5-color-contrast-lower-hsl));
  font-style: italic;
}
p.ad5-color-contrast-medium.ad5-text-md {
  text-align: center;
  font-size: 1.2rem;
}
.ad5-text-component hr {
  margin: calc(var(--ad5-space-md) * var(--ad5-space-multiplier, 1)) auto;
  background: hsl(var(--ad5-color-contrast-lower-hsl));
  height: 1px;
}

.ad5-text-component > *:first-child {
  margin-top: 0;
}

.ad5-text-component > *:last-child {
  margin-bottom: 0;
}

.ad5-text-component.ad5-line-height-xs {
  --ad5-heading-line-height: 1;
  --ad5-body-line-height: 1.1;
}

.ad5-text-component.ad5-line-height-sm {
  --ad5-heading-line-height: 1.1;
  --ad5-body-line-height: 1.2;
}

.ad5-text-component.ad5-line-height-md {
  --ad5-heading-line-height: 1.15;
  --ad5-body-line-height: 1.4;
}

.ad5-text-component.ad5-line-height-lg {
  --ad5-heading-line-height: 1.22;
  --ad5-body-line-height: 1.58;
}

.ad5-text-component.ad5-line-height-xl {
  --ad5-heading-line-height: 1.3;
  --ad5-body-line-height: 1.72;
}

.ad5-max-width-adaptive-sm {
  max-width: 32rem;
}

@media (min-width: 48rem) {
  .ad5-max-width-adaptive-sm {
    max-width: 48rem;
  }
}

.ad5-container {
  width: calc(100% - 2 * var(--ad5-space-md));
  margin-left: auto;
  margin-right: auto;
}

.ad5-radius-lg {
  border-radius: 0.5em;
}

.ad5-width-100\% {
  width: 100%;
}

.ad5-block {
  display: block;
}

.ad5-margin-bottom-lg {
  margin-bottom: var(--ad5-space-lg);
}

.ad5-max-width-lg {
  max-width: 80rem;
  aspect-ratio: 16/9;
}
img.ad5-block.ad5-width-100\%.ad5-radius-lg {
  object-fit: cover;
}
.ad5-color-contrast-medium {
  --ad5-color-o: 1;
  color: hsla(var(--ad5-color-contrast-medium-hsl), var(--ad5-color-o, 1));
}

.ad5-text-sm {
  font-size: var(--ad5-text-sm);
}

.ad5-text-base {
  font-size: var(--ad5-text-base);
}

.ad5-text-gap-2xs {
  --ad5-space-multiplier: 0.25;
}

.ad5-justify-center {
  justify-content: center;
}

.ad5-flex {
  display: flex;
}

.ad5-text-md {
  font-size: var(--ad5-text-md);
}

.ad5-margin-bottom-md {
  margin-bottom: var(--ad5-space-md);
}

.ad5-max-width-xs {
  max-width: 38rem;
}

.ad5-padding-y-lg {
  padding-top: var(--ad5-space-lg);
  padding-bottom: var(--ad5-space-lg);
}

.ad5-col-6 {
  grid-column-end: span 6;
}

a.author__img-wrapper {
  height: 45px;
  aspect-ratio: 1;
  border-radius: 100vw;
  overflow: hidden;
}
a.author__img-wrapper img {
  height: 100%;
}
.author.author--meta {
  display: flex;
  gap: 1rem;
  align-items: center;
}
.author.author--meta a {
  color: #000;
  text-decoration: none;
  font-size: 1.2rem;
}
.author.author--meta p {
  font-size: 0.8rem;
}

</style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
  
 <!-- page Navigation -->
 <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
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
                    <a class="nav-link" href="{{url('/portfolios')}}">Portfolio</a>
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
                <h1 class="display-5 text-uppercase text-white mb-5">Blog Detail</h1>
                <div class="d-inline-flex text-white">
                    <h6 class="text-uppercase m-0"><a href=""></a></h6>
                    <h6 class="text-white m-0 px-3"></h6>
                    <h6 class="text-uppercase text-white m-0"></h6>
                </div>
            </div>
        </header>
     <!-- Page Header Start -->
    </section>
    <article class="ad5-padding-y-lg">
    <header class="ad5-container ad5-max-width-xs ad5-margin-bottom-lg">
      <div class="ad5-text-component ad5-text-center ad5-line-height-lg ad5-text-gap-md ad5-margin-bottom-md">
        <h1>{{$blog->Title}}</h1>
        <p class="ad5-color-contrast-medium ad5-text-md">{{$blog->Created_at}}</p>
      </div>
    </header>

  <figure class="ad5-container ad5-max-width-lg ad5-margin-bottom-lg">
    <img class="ad5-block ad5-width-100% ad5-radius-lg" src="{{ asset('assets').'/'.$blog->Image}}" alt="Image description">
  </figure>

  <div class="ad5-container ad5-max-width-adaptive-sm">
    <div class="ad5-text-component ad5-line-height-lg ad5-text-gap-md">
      <p>{!! $blog->Description !!}</p>

     </div>
  </div>
</article>
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