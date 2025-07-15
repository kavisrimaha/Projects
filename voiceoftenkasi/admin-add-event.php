<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Add New Event</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $image = $_POST['image'];
        $details = $_POST['details'];
        $link = $_POST['link'];
        $button = $_POST['button'];
        $event_date = $_POST['event_date'];

        $sql = "INSERT INTO events (title, image, details, link, button, event_date)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$title, $image, $details, $link, $button, $event_date]);

        echo '<div class="alert alert-success">Event added successfully!</div>';
    }
    ?>
    <form method="POST" class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label class="form-label">Image URL</label>
        <input type="text" name="image" class="form-control" required>
      </div>
      <div class="col-12">
        <label class="form-label">Event Details (HTML supported)</label>
        <textarea name="details" class="form-control" rows="4" ></textarea>
      </div>
      <div class="col-md-6">
        <label class="form-label">Event Link</label>
        <input type="text" name="link" class="form-control" >
      </div>
      <div class="col-md-3">
        <label class="form-label">Button Text</label>
        <input type="text" name="button" class="form-control" placeholder="e.g., Register Now">
      </div>
      <div class="col-md-3">
        <label class="form-label">Event Date</label>
        <input type="date" name="event_date" class="form-control" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Add Event</button>
      </div>
    </form>
  </div>
</body>
</html>
