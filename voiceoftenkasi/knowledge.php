<?php include 'header.php'; ?>
<?php
// Define the course data arrays
$course_sections = [
  'Programming Languages' => [
    [
      'title' => 'Java Tutorial for Complete Beginners',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/java1-editorial-logo-free-download-free-vector_1687630902-1024x435.jpeg',
      'duration' => '16 hours',
      'students' => '1,897,265',
      'rating' => 4.5,
      'desc' => 'Learn to program using the Java programming language.',
      'link' => 'https://www.udemy.com/course/java-tutorial/'
    ],
    [
      'title' => 'Introduction To Python Programming',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/images-2.png',
      'duration' => '1 hour',
      'students' => '955,050',
      'rating' => 4.5,
      'desc' => 'A Quick and Easy Intro to Python Programming.',
      'link' => 'https://www.udemy.com/course/pythonforbeginnersintro/'
    ],
    [
      'title' => 'C++ Tutorial for Complete Beginners',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/images-3.png',
      'duration' => '4 hours',
      'students' => '1,200,000',
      'rating' => 4.5,
      'desc' => 'Learn the basics of C++ programming.',
      'link' => '#'
    ],
    [
      'title' => 'Learn to Program in Javascript: Beginner to Pro',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/download-15.png',
      'duration' => '4 hours',
      'students' => '224,226',
      'rating' => 4.5,
      'desc' => 'Become a great programmer.',
      'link' => '#'
    ],
    [
      'title' => 'Fundamentals of Programming: Understanding C#',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/images-4.png',
      'duration' => '10hr 20min',
      'students' => '98,665',
      'rating' => 4.5,
      'desc' => 'Easy to understand video lectures.',
      'link' => '#'
    ],
    [
      'title' => 'Object Oriented Programming (OOPs) for JAVA Interviews',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/java1-editorial-logo-free-download-free-vector_1687630902-1024x435.jpeg',
      'duration' => '13 hour 6 min',
      'students' => '90,985',
      'rating' => 4.5,
      'desc' => 'Clear Java Interviews with confidence.',
      'link' => '#'
    ],
    [
      'title' => 'Introduction to Spring Boot 2 and Spring Framework 5',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/download-16.png',
      'duration' => '2 hours 18 min',
      'students' => '36,154',
      'rating' => 4.5,
      'desc' => 'Build a Spring Boot Web Application.',
      'link' => '#'
    ],
    [
      'title' => 'Introduction to TypeScript',
      'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/06/images-5.png',
      'duration' => '1 hour 6min',
      'students' => '96,825',
      'rating' => 4.5,
      'desc' => 'Supercharge your web-applications.',
      'link' => '#'
    ]
  ],
  'Web Development Courses' => [
    [
      'title' => 'How to Create a Listing or Directory Website with WordPress',
      'img' => 'https://s.w.org/style/images/about/WordPress-logotype-wmark.png',
      'duration' => '1hr 31min',
      'students' => '22,453',
      'rating' => 4.5,
      'desc' => 'Create a Listing, Directory or Real Estate site.',
      'link' => '#'
    ],
    [
      'title' => 'Code a Coming Soon Landing Page in Bootstrap 4',
      'img' => 'https://getbootstrap.com/docs/3.3/assets/brand/bootstrap-solid.svg',
      'duration' => '1hr 21min',
      'students' => '48,687',
      'rating' => 5,
      'desc' => 'Build a countdown landing page.',
      'link' => '#'
    ],
    [
      'title' => 'Learn to Make an Animated Image Gallery using HTML5',
      'img' => 'https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg',
      'duration' => '1hr 10min',
      'students' => '31,305',
      'rating' => 4.5,
      'desc' => 'Guide to animation with HTML.',
      'link' => '#'
    ],
    [
      'title' => 'ASP.NET Zero: Development with ASP.NET Core & Angular',
      'img' => 'https://upload.wikimedia.org/wikipedia/commons/0/0e/Microsoft_.NET_logo.png',
      'duration' => '1hr 32min',
      'students' => '50,106',
      'rating' => 5,
      'desc' => 'Build SPA with .NET Core & Angular.',
      'link' => '#'
    ]
  ]
];
?>

<!-- Main Title with Animation -->
<!-- Section with Background Image -->
<section class="position-relative py-2 bg-image-wrapper">
  <!-- Background Image Layer -->
  <div class="bg-image-blur"></div>

  <!-- Actual Free Course Content -->
  <div class="position-relative" style="z-index: 1;">
    <div class="container text-center">
      <h2 class="animated-title mb-4 mt-2 " data-aos="fade-right">

        <span class="fw-bold display-4" style="color: rgb(18, 57, 116);">Free</span>
        <span class="fw-bold display-3" style="color: rgba(105, 165, 255, 0.86);">Courses</span>
      </h2>
    </div>

    <!-- Subheading -->
    <div class="container text-center my-2">
      <h2 class="sub-heading" data-aos="fade-left">

        <span class="d-block" style="color:rgb(18, 57, 116)">Free Course's provided by</span>
        <span class="fw-bold display-6 " style="color:rgba(105, 165, 255, 0.86);">Udemy</span>
      </h2>
    </div>
  </div>
</section>



<?php foreach ($course_sections as $section_title => $courses): ?>
 <div class="container my-4">
 <h3 class="section-title text-center mt-2 mb-4" data-aos="fade-up"><?php echo $section_title; ?></h3>

</div>

  <div class="container py-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 course-row">
      <?php foreach ($courses as $index => $course): ?>
       <div class="col" data-aos="zoom-in-up" data-aos-delay="<?= $index * 100 ?>">

          <div class="card h-100 border-0 shadow rounded-3 text-center course-card">
            <img src="<?php echo $course['img']; ?>" class="card-img-top p-3 mx-auto" alt="<?php echo $course['title']; ?>" style="max-height: 140px; object-fit: contain;">
            <div class="card-body">
              <div class="mb-2 text-secondary small">
                <i class="bi bi-book me-1"></i> <?php echo $course['duration']; ?> &nbsp;&nbsp;
                <i class="bi bi-people-fill me-1"></i> <?php echo $course['students']; ?> students
              </div>
              <div class="mb-2 text-warning fs-6">
                <?php
                  $fullStars = floor($course['rating']);
                  $halfStar = ($course['rating'] - $fullStars >= 0.5);
                  for ($i = 0; $i < $fullStars; $i++) echo '<i class="bi bi-star-fill"></i>';
                  if ($halfStar) echo '<i class="bi bi-star-half"></i>';
                ?>
              </div>
              <h6 class="fw-bold mb-1"><?php echo $course['title']; ?></h6>
              <p class="text-muted small mb-3"><?php echo $course['desc']; ?></p>
            </div>
            <div class="card-footer bg-white border-0">
              <a href="<?php echo $course['link']; ?>" class="btn btn-outline-primary w-100">Enroll Now <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endforeach; ?>

<div class="container py-5">
  <p class="text-center">
    <a href="https://www.udemy.com/courses/development/programming-languages/?lang=en&price=price-free&sort=popularity" class="fw-bold text-success">
      click here
    </a> to know more about free programming language courses in Udemy.
  </p>
</div>



<?php include 'footer.php'; ?>