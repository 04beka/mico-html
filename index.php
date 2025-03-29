<?php include('components.php');
include ('data.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Mico</title>

  <!-- CSS files -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  
</head>

<body>

  <div class="hero_area">
    <?php include('partials/header.php'); ?>
    <?php renderSlider($sliderData); ?>
  </div>

  <!-- Book Appointment Section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
        <form action="appointment-confirm.php" method="POST">
  <h4>BOOK <span>APPOINTMENT</span></h4>
  <div class="form-row">
    <div class="form-group col-lg-4">
      <label for="inputPatientName">Patient Name </label>
      <input type="text" class="form-control" id="inputPatientName" name="patient_name">
    </div>
    <div class="form-group col-lg-4">
      <label for="inputDoctorName">Doctor's Name</label>
      <select class="form-control wide" id="inputDoctorName" name="doctor">
        <option value="Dr. Hennry">Dr. Hennry</option>
        <option value="Dr. Morco">Dr. Morco</option>
        <option value="Dr. Jenni">Dr. Jenni</option>
        <option value="Dr. Jenni">Dr. Gega</option>
        <option value="Dr. Jenni">Dr. Lela</option>
        <option value="Dr. Jenni">Dr. Beka</option>
        
      </select>
    </div>
    <div class="form-group col-lg-4">
      <label for="inputDepartmentName">Department's Name</label>
      <select class="form-control wide" id="inputDepartmentName" name="department">
        <option value="Cardiology">Cardiology</option>
        <option value="Neurology">Neurology</option>
        <option value="Surgery">Surgery</option>
        <option value="Surgery">Dermatology</option>
        <option value="Surgery">radiology </option>
      </select>
    </div>
  </div>

  <div class="form-row">
  <div class="form-group col-lg-4">
    <label for="inputPhone">Phone Number</label>
    <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX">
  </div>
  <div class="form-group col-lg-4">
    <label for="inputSymptoms">Symptoms</label>
    <input type="text" class="form-control" id="inputSymptoms" name="symptoms">
  </div>
  <div class="form-group col-lg-4">
  <label for="date">Choose Date</label>
  <div class="input-group date" id="datepicker" data-date-format="mm-dd-yyyy">
  <input type="text" class="form-control" name="date" style="color: #00c6a9;">
    <span class="input-group-addon date_icon">
      <i class="fa fa-calendar" aria-hidden="true"></i>
    </span>
  </div>
</div>
</div>

<div class="btn-box">
  <button type="submit" class="btn">Submit Now</button>
</div>

</form>

        </div>
      </div>
    </div>
  </section>







  <!-- About Section -->
  <section class="about_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>About <span>Hospital</span></h2>
            </div>
            <p>
              has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
              making it look like readable English. Many desktop publishing packages and web page editors...
            </p>
            <a href="">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php renderTreatmentSection($treatments); ?>
  <?php renderDoctorsSection($doctors); ?>
  <?php renderTestimonialSection($testimonials); ?>
  <?php renderGetInTouchSection(); ?>
  <?php include('partials/footer.php'); ?>
  


  <!-- Scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Bootstrap-datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


  <script>
    $(".team_carousel").owlCarousel({
      loop: true,
      margin: 15,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        1000: { items: 3 }
      }
    });
  </script>
<script>
  $(document).ready(function () {
    // datepicker init
    $('#datepicker').datepicker({
      autoclose: true,
      todayHighlight: true
    }); 
    const now = new Date();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const year = now.getFullYear();
    const today = `${month}-${day}-${year}`;
    $('#datepicker input').val(today);
  });
</script>






</body>
</html>
