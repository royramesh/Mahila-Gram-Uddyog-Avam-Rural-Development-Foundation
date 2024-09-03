<?php include('includes/header.php');  ?>

<style>

    
.image-hover-container {
    width: fit-content; 
    overflow: hidden; 
    border-radius: 10px; 
}

/* Image styling */
.hover-image {
    display: block; 
    width: 100%; 
    transition: transform 0.3s ease, filter 0.3s ease; 
    filter: brightness(0.9); 
}

/* Hover effect for the image */
.hover-image:hover {
    transform: scale(1.1);
    filter: brightness(1.1);
}






.text-column {
    background-color: #f9f9f9; 
    padding: 30px; 
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    max-width: 600px; 
    margin: 0 auto; 
    transition: transform 0.3s ease, box-shadow 0.3s ease; 
}


.text-column h2 {
    font-size: 28px; 
    font-weight: bold; 
    color: #2c3e50; 
    margin-bottom: 15px; 
    text-align: center; 
}


.text-column p {
    font-size: 18px; 
    line-height: 1.7; 
    color: #4a4a4a; 
    text-align: justify;
    margin: 0; 
}


.text-column:hover {
    transform: translateY(-5px); 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}


@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(600px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.text-column {
    animation: slideUp 1s ease-out;
}


@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-400px);
    }
    to {
        opacity: 1;
        transform: translateY(1000);
    }
}

.image-column {
    overflow: hidden;
}

.hover-image {
    animation: slideDown 1s ease-out;
}




</style>
 <!--? Hero Start -->
 <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>Youth Development</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <div class="container">
            <div class="row justify-content-center" style="margin-bottom: 150px;">
     
            <div class="col-md-6">
                
           

            <div class="image-column image-hover-container">
               
                <img src="assets/img/what-we-do/youth.jpg" width="500px" height="400px" class="hover-image">
            </div>
        </div>
        
        
        <div class="col-md-6">

        <div class="text-column">
                <h2>Youth development by Us</h2>
                <p>
                Our youth development programs are crafted to empower
                 young individuals with the skills, knowledge, and confidence
                  needed to thrive. We offer a range of initiatives that focus
                   on leadership, personal growth, and community engagement. 
                   Through mentorship, skill-building workshops, and collaborative
                    projects, we aim to inspire and equip the next generation with
                     the tools to succeed. Our supportive environment encourages 
                     creativity, resilience, and a sense of purpose, helping young
                      people to unlock their potential and make a positive impact 
                      in their communities.
                </p>
                 
              
            </div>
            
        </div>

            
            </div>
         </div>
<?php include('includes/footer.php');  ?>