<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OD Application</title>
    <link href="D:\XAMPP\htdocs\2 5\Day 3\home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OD APPICATION</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/2%205/Day%203/bootstrap1.php">Home</a></li>
      <li><a href="http://localhost/2%205/Day%203/cal/index.php">Event-Calender</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
<body style="font-family:verdana; background: linear-gradient(135deg, #FFD1DC, #A1C3D1, #FFDFD3, #D4A5A5);
color: #333333;">
<section>
    <center><font size="5"><h1 style="font-family:verdana;">
        <?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: c_a_login.php");
    exit();
}
?>
    <h1>Welcome</h1>
    <?php if (isset($_SESSION['login_success'])): ?>
      <div class="alert alert-success">
        <?php
          echo htmlspecialchars($_SESSION['login_success']);
          unset($_SESSION['login_success']); // Clear the message after displaying it
        ?>
      </div>
    <?php endif; ?>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    <a href="home1.php" class="btn btn-danger">Logout</a>
  </div></h1></font><br><br>
    <center>
        <h3 style="font-family:Times New Roman">Apply for OD</h3>

        <p style="font-family:Times New Roman">Events Conducted</p>
        <div class="x">
        <a href="http://localhost/2%205/Day%203/Interclg.php">Inter-College Events</a>
        </div>
        <div class="x">
        <a href="http://localhost/2%205/Day%203/clgevent.php">Collage event</a>
        </div>
        <div class="x">
        <a href="#">Workshops</a>
        </div>
    </center>
</section>
<br><br>
<aside>
    <button>
    <ul align="left" style="font-family:Serif Georgia">
        <h4>Non Technical Clubs</h4>
        <ul>
            <li>
                    Quiz Club
            </li>
            <li>
                    EPRC Club
            </li>
            <li>
                    Tamil Mandaram
            </li>
            <li>
                    IELTS Club
            </li>
        </ul>

        <h4>Technical labs</h4>
    <ol align="left"  style="font-family:Serif Georgia">
            <li>
                Coding Clud
            </li>
            <li>
                    Android Development Club
            </li>
            <li>
                    Maths Club
            </li>
            <li>
                    Cloud Computing Club
            </li>
        </ol>
    </button>
</aside>
</body>
<br><br>
<marquee direction="right" bgcolor="white" width="100%" height="100%"  style="font-family:Lucida Console" > kongu Engineering college </marquee>
</html>