

<?php
    // $result ='<div class="alert alert-success"> Form was submitted </div>';
  $error = "";
  if(!$_POST["name"]){
    $error .= 'please enter your name<br>';
  }
  if(!$_POST["email"]){
    $error .=  'please enter your email<br>';
  }
  if(!$_POST["comment"]){
    $error .=  'please enter your comment<br>';
  }

  if($error){
    $result ='<div class="alert alert-danger">'. $error .'</div>';

  }

  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $error .= "invalid email<br>";
  }

  if($eroor){
    $result = $error;
  }
  else{
    if(mail("khodrojy3@gmail.com","comment from my website",
    "Name: " . $_POST["name"]. "
     Comment is : " . $_POST["comment"])){
      $resul = '<div calss="alert alert-success> Your Email was submitted </div>';
    }

  }

?>




<!DOCTYPE html>
<html>
<head>
  <title>My First Webpage</title>

  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Latest compiled and minified CSS -->
  <link
    rel="stylesheet"
    href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap.min.css"
  />

  <!-- Optional theme -->
  <link
    rel="stylesheet"
    href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
bootstrap-theme.min.css"
  />

  <style>
    .emailForm {
      border: 1px solid grey;
      border-radius: 10px;
      margin-top: 20px;
    }

    form {
      padding-bottom: 20px;
    }
  </style>
  
</head>

<body>
  <div class="container">
    
    <div class="row">
      
      <div class="col-md-6 col-md-offset-3 emailForm">
        <h1>My email form</h1>
        
     
        
        <p class="lead">
          Please get in touch - I'll get back to you as soon as I can.
        </p>
        
        <form method="post">
          
          <div class="form-group">
            
            <?php echo $result; ?>

            <label for="name">Your Name:</label>
            <input
              type="text"
              name="name"
              class="form-control"
              placeholder="Your Name"
              value="<?php echo $_POST["name"];?>"
            />
            
          </div>
          
          <div class="form-group">
            
            <label for="email">Your Email:</label>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Your Email"
              value="<?php echo $_POST["email"];?>"
            />
            
          </div>
          
          <div class="form-group">
            
            <label for="comment">Your Comment:</label>
            <textarea class="form-control" name="comment"></textarea
            >
            
          </div>
          
          <input
            type="submit"
            name="submit"
            class="btn btn-success btn-lg"
            value="Submit"
          />
          
        </form>
      </div>
      
    </div>
    
  </div>
  
  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  
</body>
</html>
