<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">हम किसान</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">मुख्यपृष्ठ  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">बारे में </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        फसल 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="wheat.php">गेहूँ </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="paddy.php">धान </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="maize.php">मक्का </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="water.php">पानी  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fertiliser.php">उर्वरक/खाद </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">संपर्क करे </a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div> -->
  <button type="button" class="btn btn-outline-primary mx-3" data-toggle="modal" data-target="#loginBackdrop">login</button>
  <button type="button" class="btn btn-outline-primary"  data-toggle="modal" data-target="#signupBackdrop">signup</button>
</nav>
<!--login Modal -->
<div class="modal fade" id="loginBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginBackdropLabel">हम किसान में लॉगिन करें </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="text-center bg-primary my-2 font-30 h-100" id="heading">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">user name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label container" for="exampleCheck1">पासवर्ड सुरक्षित करें <a href="" class="float-right">पासवर्ड भूल गए तो यहाँ दबायें</a></label>
  </div>
  <button type="submit" class="btn btn-primary float-center">लॉगिन करें</button>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
<!--signup Modal -->
<div class="modal fade" id="signupBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupBackdropLabel">हम किसान के साथ जुड़े</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
    <!-- <div class="text-center" id="text1">All fields are mendetory</div> -->
  <div class="form-group">
    <!-- <label for="exampleInputEmail1" id="input">Email address</label> -->
    <input type="text" class="form-control my-2"  aria-describedby="emailHelp" name="name" placeholder="नाम*">
    <input type="text" class="form-control my-2"  aria-describedby="emailHelp" name="fname" placeholder="पिता का नाम *">
    <input type="number" class="form-control my-2"  aria-describedby="emailHelp" name="phone" placeholder="फोन नंबर *">
    <input type="text" class="form-control my-2"  aria-describedby="emailHelp" name="village" placeholder="गाँव *">
    <input type="text" class="form-control my-2"  aria-describedby="emailHelp" name="block" placeholder="प्रखण्ड *">
    <input type="text" class="form-control my-2"  aria-describedby="emailHelp" name="district" placeholder="जिला *">
    <input type="text" class="form-control my-2"  aria-describedby="emailHelp" name="state" placeholder="राज्य *">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1" id="input1">Password</label> -->
    <input type="text" class="form-control my-2" id="exampleInputPassword1" name="user_name" placeholder="यूजर नाम बनाये ">
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="नया पासवर्ड डाले" pattern=".{8,}" title="Eight or more characters">
    <!-- <input type="password" class="form-control my-2" id="exampleInputPassword1" name="password" placeholder="पासवर्ड दुबारा डाले " pattern=".{8,}" title="Eight or more characters"> -->
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember password</label>
    <button class="form-check-label" for="exampleCheck1" id="frgt">Forget password/Forget user id</button>
  </div> -->
  <button type="submit" class="btn btn-primary">रजिस्टर करें </button>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="22.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="33.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>