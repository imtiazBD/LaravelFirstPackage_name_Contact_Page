<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact Package</title>
  </head>
  <body style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(21,224,143,1) 86%);">

    <div class="container-fluid mt-5">
    	<h3 class="text-center text-white table-striped p-4">This is Laravel -Contact Package </h3>
    	<div class="col-md-6 offset-md-3">
    		<form method="POST" action="{{route('contact')}}">
              @csrf
    			<div class="form-group">
    				<input class="form-control" type="text" name="name" placeholder="Your Name">
    			</div>

    			<div class="form-group">
    				<input class="form-control" type="email" name="email" placeholder="Your email">
    			</div>
                <label class="text-white">Write your message bellow ...</label>
    			<div class="form-group">

    				<textarea class="form-control" name="message" rows="10" cols="50">
    					

    				</textarea>
    				
    			</div>

    			<button type="submit" class="btn btn-success" value="Submit">Submit</button>
    			
    		</form>
    	</div>
    </div>







 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>