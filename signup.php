<!DOCTYPE>
<html>
<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

	<style>
	body{
		background-color: dimgray;
	}
	.box{
     color: red;
     
     background-color: black; 
     height: 600px;
     width: 50%;
     text-align: center;
     margin-left: 300px;
     margin-top: 20px;
     shape-margin: round;
	}
	.h{
     font-size: 30px;
	}
  .for{
    text-align: left;
    width: 60%;
    margin-left: 100px;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>
   <div class="box">
  <br> 	 <h class="h">SIGN UP</h>
  <form action="/action_page.php" class="for">
  
  <div class="form-group">
    <label for="email">Enter Username:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Enter Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Enter Adhaar no:</label>
    <input type="number" class="form-control" id="adhaar">
  </div>
  <div class="form-group">
    <label for="pwd">Enter Phone no:</label>
    <input type="Phone" class="form-control" id="phone">
  </div>
  <button type="submit" class="btn btn-primary">login</button>
</form>
   </div>
</body>
</html>


