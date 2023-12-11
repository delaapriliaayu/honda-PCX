<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    

    <title>Website Otomotif</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style3.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i>@DelaAyuAprilia</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>HONDA_PCX</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/home">Home</a></li>
                      <li><a href="/product" class="active">Product</a></li>
                      <li><a href="/service">Service</a></li>
                      <li><a href="/contac">Contact Us</a></li>
                  </ul>   
                 
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Product</span>
          <h3>Product</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Show Color</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Show The Price</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Exsterior</a>
        </li>
      </ul>
      <!-- <div class="">
        <div class="row g-2 g-md-4">
          
        @forelse ($posts as $post)
          <div class="box col9 col-md-4">
          <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 300px">
                                    <h4 style="margin-top:20px," class="text-white"> <a href="">{{ $post->title }}</a></h4>
                                   <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">READ MORE</a> 
                        </div>
                              @empty
                              @endforelse
                        </div> -->
                                 
                        
                  @forelse ($posts as $post)
          <div class="item">
                      <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 300px">
            <div clas="item-text">
            <h4 class="item-title">{{ $post->title }}</h4>
            <a href="{{ route('posts.show', $post->id) }}" class="btn  btn-dark">Specification</a> 
            
            </div>
            @empty
                              @endforelse  
            </div>
           </div>
          
                        
                              </div>   

                             
         

      <!--  <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
            <span class="category"> Wonderful White</span>
            <h6>Rp. 32,894,000</h6>
            <h4><a href="property-details.html">Honda PCX 160 CBS Wonderful White</a></h4>
            
            <div class="main-button">
              <a href="property-details.html">Specification</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-04.jpg" alt=""></a>
            <span class="category"> Matte Black</span>
            <h6>Rp. 37,712,000</h6>
            <h4><a href="property-details.html">Honda PCX 160 ABS Glorious Matte Black</a></h4>
            
            <div class="main-button">
              <a href="property-details.html">Specification</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-05.jpg" alt=""></a>
            <span class="category"> Brilliant Black</span>
            <h6>Rp. 32,894,000</h6>
            <h4><a href="property-details.html">Honda PCX 160 CBS Brilliant Black</a></h4>
            
            <div class="main-button">
              <a href="property-details.html">Specification</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-06.jpg" alt=""></a>
            <span class="category"> Imperial Matte Blue</span>
            <h6>Rp. 37,712,000</h6>
            <h4><a href="property-details.html">Honda PCX 160 ABS Imperial Matte Blue</a></h4>
            
            <div class="main-button">
              <a href="property-details.html">Specification</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
            <span class="category"> Glorious Matte Black</span>
            <h6>Rp. 37,712,000</h6>
            <h4><a href="property-details.html">Honda PCX 160 ABS Glorious Matte Black</a></h4>
            
            <div class="main-button">
              <a href="property-details.html">Specification</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-02.jpg" alt=""></a>
            <span class="category"> Majestic Matte Red</span>
            <h6>Rp. 37,712,000</h6>
            <h4><a href="property-details.html">Honda PCX 160 ABS Majestic Matte Red</a></h4>
            
            <div class="main-button">
              <a href="property-details.html">Specification</a>
            </div>
          </div>
        </div> -->
        
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#!">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-#CBFFA9 text-center text-Dark">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    
    <a class="text-white" > <p>© 2020 Copyright: DelaAyuAprilia</p> </a>
  </div>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  
  <!-- Copyright -->
</footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>