<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/form.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
								ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
								Perspiciatis.
							</p> -->
						</div>
					</div>
					<div class="col-md-5 col-md-pull-7">
						<div class="booking-form">
							<form method="post" action="reserved.php">
								<div class="form-group">
									<span>
										<img src="images/logo.png">
									</span>
								</div>
								<div class="form-group">
									<span class="form-label">Name or agency name</span>
									<input name="name" id="name" class="form-control" type="text" placeholder="Enter full name or agency name">
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input name="checkin" id="checkin" class="form-control" type="date" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input name="checkout" id="checkout" class="form-control" type="date" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select name="rooms" id="rooms" class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Total Guests</span>
											<input type="number" id="guests" name="guests" class="form-control">
											<!-- <select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span> -->
										</div>
									</div>
									<!-- <div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div> -->
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Plan</span>
											<select name="plan" id="plan" class="form-control">
												<option>PKG</option>
												<option>BB</option>
												<option>AP</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Group Name</span>
											<input name="groupname" id="groupname" class="form-control" placeholder="Enter group name" type="text" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 h-100">
										<div class="form-group">
											<span class="form-label">Remarks</span>
											<input name="remarks" id="remarks" class="form-control" placeholder="Enter remarks" type="text">
										</div>
									</div>
								</div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">email</span>
                                            <input name="email" id="email" class="form-control" placeholder="Enter your email" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Phone</span>
                                            <input name="phone" id="phone" class="form-control" placeholder="Enter phone number" type="text" required>
                                        </div>
                                    </div>
                                </div>
								<div class="form-btn">
									<button class="submit-btn" type="submit">Check availability</button>
									<button class="cancel-btn" onclick="window.location.href='index.html'">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>