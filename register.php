<?php

require_once 'core/init.php';
       
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Area | Account Register</title>

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
            <h1 class="pull-right"><small> Account Register</small> USERS</h1>
          </div>
                   
        </div>        
      </div>      
    </header>
       
<?php



if (input::exists()) {
  if (Token::check(input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
          'name' => array(
                'required'  => true,
                'min'       => 2,
                'max'       => 50
            ),
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'email' => array(
                'required'  => true,
                'unique' => 'users'
            ),
            'password' => array(
                'required'  => true,
                'min' => 6,
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            )                
      ));
      
      if ($validation->passed()) {
           //register users
        Session::flash('success', 'You have Successfully registered');
        header('Location: index.php');
           // echo '<h3 class="text-success text-center"> Passed </h3>';
      }   else{
            //output error
            foreach ($validation->errors() as $error) {
              echo '<h3 class="text-danger text-center">'. $error. '</h3>', '<br';
            }
          }
  }
}
        ?>

       

       <section id="main">
      <div class="container">
        <div class="row">   
          <div class="col-md-4 col-md-offset-4">
            <form action="" class="well" method="post">

              

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="enter your Name" id="name" value="<?php echo escape(input::get('name')); ?>" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" value="<?php echo escape(input::get('username')); ?>" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?php echo escape(input::get('email')); ?>" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password">
              </div>

              <div class="form-group">
                <label for="password_again">Confirm Password</label>
                <input type="password" name="password_again" id="password_again" class="form-control" placeholder="password" value="">
              </div>
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
              <button type="submit" name="submit" class="btn btn-success btn-block">Register</button>
            </form>              
          </div>        
        </div>        
      </div>      
    </section>


<!--<style>
    footer {
    position: fixed;
    height: 50px;
    bottom: 0;
    width: 100%;
}
</style>-->



<footer id="footer" class="fixed-bottom">
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
