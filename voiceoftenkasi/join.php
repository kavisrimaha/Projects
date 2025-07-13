<?php include 'header.php'; ?>

<?php
// Section data variables
$volunteer_heading = "Our Passionate Volunteers";
$volunteer_paragraphs = [
  "At Voice of Tenkasi Foundation, we are a team of passionate individuals dedicated to making a difference. Our members come from diverse backgrounds, united by a shared commitment to uplift the communities of Tenkasi.",
  "Join our team of dedicated volunteers and make a direct impact on the lives of Tenkasi’s residents. Your skills and passion can contribute to our various projects and programs.",
  "<strong>Complete the form by clicking the button below.</strong>"
];
$volunteer_button_text = "Fill Out Form";
$volunteer_button_link = "https://volunteer.voiceoftenkasi.org/";
$volunteer_image = "https://voiceoftenkasi.org/wp-content/uploads/2024/06/Untitled-design-5.png";
$volunteer_image_alt = "Volunteers at Work";
?>

<!-- AOS Animate on Scroll CSS & JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Volunteers Section -->
<section class="py-5 bg-light" id="volunteers" style="font-family: 'Segoe UI', sans-serif;">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Text Column -->
      <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
        <hr class="mb-4">
        <h2 class="mb-3 fw-bold text-primary"><?= $volunteer_heading ?></h2>

        <?php foreach ($volunteer_paragraphs as $para): ?>
          <p class="text-secondary mb-3" style="line-height: 1.7;"><?= $para ?></p>
        <?php endforeach; ?>

        <a class="btn btn-primary btn-lg mt-3 shadow-sm" href="<?= $volunteer_button_link ?>" target="_blank" style="transition: all 0.3s ease;">
          <?= $volunteer_button_text ?> <i class="ms-2 bi bi-arrow-right"></i>
        </a>
      </div>

      <!-- Image Column -->
      <div class="col-md-6 text-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
        <div class="p-2 bg-white rounded shadow-lg">
          <img src="<?= $volunteer_image ?>" class="img-fluid rounded" alt="<?= $volunteer_image_alt ?>" style="max-height: 400px; object-fit: contain;">
        </div>
      </div>

    </div>
  </div>
</section>



<?php include 'footer.php'; ?>
