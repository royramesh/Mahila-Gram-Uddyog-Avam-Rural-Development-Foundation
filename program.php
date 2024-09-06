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

 <!--? Hero Start -->
 <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>Programs</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
    <div class="container mb-5">
       
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Upcoming Programs</span>
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
        <!-- Event Card 2 -->
        <div class="col-md-4 event-card">
            <div class="event-image">
                <img src="assets/img/event/image2.jpg" alt="Event Image">
            </div>
            <div class="event-details">
                <h3>Event Title 2</h3>
               <p>Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.</p>
                <div class="event-info">
                    <div class="location">
                        <img src="assets/img/event/location.png" alt="Location Logo"> Delhi
                    </div>
                    <div class="date">
                        <img src="assets/img/event/date-time.png" alt="Calendar Logo"> October 10, 2024, 4:00 PM
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more cards here... -->
    </div>





    <div class="container mt-5">
       
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Past Events</span>
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
        <!-- Event Card 2 -->
        <div class="col-md-4 event-card">
            <div class="event-image">
                <img src="assets/img/event/image2.jpg" alt="Event Image">
            </div>
            <div class="event-details">
                <h3>Event Title 2</h3>
               <p>Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.
                Join us for an exciting event where you will learn new skills and network with professionals in the industry.</p>
                <div class="event-info">
                    <div class="location">
                        <img src="assets/img/event/location.png" alt="Location Logo"> Delhi
                    </div>
                    <div class="date">
                        <img src="assets/img/event/date-time.png" alt="Calendar Logo"> October 10, 2024, 4:00 PM
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more cards here... -->
    </div>
</div>
</div>
</div>
    </div>
<?php include('includes/footer.php');  ?>