<?php include 'header.php'; ?>
<!-- Section Heading -->
<div class="container my-5">
  <div class="text-center">
    <h1 class="display-5 fw-bold">Major Activities</h1>
    <hr class="mx-auto" style="width: 100px; height: 3px; background-color: #000; opacity: 1;">
  </div>
</div>

<!-- First Row: 4 Key Pillars -->
<div class="container py-5">
  <div class="row g-4 text-center">

    <?php
    $activities = [
      [
        'title' => 'Startup Initiatives',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/startup.png',
        'desc' => [
          'Fostering a culture of innovation and entrepreneurship.',
          'Providing a platform for startups to thrive in a supportive ecosystem.'
        ]
      ],
      [
        'title' => 'Jobs4Life',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/routine.png',
        'desc' => [
          'Bridging the gap between job seekers and opportunities.',
          'Creating sustainable employment opportunities for the local community.'
        ]
      ],
      [
        'title' => 'Tech Education',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/graduation-cap.png',
        'desc' => [
          'Empowering the youth through cutting-edge technology education.',
          'Preparing the workforce for the challenges and opportunities of the digital age.'
        ]
      ],
      [
        'title' => 'Empowering Farmers',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/planting.png',
        'desc' => [
          'Implementing sustainable agricultural practices.',
          'Enhancing the livelihoods of farmers through technology-driven solutions.'
        ]
      ]
    ];

    foreach ($activities as $item): ?>
        <div class="col-md-6 col-lg-3">
          <div class="card card-activity h-100">
            <div class="card-body">
              <img src="<?= $item['img']; ?>" alt="<?= $item['title']; ?>" class="img-fluid mb-3 activity-icon">
              <h5 class="fw-bold"><?= $item['title']; ?></h5>
              <?php foreach ($item['desc'] as $point): ?>
                <p class="mb-1 text-muted small"><?= $point; ?></p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>


  </div>
</div>

<!-- Second Row: Detailed Initiatives -->
<div class="container py-5">
  <div class="row g-4 text-center">

    <?php
    $detailedActivities = [
      [
        'title' => 'Free Education Initiatives',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/higher-education.png',
        'desc' => 'We believe education is the key to unlocking one’s potential. Our foundation actively engages in providing free education activities, with a special focus on spoken English. We understand the importance of language skills in today’s globalized world, and our programs aim to bridge the gap, empowering individuals to communicate effectively.'
      ],
      [
        'title' => 'Career Building for Graduates',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/success.png',
        'desc' => 'Recognizing the challenges that graduates face as they enter the workforce, Voice of Tenkasi Foundation is dedicated to facilitating their career growth. We provide guidance, skill development programs, and networking opportunities to empower graduates to navigate the professional landscape successfully.'
      ],
      [
        'title' => 'Health is Happiness',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/dumbbell.png',
        'desc' => 'We strongly believe that health is the foundation of a happy and fulfilling life. Our foundation is actively involved in promoting health and well-being within the community.'
      ],
      [
        'title' => 'What Next After High School',
        'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/question-mark.png',
        'desc' => 'Guiding and mentoring students on the various paths available after high school is a crucial aspect of our educational initiatives. We provide insights and resources to help them make informed decisions about their future.'
      ]
    ];

    foreach ($detailedActivities as $activity): ?>
        <div class="col-md-6 col-lg-3">
          <div class="card card-activity h-100">
            <div class="card-body">
              <img src="<?= $activity['img']; ?>" alt="<?= $activity['title']; ?>" class="img-fluid rounded-circle mb-3 activity-icon">
              <h5 class="fw-bold"><?= $activity['title']; ?></h5>
              <p class="text-muted small"><?= $activity['desc']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

  </div>
</div>


<!-- Bootstrap YouTube Video Section -->
<section class="py-5" style="background-color: #E6F3FF;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="ratio ratio-16x9 shadow rounded" data-aos="fade-up">
          <iframe
            src="https://www.youtube.com/embed/68YzVnCN2W8?autoplay=1&loop=1&playlist=68YzVnCN2W8&controls=1&rel=0&playsinline=1"
            title="What We Do | Voice of Tenkasi Foundation"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"
          ></iframe>
        </div>
      </div>
    </div>
  </div>

 <div class="container py-5">
  <div class="row">

    <!-- Education Programs -->
    <div class="col-md-4 mb-4">
      <div class="program-card h-100">
        <div class="mb-3">
          <img src="./assets/images/education.png" alt="Education Icon">
        </div>
        <h4 class="fw-bold">Education Programs</h4>
        <hr class="mx-auto my-3" style="width: 60px; height: 2px; background-color: #0d6efd; opacity: 1;">
        <p>
          Enabling access to quality education through scholarships, school development projects, and skill-building.
        </p>
      </div>
    </div>

    <!-- Healthcare Initiatives -->
    <div class="col-md-4 mb-4">
      <div class="program-card h-100">
        <div class="mb-3">
          <img src="./assets/images/health1.jpg" alt="Healthcare Icon">
        </div>
        <h4 class="fw-bold">Healthcare Initiatives</h4>
        <hr class="mx-auto my-3" style="width: 60px; height: 2px; background-color: #198754; opacity: 1;">
        <p>
          Supporting healthcare facilities, organizing medical camps, and creating awareness about preventive health.
        </p>
      </div>
    </div>

    <!-- Sustainable Development -->
    <div class="col-md-4 mb-4">
      <div class="program-card h-100">
        <div class="mb-3">
          <img src="./assets/images/Sustainable Development.jpg" alt="Sustainability Icon">
        </div>
        <h4 class="fw-bold">Sustainable Development</h4>
        <hr class="mx-auto my-3" style="width: 60px; height: 2px; background-color: #198754; opacity: 1;">
        <p>
          Implementing clean energy, waste management, and environmental conservation initiatives in Tenkasi.
        </p>
      </div>
    </div>

  </div>
</div>

</section>
 <hr class="mx-auto my-3" style="width: 0px; height: 100px; background-color:rgba(25, 135, 84, 0); opacity: 1;">
       
<?php include 'footer.php'; ?>

