<?php include 'header.php'; ?>


<div class="container py-5 text-center" data-aos="fade-down">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <h1 class="display-5 fw-bold text-primary mb-4">
        "Empowering Change, Inspiring Hope: Uniting Hearts for a Better Tomorrow"
      </h1>
      <p class="lead text-muted">
        Stay tuned for the groundbreaking developments in Tenkasi – where every initiative is a step towards a brighter future.
      </p>
    </div>
  </div>
</div>

<?php
$events = [
  [
    'title' => 'Tenkasi Man Felicitated At Washington In The Presence Of US Congressmen',
    'desc' => 'Ananthan Ayyasamy, State Vice President of Tamil Nadu BJP Other States & Overseas Tamil Development Cell (OOSTD Cell), was awarded the honour “PRIDE OF INDIA” by US Congressman Raja Krishnamoorthi at the historic GSA INDIA@75 EXPO in Washington DC.',
    'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2023/11/Slide1-1.jpg',
    'read_more' => 'https://thecommunemag.com/tenkasi-man-felicitated-at-washington-in-the-presence-of-us-congressmen/'
  ],
  [
    'title' => 'Free Employment Training Program for Graduate Housewives',
    'desc' => 'The Voice of Tamil Nadu Foundation inaugurated a free job placement training program for graduate housewives in Sankarankovil. The event was graced by Dr. Tamilisai Soundararajan, Sridhar Vembu, Madhumati Narayanan, and Anathan Ayyasamy. The program aims to empower educated housewives.',
    'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/11/Slide1-4.png',
    'read_more_1' => 'https://tamiljanam.com/91340220/#google_vignette',
    'read_more_2' => 'https://www.tamil365.com/2024/11/Free-Employment-Training-Program-for-Graduate-Housewives.html'
  ],
  [
    'title' => 'Environmental Initiative: 1,000 Palm Seeds Planted Near Puliangudi',
    'desc' => 'The Voice of Tenkasi Foundation has planted 1,000 palm seeds along the bank of Suryanarayanapperi pond near Puliangudi. The initiative enhances the local ecosystem, promotes greenery, and supports soil conservation.',
    'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/11/Slide1-3.png'
  ],
  [
    'title' => 'Voice of Tenkasi Hosts Online Photography Contest on World Photography Day',
    'desc' => 'In celebration of World Photography Day, Voice of Tenkasi organized an online photography contest with the theme “Tamil Culture.” The contest showcased stunning images that highlighted the essence of Tamil heritage. Prizes were awarded to the top three winners.',
    'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/08/photography-contest.jpg'
  ],
  [
    'title' => 'Voice of Tenkasi Foundation Launches Summer Relief Initiative',
    'desc' => 'On behalf of the Voice of Tenkasi Foundation, Ananthan Ayyasamy, the founder, announced the opening of free water and buttermilk pandals to quench the thirst of the people during the scorching summer. In its initial phase, arrangements were made to provide daily drinking water and buttermilk in various municipalities including Vasudevanallur, Puliangudi, Sendhamaram, Surandai, and Mattalambarai Gunaramanallur. Foundation volunteers coordinated and executed this noble initiative.',
    'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/07/water-supply-2.png'
  ],
  [
    'title' => 'Empowering Women Entrepreneurs',
    'desc' => 'An appreciation function was organized for women entrepreneurs at Balaarunachalapuram Sadhana Vidyalaya School in Kadayanallur, on behalf of Ananthan Ayyasamy, the founder of Voice of Tenkasi. The event aimed to recognize and celebrate the achievements of women entrepreneurs in the community. Various dignitaries and guests attended to acknowledge their contributions to the local economy and society. It served as a source of inspiration for aspiring entrepreneurs and highlighted the importance of entrepreneurship in driving socio-economic growth and empowerment.',
    'img' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/07/vot-14.png'
  ]
];
?>

<?php foreach ($events as $i => $event): ?>
  <div class="container">
    <div class="news-card" data-aos="<?php echo $i % 2 === 0 ? 'fade-right' : 'fade-left'; ?>">
      <div class="row align-items-center">
        <div class="col-md-6 <?php echo $i % 2 === 0 ? '' : 'order-md-2'; ?>">
          <a href="<?php echo $event['img']; ?>" target="_blank">
            <img src="<?php echo $event['img']; ?>" class="img-fluid news-image" alt="<?php echo $event['title']; ?>">
          </a>
        </div>
        <div class="col-md-6 <?php echo $i % 2 === 0 ? '' : 'order-md-1'; ?>">
          <h4 class="fw-bold mt-4 mt-md-0"><?php echo $event['title']; ?></h4>
          <p class="text-muted mt-3"><?php echo $event['desc']; ?></p>
          <?php if (isset($event['read_more'])): ?>
            <a href="<?php echo $event['read_more']; ?>" class="btn btn-primary btn-sm me-2 mt-2">Read More</a>
          <?php endif; ?>
          <?php if (isset($event['read_more_1'])): ?>
            <a href="<?php echo $event['read_more_1']; ?>" class="btn btn-outline-primary btn-sm me-2 mt-2">Tamiljanam</a>
          <?php endif; ?>
          <?php if (isset($event['read_more_2'])): ?>
            <a href="<?php echo $event['read_more_2']; ?>" class="btn btn-outline-secondary btn-sm mt-2">Tamil365</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

<?php include 'footer.php'; ?>
