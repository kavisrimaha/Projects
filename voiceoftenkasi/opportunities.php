<?php include 'header.php'; ?>

<div class="container my-5" style=" padding-top: 50px;">
  <div class="row align-items-center" >
    <!-- Left Column: Image -->
    <div class="col-lg-6 mb-4 mb-lg-0 text-center animate__animated animate__fadeIn">
      <img 
        src="https://i.pinimg.com/736x/58/d3/db/58d3db724187b26fdcb63ccb9f2f8b2b.jpg" 
        alt="Business teamwork" 
        title="Business teamwork"
        class="img-fluid rounded shadow"
        style="max-height: 450px; object-fit: cover;"
        loading="lazy">
    </div>

    <!-- Right Column: Text -->
    <div class="col-lg-6" 	style="padding-left: 20px;">
      <h5 class=" mb-2 animate__animated animate__fadeIn text-center" style="font-size: 2rem; font-family: 'Montserrat', sans-serif; color: #068faf ">
        Empowering Tenkasi
      </h5>
      <h2 class="display-5 fw-bold mb-3 animate__animated animate__fadeIn" 	style="padding-left: 20px;">
        Shaping a Tech Hub
      </h2>
     
      <p class="text-start text-center animate__animated animate__fadeIn">
        Join us on our journey to establish Tenkasi as a global technological powerhouse. 
        Together, let’s create a positive change that resonates far beyond the borders of Tenkasi.
      </p>
      <p class="text-start text-center animate__animated animate__fadeIn">
        Embark on a transformative voyage with us as we endeavor to position Tenkasi as a prominent 
        technological hub. Join hands in crafting a meaningful impact that transcends geographical boundaries. 
        Together, let’s usher in a wave of positive change that reverberates globally.
      </p>
    </div>
  </div>
</div>

<?php
$jobs = [
    [
        'id' => 'One',
        'title' => 'UI UX Designer',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '2-4 years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'Figma, UX research, creativity',
        'duties' => 'Design wireframes, collaborate with developers',
        'logo' => './assets/images/uiux.png'
    ],
    [
        'id' => 'Two',
        'title' => 'Senior Native App Developer (Android)',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '4+ years',
        'mode' => 'Work-from-Office',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'Kotlin/Java, REST APIs, Android SDK',
        'duties' => 'Develop native Android apps, maintain code quality',
        'logo' => './assets/images/andriod.jpg'
    ],
    [
        'id' => 'Three',
        'title' => 'Senior Full-Stack Web Developer',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '4+ years',
        'mode' => 'Work-from-Office',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'PHP, React, SQL, Git',
        'duties' => 'Build and integrate front & back-end components',
        'logo' => './assets/images/fullstack.jpg'
    ],
    [
        'id' => 'Four',
        'title' => 'Senior Back-end Developer',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '5+ years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'Node.js, APIs, Database skills',
        'duties' => 'Develop scalable backend systems',
        'logo' => './assets/images/backend.jpg'
    ],
    [
        'id' => 'Five',
        'title' => 'Senior Front-end Developer',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '2+ years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'HTML, CSS, JS, React/Angular',
        'duties' => 'Create responsive UIs, optimize performance',
        'logo' => './assets/images/frontend.jpg'
    ],
    [
        'id' => 'Six',
        'title' => 'QA Engineer',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '2+ years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'Automation tools, attention to detail',
        'duties' => 'Test and report bugs, automate test cases',
        'logo' => './assets/images/QA Engineer.jpg'
    ],
    [
        'id' => 'Seven',
        'title' => 'Project Manager',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '5+ years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'Leadership, Agile/Scrum knowledge',
        'duties' => 'Manage timelines, coordinate with teams',
        'logo' => './assets/images/Project Manager.jpg'
    ],
    [
        'id' => 'Eight',
        'title' => 'Marketing Executive',
        'location' => 'N/A',
        'experience' => '1+ years',
        'mode' => 'N/A',
        'employment_type' => 'N/A',
        'must_have' => 'Communication, digital marketing basics',
        'duties' => 'Promote brand, handle campaigns',
        'logo' => './assets/images/Marketing Executive.jpg'
    ],
    [
        'id' => 'Nine',
        'title' => 'Front-end Developer',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '2+ years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'HTML, CSS, JS, Bootstrap/React',
        'duties' => 'Develop UI components, ensure responsiveness',
        'logo' => './assets/images/frontend2.jpg'
    ],
    [
        'id' => 'Ten',
        'title' => '.NET Developer',
        'location' => 'Mumbai',
        'experience' => '2+ years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'C#, ASP.NET, SQL Server',
        'duties' => 'Develop and maintain .NET apps',
        'logo' => './assets/images/.NET Developer.jpg'
    ],
    [
        'id' => 'Eleven',
        'title' => 'Business Analyst',
        'location' => 'Mumbai/Chennai/Hyderabad',
        'experience' => '2+ years',
        'mode' => 'Hybrid',
        'employment_type' => 'Full-Time, Permanent',
        'must_have' => 'Analytical thinking, stakeholder communication',
        'duties' => 'Gather requirements, document workflows',
        'logo' => './assets/images/Business Analyst.jpg'
    ],
];

?><div class="container py-5">
  <h2 class="text-center fw-bold mb-4">Job Openings</h2>
  <div class="row"> <!-- Row wrapper needed for grid -->
    <?php foreach ($jobs as $job): ?>
      <div class="col-md-4 p-3"> <!-- 3 cards per row on md and above -->
        <div class="card job-card text-center shadow-sm p-4">
          <?php if (!empty($job['logo'])): ?>
            <div class="job-logo-wrapper mb-3">
              <img src="<?= htmlspecialchars($job['logo']); ?>" alt="<?= htmlspecialchars($job['title']); ?> logo" class="img-fluid rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
            </div>
          <?php endif; ?>

          <h5 class="card-title"><?= htmlspecialchars($job['title']); ?></h5>

          <div class="job-content">
            <ul class="list-unstyled small mb-2">
              <li><strong>Location:</strong> <?= htmlspecialchars($job['location']); ?></li>
              <li><strong>Experience:</strong> <?= htmlspecialchars($job['experience']); ?></li>
              <li><strong>Mode:</strong> <?= htmlspecialchars($job['mode']); ?></li>
              <li><strong>Type:</strong> <?= htmlspecialchars($job['employment_type']); ?></li>
            </ul>
            <p class="small mb-1"><strong>Must Have:</strong> <?= htmlspecialchars($job['must_have']); ?></p>
            <p class="small"><strong>Duties:</strong> <?= htmlspecialchars($job['duties']); ?></p>
            <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div> <!-- End .row -->
</div>
</div> <!-- End .row -->
</div>


<?php include 'footer.php'?>