<?php require '_includes/_header_section.php' ?>
<!-- Spinner End -->

<!-- Header Start -->
<?php require '_includes/header.php';?>
<!-- Header End -->


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="/public/img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious Hotel</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                        <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="/public/img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious Hotel</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                        <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Booking Start -->
<div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="bg-white shadow" style="padding: 35px;">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <div class="date" id="date1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                       placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="date" id="date2" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Adult</option>
                                <option value="1">Adult 1</option>
                                <option value="2">Adult 2</option>
                                <option value="3">Adult 3</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Child</option>
                                <option value="1">Child 1</option>
                                <option value="2">Child 2</option>
                                <option value="3">Child 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->


<!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/room-1.jpg" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Junior Suite</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        </div>
                        <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/room-2.jpg" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Executive Suite</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        </div>
                        <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/room-3.jpg" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Super Deluxe</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        </div>
                        <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/room-3.jpg" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Super Deluxe</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        </div>
                        <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/room-1.jpg" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Junior Suite</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        </div>
                        <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/room-2.jpg" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Executive Suite</h5>
                            <div class="ps-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                        </div>
                        <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Room End -->


<!-- Testimonial Start -->
<div class="container-xxl testimonial mt-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s" style="margin-bottom: 90px;">
    <div class="container">
        <div class="owl-carousel testimonial-carousel py-5">
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Newsletter Start -->
<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
        <div class="col-lg-10 border rounded p-1">
            <div class="border rounded text-center p-1">
                <div class="bg-white rounded text-center p-5">
                    <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Start -->


<?php require '_includes/_footer_section.php' ?>
