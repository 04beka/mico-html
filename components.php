<?php
include 'data.php';

function renderSlider($sliderData) {
  echo '<section class="slider_section ">';
  echo '<div class="dot_design"><img src="images/dots.png" alt=""></div>';
  echo '<div id="customCarousel1" class="carousel slide" data-ride="carousel"><div class="carousel-inner">';
  
  foreach ($sliderData as $index => $slide) {
    $active = $index === 0 ? 'active' : '';
    echo '<div class="carousel-item ' . $active . '">
      <div class="container ">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="play_btn"><button><i class="fa fa-play" aria-hidden="true"></i></button></div>
              <h1>' . $slide["title"] . '<br><span>' . $slide["subtitle"] . '</span></h1>
              <p>' . $slide["description"] . '</p>
              <a href="">Contact Us</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box"><img src="' . $slide["image"] . '" alt=""></div>
          </div>
        </div>
      </div>
    </div>';
  }

  echo '</div>
    <div class="carousel_btn-box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <img src="images/prev.png" alt=""><span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <img src="images/next.png" alt=""><span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>';
}

function renderTreatmentSection($treatments) {
  echo '<section class="treatment_section layout_padding"><div class="side_img"><img src="images/treatment-side-img.jpg" alt=""></div><div class="container"><div class="heading_container heading_center"><h2>Hospital <span>Treatment</span></h2></div><div class="row">';
  foreach ($treatments as $treatment) {
    echo '<div class="col-md-6 col-lg-3"><div class="box "><div class="img-box"><img src="' . $treatment["image"] . '" alt=""></div><div class="detail-box"><h4>' . $treatment["title"] . '</h4><p>' . $treatment["text"] . '</p><a href="">Read More</a></div></div></div>';
  }
  echo '</div></div></section>';
}

function renderDoctorsSection($doctors) {
  echo '<section class="team_section layout_padding"><div class="container"><div class="heading_container heading_center"><h2>Our <span>Doctors</span></h2></div><div class="carousel-wrap "><div class="owl-carousel team_carousel">';
  foreach ($doctors as $doc) {
    echo '<div class="item"><div class="box"><div class="img-box"><img src="' . $doc["image"] . '" alt="" /></div><div class="detail-box"><h5>' . $doc["name"] . '</h5><h6>' . $doc["degree"] . '</h6><div class="social_box">
      <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div></div></div></div>';
  }
  echo '</div></div></div></section>';
}

function renderTestimonialSection($testimonials) {
  echo '<section class="client_section layout_padding"><div class="container"><div class="heading_container"><h2><span>Testimonial</span></h2></div></div><div class="container px-0"><div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel"><div class="carousel-inner">';
  foreach ($testimonials as $index => $testi) {
    $active = $index === 0 ? 'active' : '';
    echo '<div class="carousel-item ' . $active . '"><div class="box"><div class="client_info"><div class="client_name"><h5>' . $testi["name"] . '</h5><h6>' . $testi["position"] . '</h6></div><i class="fa fa-quote-left" aria-hidden="true"></i></div><p>' . $testi["message"] . '</p></div></div>';
  }
  echo '</div><div class="carousel_btn-box"><a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i><span class="sr-only">Next</span></a></div></div></div></section>';
}



function renderGetInTouchSection() {
  echo '
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>Get In Touch</h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="thankyou.php" method="post">
              <div>
                <input type="text" name="fullname" placeholder="Full Name" required />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" required />
              </div>
              <div>
                <input type="text" name="phone" placeholder="Phone Number" required />
              </div>
              <div>
                <input type="text" name="message" class="message-box" placeholder="Message" required />
              </div>
              <div class="btn_box">
                <button type="submit">SEND</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>';
}

function renderAppointmentForm() {
  echo '
  <section class="appointment_section">
    <h2 class="section-title">BOOK APPOINTMENT</h2>
    <form class="appointment_form" action="thankyou.php" method="post">
      <input type="text" name="patient_name" placeholder="Patient Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="phone" placeholder="Phone Number" required>
      <textarea name="message" placeholder="Message"></textarea>
      <button type="submit">SEND</button>
    </form>
  </section>
  ';
}

function renderContactSection($contact_section) {
  echo '
  <section class="contact-confirmation" style="display: flex; align-items: flex-start; gap: 10px; margin: 40px 0;">
    <div class="dot" style="width: 10px; height: 10px; background-color: #b99efc; border-radius: 50%; margin-top: 7px; flex-shrink: 0;"></div>
    <div class="text" style="font-size: 20px; line-height: 1.6;">
      <p>' . $contact_section["title"] . ' ' . $contact_section["description"] . '</p>
      <strong style="display: block; margin-top: 10px; font-size: 22px;">' . $contact_section["message"] . '</strong>
    </div>
  </section>
  ';
}






?>
