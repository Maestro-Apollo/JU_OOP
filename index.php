<!DOCTYPE html>
<?php
include 'classes/read.php';
include 'classes/insert.php';

 ?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JU Login and Register</title>
    <link rel="stylesheet" href="css/fontawesme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <section class="nav_bar_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    </section>


    <section>
      <div class="row container">
        <div class="col-md-4">
          <form class="form-group" action="" method="post"><br>
            <input type="text" class="form-control" name="username" value="" placeholder="Username"><br>
            <input type="password" class="form-control" name="password" value="" placeholder="Password"><br>
            <select class="gender form-control" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <br>
            <input type="submit" name="submit" value="submit" class="btn btn-info form-control">
          </form>

        </div>
        <div class="col-md-8">
          <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <?php while($rows = mysqli_fetch_assoc($data)){ ?>
    <tr>
      <th scope="row"><?php echo $rows['id']; ?></th>
      <td><?php echo $rows['username']; ?></td>
      <td><?php echo $rows['password']; ?></td>
      <td><?php echo $rows['gender']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
        </div>
      </div>




    </section>







    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>




  </body>
</html>
