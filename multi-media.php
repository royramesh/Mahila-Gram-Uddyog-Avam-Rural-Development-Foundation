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
    <!-- <figcaption>Daytona Beach <small>United States</small></figcaption> -->
  </figure>
  <figure>
    <img src="assets/img/hero/2.png" alt="" />
    <!-- <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption> -->
  </figure>
  <figure>
    <img src="assets/img/hero/3.png" alt="" />
    <!-- <figcaption>
      Bad Pyrmont <small>Deutschland</small>
    </figcaption> -->
  </figure>
  <figure>
    <img src="assets/img/hero/4.png" alt="" />
    <!-- <figcaption>Yellowstone National Park <small>United States</small></figcaption> -->
  </figure>
  <figure>
    <img src="assets/img/hero/5.png" alt="" />
    <!-- <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption> -->
  </figure>
  <figure>
    <img src="assets/img/hero/6.png" alt="" />
    <!-- <figcaption>Highlands <small>United States</small></figcaption> -->
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

    <div class="col-md-6">
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
    </div>

  
     <div class="col-md-6">
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
    </div>



     <div class="col-md-6">
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
    </div>


     <div class="col-md-6">
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
    </div>


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
