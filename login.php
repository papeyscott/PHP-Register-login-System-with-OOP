<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Area | Account Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminDev</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
         

        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Area <small> Account Login</small></h1>
          </div>
                   
        </div>        
      </div>      
    </header>


   

    <section id="main">
      <div class="container">
        <div class="row">   
          <div class="col-md-4 col-md-offset-4">
            <form id="login" accept="" class="well">
              <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="" class="form-control" placeholder="enter Email">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="" class="form-control" placeholder="password">
              </div>

              <button type="submit" class="btn btn-default btn-block">Login</button>
            </form>              
          </div>        
        </div>        
      </div>      
    </section>




<footer id="footer">
  <p>Copyright BabyDev, &copy; 2018</p>  
</footer>


    <script>
      CKEDITOR.replace( 'editor1' );
    </script>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
