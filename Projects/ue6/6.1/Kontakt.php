

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	*{
    		padding:0; 
    		margin: 0;
    		transition: all 0.4s;
    	}
    	.mynav ul li a{
			color: white;
    	}
    	.mynav ul li a:hover{
			background-color: #e57373;
			transition: all 0.5s;
    	}
    	.mynav ul li a:clicked{
    		background-color: black;
    	}
    	.checkbox label{
    		display: block;
    	}
    	.icon-bar{
    		background-color: white;
    	}
    </style>
  </head>
  <body>
    <div class="container col-md-10 col-md-offset-1 col-xs-12">
	    <div class="row">
	    	<div class="col-xs-12" style="background-color: #e53935; height: 12em; "><h1 style="color:white; margin-top: 0.6em; text-align:center; font-size: 40pt; padding:0;">Imagination Technology</h1></div>
	    </div>
	    <div class="row">
	    	<div class="col-xs-12" style="background-color: #d32f2f; color: white;">
	    		<nav class="mynav" style="margin:0; padding:0; border:0; background-color: #d32f2f; ">
				  <div class="container-fluid" style="background-color: #d32f2f;">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				      	<li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
				        <li><a href="#">Kontakte<span class="sr-only">(current)</span></a></li>
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				      
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
	    	</div>
	    </div>
	    
	   <div class="row">
	    <div class="container-fluid" style="margin: 2em 0 2em 0;">
		    	<div class="col-md-7 col-xs-12" style="background-color: rgba(0,0,0,0.02); border-radius: 3px; padding: 1em; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
		    		<h3>Kontakt</h3>
		    		<h4>Wir freuen uns auf ihre Eingabe!</h4>

		    		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<h5>Der Grund für ihre Anfrage:</h5>
		    		<div class="checkbox">
					    <label>
					      <input type="checkbox"> Freie Stellen
					    </label>
					    <label>
					      <input type="checkbox"> Produktreklamation
					    </label>
					    <label>
					      <input type="checkbox"> Produktneuheiten
					    </label>
					</div>
					<h4>Anrede*</h4>
					<div class="radio">
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Frau" required>
					    Frau
					  </label>
					  <label>
					    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Herr" required>
					    Mann
					  </label>
					</div>

					<div class="form-group col-xs-12 col-md-5">
                            <label for="exampleInputName2">Vorname</label>
                            <input type="text" class="form-control" name="vn"id="exampleInputName2" placeholder="Vorname" >
					  </div>
					  <div class="form-group col-xs-12 col-md-5">
                          <label for="exampleInputName2">Nachame</label>
                          <input type="text" class="form-control" name="nn" id="exampleInputName2" placeholder="Nachame" >
					  </div>

					  <textarea class="form-control" rows="3" style="margin-bottom: 1em;" name="textarea"></textarea>
					  <input type="submit" class="btn btn-default" name="Bestätigen" data-toggle="modal" data-target="#my">





	
	<?php



if(isset($_POST['Bestätigen'])) { // && isset($_POST['optionsRadios']) && isset($_POST['vn']) && isset($_POST['nn'])



    #if(empty($nn) && empty($nn) && isset($_POST['optionsRadios']) && empty($vn) && isset($_POST['textarea']))//  isset($_POST['optionsRadios']) &&
    #{

        $vn = $_POST['vn'];
        $nn = $_POST['nn'];


        require '/vendor/autoload.php';
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';//@TODO
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587; //@TODO
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls'; //@TODO
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "widhalm11@gmail.com";//@TODO
        //Password to use for SMTP authentication
        $mail->Password = "kingjakob"; //@TODO
        //Set who the message is to be sent from
        $mail->setFrom('widhalm11@gmail.com', ''.$_POST['optionsRadios'].' '.$vn.' '.$nn);
        //Set an alternative reply-to address
        $mail->addReplyTo('widhalm11@gmail.com', ''.$_POST['optionsRadios'].' '.$vn.' '.$nn);
        //Set who the message is to be sent to
        $mail->addAddress('widhalm11@gmail.com', 'Mr. X');
        //Set the subject line
        $mail->Subject = 'PHPMailer GMail SMTP test';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->Body = $_POST['textarea'];


        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        if (!$mail->send()) {
            echo '<div class="alert alert-danger" role="alert" style="margin-top: 2em;">Nachricht konnte nicht gesendet werden!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        </div>';
        } else {
            echo '    
                <div class="alert alert-success" role="alert" style="margin-top: 2em;">Nachricht erfolgreich gesendet!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>';
        }

    }


    #else{

        #echo '<div class="alert alert-danger" role="alert" style="margin-top: 2em;">Nachricht konnte nicht gesendet werden!
        #<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

       # </div>';
#}
#


	?>
                    </form>

                </div>
            <div class="col-md-4 col-md-offset-1 col-xs-12" style="background-color: rgba(0,0,0,0.02);
		    	border-radius: 3px; padding: 1em;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <h3>Aside</h3>
                <p style="padding: 1em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
       </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>