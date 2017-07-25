<?php include 'includes/header.php';?>

<!doctype html>
<html lang="en-us">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Contact | Gabrielle Taylor</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body style="background-image: url(images/bgnd.png); background-repeat:repeat;">


<!-- 1st section -->
<div class="container-fluid">
<div class="row">
  <div class="col-sm-5 col-sm-offset-1 well well-lg">
    <h2 style="color: black; font-size: 18px; font-family: Arial Black; border-bottom: 4px #4aaaa5 solid; padding-bottom: 10px;">Contact Form</h2>
  
<!-- Contact Form -->    
    <div class="row">
      <div class="col-xs-8 col-sm-6">
        <div class="form-group">
  			<label for="usr">Name:</label>
  				<input type="text" class="form-control" id="usr">
		<div class="form-group">
  			<label for="email">EMail:</label>
  				<input type="email" class="form-control" id="email">
		<div class="form-group">
  			<label for="comment">Comment:</label>
  				<textarea class="form-control" rows="5" id="comment"></textarea>
  		<a href="contact.html" class="btn btn-info" role="button">Submit</a>
		</div> <!-- closes name -->
		</div> <!-- closes email -->
    	</div> <!-- closes comment -->
    </div> <!-- closes 2nd row -->
</div>
</div>

<!-- Connect -->      
<div class="well well-lg col-md-3 col-md-offset-2">
        <h2 style="color: black; font-size: 18px; font-family: Arial Black; border-bottom: 4px #4aaaa5 solid; padding-bottom: 10px;">Connect With Me</h2>

<!-- Links to Me -->
<div class="container-fluid">
<div class="row">
  <div class="col-md-4 col-md-offset-0">
    <div class="thumbnail">
      <a href="https://www.linkedin.com/in/gabrielle-taylor-33b23113a/">
        <img src="images/linkedin-128.png" alt="linkedin" target="_blank" style="width:100%">
      </a>
    </div>
  </div>
  <div class="col-md-4 col-md-offset-0">
    <div class="thumbnail">
      <a href="https://github.com/gabietaylor">
        <img src="images/github-128.png" alt="github" target="_blank" style="width:100%">
      </a>
    </div>
  </div>
  <div class="col-md-4 col-md-offset-0">
    <div class="thumbnail">
      <a href="http://stackoverflow.com/users/7953791/g-taylor">
        <img src="images/stackoverflow-128.png" alt="stack" target="_blank" style="width:100%">
      </a>
    </div>
  </div>       
      </div> <!-- closes connect -->
    </div> 
    </div>
    </div>
    </div>
  </div> <!-- closes 1st row -->
</div> <!-- closes container -->

<?php include 'includes/footer.php';?>

</body>
</html>