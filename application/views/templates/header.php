<!DOCTYPE HTML> 
<html> 
<head>

  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


  <title>Life Dictionary</title>
  <!--CSS-->
  <!--
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/css/style.css" type="text/css">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#FFFFFF">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#FFFFFF">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">

</head>

<body>
  <div class="container">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
   
      <a href="/" class="navbar-brand">Life Dictionary</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="menu_button"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <hr>
        <div class="navbar-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>     
            </li>


          </ul>
       
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
          </form>  
        </div>
      </div>

  


    </nav>

  </div>
<br/>





<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">What are you curious about?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe
            src="https://console.dialogflow.com/api-client/demo/embedded/e764c47e-8377-4878-95af-7846ee0fb6fb" class="chatbot">
        
        </iframe>

      </div>
    </div>
  </div>
</div>

<div class="container">
  <button type="button" class="btn btn-secondary bmd-btn-fab fab" data-toggle="modal" data-target="#exampleModalLong">
    <i class="material-icons">grade</i>
  </button>
</div>