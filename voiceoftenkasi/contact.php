<?php include 'header.php'; ?>
<section class="connect-section py-5 bg-light text-center">
  <div class="container">
    <h2 class="mb-3">🌟 Connect with Voice of Tenkasi</h2>
    <p class="mb-4">Be a part of the movement. Join us online, follow our mission, and share the voice that matters.</p>

    <div class="row justify-content-center g-3">
      <?php
      $social_links = [
        [
          'url' => 'https://www.facebook.com/voiceoftenkasi/',
          'icon' => 'fab fa-facebook-f',
          'label' => 'Facebook',
          'class' => 'facebook',
        ],
        [
          'url' => 'https://x.com/voiceofTenkasi',
          'icon' => 'fab fa-twitter',
          'label' => 'Twitter (X)',
          'class' => 'twitter',
        ],
        [
          'url' => 'https://www.youtube.com/@VoiceofTenkasi',
          'icon' => 'fab fa-youtube',
          'label' => 'YouTube',
          'class' => 'youtube',
        ],
        [
          'url' => 'https://wa.me/message/TCNBJTUSNA2YN1',
          'icon' => 'fab fa-whatsapp',
          'label' => 'WhatsApp',
          'class' => 'whatsapp',
        ],
        [
          'url' => 'https://www.instagram.com/voice_of_tamilnadu/',
          'icon' => 'fab fa-instagram',
          'label' => 'Instagram',
          'class' => 'instagram',
        ],
      ];

      foreach ($social_links as $social): ?>
        <div class="col-6 col-sm-4 col-md-2">
          <a href="<?= $social['url'] ?>" target="_blank"
             class="social-card <?= $social['class'] ?> d-flex flex-column align-items-center text-decoration-none">
            <div class="icon-bg"><i class="<?= $social['icon'] ?>"></i></div>
            <span><?= $social['label'] ?></span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>