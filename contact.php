<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>hello please</title>
        <meta name="keywords" content="hello please, graphic design, communication design, web design, freelance design, design, chicago design">
        <meta name="description" content="Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
 <body class="home-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

      <div class="container-fluid main-container "> <!--main content-->
        <div class="row-fluid main-nav">
            <div class="col-sm-6 b-pad-5"><!--title column-->
              <p class="hello-logo">helloplease</p>
              <p><button class="navbar-toggle hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar green"></span>
              <span class="icon-bar green"></span>
              <span class="icon-bar green"></span>
              </button></p>
              </div>
            
           </div>

        <div class="row-fluid b-pad-5">

          <div class=" col-sm-6 main-nav "><!--title column-->
              <div class="navbar-ex1-collapse in">

            <div class="col-sm-2 col-sm-offset-6">
               <p> <a href="index.html">Work</a></p>
            </div>

            <div class="col-sm-2">
                <a href="about.html"><p>About</p></a>
            </div>
            
            <div class="col-sm-2 ">
              <a href="contact.php"><p>Contact</p></a>
            </div>
              
          </div>

        </div>

              </div> 
            <div class="col-sm-5  col-sm-offset-2">
              <h4>say hello</h4>
              <p>Want to chat about a project or just say hi? Send us a note!</p><br>
              <form  class="col-sm-10 col-md-12 contact"role="form">
                <div class="form-group">
                  <input type="name" class="form-control required" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control required" id="email" placeholder="Email">
                </div>
                 <div class="form-group">
                  <input type="tel" class="form-control" id="tel" placeholder="Telephone">
                </div>
                <div class="form-group">

                <textarea class="form-control" placeholder="Type a nice message" rows="5"></textarea>
            </div>
                <a type="form-submit" class="" href="#">Submit</a>
              </form>
              <p id="error"></p>
            </div>
        </div>
          
  
      </div><!--end title column-->

<!-- javascript for form -->
      <script type="text/javascript">
      
       $(document).ready(function(){
        
        $("a.form-submit").on("click", function(e){
            e.preventDefault();
            var check = true;
            var error = false;
            
            $('#error').html('');
            $('.missing').removeClass(" missing");
                
            $('.required').each(function(){
                if (this.value == "") {
                    check = false;
                    $(this).addClass(" missing");
                    if (!error){
                        $('#error').html($('#error').html() + 'Please fill out the required fields above.<br/>');
                        error = true;
                    };
                };
            });

            if (check){
                document.forms[0].submit(); 
                $('#error').html($('#error').html() + 'We have received your message. Thank you.<br/>');
            
            } else {
                return false;
            };
        
        });
    }); 
    </script>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#myNav").affix({
                offset: { 
                    top: 190 
                }
            });
        });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-50384152-1','helloplease.me');ga('send','pageview');
        </script>
    </body>
</html>
