<?php include 'header.php'; ?>

<?php
$live_events = [
  [
    'title' => 'INDUS TRADE EXPO',
    'image' => 'https://voiceoftenkasi.org/wp-content/uploads/2025/07/ITE-tenkasi_Flyer-for-circulation.jpg',
    'details' => '<strong>Date:</strong> July 19th & 20th, 2025<br><strong>Location:</strong> ESSAKI MAHAL, TENKASI<br><strong>Shop Size in Meters:</strong> 2/2, 2/3, 3/3',
    'link' => 'https://events.startuptenkasi.com/INDUSTRADEEXPO',
    'button' => 'Book Now'
  ]
];

$past_events = [
  [
    'title' => 'Reviving Rural Economy: Dr. Ambedkar’s Perspective',
    'image' => 'https://voiceoftenkasi.org/wp-content/uploads/2025/06/Ramnath-Ambedkar-event-Flyer-v1-02-scaled.jpg',
    'details' => '<strong>Date:</strong> July 09, 2025<br><strong>Time:</strong> 9:00 AM<br><strong>Location:</strong> Vyasa Arts & Science (Women’s) College, Vasudevanallur, Tenkasi Dt.',
    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSeowbnsBAoHh_tWjhelM00Zw1j5lnGHNgNHQM0Cst9F2ombDA/viewform?usp=header',
    'button' => 'Register Now'
  ],
  [
    'title' => 'Free NEET Coaching Class',
    'image' => 'https://voiceoftenkasi.org/wp-content/uploads/2025/06/neet-admission.jpg',
    'details' => '<strong>Date:</strong> June 15, 2025<br><strong>Time:</strong> 4:00 PM<br><strong>Location:</strong> S. Veerasamy Chettiyar College Campus, Puliyangudi, Tenkasi District',
    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSdl0snQekhusEuTIBMWKdhZEoDU2qeJLi9Ct-Mv-1riy-UgsA/viewform?usp=header',
    'button' => 'Register Now'
  ],
  [
    'title' => 'Career Guidance Program',
    'image' => 'https://voiceoftenkasi.org/wp-content/uploads/2025/05/12th-career-counselling-scaled.png',
    'details' => '<strong>Date:</strong> May 11, 2025<br><strong>Time:</strong> 9:00 AM to 12:00 PM<br><strong>Location:</strong> Suba Sundari Mahal, Surandai.',
    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSfwtGPsX5BtRpS_1JL6DBqtJ2xFWPseFZ4evAX9BLcDj3hRhw/viewform?usp=header',
    'button' => 'Register Now'
  ],
  [
    'title' => 'Space Science',
    'image' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/09/WhatsApp-Image-2024-09-17-at-12.53.17.jpeg',
    'details' => '<strong>Date:</strong> September 30, 2024 – October 01, 2024<br><strong>Time:</strong> 10:00 AM to 4:00 PM<br><strong>Location:</strong> AVK International Residential Sr. Sec. School, Sankarankovil.',
    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSfwtGPsX5BtRpS_1JL6DBqtJ2xFWPseFZ4evAX9BLcDj3hRhw/viewform?usp=header',
  ],
  [
    'title' => 'Free Teacher Training & Job Support for Graduate Housewives',
    'image' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/11/WhatsApp-Image-2024-11-07-at-16.07.19.jpeg',
    'details' => '<strong>Date:</strong> November 24, 2024<br><strong>Location:</strong> Gurusamy Gokul Thirumana Mahal, Melaratha Vethi, Sankarankovil.',
    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSfwtGPsX5BtRpS_1JL6DBqtJ2xFWPseFZ4evAX9BLcDj3hRhw/viewform?usp=header',
  ],
  [
    'title' => 'Construct Toilets in Government School',
    'image' => 'https://voiceoftenkasi.org/wp-content/uploads/2024/08/Toilet-Day-Introduction-Flyer-1.jpg',
    'details' => '<strong>Date:</strong> November 24, 2024<br><strong>Location:</strong> Gurusamy Gokul Thirumana Mahal, Melaratha Vethi, Sankarankovil.',
    'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSfwtGPsX5BtRpS_1JL6DBqtJ2xFWPseFZ4evAX9BLcDj3hRhw/viewform?usp=header',
    'button' => 'Register Now'
  ]
];
?>

<div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="text-center my-4">Event Gallery</h1>

      <!-- Centered Nav Tabs -->
      <div class="d-flex justify-content-center">
        <ul class="nav nav-tabs" id="eventTabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="live-events-tab" data-bs-toggle="tab" href="#live-events" role="tab" aria-controls="live-events" aria-selected="true">Live Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="past-events-tab" data-bs-toggle="tab" href="#past-events" role="tab" aria-controls="past-events" aria-selected="false">Past Events</a>
          </li>
        </ul>
      </div>

      <!-- Tab Content -->
      <div class="tab-content" id="eventTabsContent">
        <!-- LIVE EVENTS -->
        <div class="tab-pane fade show active" id="live-events" role="tabpanel" aria-labelledby="live-events-tab">
          <div class="row r py-4">
            <?php foreach ($live_events as $event): ?>
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                  <a href="<?= $event['link'] ?>" target="_blank">
                    <img src="<?= $event['image'] ?>" class="card-img-top" alt="<?= $event['title'] ?>">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title "style="color:rgb(134, 201, 255); "><?= $event['title'] ?></h5>
                    <p class="card-text"><?= $event['details'] ?></p>
                    <?php if (!empty($event['button'])): ?>
                      <a href="<?= $event['link'] ?>" class="btn btn-danger"><?= $event['button'] ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- PAST EVENTS -->
        <div class="tab-pane fade" id="past-events" role="tabpanel" aria-labelledby="past-events-tab">
          <div class="row justify-content-center py-4">
            <?php foreach ($past_events as $event): ?>
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                  <a href="<?= $event['link'] ?>" target="_blank">
                    <img src="<?= $event['image'] ?>" class="card-img-top" alt="<?= $event['title'] ?>">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title" style="color:rgb(134, 201, 255);"><?= $event['title'] ?></h5>
                    <p class="card-text"><?= $event['details'] ?></p>
                    <?php if (!empty($event['button'])): ?>
                      <a href="<?= $event['link'] ?>" class="btn btn-danger"><?= $event['button'] ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <button class="btn btn-primary mt-4" id="loadMore">Load More</button>
      <hr class="mx-auto my-3" style="width: 0px; height: 50px; background-color:rgba(25, 135, 84, 0); opacity: 1;">
  
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
