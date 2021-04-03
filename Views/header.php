<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="4 aces">
  <meta name="description" content="A platform where People who want to get and contribute ecofriendly and sustainable substitues in our daily life .">
  <meta name="keywords" content="sustainable ways , how to be eco friendly , eco-friendly , ecofriendly , carbon-footprint , carbon-footprint calculator ">
  <meta name="robots" content="index,follow">
  <title>wantECO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="app/scss/style.css" >
  <link rel="stylesheet" type="text/css" href="app/scss/getpagestyle.css" >
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="fontawesome/js/all.js"></script>
  <style>
    html{
      scroll-behavior: smooth;
    }
    .input-field {
        max-width: 380px;
        width: 100%;
        background-color: #f0f0f0;
        margin: 10px 0;
        height: 55px;
        border-radius: 55px;
        /* border-radius: 55px 40% 40% 55px; */
        display: grid;
        grid-template-columns: 15% 85%;
        padding: 0 0.4rem;
        position: relative;
        }

    .input-field i {
        text-align: center;
        line-height: 55px;
        color: #acacac;
        transition: 0.5s;
        font-size: 1.1rem;
        }

    .input-field input {
        background-color: none;
        outline: none;
        border: none;
        line-height: 1;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 0px 55px 55px 0px;
        color: #333;
        }

    .input-field input::placeholder {
        color: #aaa;
        font-weight: 500;
        }

    .alerts{
      display:none;
    }
    #submited{
        display:none;
    }

    .profile{
      background-color: #ffffff;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='0' x2='0' y1='0' y2='100%25' gradientTransform='rotate(240)'%3E%3Cstop offset='0' stop-color='%23ffffff'/%3E%3Cstop offset='1' stop-color='%234FE'/%3E%3C/linearGradient%3E%3Cpattern patternUnits='userSpaceOnUse' id='b' width='540' height='450' x='0' y='0' viewBox='0 0 1080 900'%3E%3Cg fill-opacity='0.1'%3E%3Cpolygon fill='%23444' points='90 150 0 300 180 300'/%3E%3Cpolygon points='90 150 180 0 0 0'/%3E%3Cpolygon fill='%23AAA' points='270 150 360 0 180 0'/%3E%3Cpolygon fill='%23DDD' points='450 150 360 300 540 300'/%3E%3Cpolygon fill='%23999' points='450 150 540 0 360 0'/%3E%3Cpolygon points='630 150 540 300 720 300'/%3E%3Cpolygon fill='%23DDD' points='630 150 720 0 540 0'/%3E%3Cpolygon fill='%23444' points='810 150 720 300 900 300'/%3E%3Cpolygon fill='%23FFF' points='810 150 900 0 720 0'/%3E%3Cpolygon fill='%23DDD' points='990 150 900 300 1080 300'/%3E%3Cpolygon fill='%23444' points='990 150 1080 0 900 0'/%3E%3Cpolygon fill='%23DDD' points='90 450 0 600 180 600'/%3E%3Cpolygon points='90 450 180 300 0 300'/%3E%3Cpolygon fill='%23666' points='270 450 180 600 360 600'/%3E%3Cpolygon fill='%23AAA' points='270 450 360 300 180 300'/%3E%3Cpolygon fill='%23DDD' points='450 450 360 600 540 600'/%3E%3Cpolygon fill='%23999' points='450 450 540 300 360 300'/%3E%3Cpolygon fill='%23999' points='630 450 540 600 720 600'/%3E%3Cpolygon fill='%23FFF' points='630 450 720 300 540 300'/%3E%3Cpolygon points='810 450 720 600 900 600'/%3E%3Cpolygon fill='%23DDD' points='810 450 900 300 720 300'/%3E%3Cpolygon fill='%23AAA' points='990 450 900 600 1080 600'/%3E%3Cpolygon fill='%23444' points='990 450 1080 300 900 300'/%3E%3Cpolygon fill='%23222' points='90 750 0 900 180 900'/%3E%3Cpolygon points='270 750 180 900 360 900'/%3E%3Cpolygon fill='%23DDD' points='270 750 360 600 180 600'/%3E%3Cpolygon points='450 750 540 600 360 600'/%3E%3Cpolygon points='630 750 540 900 720 900'/%3E%3Cpolygon fill='%23444' points='630 750 720 600 540 600'/%3E%3Cpolygon fill='%23AAA' points='810 750 720 900 900 900'/%3E%3Cpolygon fill='%23666' points='810 750 900 600 720 600'/%3E%3Cpolygon fill='%23999' points='990 750 900 900 1080 900'/%3E%3Cpolygon fill='%23999' points='180 0 90 150 270 150'/%3E%3Cpolygon fill='%23444' points='360 0 270 150 450 150'/%3E%3Cpolygon fill='%23FFF' points='540 0 450 150 630 150'/%3E%3Cpolygon points='900 0 810 150 990 150'/%3E%3Cpolygon fill='%23222' points='0 300 -90 450 90 450'/%3E%3Cpolygon fill='%23FFF' points='0 300 90 150 -90 150'/%3E%3Cpolygon fill='%23FFF' points='180 300 90 450 270 450'/%3E%3Cpolygon fill='%23666' points='180 300 270 150 90 150'/%3E%3Cpolygon fill='%23222' points='360 300 270 450 450 450'/%3E%3Cpolygon fill='%23FFF' points='360 300 450 150 270 150'/%3E%3Cpolygon fill='%23444' points='540 300 450 450 630 450'/%3E%3Cpolygon fill='%23222' points='540 300 630 150 450 150'/%3E%3Cpolygon fill='%23AAA' points='720 300 630 450 810 450'/%3E%3Cpolygon fill='%23666' points='720 300 810 150 630 150'/%3E%3Cpolygon fill='%23FFF' points='900 300 810 450 990 450'/%3E%3Cpolygon fill='%23999' points='900 300 990 150 810 150'/%3E%3Cpolygon points='0 600 -90 750 90 750'/%3E%3Cpolygon fill='%23666' points='0 600 90 450 -90 450'/%3E%3Cpolygon fill='%23AAA' points='180 600 90 750 270 750'/%3E%3Cpolygon fill='%23444' points='180 600 270 450 90 450'/%3E%3Cpolygon fill='%23444' points='360 600 270 750 450 750'/%3E%3Cpolygon fill='%23999' points='360 600 450 450 270 450'/%3E%3Cpolygon fill='%23666' points='540 600 630 450 450 450'/%3E%3Cpolygon fill='%23222' points='720 600 630 750 810 750'/%3E%3Cpolygon fill='%23FFF' points='900 600 810 750 990 750'/%3E%3Cpolygon fill='%23222' points='900 600 990 450 810 450'/%3E%3Cpolygon fill='%23DDD' points='0 900 90 750 -90 750'/%3E%3Cpolygon fill='%23444' points='180 900 270 750 90 750'/%3E%3Cpolygon fill='%23FFF' points='360 900 450 750 270 750'/%3E%3Cpolygon fill='%23AAA' points='540 900 630 750 450 750'/%3E%3Cpolygon fill='%23FFF' points='720 900 810 750 630 750'/%3E%3Cpolygon fill='%23222' points='900 900 990 750 810 750'/%3E%3Cpolygon fill='%23222' points='1080 300 990 450 1170 450'/%3E%3Cpolygon fill='%23FFF' points='1080 300 1170 150 990 150'/%3E%3Cpolygon points='1080 600 990 750 1170 750'/%3E%3Cpolygon fill='%23666' points='1080 600 1170 450 990 450'/%3E%3Cpolygon fill='%23DDD' points='1080 900 1170 750 990 750'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect x='0' y='0' fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect x='0' y='0' fill='url(%23b)' width='100%25' height='100%25'/%3E%3C/svg%3E");
      background-attachment: fixed;
      background-size: cover;
    }

    .edit input {
        border: none;
        display: inline;
        font-family: inherit;
        font-size: inherit;
        padding: none;
        width: auto;
        }
    .edit input:focus {
        /* border:none; */
        background-color:aliceblue;
    }
    .brown{
        color:brown;
        font-size:14px;
        font-weight: 700;
    }

    .black{
        color:black;
        font-size: 16px;
        font-weight: 900;
    }
    .green{
  color: darkgreen;
  font-weight:600;
}

    .post{
            border:0.3vw solid #BC36B2;
            border-radius:5%;
            /* margin:0.8vw; */
            padding:0.8vw;
            background-color:white;
            font-size:1.5vw;
            font-weight:700;
        }
  </style>
