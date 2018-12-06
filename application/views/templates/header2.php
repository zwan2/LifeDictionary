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
    <nav class="navbar navbar-light">
        <a href="/" class="navbar-brand">
            <i class="material-icons color-black">arrow_back</i>
            <inline class="h3 header2-title">Computer</inline>
        </a>
    </nav>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
      

    </nav>

  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <i class="material-icons icon1">question_answer</i>	
			  	<inline class="h3 icon-title1">Chatbot</inline>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons icon-title1" data-dismiss="modal">arrow_back</i>
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
    <i class="material-icons">question_answer</i>
  </button>
</div>


<style type="text/css" id="cssID">
.b-agent-demo .b-agent-demo_header {
	background-color: #FFFFFF !important;
	color: #EF5350 !important;

}
</style>

<script type="text/javascript">
  $(function () {
      $(".chatbot").contents().find("head")[0].appendChild(cssID);
      //Or $(".chatbot").contents().find("head")[0].appendChild($('#cssID')[0]);
  });
</script>