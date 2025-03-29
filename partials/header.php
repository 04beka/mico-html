<header class="header_section">
  <div class="header_top">
    <div class="container">
      <div class="contact_nav">
        <a href=""><i class="fa fa-phone" aria-hidden="true"></i><span>Call : +01 123455678990</span></a>
        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i><span>Email : demo@gmail.com</span></a>
        <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i><span>Location</span></a>
      </div>
    </div>
  </div>

  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
              <li class="nav-item"><a class="nav-link" href="treatment.php">Treatment</a></li>
              <li class="nav-item"><a class="nav-link" href="doctor.php">Doctors</a></li>
              <li class="nav-item"><a class="nav-link" href="testimonial.php">Testimonial</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="quote_btn-container d-flex align-items-center">
            <a href=""><i class="fa fa-user" aria-hidden="true"></i><span>Login</span></a>
            <a href=""><i class="fa fa-user" aria-hidden="true"></i><span>Sign Up</span></a>

            <!-- Search Form -->
            <form class="form-inline ml-2" id="searchForm" onsubmit="return false;" style="position: relative;">
              <input type="text" id="searchInput" placeholder="Search...">
              <button class="btn nav_search-btn" type="button" onclick="toggleSearch()">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>

<!-- Styles -->
<style>
#searchForm {
  position: relative;
}

#searchForm input {
  position: absolute;
  right: 45px; 
  top: 50%;
  transform: translateY(-50%);
  opacity: 0;
  visibility: hidden;
  width: 0;
  padding: 8px 15px;
  border: 1px solid #ccc;
  border-radius: 999px;
  background-color: white;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  transition: all 0.4s ease;
  z-index: 100;
  white-space: nowrap;
  overflow: hidden;
}

#searchForm.active input {
  opacity: 1;
  visibility: visible;
  width: 250px;
}
</style>


<!-- Script -->
<script>
  const form = document.getElementById('searchForm');
  const input = document.getElementById('searchInput');

  function toggleSearch() {
    form.classList.toggle('active');
    if (form.classList.contains('active')) {
      input.focus();
    } else {
      input.value = '';
    }
  }

  // ESC key hides search
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && form.classList.contains('active')) {
      form.classList.remove('active');
      input.value = '';
    }
  });

  // Click outside hides search
  document.addEventListener('click', function (e) {
    if (!form.contains(e.target) && form.classList.contains('active')) {
      form.classList.remove('active');
      input.value = '';
    }
  });
</script>
