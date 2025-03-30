<?php session_start(); ?>
<!-- ღილაკები -->
<!-- SIGN UP Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" method="post" action="signup_handler.php">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="id" class="form-control mb-2" placeholder="Enter ID" required>
        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>
  </div>
</div>

<!-- LOGIN Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" method="post" action="login_handler.php">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="id" class="form-control mb-2" placeholder="Enter ID" required>
        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Login</button>
      </div>
    </form>
  </div>
</div>
<!-- ღილაკები -->
<style>
/* ღილაკების სტილის გასწორება */
.quote_btn-container a {
  color: white;
  text-decoration: none !important;
  margin-left: 15px;
  transition: all 0.2s ease-in-out;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 5px;
}

.quote_btn-container a i {
  transition: color 0.2s ease-in-out;
  color: white;
}

.quote_btn-container a:hover {
  color: black;
  text-decoration: none !important;
}

.quote_btn-container a:hover i {
  color: black;
}
/* ღილაკების სტილის გასწორება */
</style>

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

<!-- ღილაკები -->
          <div class="quote_btn-container d-flex align-items-center">
          <?php if (isset($_SESSION['user'])): ?>
  <div class="quote_btn-container d-flex align-items-center">
    <i class="fa fa-user" aria-hidden="true"></i>
    <span class="logged-in-text">
      Logged in as <strong><?= htmlspecialchars($_SESSION['user']) ?></strong> |
    </span>
    <a href="logout.php" class="logout-link">LOGOUT</a>
  </div>
<?php else: ?>
  <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
    <i class="fa fa-user" aria-hidden="true"></i> LOGIN
  </a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal">
    <i class="fa fa-user" aria-hidden="true"></i> SIGN UP
  </a>
<?php endif; ?>


<!-- ღილაკები -->


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

<!-- Styles  ღილაკები  -->
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
/* საერთო ღილაკები */
.quote_btn-container {
  display: flex;
  align-items: center;
  gap: 10px;
}

.quote_btn-container a {
  color: white;
  text-decoration: none !important;
  transition: all 0.2s ease-in-out;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 5px;
}

.quote_btn-container a:hover {
  color: black;
  text-decoration: none !important;
}

.quote_btn-container i {
  color: white;
  transition: color 0.2s ease-in-out;
}

.quote_btn-container a:hover i {
  color: black;
}

/* Logged in ტექსტი */
.logged-in-text {
  color: white;
  font-weight: 400;
}

</style>
<!-- Styles  ღილაკები  -->

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
<!-- ღილაკები -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- ღილაკები -->