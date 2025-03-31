<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Appointment Confirmation</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="sub_page">

<?php include('partials/header.php'); ?>

<section class="layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Appointment Confirmation</h2>
    </div>

    <div class="alert alert-success" role="alert">
      <strong>Thank you!!</strong> Your registration has been accepted. Please wait for confirmation.
    </div>
    
    <h5>Information :</h5>
    <ul class="list-group mb-4">
      <li class="list-group-item"><strong>Patient name:</strong> <?= htmlspecialchars($_POST['patient_name'] ?? '-') ?></li>
      <li class="list-group-item"><strong>Phone:</strong> <?= htmlspecialchars($_POST['phone'] ?? '-') ?></li>
      <li class="list-group-item"><strong>Doctor:</strong> <?= htmlspecialchars($_POST['doctor'] ?? '-') ?></li>
      <li class="list-group-item"><strong>Department:</strong> <?= htmlspecialchars($_POST['department'] ?? '-') ?></li>
      <li class="list-group-item"><strong>Symptoms:</strong> <?= htmlspecialchars($_POST['symptoms'] ?? '-') ?></li>
      <li class="list-group-item"><strong>Date:</strong> <?= htmlspecialchars($_POST['date'] ?? '-') ?></li>
    </ul>

    <a href="index.php" class="btn btn-primary">Home page</a>
  </div>
</section>

<?php include('partials/footer.php'); ?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
