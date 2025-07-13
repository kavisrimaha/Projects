<?php include 'header.php'; ?>

<!-- AOS CSS + JS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<?php
$site_config = [
  'site_name' => 'Voice of Tenkasi',
  'site_description' => 'Empowering Lives, Enriching Futures of Tenkasi',
  'base_url' => 'https://voiceoftenkasi.org',
  'contact_email' => 'info@voiceoftenkasi.org'
];

$initiatives = [
  [
    'title' => 'Startup Initiatives',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/startup.png',
    'description' => 'Supporting local entrepreneurs and startups',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ],
  [
    'title' => 'Jobs4Life',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/routine.png',
    'description' => 'Creating sustainable career opportunities',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ],
  [
    'title' => 'Tech Education',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/graduation-cap.png',
    'description' => 'Providing quality technology education',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ],
  [
    'title' => 'Empowering Farmers',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/planting.png',
    'description' => 'Supporting agricultural innovation',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ]
];

$more_initiatives = [
  [
    'title' => 'Free Education Initiatives',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/higher-education.png',
    'description' => 'Making education accessible to all',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ],
  [
    'title' => 'Career Building for Graduates',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/success.png',
    'description' => 'Guiding graduates to successful careers',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ],
  [
    'title' => 'Health is Happiness',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/dumbbell.png',
    'description' => 'Promoting health and wellness',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ],
  [
    'title' => 'What Next After High School',
    'icon' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/question-mark.png',
    'description' => 'Guiding students for their future',
    'link' => 'https://voiceoftenkasi.org/what-we-do/'
  ]
];

$gallery_images = [
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide1-3.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide2.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide3.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide4.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide5.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide6.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide7.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2023/12/Slide8.png',
  'https://voiceoftenkasi.org/wp-content/uploads/2024/01/Presentation2-scaled.jpg',
  'https://voiceoftenkasi.org/wp-content/uploads/2024/02/vot4-3-scaled.jpg'
];

$goals = [
  'Empower the community through accessible education.',
  'Foster innovation in key sectors like AI, semiconductors, IT, manufacturing, and agriculture.',
  'Establish Tenkasi as a global technological powerhouse.'
];

function renderInitiativeCard($initiative, $index) {
  return '
    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="' . ($index * 100) . '">
      <div class="card h-100 shadow-sm initiative-card" style="background-color: #E6F3FF;">
        <div class="card-body text-center d-flex flex-column">
          <img src="' . htmlspecialchars($initiative['icon']) . '" 
               alt="' . htmlspecialchars($initiative['title']) . '" 
               class="img-fluid mb-3 initiative-icon" width="100" loading="lazy">
          <h5 class="card-title fw-semibold flex-grow-1">' . htmlspecialchars($initiative['title']) . '</h5>
          <p class="card-text text-muted small">' . htmlspecialchars($initiative['description']) . '</p>
          <a href="' . htmlspecialchars($initiative['link']) . '" class="btn btn-outline-primary btn-sm mt-auto">
            Read More <i class="fas fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>';
}
?>
<section class="hero-section py-5 position-relative" style="overflow: hidden;  background-color:rgb(0, 132, 255)">
  <!-- Background Image Layer -->
  <div class="position-absolute top-0 start-0 w-100 h-100" 
       style="background-image: url('https://images.pexels.com/photos/6775105/pexels-photo-6775105.jpeg'); 
              background-size: cover; 
              background-position: center; 
              background-repeat: no-repeat; 
              opacity: 0.6; 
              z-index: 0;">
  </div>

  <!-- Foreground Content -->
  <div class="container position-relative" style="z-index: 2;;">
    <div class="row align-items-center">

      <!-- Left Column -->
      <div class="col-md-6 mb-4" data-aos="fade-up" style="position: relative;">
        <img src="https://voiceoftenkasi.org/wp-content/uploads/2024/06/imgonline-com-ua-ReplaceColor-BokLmEfIqN-removebg-preview.png"
             alt="Empowerment Illustration"
             class="position-absolute top-50 start-50 translate-middle opacity-25"
             style="z-index: 0; max-width: 100%; height: auto; pointer-events: none;"
             loading="lazy">
        <div class="position-relative p-4" style="z-index: 2;">
          <h1 class="hero-title m-0" style="font-family: 'Scheherazade New', sans-serif; font-size: 3.5rem; line-height: 1.3; ">
            Empowering Lives<br>Enriching Futures<br>
            <span class="text" style="color: rgb(255, 255, 255);">of Tenkasi</span>
          </h1>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-md-6 mb-4 text-center" data-aos="fade-up" data-aos-delay="300">
        <a href="https://voiceoftenkasi.org/wp-content/uploads/2025/06/VOTF-Magazine-_October-2024-1_compressed-1-1.pdf" target="_blank">
          <img src="https://voiceoftenkasi.org/wp-content/uploads/2024/10/VOTF-Magazine-_October-2024_page-0001-208x300.jpg"
               class="img-fluid rounded shadow-sm"
               width="208"
               loading="lazy"
               alt="Magazine Cover">
        </a>
      </div>

    </div>
  </div>
</section>





<!-- About Us -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4" data-aos="fade-up">
        <h6 class="text-uppercase text-primary mb-3">About Us</h6>
        <p class="lead">Welcome to <strong>Voice of Tenkasi</strong> — witness the evolution of Tenkasi rural into a global tech hub of India by 2032.</p>
        <h6 class="text-uppercase text-primary mt-4 mb-3">Our Goal is to</h6>
        <ul class="list-unstyled">
          <?php foreach ($goals as $index => $goal): ?>
            <li class="mb-2" data-aos="fade-up" data-aos-delay="<?= 400 + ($index * 100) ?>">
              <i class="fas fa-check-circle text-success me-2"></i> <?= htmlspecialchars($goal) ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-6 mb-4 text-center" data-aos="fade-up" data-aos-delay="300">
        <img src="https://voiceoftenkasi.org/wp-content/uploads/2024/06/Untitled-design-8.png" class="img-fluid rounded shadow-sm" width="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Gallery -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" data-aos="fade-up">Gallery Highlights</h2>
    <div class="d-flex overflow-auto gap-3" id="galleryScroll">
      <?php foreach ($gallery_images as $index => $image): ?>
        <div class="card flex-shrink-0 border-0 shadow-sm" style="scroll-snap-align: start;" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
          <img src="<?= $image ?>" class="card-img-top" style="object-fit: contain; max-height: 400px;" alt="Gallery Image <?= $index + 1 ?>">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- What We Do -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" data-aos="fade-up">What We Do</h2>
    <div class="row g-4">
      <?php foreach ($initiatives as $index => $initiative): ?>
        <?= renderInitiativeCard($initiative, $index); ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- More Initiatives -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" data-aos="fade-up">More Initiatives</h2>
    <div class="row g-4">
      <?php foreach ($more_initiatives as $index => $initiative): ?>
        <?= renderInitiativeCard($initiative, $index); ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
