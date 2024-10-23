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
      <img class="responsive-img" style="width: 100px;" src="template\assets\img\logosisas.jpg" />
      <div class="section"></div>

      <h5 class="indigo-text">You have forget your password, please enter your email...</h5>
      <div class="section"></div>

      <h5 class="red-text"> <?= (isset($error)) ? $error : "" ?> </h5>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="?action=con">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                <label for='email'>Enter your password</label>
              </div>

              <label style='float: right;'>
                    <a class='pink-text' href=''><b>_</b></a>
                </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='action' value='con' class='col s12 btn btn-large waves-effect indigo'>SUBMIT</button>
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
  <script type="text/javascript" src="template\js\jquery-3.2.1.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="template\js\materialize.min.js"></script>
</body>

</html>