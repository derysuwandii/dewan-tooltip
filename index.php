<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Bootstrap - Tooltip</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-danger">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="container mb-3">
		<div class="container">
		  <h3 align="center">Dewan Bootstrap Tooltip</h3><hr>
		  <a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip Atas pada Link">Atas</a>
		  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Tooltip Bawah pada Link">Bawah</a>
		  <a href="#" data-toggle="tooltip" data-placement="left" title="Tooltip Sebelah Kiri pada Link">Kiri</a>
		  <a href="#" data-toggle="tooltip" data-placement="right" title="Tooltip Sebelah Kanan pada Link">Kanan</a>
		</div><hr>

		<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip atas pada Button">
		  Tooltip on top
		</button>
		<button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="Tooltip Kanan pada Button">
		  Tooltip on right
		</button>
		<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Tooltip Bawah pada Button">
		  Tooltip on bottom
		</button>
		<button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Tooltip Kiri pada Button">
		  Tooltip on left
		</button>

		<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="<i class='fa fa-car'></i> <em>Dewan</em> <u>Komputer</u> <b>Tooltip dengan HTML</b> <i class='fa fa-car'></i>">
		  Tooltip with HTML
		</button>

		<button class="btn btn-primary" data-toggle="tooltip" title="Disabled tooltip" type="button" disabled>Disabled button</button>

		<button type="button" class="btn btn-secondary" id="tooltip" data-html="true" title="<i class='fa fa-car'></i> <em>Dewan</em> <u>Komputer</u> <b>Tooltip dengan HTML saat diklik</b> <img src='dk.png' width='80px;'>">
		  Tooltip on click
		</button>
		<hr>

		<div class="form-group">
			<input type="text" name="text" placeholder="Tooltip pada Input Text" data-toggle="tooltip" data-placement="right" title="Tooltip pada Input Text">
		</div>

		<div class="form-group">
			<select name="text" placeholder="Tooltip pada Input Text" data-toggle="tooltip" data-placement="right" title="Tooltip pada Select Option">
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
		</div>
		
		<div class="form-group">
			<input type="radio" name="radio" data-toggle="tooltip" data-placement="bottom" title="Tooltip Bawah pada Radio Button"> Radio Button
		</div>

		<div class="form-group">
			<input type="checkbox" name="checkbox" data-toggle="tooltip" data-placement="bottom" title="Tooltip Bawah pada Checkbox"> Checkbox
		</div>
		
		<p data-toggle="tooltip" data-placement="left" title="Tooltip">Tooltip pada Paragraf</p>
		

	</div>

	<div class="navbar bg-dark fixed-bottom">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();
		  $("#tooltip").click(function(){
		  	$('#tooltip').tooltip("toggle");
		  });
		});
	</script>
</body>
</html>