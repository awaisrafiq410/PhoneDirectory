
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>PhoneDirectory</title>

    <!-- Bootstrap core CSS -->
    <link href="./res/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="./res/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">PhoneDirectory</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

      <form class="form-signin" method="POST" action="register.php">
        <img class="mb-4" src="./res/img/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
        <label for="inputText" class="sr-only">Name</label>
        <input type="text" id="inputText" name="name" class="form-control" placeholder="Enter Your Name" required autofocus>
        <label for="inputNumber" class="sr-only">Mobile No.</label>
        <input type="tel" id="inputNumber" name="mobile" class="form-control" placeholder="Mobile No. e.g:+923XXXXXXXXX" maxlength="13" pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password (6-15 length)" minlength="6" maxlength="15" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button> 
        <a href="signin.php" class="btn btn-default">Already Registered | Login Here</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      </form>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="./res/js/bootstrap.min.js"></script>
  </body>
</html>

