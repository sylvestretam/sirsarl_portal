<html>

<head>
  <link rel="icon" href="template/assets/img/logosisas.jpg" sizes="32x32">
  <title> Portal </title>
  <!-- CORE CSS-->
  <link href="template/css/materialize.css" type="text/css" rel="stylesheet">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text"> <?= (isset($error)) ? $error : "" ?> </h5>
      <div class="section"></div>
      <h5 class="red-text error">  </h5>
      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="?action=chgpwd">
            <input class='validate' type='hidden' name='user_id' value='<?= (isset($user_id)) ? $user_id : "" ?>'/>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' value='<?= (isset($user_email)) ? $user_email : "" ?>' disabled/>
                <label for='email'>User</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password'  placeholder='Password must content [A-Z]*[a-z]*[0-9]*' required/>
                <label for='email'>Enter new Password</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' id='re-password' required/>
                <label for='password'>Re-enter the password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#'><b>Password must content [A-Z]*[a-z]*[0-9]*</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='action' value='con' class='col s12 btn btn-large waves-effect indigo submit'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <!-- jQuery Library -->
  <script type="text/javascript" src="template/js/jquery-3.2.1.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="template/js/materialize.min.js"></script>

  <script>
    $(".submit").click((e)=>{
      e.preventDefault();

      let passwd = $("#password").val();
      let repasswd = $("#re-password").val();
      const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

      if(passwd != repasswd)
      {
        $('.error').html("Les Champs doivent etre identique !!!");
      }
      else
      {

        if( regex.test(passwd) )
        {
          $("form").submit();
        }
        else
        {
          $('.error').html("Votre Mot doit au moins  avoir 8 caractère (lettre miniscule,lettre majuscule et chiffre) ")
        }
        
      }

    })
  </script>
</body>

</html>