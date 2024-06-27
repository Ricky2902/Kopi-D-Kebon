<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
    <div class="hero_area">

        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
    
    
    </div>
    <!-- end hero area -->

    <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Morijorch
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              "Visiting the cafe in the garden was a delightful experience. Nestled amidst lush greenery, the atmosphere was tranquil and rejuvenating. The aroma of freshly brewed coffee mingled with the scent of flowers, creating a sensory delight. The staff were warm and welcoming, and the pastries were not only beautifully presented but also delicious. It's truly a hidden oasis in the city where I can unwind and enjoy nature's beauty."
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Rochak
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              I stumbled upon this charming cafe in the garden while taking a leisurely stroll, and it instantly became my favorite spot. The peaceful ambiance, surrounded by blooming flowers and shaded by trees, makes it a perfect retreat from the hustle and bustle of everyday life. The coffee here is exceptional, and the homemade cakes are simply divine. Whether I'm here to read a book or catch up with friends, the serene environment always leaves me refreshed and content.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Brad Johns
                  </h5>
                  <h6>
                    Default model text
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
              I've always been drawn to places that offer a blend of nature and good food, and the cafe in the garden exceeded all expectations. The setting is picturesque, with cozy seating areas scattered under canopies of greenery. Every visit feels like a mini-escape; savoring a latte surrounded by blooming flowers and the chirping of birds is a treat for the senses. The attention to detail in both the decor and the menu is evident, creating a welcoming haven that I love returning to.
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->
    
    <!-- info section -->
        @include('home.footer')
    <!-- end info section -->

</body>

</html>