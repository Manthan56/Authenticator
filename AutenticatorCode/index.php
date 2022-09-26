<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!--on scroll -->


  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body data-spy="scroll" data-target="#navbarsDefault">

  <!--Code for navbar-->



  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php">Emploo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsDefault">
       
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-4">
            <a class="nav-link" href="./login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Here is code for the carousel-->
  <section id="main">
    <div id="aboutcarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">

        <li data-target="#aboutcarousel" data-slide-to="0" class="active"></li>
        

      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block " src="images/1.jpg" alt="First">
          <div class="carousel-caption d-md-block">
            <h3>Lorem</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum eveniet fugiat vel odio? Veritatis in, blanditiis cum voluptate tenetur voluptatem quidem totam est ipsam odit non assumenda mollitia quam voluptas!</p>
          </div>
        </div>
        
      </div>

    

    </div>
  </section>

  <section id="about" data-aos="fade-up">
    <div class="container">
      <h3>About</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque necessitatibus pariatur adipisci magni exercitationem velit facilis autem obcaecati quas, ipsam debitis, beatae dolorem non ipsa eligendi laborum architecto officiis mollitia!</p>

    </div>

  </section>

 




  <!--on scroll gestures-->


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


</body>

</html>