<?php include('includes/header.php');  ?>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>


.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.gallery.pop {
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.gallery figure {
  -ms-flex-preferred-size: 33.333%;
      flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
}
.gallery figure img {
  width: 100%;
  border-radius: 10px;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.gallery figure figcaption {
  display: none;
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  opacity: 0;
  -webkit-transition: opacity .5s ease-in-out .2s;
  transition: opacity .5s ease-in-out .2s;
}
.popup.pop {
  opacity: 1;
  -webkit-transition: opacity .2s ease-in-out 0s;
  transition: opacity .2s ease-in-out 0s;
}
.popup.pop figure {
  margin-top: 0;
  opacity: 1;
}
.popup figure {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  margin-top: 30px;
  opacity: 0;
  -webkit-animation: poppy 500ms linear both;
          animation: poppy 500ms linear both;
}
.popup figure img {
  position: relative;
  z-index: 2;
  border-radius: 15px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
}
.popup figure figcaption {
  position: absolute;
  bottom: 50px;
  background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
  background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
  z-index: 2;
  width: 100%;
  border-radius: 0 0 15px 15px;
  padding: 100px 20px 20px 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-size: 32px;
}
.popup figure figcaption small {
  font-size: 11px;
  display: block;
  text-transform: uppercase;
  margin-top: 12px;
  text-indent: 3px;
  opacity: .7;
  letter-spacing: 1px;
}
.popup figure .shadow {
  position: relative;
  z-index: 1;
  top: -15px;
  margin: 0 auto;
  background-position: center bottom;
  background-repeat: no-repeat;
  width: 98%;
  height: 50px;
  opacity: .6;
  -webkit-filter: blur(15px) contrast(2);
          filter: blur(15px) contrast(2);
}
.popup .close {
  position: absolute;
  z-index: 3;
  top: 10px;
  right: 10px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  background: url(#close);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.popup .close svg {
  width: 100%;
  height: 100%;
}












.pb-video-container {
        padding: 40px;
        background: #F5F7F8;
        font-family: Lato;
    }

    .pb-video {
        border: 8px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: lightgrey;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }






    .news-section {
    background-color: #f7f4ef;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease, transform 0.3s ease;
    overflow: hidden;
    margin-bottom: 20px;
}

.news-section:hover {
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.news-section h3 {
    font-size: 2rem;
    color: #333;
    font-family: 'Georgia', serif;
    margin-bottom: 15px;
}

.news-section p {
    font-size: 1.7rem;
    color: #666;
    line-height: 1.8;
    margin-bottom: 20px;
    text-align: justify;
    word-spacing:1.3px;
}

.news-section .read-more {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.news-section .read-more:hover {
    background-color: #2980b9;
}

.image-area img {
    width: 100%;
    height: auto;
    border-radius: 6px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.image-area img:hover {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .row {
        display: flex;
        flex-direction: column;
    }

    .image-area {
        margin-top: 20px;
    }
}

    
</style>  

<!--? Hero Start -->

<!---------photo section---------->
        <section id="gallery">

        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-20 text-center">
                                <h2>Photo</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
         
        <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 150px; margin-top:-60px">

        <!--something--->
        <div class="container">
	<div class="row"><!--


-->
<div class="gallery">
  <figure>
    <img src="assets/img/multi-media/gallery/image1.jpg">

    <!-- <figcaption>Daytona Beach <small>United States</small></figcaption> -->
  </figure>
  <figure>
  <img src="assets/img/multi-media/gallery/image2.jpg">
    
    <!-- <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption> -->
  </figure>
  <figure>
  <img src="assets/img/multi-media/gallery/image3.jpg">
    
    <!-- <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption> -->
  </figure>
  <figure>
  <img src="assets/img/multi-media/gallery/image4.jpg">
   <!-- <figcaption>Yellowstone National Park <small>United States</small></figcaption> -->
  </figure>
  <figure>
  <img src="assets/img/multi-media/gallery/image5.jpg">
   <!-- <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption> -->
  </figure>
  <figure>
  <img src="assets/img/multi-media/gallery/image6.jpg">
    <!-- <figcaption>Highlands <small>United States</small></figcaption> -->
  </figure>
  <figure>
  <img src="assets/img/hero/1.png" alt="" />
    <!-- <img src="assets/img/hero/1.png" alt="" /> -->
    <!-- <figcaption>Daytona Beach <small>United States</small></figcaption> -->
  </figure>
  <figure>
    <img src="assets/img/hero/2.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/3.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/4.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/5.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/6.png" alt="" />
  </figure>
  <!-- Adding new images up to 21 -->
  <figure>
    <img src="assets/img/hero/7.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/8.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/9.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/10.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/11.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/12.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/13.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/14.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/15.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/16.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/17.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/18.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/19.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/20.png" alt="" />
  </figure>
  <figure>
    <img src="assets/img/hero/21.png" alt="" />
  </figure>
</div>


<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 18 18">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
  </symbol>
</svg>

        <!---something---->
  
        </div>
        </div>

        </section> 
<!----xx-----photo section----xx------>

<!---------video section---------->
<section id="video">

<div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-20 text-center">
                        <h2>Video</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
 
<div class="container">
<div class="row justify-content-center" style="margin-bottom: 150px; margin-top:-60px">

<div class="container-fluid pb-video-container">
    <div class="col-md-10 offset-md-1">
        <h3 class="text-xs-center text-center">Video Hub</h3>
        <div class="row pb-row">
            <div class="col-md-6 pb-video">
            <iframe class="pb-video-frame" width="100%" height="230" src="assets/img/multi-media/video/video1.mp4"  frameborder="0" allowfullscreen controls></iframe>
                <label class="form-control label-warning text-xs-center">Claydee - Alena</label>
            </div>
            <div class="col-md-6 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="assets/img/multi-media/video/video2.mp4" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Manuel Riva - Mhm Mhm</label>
            </div>
         
        </div>
        <div class="row pb-row">
            <div class="col-md-6 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/UY1bt8ilps4?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">F.O. and Peeva - Lichnata</label>
            </div>
            <div class="col-md-6 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/QpbQ4I3Eidg?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Machine Gun - Bad Things</label>
            </div>
            
        </div>
    </div>
</div>



</div>
</div>

</section> 
<!----xx-----video section----xx------>

<!---------news & media section---------->
<section id="news-event">

<div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 pt-20 text-center">
                        <h2>News & Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
 
<div class="container">
<div class="row justify-content-center" style="margin-bottom: 150px; margin-top:-60px">

<div class="row">

<div class="news-section">
    <section>
        <div class="row"> 
            <div class="col-md-8 content-area">
                <h3><strong>WOMEN'S GROUP WILL GET MACHINE FOR MAKING SHOES</strong></h3>
                <p>
              

                On Wednesday, a significant event took place at the Central Charan Paduka Sansthan (CFTI) in Shastripuram, where the Khadi Village Industries Office, Meerut, honored women from a self-help group who had successfully completed an extensive shoe-making training program. This comprehensive training covered various essential skills, including cutting, stretching, lasting, pasting, and finishing, equipping the participants with the knowledge and expertise needed to create high-quality footwear. Over the course of the program, these dedicated women produced a remarkable total of 70 pairs of shoes and slippers.

To acknowledge and support their hard work and accomplishments, the Khadi Village Industries Office announced that they would be providing the group with advanced machinery valued at approximately five lakh rupees. This generous contribution aims to facilitate and streamline further production, enabling the women to enhance their craft and expand their business operations.

The closing ceremony of this impactful training program was held at the Central Charan Paduka Sansthan, and it was a moment of celebration and recognition for all involved. During the ceremony, Rajesh Srivastava, the Director of the Khadi Village Industries Office, highlighted an important development: the office’s work area will be expanded to double its current size. This strategic move is expected to significantly enhance the office’s operational capabilities and provide more robust support for similar self-help initiatives in the future. The expansion will allow for increased productivity and better resources for those involved in such empowering programs.

Sanatan Sahu, the Director of Central Charan Paduka Sansthan, was also present at the ceremony, underscoring the collaborative effort between the two organizations in advancing skill development and promoting sustainable livelihoods through such initiatives.


                </p>
                <!-- <a href="#" class="read-more">Read More</a> -->
            </div>
            <div class="col-md-4 image-area">
                <img src="assets/img/multi-media/news/1.jpeg" alt="Gallery Image">
            </div>
        </div>
    </section>
</div>

<div class="news-section">
    <section>
        <div class="row"> 
            <div class="col-md-8 content-area">
                <h3><strong>WOMEN FORM GROUP AND OPEN SHOE FACTORY IN VILLAGE</strong></h3>
                <p>
                Ali Abbas, Agra

In Gadhi Navaliya village of Tajganj, ten women, seeking employment, formed their own group and established a shoe factory. They received training from the Central Footwear Training Institute (CFTI) and financial assistance of Rs 4 lakh from the Khadi Village Industries Commission.

This initiative began two years ago when women like Sheela Yadav, Reena Yadav, and Kishori from Gadhi Navaliya were searching for work. They were guided by the self-help group Sakhi Babli, who encouraged them to collaborate rather than pursue separate jobs. By November 2021, they formed the Guru Shakti Self Help Group, opened a bank account, and committed to becoming trained shoe artisans.

In February 2022, the women received two months of training at SEFTII in Sikandra Industrial Area from Director Sanatan Sahu. With the training complete, they inaugurated their factory in December 2022, thanks to a financial boost from the Khadi Village Industries Commission and a significant contribution of raw materials from Madhu Yadav, owner of Madhuram Industries.

Currently, the women earn two to three thousand rupees monthly, marking a step towards self-reliance. They aim to expand further, with future plans already in place.
                </p>
                <!-- <a href="#" class="read-more">Read More</a> -->
            </div>
            <div class="col-md-4 image-area">
                <img src="assets/img/multi-media/news/2.jpeg" alt="Gallery Image">
            </div>
        </div>
    </section>
</div>

<div class="news-section">
    <section>
        <div class="row"> 
            <div class="col-md-8 content-area">
                <h3><strong>HOPE BRIGHTENED BY INCENSE STICKS, DIWALI WILL BE CELEBRATED ON HOLI WOMEN'S DAY</strong></h3>
                <p>
                A group of 45 women, including Sheela Yadav from Kuan Kheda and Babli Yadav from Garhi Navaliya, is celebrating Holi with a special joy, thanks to their new incense stick industry. They formed the Mahila Rural Development Foundation to achieve financial independence. Facing challenges with capital and market access, they received support from the Khadi Village Industries Commission, which provided 80% of the required funding and essential equipment. The women contributed 20% of the capital themselves and underwent training starting February 1. With this support, they began production on Women’s Day and will start selling their incense sticks this Holi.

The initiative, backed by the Khadi Village Industries Commission and facilitated by individuals like Assistant Director HN Meena and Madhuram Industries' Madhu Yadav, aims to empower the women financially. Each woman is expected to earn between 140 to 175 rupees per day, helping them to support themselves and their families. </p>
                <!-- <a href="#" class="read-more">Read More</a> -->
            </div>
            <div class="col-md-4 image-area">
                <img src="assets/img/multi-media/news/3.jpeg" alt="Gallery Image">
            </div>
        </div>
    </section>
</div>
     <!-- <div class="col-md-6 news-section">
       <section>
         <div class="row"> 
              <div class="col-md-8">
                 <h3>Caption Header</h3>
                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>


              </div>

              <div class="col-md-4">
               <img src="assets/img/multi-media/gallery/image4.jpg" width="180px" height="200px">

             </div>
         </div>
        </section>
    </div> -->



     


     


</div>

</div>
</div>

</section> 
<!----xx-----news & media section----xx------>


<script>
    popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()

</script>

        <?php include('includes/footer.php');  ?>        
