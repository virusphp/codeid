<!DOCTYPE html>
<!-- 
	Tanggal 	: 26 April 2016
	Autor 		: Github.com/xdan
	Modified	: Gandi N3 a.k.a Genzol N3 Alias Dnet-C
	Thanks		: For All Google inc Is my inspiration
 -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Menghitung Hari</title>
	<link rel="stylesheet" type="text/css" href="css/dnet.css">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
 	 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
</head>
<body>
 <h1 align="center">Mencari Selisih Hari</h1>
 <h4 align="center"><small>Bisa juga menghitung hari demi hari</small></h4>
 <br>
	<div class="row">
		<form action="memproses.php" method="post" accept-charset="utf-8">
			<div class="col-md-4 col-md-offset-4">
				<div class="form-group">
					<label for="dtp_input2" class="control-label">Tanggal Kedua</label>
					<div class='input-group date' id='datepicker'>
						<input type='text' class="form-control" id="v1" name="tgl1" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label for="dtp_input2" class="control-label">Tanggal Kedua</label>
					<div class='input-group date' id='datepicker2'>
						<input type='text' class="form-control" id="v2" name="tgl2" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
					<input class="form-control btn btn-success" type="submit" value="Masuk">
				</div>
		</form>
		<div class="col-md-4 col-md-offset-4">
		</div>
	</div>
		<script src="./js/jam.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
		<script>
			$(function () {
				$('#datetimepicker').datetimepicker({
				format: 'DD MMMM YYYY HH:mm',
				    });

				$('#datepicker').datetimepicker({
				format: 'DD MMMM YYYY',
				});

				$('#datepicker2').datetimepicker({
					format : 'DD MMM YYYY',
				});

				$('#timepicker').datetimepicker({
				format: 'HH:mm'
				});
			});
 		</script>
</body>
</html>