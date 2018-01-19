<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ví dụ lệnh Insert</title>
	<!-- 	<link rel="stylesheet" href=""> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Thêm Màu sắc hoa</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >


		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Màu Sắc:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên loại rượu" name="txtName"
				required autofocus >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtDetails">Mô tả chi tiết:</label>
			<div class="col-md-10">          

				<textarea name="txtDetails" id="txtDetails"
				placeholder="Nhập vào mô tả ch tiết loại rượu" class="form-control" required></textarea>
			</div>
		</div>

		<div class="form-group">        
			<div class="col-md-offset-2 col-md-10">
				<button type="submit" class="btn btn-info" name="btnAdd" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Thêm</button>
				<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Bỏ Qua</button>
			</div>
		</div>
	</form>
				
			</div>
			
		</div>
		
	</div>
	
</body>
</html>