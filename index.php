<?php include('includes/header.php');  ?>

<style>
    .event-container {
    /* display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 auto;
    padding: 20px; */
}

.row {
     display: flex;
   /* flex-wrap: wrap;
    gap: 20px; */
}

.event-card {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 48%;
    margin-bottom: 20px;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.event-image img {
    width: 100%;
    height: auto;
    border-bottom: 2px solid #ddd;
}

.event-details {
    padding: 15px;
}

.event-details h3 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 10px;
}

.event-details p {
    font-size: 1.6rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 15px;
}

.event-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.9rem;
    background-color:#F5F5F5;
    padding:6px;
    border-radius:4px;
}

.event-info .location, .event-info .date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #555;
}

.event-info img {
    width: 20px;
    height: 18px;
}

@media (max-width: 768px) {
    .event-card {
        width: 100%;
    }

    .row {
        gap: 10px;
    }
}
</style>


<main>

<div class="slider-area">
    <div class="slider">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('assets/img/hero/11.png');">
            <!-- <div class="caption">
                <h1>
                    <bold>Welcome</bold>
                </h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through
                    skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp;
                        DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('assets/img/hero/1.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp;
                        DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('assets/img/hero/2.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp;
                        DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <!-- Slide 4 -->
        <div class="slide" style="background-image: url('assets/img/hero/3.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <!-- Slide 5 -->
        <div class="slide" style="background-image: url('assets/img/hero/4.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <!-- Slide 6 -->
        <div class="slide" style="background-image: url('assets/img/hero/5.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/6.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/7.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/8.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/9.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/10.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/12.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/13.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/14.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/15.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/16.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/17.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/18.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/19.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/20.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="slide" style="background-image: url('assets/img/hero/21.png');">
            <!-- <div class="caption">
                <h1>Welcome</h1>
                <p>Mahila Gram Uddyog Avam Rural Development Foundation empowers women in rural areas through skill development, microfinance, and community outreach.</p>
                <div class="hero-btn">
                    <a href="industries.html" class="btn hero-btn mb-10"><strong>&#10084;</strong> &nbsp; DONATE</a>
                    <a href="industries.html" class="cal-btn ml-15">
                        <i class="flaticon-null"></i>
                        <p>+12 1325 41</p>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</div>



<!-- Slider Area Start -->

<!-- Slider Area End -->


<!--? Services Area Start -->
<div class="service-area section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span>Our Initiatives</span>
                    <h2>Dedicated to Empowering Communities</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span><i class="fas fa-users"></i></span>
                    </div>
                    <div class="cat-cap">
                        <h5>
                            <a href="services">Community Development</a>
                        </h5>
                        <p>Enhancing local quality of life through infrastructure improvements, education, and
                            health services, fostering vibrant, self-sustaining communities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span>&#8377;</span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="services">Economic Development</a></h5>
                        <p>Stimulating local economies by creating job opportunities, supporting small
                            businesses, and attracting investments to foster economic growth and stability.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cat text-center mb-50">
                    <div class="cat-icon">
                        <span><i class="fas fa-building"></i></span>
                    </div>
                    <div class="cat-cap">
                        <h5><a href="services">Enterprise Development</a></h5>
                        <p>Encouraging the growth of businesses through training, resources, and financial
                            support to drive innovation, create jobs, and boost local economies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->
<!--? About Law Start-->
<section class="about-low-area section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <span>About our foundetion</span>
                        <h2>We Are In A Mission To Developing women's institutions at the grassroots
                        </h2>
                    </div>
                    <p>Mahila Gram Uddyog Avam Rural Development Foundation is a non-profit, non-government, and non-religious voluntary organization operating in the rural, urban, tribal and far-flung habitations of southwest regions of Uttar Pradesh. Its origin owes to a dream once seen by some likeminded intellectuals, educationists, doctors, engineers and social-activist youths who firmly believe that India cannot be translated into a developed country until a sustainable holistic transformation of its rural sector takes place.<br>
                        <strong>Vision:</strong> “To empower the people of the deprived section with a view to establish a self-reliant & sustainable society.”<br>
                        <strong>Mission: </strong>
                        To work for the establishment of a self-reliant and egalitarian society by providing opportunities to the most deprived section of society through community based initiatives. 
                        </p>
                </div>
                <a href="about.html" class="btn">Learn More</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <div class="about-font-img d-none d-lg-block">
                        <img src="assets/img/gallery/a2.png" alt="">
                    </div>
                    <div class="about-back-img ">
                        <img src="assets/img/gallery/a1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Law End-->
<!-- Our Services -->
<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Our Services</span>
                    <h2>We focus on delivering high-quality, results-driven services designed to help businesses
                        and individuals achieve their goals.</h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-around">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/1.png" alt="">
                            <!-- Blog date -->
                            <!-- <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div> -->
                        </div>
                        <div class="blog-cap">
                            <p>Skill Development</p>
                            <h3><a href="">The Skill Development Program aims to empower women through targeted
                                    training and support, enhancing their employability, entrepreneurial
                                    potential, and personal growth.</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/2.png" alt="">
                            <!-- Blog date -->
                            <!-- <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div> -->
                        </div>
                        <div class="blog-cap">
                            <p>Market Research</p>
                            <h3><a href="blog_details.html">Involves gathering data and insights to understand
                                    the needs, preferences, and behaviors of women in the target community.</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/3.png" alt="">
                            <!-- Blog date -->
                            <!-- <div class="blog-date text-center">
                            <span>24</span>
                            <p>Now</p>
                        </div> -->
                        </div>
                        <div class="blog-cap">
                            <p>Enterprise Consultancy</p>
                            <h3><a href="blog_details.html">An Enterprise Consultancy focuses on understanding
                                    the needs, challenges, and opportunities within target industries or
                                    businesses to provide tailored consulting services.</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Our Products</span>
                    <h2>We focus on delivering high-quality, results-driven services designed to help businesses
                        and individuals achieve their goals.</h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/1.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>

                        
                        <p class="card-price">&#8377;19.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/2.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Hawai Chapple</h5>
                        
                        <p class="card-price">&#8377;29.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/3.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Jut Bag</h5>
                        
                        <p class="card-price">&#8377;39.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/4.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Handicraft Product </h5>
                        
                        <p class="card-price">&#8377;49.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/5.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Handloom Product </h5>
                        
                        <p class="card-price">&#8377;59.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/6.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Housekeeping Product </h5>
                        
                        <p class="card-price">&#8377;69.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/7.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Agarbatti</h5>
                        
                        <p class="card-price">&#8377;79.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/8.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Rugs</h5>
                        
                        <p class="card-price">&#8377;89.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Our Cases Start -->
<div class="our-cases-area section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span>Our Cases you can see</span>
                    <h2>Explore our latest causes that we works </h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cases mb-40">
                    <div class="cases-img">
                        <img src="assets/img/gallery/case1.png" alt="">
                    </div>
                    <div class="cases-caption">
                        <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                        <!-- Progress Bar -->
                        <div class="single-skill mb-15">
                            <div class="bar-progress">
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                            </div>
                        </div>
                        <!-- / progress -->
                        <div class="prices d-flex justify-content-between">
                            <p>Raised:<span> &#8377;20,000</span></p>
                            <p>Goal:<span> &#8377;35,000</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cases mb-40">
                    <div class="cases-img">
                        <img src="assets/img/gallery/case2.png" alt="">
                    </div>
                    <div class="cases-caption">
                        <h3><a href="#">Providing Healthy Food For The Children</a></h3>
                        <!-- Progress Bar -->
                        <div class="single-skill mb-15">
                            <div class="bar-progress">
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="25"></span>
                                </div>
                            </div>
                        </div>
                        <!-- / progress -->
                        <div class="prices d-flex justify-content-between">
                            <p>Raised:<span> &#8377;20,000</span></p>
                            <p>Goal:<span> &#8377;35,000</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cases mb-40">
                    <div class="cases-img">
                        <img src="assets/img/gallery/case3.png" alt="">
                    </div>
                    <div class="cases-caption">
                        <h3><a href="#">Supply Drinking Water For The People</a></h3>
                        <!-- Progress Bar -->
                        <div class="single-skill mb-15">
                            <div class="bar-progress">
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="50"></span>
                                </div>
                            </div>
                        </div>
                        <!-- / progress -->
                        <div class="prices d-flex justify-content-between">
                            <p>Raised:<span> &#8377;20,000</span></p>
                            <p>Goal:<span> &#8377;35,000</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Cases End -->
<!-- Featured_job_start -->
<!-- <section class="featured-job-area section-padding30 section-bg2"
    data-background="assets/img/gallery/section_bg03.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
        
                <div class="section-tittle text-center mb-80">
                    <span>What we are boing</span>
                    <h2>We arrange many social events for charity donations</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12">
             
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="#"><img src="assets/img/gallery/socialEvents1.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4>Donation is Hope</h4>
                            </a>
                            <ul>
                               
                                <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
             
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <a href="#"><img src="assets/img/gallery/socialEvents2.png" alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4>A hand for Children</h4>
                            </a>
                            <ul>
                                
                                <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                
                <div class="single-job-items mb-30">
                    <div class="d-flex job-items">
                        <div class="company-img">
                            <a href="#"><img src="assets/img/gallery/socialEvents3.png" alt=""></a>
                            <h4 style="font-size:24px;">Help for Children</h4>
                            <P>Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.</P>
                            </a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4 class="text-center">Help for Children</h4>
                                
                            <ul>
                              
                                <li><i class="fas fa-sort-amount-down"></i>18.01.2021</li>
                                <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->





<div class="container mb-5">
       
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Upcoming Programs</span>
                    <div class="section-tittle text-center mb-80">
                    <span>What we are boing</span>
                    <h2>We arrange many social events for charity donations</h2>
                </div>
                </div>
            </div>
        </div>
        <!-- <div class="row g-4">
       
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/1.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>

                        
                        <p class="card-price">&#8377;19.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

     
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/2.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Hawai Chapple</h5>
                        
                        <p class="card-price">&#8377;29.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/3.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Jut Bag</h5>
                        
                        <p class="card-price">&#8377;39.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/4.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Handicraft Product </h5>
                        
                        <p class="card-price">&#8377;49.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

           
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/5.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Handloom Product </h5>
                        
                        <p class="card-price">&#8377;59.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

       
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/6.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Housekeeping Product </h5>
                        
                        <p class="card-price">&#8377;69.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

          
            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/7.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Agarbatti</h5>
                        
                        <p class="card-price">&#8377;79.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 m-5">
                <div class="card" >
                    <img class="card-img-top" src="assets/img/products/8.png" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Rugs</h5>
                        
                        <p class="card-price">&#8377;89.99</p>
                        <a href="contact.html" class="btn">BUY</a>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- <section class="featured-job-area section-padding30 section-bg2"
    data-background="assets/img/gallery/section_bg03.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
        
                <div class="section-tittle text-center mb-80">
                    <span>What we are boing</span>
                    <h2>We arrange many social events for charity donations</h2>
                </div>
            </div>
        </div>

   </div>
</section> -->


        <div class="event-container mb-5">
    <div class="row">
        <!-- Event Card 1 -->
        <div class="col-md-4 event-card">
            <div class="event-image">
                <img src="assets/img/event/image2.jpg" alt="Event Image">
            </div>
            <div class="event-details">
                <h3>Event Title 1</h3>
                <p>Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.</p>
                    <div class="event-info">
                        <div class="location">
                            <img src="assets/img/event/location.png" alt="Location Logo"> Prayagraj
                        </div>
                        <div class="date">
                            <img src="assets/img/event/date-time.png" alt="Calendar Logo"> September 25, 2024, 6:00 PM
                        </div>
                    </div>
            </div>
        </div>


         <div class="col-md-4 event-card">
            <div class="event-image">
                <img src="assets/img/event/image2.jpg" alt="Event Image">
            </div>
            <div class="event-details">
                <h3>Event Title 1</h3>
                <p>Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.</p>
                    <div class="event-info">
                        <div class="location">
                            <img src="assets/img/event/location.png" alt="Location Logo"> Prayagraj
                        </div>
                        <div class="date">
                            <img src="assets/img/event/date-time.png" alt="Calendar Logo"> September 25, 2024, 6:00 PM
                        </div>
                    </div>
            </div>
        </div>

         <div class="col-md-4 event-card">
            <div class="event-image">
                <img src="assets/img/event/image2.jpg" alt="Event Image">
            </div>
            <div class="event-details">
                <h3>Event Title 1</h3>
                <p>Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.</p>
                    <div class="event-info">
                        <div class="location">
                            <img src="assets/img/event/location.png" alt="Location Logo"> Prayagraj
                        </div>
                        <div class="date">
                            <img src="assets/img/event/date-time.png" alt="Calendar Logo"> September 25, 2024, 6:00 PM
                        </div>
                    </div>
            </div>
        </div>
</div>
</div>
</div>

<!-- Featured_job_end -->
<!--? Team Ara Start -->
<div class="team-area pt-160 pb-160">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle2 text-center mb-70">
                    <span>What we are doing</span>
                    <h2>Our Expert Volunteer Alwyes ready</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="assets/img/gallery/team1.png" alt="">
                        <!-- Blog Social -->
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-caption">
                        <h3><a href="instructor.html">Bruce Roberts</a></h3>
                        <p>Volunteer leader</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="assets/img/gallery/team2.png" alt="">
                        <!-- Blog Social -->
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-caption">
                        <h3><a href="instructor.html">Robart Rechard</a></h3>
                        <p>Volunteer leader</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="assets/img/gallery/team3.png" alt="">
                        <!-- Blog Social -->
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-caption">
                        <h3><a href="instructor.html">Brendon Tailor</a></h3>
                        <p>Volunteer leader</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="assets/img/gallery/team4.png" alt="">
                        <!-- Blog Social -->
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-caption">
                        <h3><a href="instructor.html">Walshr Hasgt</a></h3>
                        <p>Volunteer leader</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Ara End -->
<!-- Want To work -->
<section class="wantToWork-area ">
    <div class="container">
        <div class="wants-wrapper w-padding2  section-bg" data-background="assets/img/gallery/section_bg01.png">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Lets Chenge The World With Humanity</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="#" class="btn white-btn f-right sm-left">Become A Volunteer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Want To work End -->
<!--? Testimonial Start -->
<div class="testimonial-area testimonial-padding">
    <div class="container">
        <!-- Testimonial contents -->
        <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
                <div class="h1-testimonial-active dot-style">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="assets/img/gallery/testimonial.png" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                    responsibility! So start caring for your body and it will care for you. Eat
                                    clean it will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="assets/img/gallery/testimonial.png" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                    responsibility! So start caring for your body and it will care for you. Eat
                                    clean it will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="assets/img/gallery/testimonial.png" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                    responsibility! So start caring for your body and it will care for you. Eat
                                    clean it will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<!--? Blog Area Start -->
<section class="home-blog-area section-padding30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Our recent blog</span>
                    <h2>Latest News from our recent blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/home-blog1.png" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>Creative derector</p>
                            <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/gallery/home-blog2.png" alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span>24</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p>Creative derector</p>
                            <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->
<!--? Count Down Start -->
<div class="count-down-area pt-25 section-bg" data-background="assets/img/gallery/section_bg02.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="count-down-wrapper">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- Counter Up -->
                            <div class="single-counter text-center">
                                <span class="counter color-green">6,200</span>
                                <span class="plus">+</span>
                                <p class="color-green">Donation</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- Counter Up -->
                            <div class="single-counter text-center">
                                <span class="counter color-green">80</span>
                                <span class="plus">+</span>
                                <p class="color-green">Fund Raised</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- Counter Up -->
                            <div class="single-counter text-center">
                                <span class="counter color-green">256</span>
                                <span class="plus">+</span>
                                <p class="color-green">Donation</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- Counter Up -->
                            <div class="single-counter text-center">
                                <span class="counter color-green">256</span>
                                <span class="plus">+</span>
                                <p class="color-green">Donation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Count Down End -->
</main>


<?php include('includes/footer.php');  ?>