</head>
<body>
  <!-- header -->
  <header class="header">
    <div class="overlay has-fade"></div>

    <nav class="container container--pall flex flex-jc-sb flex-ai-c">
      <img src="img/logo.jpeg" width="100px" onclick="{window.location.href='index.php'}" style="cursor: pointer;">
      <!--- menu for responsive(mobile) -->
      <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
        <span></span> 
        <span></span>
        <span></span>
      </a>

      <div class="header__links hide-for-mobile">
        <a href="?page=about"> About us</a>
        <?php if(isset($_SESSION['id'])){ ?>
          <a href="?process=logout">Log Out</a>
        <?php }else{   ?>
          <a data-toggle="modal" data-target="#login-modal" href="#">Log in</a>
          <a data-toggle="modal" data-target="#signup-modal" href="#">Sign up</a>
        <?php  }  ?>   
      </div>

      <?php if(isset($_SESSION['id'])){ ?>
      <a href="?page=contribute" class="button header__cta hide-for-mobile ">My Pledges</a>
        <?php }else{   ?>   
      <a href="?page=join" class="button header__cta hide-for-mobile ">Why Join</a>
      <?php  }  ?>   

    </nav>

    <div class="header__menu has-fade">
          <a href="?page=about">About us</a>
        <?php if(isset($_SESSION['id'])){ ?>
          <a href="?process=logout">Log Out</a>
        <?php }else{   ?>
          <a data-toggle="modal" data-target="#login-modal" href="#">Log in</a>
          <a data-toggle="modal" data-target="#signup-modal" href="#">Sign up</a>
        <?php  }  ?>
    </div>
  </header>

  <div class="modal fade" id="login-modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalTitleIn">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="alert alert-danger alerts" type="alert" id="alert-login"></div>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="userIn" id="userIn" class="form-control my-auto"
                                    placeholder="Email or Username " autocomplete="off" aria-describedby="helpId">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" class="my-auto form-control" name="passwordIn" id="passwordIn"
                                    placeholder="Password">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a data-toggle="modal" data-target="#signup-modal" data-dismiss="modal" href="#">Sign Up Instead</a>
                    <button type="submit" class="btn btn-primary" id="buttonIn">Log In</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

        
    </div>

  <div class="modal fade" id="signup-modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="signup-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form>
                            <div class="alert alert-danger alerts" type="alert" id="alert-signup"></div>
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text"  autocomplete="off" class="form-control my-auto" name="usernameUp" id="usernameUp" placeholder="Enter Username here" autofill="off">
                            </div>
                            <div class="alert alert-warning alerts" type="alert" id="alert-already-exists"></div>
                            <div class="alert alert-success alerts" type="alert" id="alert-available"></div>
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="email"  autocomplete="off" name="emailUp" id="emailUp" class="form-control my-auto"
                                    placeholder="Enter email ID here" aria-describedby="helpId">
                            </div>
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" class="form-control my-auto" name="passwordUp" id="passwordUp"
                                    placeholder="Password">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a data-toggle="modal" data-target="#login-modal" data-dismiss="modal" href="#">Log In Instead</a>
                      <button type="submit" class="btn btn-primary" id="buttonUp">Sign Up</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

