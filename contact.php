<html>
<head>
    <title>Message sent</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<style>
    h2{
        color: red;
    }
    h3{
        font-family: Poppins;
    }
   .contentt
    {
        width:100%;
        height:100%;
        margin:auto;
  }
   body{
      z-index: -1;
    background: linear-gradient(160deg, #fff 55%, #16c9f6 0%);
   }
       

</style>
</head>
<body>
    <div class="container">
        <div class="contentt col-lg-12 col-md-12 col-12 offset-lg-2 offset-md-2 offset-sm-1 offset-1  col-12 d-flex align-items-center">
            <p>
            <?php
              $name=$_POST['name'];
           echo "<h1>Hi,$name.</h1><br>";
            ?>
          </p>
<br>
<h3>Your Message has been sent,thanks for your feedback.</h3>
        </div>
    </div>

  
</body>
</html>