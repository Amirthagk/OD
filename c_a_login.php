<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Advisor Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-image: url('https://i.pinimg.com/originals/0e/e9/67/0ee967a36d0ff13b5f28d73de064d551.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      width: 25%;
    }
  </style>
</head>
<body>
  <?php
  session_start();
  include('C:\xampp\htdocs\ALR005\php.php');
  
  $errors = [];
  $inputs = [];
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'] ?? '';
      $password = $_POST['password'] ?? '';
  
      if (!$email) {
          $errors['email'] = 'Email is required';
      }
  
      if (!$password) {
          $errors['password'] = 'Password is required';
      }
  
      if (empty($errors)) {
          $con = new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
  
          if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
          }
  
          $stmt = $con->prepare("SELECT * FROM detials WHERE email = ? AND newpassword = ?");
          $stmt->bind_param("ss", $email, $password);
  
          $stmt->execute();
  
          $result = $stmt->get_result();
  
          if ($result->num_rows > 0) {
              $_SESSION['email'] = $email;
              header("Location: welcome.php");
              exit();
          } else {
              $errors['login'] = 'Invalid email or password.';
          }
  
          $stmt->close();
          $con->close();
      }
  }
  ?>
  <div class="login-container">
    <h2>Class Advisor Login</h2>
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <p><?php echo htmlspecialchars($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form action="" method="post">
      <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo htmlspecialchars($inputs['email'] ?? ''); ?>" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
        <a href="C:\xampp\htdocs\23ALR005\day2\Resetpassword2.html">Forgot Password</a><br>
      </div>
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="remember" name="remember">
        <label class="form-check-label" for="remember"> Remember me </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
