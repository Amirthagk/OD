<?php
session_start();
include('php.php'); // Adjust path if necessary

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (!isset($_SESSION['email'])) {
    header("Location: c_a_login.php");
    exit();
} else {
    $email = $_SESSION['email'];
    $sql = "SELECT name, department FROM detials WHERE email = ?";
    $stmt = $con->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['name'] = $row['name'];
            $_SESSION['department'] = $row['department'];
        } else {
            echo "No user found.";
            exit();
        }
        $stmt->close();
    } else {
        echo "SQL Error: " . $con->error;
        exit();
    }
}
?>

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: verdana;
            background: linear-gradient(135deg, #FFD1DC, #A1C3D1, #FFDFD3, #D4A5A5);
            color: #333333;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
        aside, section {
            margin: 20px 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">OD APPLICATION</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="http://localhost/2%205/Day%203/home1.php">Home</a></li>
            <li><a href="http://localhost/2%205/Day%203/cal/index.php">Event-Calendar</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <!-- Sidebar -->
        <aside class="col-md-4">
            <font style="font-family: 'Times New Roman' font-size: 30px;">
                <h1>Welcome</h1>
                <?php if (isset($_SESSION['login_success'])): ?>
                    <div class="alert alert-success">
                        <?php
                        echo htmlspecialchars($_SESSION['login_success']);
                        unset($_SESSION['login_success']);
                        ?>
                    </div>
                <?php endif; ?>
                <p>You are logged in as <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                <p>Name: <?php echo htmlspecialchars($_SESSION['name']); ?></p>
                <p>Department: <?php echo htmlspecialchars($_SESSION['department']); ?></p>
                <a href="http://localhost/2%205/Day%203/home1.php" class="btn btn-danger">Logout</a>
            </font>
            <br><br><br>
            <h4>Non-Technical Clubs</h4>
            <ul style="font-family: 'Georgia', serif;">
                <li>Quiz Club</li>
                <li>EPRC Club</li>
                <li>Tamil Mandaram</li>
                <li>IELTS Club</li>
            </ul>
            <h4>Technical Clubs</h4>
            <ol style="font-family: 'Georgia', serif;">
                <li>Coding Club</li>
                <li>Android Development Club</li>
                <li>Maths Club</li>
                <li>Cloud Computing Club</li>
            </ol>
        </aside>
        
        <!-- Main Content -->
        <main class="col-md-8"><center>
        <h3 style="font-family: 'Times New Roman'; font-size: 50px;">Kongu Engineering college</h3>
    <h3 style="font-family: 'Times New Roman'; font-size: 60px;">Apply for OD</h3>
    <p style="font-family: 'Times New Roman'; font-size: 40px;">Events Conducted</p>
    <div class="x">
        <a href="http://localhost/2%205/Day%203/Interclg.php">Inter-College Events</a>
    </div>
    <div class="x">
        <a href="http://localhost/2%205/Day%203/clgevent.php">College event</a>
    </div>
</main></center>

    </div>
</div>
<br><br><br>
    <marquee direction="right" bgcolor="white" width="100%" height="30px" style="font-family: 'Lucida Console';">
        Kongu Engineering College
    </marquee>
</body>
</html>