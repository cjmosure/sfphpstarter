<!DOCTYPE html>
<html>
<head>
	<title>Salesforce App</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h3>Search for an Account:</h3>
			<form id="accountSearch" method ="post">
				<div class="form-group">
					<input type="text" name="account" id="account" class="form-control" />
				</div>
				<div class="form-group">
					<button id="submitSfSearch" type="submit" class="btn btn-md btn-primary">Search</button>
				</div>
			</form>
			<div id="results" class="animated bounceInUp" style="display:none;" style="margin-top:25px;">
				
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
$( "#accountSearch" ).submit(function( event ) {
	$('#results').hide();
	$("#submitSfSearch").html('Loading');
  var account = $("#account").val();
	var formData = 'account=' + account;
	$.ajax({
		type: 'POST',
		url: 'handler.php',
		data: formData,
		 success: function (data) {
		 	$("#submitSfSearch").html('Search');
		 	$('#results').html(data).show();

		 },
	});
  event.preventDefault();
});
</script>
</body>
</html>