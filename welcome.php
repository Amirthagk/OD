<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Welcome</h1>
    <?php if (isset($_SESSION['login_success'])): ?>
      <div class="alert alert-success">
        <?php
          echo htmlspecialchars($_SESSION['login_success']);
          unset($_SESSION['login_success']); // Clear the message after displaying it
        ?>
      </div>
    <?php endif; ?>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['email']); ?>.</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </div>
</body>
</html>
