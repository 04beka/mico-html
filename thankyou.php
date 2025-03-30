<?php
$name = '';
$email = '';

if (!empty($_POST['fullname'])) {
  $name = htmlspecialchars($_POST['fullname']);
} elseif (!empty($_POST['patient_name'])) {
  $name = htmlspecialchars($_POST['patient_name']);
}

if (!empty($_POST['email'])) {
  $email = htmlspecialchars($_POST['email']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submitted</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section -->
    <?php include 'partials/header.php'; ?>
    <!-- end header section -->
  </div>

  <section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Form Submitted</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="box" style="padding: 30px; background: #f9f9f9; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

          <?php if ($name && in_array(strtolower($name), ['გეგა', 'gega', 'gega jikuridze', 'გეგა ჯიქურიძე'])): ?>

            <!-- გეგას სტილები -->
            <style>
              @keyframes bounceText {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-8px); }
              }

              @keyframes rainbowText {
                0%   { color: #ff0040; }
                14%  { color: #ff8000; }
                28%  { color: #ffff00; }
                42%  { color: #00ff00; }
                57%  { color: #00ffff; }
                71%  { color: #0000ff; }
                85%  { color: #8000ff; }
                100% { color: #ff0040; }
              }
            </style>

            <div style="text-align: center;">
              <p style="
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 15px;
                animation: bounceText 1s infinite, rainbowText 6s infinite linear;
                display: inline-block;
              ">
                პრივეტ გეგ ❤️🤣
              </p>

              <img src="https://media.giphy.com/media/3ohs4BSacFKI7A717y/giphy.gif"
                alt="Funny Gega"
                style="width: 100%; max-width: 300px; margin: 15px auto; border-radius: 10px; display: block;"
              >

              <button onclick="delayedRedirect(this)" style="
                padding: 14px 30px;
                font-size: 18px;
                background-color: #ff66b3;
                border: none;
                border-radius: 8px;
                text-decoration: none;
                font-weight: bold;
                letter-spacing: 0.5px;
                text-transform: uppercase;
                display: inline-block;
                margin-top: 10px;
                color: white;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 4px 12px rgba(255, 102, 179, 0.4);
                cursor: pointer;
              "
              onmouseover="this.style.transform='scale(1.08)'; this.style.boxShadow='0 6px 18px rgba(0,0,0,0.2)';"
              onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 12px rgba(255, 102, 179, 0.4)';"
              >
                <span id="btn-text" style="animation: rainbowText 6s infinite linear;">⬅❤️ გეგუ კარგაააად ❤️</span>
              </button>
            </div>

          <?php else: ?>

            <!-- და სხვა მოკვდავი მომხმარებლები -->
            <div style="display: flex; align-items: flex-start; gap: 10px;">
              <div style="width: 10px; height: 10px; background-color: #b99efc; border-radius: 50%; margin-top: 7px;"></div>
              <div style="font-size: 18px; color: #444;">
                <?php if ($name): ?>
                  <p><strong>Thank you, <?= $name ?>!</strong> Your form has been received.</p>
                <?php else: ?>
                  <p>Your form has been received.</p>
                <?php endif; ?>

                <?php if ($email): ?>
                  <p>We will contact you : <strong><?= $email ?></strong></p>
                <?php endif; ?>

                <p style="margin-top: 10px; font-weight: bold;">Your form is submitted.</p>

                <div style="margin-top: 20px;">
                  <a href="index.php" style="
                    padding: 14px 30px;
                    font-size: 18px;
                    background-color: #00c6a9;
                    color: white;
                    border-radius: 8px;
                    text-decoration: none;
                    font-weight: bold;
                    letter-spacing: 0.5px;
                    text-transform: uppercase;
                    display: inline-block;
                    box-shadow: 0 4px 12px rgba(0, 198, 169, 0.4);
                  "
                  >⬅ Go Home Page</a>
                </div>
              </div>
            </div>

          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>

  <!-- კონფეტიიიიიიიიიიიიიიიიიიი -->
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

  <!-- მაიმუნობის სკრიფტი -->
  <script>
    function delayedRedirect(button) {
      const textSpan = document.getElementById("btn-text");

      textSpan.innerText = "🎉 მოიცადე გეგუ...";
      button.disabled = true;
      button.style.opacity = "0.7";
      button.style.cursor = "not-allowed";
// წავიდა პირველი
confetti({
  particleCount: 150,
  spread: 100,
  origin: { y: 0.6 }
});

// წავიდა მეორე
setTimeout(() => {
  confetti({
    particleCount: 100,
    spread: 70,
    origin: { y: 0.3 }
  });
}, 800);

// წავიდა მესამე 💥
setTimeout(() => {
  confetti({
    particleCount: 120,
    spread: 160,
    origin: { x: 0.5, y: 0.25 } 
  });
}, 1600);

      // შეჩერება გვედზე
      setTimeout(() => {
        window.location.href = "index.php";
      }, 4000);
    }
  </script>
</section>








  <!-- footer -->
  <?php include 'partials/footer.php'; ?>
  <!-- end footer -->


 
<!-- scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>
