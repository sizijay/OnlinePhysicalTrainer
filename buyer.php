

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Buyer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href="css/homepage.css" rel="stylesheet">

  </head>

  <body>
	<nav class = "navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="agrarianhome.php">EasyFarm</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<!--<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>-->
				<ul class="nav navbar-nav navbar-right">
					<!-- <li><a href="#">WELCOME <?php echo $_SESSION['username']; ?></a></li> -->
					<li><a href="logout.php">LogOut</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<section id="breadcrumb">
		<div class="container-fluid">
			<ol class="breadcrumb">
				<li class="active">Buyer Profile</li>
			</ol>
		</div>
	</section>
	
	<section id="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
					  <a href="agrarianhome.php" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
					  </a>
					   <a href="#" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Order</a>

					  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Transport</a>

					  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Reports</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="panel panel-default">
					  <div class="panel-heading main-color-bg">
						<h3 class="panel-title">Home</h3>
						
					  </div>
					  <div class="panel-body">
						<div class="row">
							<div class = "col-md-12">
								<img src="Images/farmfinancetopheader" width="100%">
							</div>
						</div>
						
						
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<!--
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
	-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
