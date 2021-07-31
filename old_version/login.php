<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Login</title>

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>


    	html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="number"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}



      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

      </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" onsubmit="return login_me()">
    <img class="mb-4" src="img/logo.jpg" alt="" width="72">
    <h1 class="h3 mb-3 fw-normal"> ShopperWings</h1>

    <div class="form-floating">
      <input type="number" class="form-control" id="phone" autocomplete="off" placeholder="name@example.com">
      <label for="phone">Mobile No.</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="Password" placeholder="Password">
          <label for="Password">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>


      <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>

    </div>
    <div class="checkbox mb-3">
      <label>
       <a href="register_user.php">I Don't Have Account</a>
      </label>
          <center>OR</center>

    </div>
    <div class="checkbox mb-3">
      <label>
       <a href="register_shopper.php">I am Shopper</a>
      </label>
      
    </div>


</main>


<script type="text/javascript" src="js/ajax_d.js"></script>
<script type="text/javascript">


  function login_me() {
    console.log("Loginme called");

  var phone=document.getElementById('phone').value;
 var password=document.getElementById('Password').value;

   login_obj={ 
    phone:phone,
    password:password
  }

var login_cred=JSON.stringify(login_obj);



    ip("login",login_cred,login_callback,"php/action_login.php")
    return false;
  }

  function login_callback(par) {
    console.log("clbk ="+par);


    if (par=="8989"){
      alert("Wrong password & Mobile No.");
    }else if(par == "7575"){

    }



    
  }
</script>    
  </body>
</html>
