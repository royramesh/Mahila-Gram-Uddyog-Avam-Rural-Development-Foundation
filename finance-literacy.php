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

</style>
 <!--? Hero Start -->
 <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>Finance Literacy</h2>
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
                
            <div class="text-column">
                <h2>Understanding Financial Literacy: A Path to Financial Freedom</h2>
                <p>
                Financial literacy is the ability to understand and effectively manage
                 personal finances, covering essential areas like budgeting, saving, investing,
                  credit management, and retirement planning. It empowers individuals to make 
                  informed decisions, reduce financial stress, and build a secure future. Key aspects
                   include creating a budget to manage income and expenses, developing a habit of 
                   saving for emergencies and future goals, investing wisely to grow wealth, managing
                    credit responsibly to maintain a good credit score, and planning for retirement 
                    to ensure long-term financial security. By improving financial literacy, 
                    individuals can confidently navigate financial challenges, maximize their 
                    resources, and achieve financial independence.
                </p>

              
            </div>
        </div>
        
        
        <div class="col-md-6">
            <div class="image-column image-hover-container">
               
                <img src="assets/img/what-we-do/financial.jpg" width="500px" height="500px" class="hover-image">
            </div>
        </div>

            
            </div>
         </div>
<?php include('includes/footer.php');  ?>