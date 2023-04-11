<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <header>
 
		
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h1 class="logo">Pixy Shop</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
				<li><a class="nav-link" href="index.php">Home</a></li>
        <li><a class="nav-link" href="about_us.php">About Us</a></li>
        <li><a class="nav-link" href="services.php">Our Services</a></li>
        <li><a class="nav-link" href="portfolio.php">Portfolio</a></li>
				<li><a class="nav-link" href="blog.php">Blog</a></li>
				<li><a class="nav-link" href="contact.php">Contact</a></li>
       
			</ul>
		</nav>
	</header>
	<main>
		<section class="mt-4 w-50">
			<h1 class="text-center">Contact Us</h1>
			<hr>
			<div class="ms-5 ps-5">
			<form class="row g-3 needs-validation">
              <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" required>
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustom02" required>
              </div>
              <div class="col-md-12">
                <label for="validationCustomUsername" class="form-label">Number</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
			  <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </form>
			</div>
		</section>
	</main>
  <footer>
  <div class="footer-content">
    <h5>Pixy Shop</h5>
    <p>This is an assignment of module 10</p>

</footer>
  
	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>