<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  .pagination-lg .page-link {
    font-size: 1rem; /* Increase font size */
    padding: 1rem 1.5rem; /* Adjust padding for larger size */
    background-color: #fdfdfd; /* Light background color */
    border: 1px solid #000000; /* Border color */
    color: #000000; /* Text color */
  }
  .pagination-lg .page-link:hover {
    background-color: #000000; /* Hover background color */
    border-color: #ffffff; /* Hover border color */
    color: #ffffff; /* Hover text color */
  }
  .carousel-inner > .item > img {
   width: 1800px;
   height: 400px;
 }
.item{
    position: absolute;
    object-fit: cover;
    height: 400px;
    width: 100%;
}
.IM{
  align: center;
  height: 20px;
  width: 20%;
}
.IM1{
  align: center;
  height: 30px;
  width: 20%;
}
a:link, a:visited{  
    background-color: white;  
    color: black;  
    border: 2px solid blck;  
    padding: 10px 20px;  
    text-align: center;  
    text-decoration: none;  
    display: inline-block;
    font-size: 10px;
}
a:hover, a:active{  
    background-color: black;  
    color: white;
}
</style>
<body>
  <div class="container-fluid p-5 bg-primary text-white text-center"><br>
        <img src="https://yt3.ggpht.com/a/AATXAJxzONM3ztmy4YpKWUj0LZyoUZlLUrC3sGP72Q=s900-c-k-c0xffffffff-no-rj-mo" height="100px" width="100px" alt="KEC Logo">
        <h1>Kongu Engineering College</h1>
        <h3>Thoppupalayam, Perundurai, Tamil Nadu - 638060</h3><br>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/2%205/Day%203/c_a_login.php">Faculty</a></li>
          <li><a href="D:\XAMPP\htdocs\2 5\Day 3\std_login.php">Student</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign-in<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/2%205/Day%203/c_a_signin.php">Faculty</a></li>
          <li><a href="D:\XAMPP\htdocs\2 5\Day 3\std_signin.php">Student</a></li>
        </ul>
      </li>
      <li><a href="D:\XAMPP\htdocs\2 5\Day 3\cal\index.php">Acadamic-Calender</a></li>
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>
  </div>
<body class="bg">
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

<div class="carousel-inner">
<div class="item active">
<img src="https://th.bing.com/th/id/OIP.hmeIJ2x_XLNfxbbD3VGKTgHaDc?w=324&h=162&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="image 1">
</div>
<div class="item">
<img src="https://th.bing.com/th/id/OIP.BEPUz4cMMCznSN2oVlaipwHaFj?w=222&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="image 2">
</div>
<div class="item">
<img src="https://th.bing.com/th/id/OIP.jKqRb-0k1QmF2ryVFbuRYwHaE4?w=271&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="image 3">
</div>
</div>

<a class="carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>

<a href="#myCarousel" class="right carousel-control" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>

</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 bg-danger text-white text-center p-3">
      <div class="text">
        <h1>ABOUT</h1>
        <h4>Learn more about our college <br> Explore with images,<br>achievements, placements</h4>
      </div><br>
      <a href="#">MORE</a>
      <p><br></p>
    </div>

    <div class="col-sm-4 bg-success text-white text-center p-3">
      <h1>FEES STRUCTURE</h1>
      <h4>Learn more about our college fee <br>structure, course details,<br>fees structure</h4><br>
      <a href="#">FEES</a>
      <p><br></p>
    </div>

    <div class="col-sm-4 bg-info text-white text-center p-3">
      <h1>OD FORM</h1>
      <h4>Apply for OD form<br>Check your OD approval or rejection <br>from facilty</h4><br>
      <a href="D:\XAMPP\htdocs\2 5\Day 3\homepage.php">APPLY</a>
      <p><br></p>
    </div>
  </div>
</div>

<div class="container-fluid p-5 bg-dark text-center">
  <div class="container mt-5">
    <nav aria-label="Page navigation example">
          <ul class="pagination pagination-lg">
              <li class="page-item"><a class="page-link" href="http://localhost/2%205/Day%203/home1.php">1</a></li>
              <li class="page-item"><a class="page-link" href="http://localhost/2%205/Day%203/home2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
      </nav>
</div> 
</div>
</body>
</html>