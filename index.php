<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamStay_Home</title>
    <?php require('inc/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px) {
        .availability-form{
                margin-top: 25px;
                padding: 0 35px; 
        }
        }
    </style>
</head>
<body class= "bg-light">
    <?php require('inc/header.php');?>
<!-- Carousel/Sliders -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container" id="mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="Images/Carosuel/IMG_55677.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Carosuel/IMG_40905.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Carosuel/IMG_15372.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Carosuel/IMG_62045.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Carosuel/IMG_93127.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Carosuel/IMG_99736.png" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

<!-- Check Booking Availability Form -->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Rooms Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-In</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-Out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-lg-3 mt-2">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Our Rooms -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

 <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="Images/Rooms/IMG_11892.png" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room</h5>
                    <h6 class="mb-4">500₹ Per Night</h6>
                    <div class="features mb-4">
                     <h6 class="mb-1">Features</h6>
                     <span class="badge bg-light text-dark text-wrap">
                           2 Rooms
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           1 Bathroom
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           1 Balcony
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           3 Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark text-wrap">
                           Wifi
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           Television
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           2 AC
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           Room Heater
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark text-wrap">
                           5 Adults
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           2 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                      <h6 class="mb-1">Ratings</h6>
                      <span class="badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                      </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book NOW</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="Images/Rooms/IMG_11892.png" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room</h5>
                    <h6 class="mb-4">500₹ Per Night</h6>
                    <div class="features mb-4">
                     <h6 class="mb-1">Features</h6>
                     <span class="badge bg-light text-dark text-wrap">
                           2 Rooms
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           1 Bathroom
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           1 Balcony
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           3 Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark text-wrap">
                           Wifi
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           Television
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           2 AC
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           Room Heater
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark text-wrap">
                           5 Adults
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           2 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                      <h6 class="mb-1">Ratings</h6>
                      <span class="badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                      </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book NOW</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="Images/Rooms/IMG_11892.png" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room</h5>
                    <h6 class="mb-4">500₹ Per Night</h6>
                    <div class="features mb-4">
                     <h6 class="mb-1">Features</h6>
                     <span class="badge bg-light text-dark text-wrap">
                           2 Rooms
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           1 Bathroom
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           1 Balcony
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           3 Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark text-wrap">
                           Wifi
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           Television
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           2 AC
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           Room Heater
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark text-wrap">
                           5 Adults
                        </span>
                        <span class="badge bg-light text-dark text-wrap">
                           2 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                      <h6 class="mb-1">Ratings</h6>
                      <span class="badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                      </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book NOW</a>
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
    </div>
 </div>
<!-- Our Facilities -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
 <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Facilities/Wifi.svg" width="80px">
            <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Facilities/Wifi.svg" width="80px">
            <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Facilities/Wifi.svg" width="80px">
            <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Facilities/Wifi.svg" width="80px">
            <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="Images/Facilities/Wifi.svg" width="80px">
            <h5 class="mt-3">WIFI</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
        </div>
    </div>
 </div>

 <!-- Testimonials Section -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="Images/Facilities/Wifi.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad doloribus 
                    ipsum cum molestiae eos fugiat 
                    vel amet. Quae, minima cupiditate!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="Images/Facilities/Wifi.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad doloribus 
                    ipsum cum molestiae eos fugiat 
                    vel amet. Quae, minima cupiditate!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="Images/Facilities/Wifi.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad doloribus 
                    ipsum cum molestiae eos fugiat 
                    vel amet. Quae, minima cupiditate!
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
  <!-- Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
 <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/d/embed?mid=1DfFcv3jAM8NAeioBjW_CHwtKL3A&hl=en_US&ehbc=2E312F"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h5>
                <a href="Tel: +917778889991" class="d-inline-block mb-2 text-decoration-none text-dark">
                <i class="bi bi-telephone"></i> +917778889991
                </a>
                <br>
                <a href="Tel: +917778889991" class="d-inline-block text-decoration-none text-dark">
                <i class="bi bi-telephone"></i> +917778889991
                </a>
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow Us</h5>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter me-1"></i> Twitter
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i> facebook
                </span>
                </a>
                <br>
                <a href="#" class="d-inline-block">
                <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i> instagram
                </span>
                </a>
            </div>
        </div>
    </div>
 </div>

   <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <script>
    var swiper = new Swiper("#mySwiper", {
        effect: "fade", 
        clickable: true,
        loop: true,
        autoplay: {
            delay: 3500, 
            disableOnInteraction: false,
        },
    });

    var swiperTestimonials = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>

</body>
</html>


