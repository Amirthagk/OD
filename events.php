<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Finder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 1rem;
    }
    .event-container {
      background: white;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
    }
    .event-item {
      padding: 0.5rem;
      margin-bottom: 0.5rem;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>

<div class="event-container">
  <h2>Events on <?php echo htmlspecialchars($_POST['date']); ?></h2>
  <div id="events">
    <?php
      // Sample events data
      $events = [
        ["name" => "Event 1", "date" => "2024-05-16"],
        ["name" => "Event 2", "date" => "2024-05-17"],
        ["name" => "Event 3", "date" => "2024-05-18"],
        ["name" => "Event 4", "date" => "2024-05-16"]
      ];

      $inputDate = $_POST['date'];
      $filteredEvents = array_filter($events, function($event) use ($inputDate) {
        return $event['date'] === $inputDate;
      });

      if (count($filteredEvents) > 0) {
        foreach ($filteredEvents as $event) {
          echo '<div class="event-item">' . htmlspecialchars($event['name']) . '</div>';
        }
      } else {
        echo '<div>No events found for this date.</div>';
      }
    ?>
  </div>
</div>

</body>
</html>
