
        <?php

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NSTI CALICUT</title>
        <link rel="icon" href="./favicon.ico" />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/project NSTI/assets/css/style.css" />
    </head>

    <body>
      <!-- Site footer -->
  <footer class="site-footer">
    <div class="container-fluid footer-main">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <h6>ADDRESS</h6>
          <p class="text-justify">National Skill Training Institute (NSTI)<br>
            Govindapuram PO,<br>
            Calicut,<br>
            Pin:673016,<br>
            Kerala State
          </p>
        </div>

        <div class="col-xs-6 col-md-4 ">
            
          <h6 >CONTACT DETAILS</h6>
          <ul class="contact-footer">
            Mail: <a href="dirati.clt-mosde@gov.in">dirati.clt-mosde@gov.in</a><br>
            Phone: 0495 2742500
          </ul>
        </div>

        <div class="col-xs-6 col-md-4">
          <h6>GOOGLE MAP</h6>
          
            
                <div style="width: 100%"><iframe width="100%" height="150px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=nsti%20calicut+(creators)&amp;t=k&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            
        </div>
      </div>
      <hr>
    </div>
    <div class="container-fluid footer-main">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
       <a href="#">Team CREATORS</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              
          </ul>
        </div>
      </div>
    </div>
</footer>

<!--footer end-->
<script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <?php

        if(isset($_SESSION['status'] ) && $_SESSION['status'] !='' ){

         ?>

         <script>
               swal({
                       title: "Data Saved Successfully!",
                      text: "We will contact You soon",
                      icon: "success",
                      button: "OK",
                  });
        </script>

         <?php

          unset($_SESSION['status']);
        }

        ?>




      <!-- <script>
        swal("Good Job","you clicked","success");
      </script> -->
</body>
</html>
