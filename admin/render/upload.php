
<!DOCTYPE html>
<head>
	<title>Hello</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Header -->
	<div class="container-fluid mb-3" id="header">
		<div class="row">
			<!-- Khung thông báo -->
			<div class="btn btn-outline-danger col-md-12 mt-3 mb-5" id="Th_khung_thong_bao">Khung thông báo</div>

			<div class="col-md-2"></div>
			<div class="btn btn-dark col-md-8">Nhập thông tin sản phẩm</div>
			<div class="col-md-2"></div>

		</div>
	</div>

	<!-- Form đăng hình ảnh sản phẩm -->
	<div class="row">
	<div class="col-2"></div>
	<form class="col-8" method="post" action="" enctype="multipart/form-data">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text">Chọn hình ảnh upload tại đây =></span>
			</div>
			<input class="form-control" type="file" name="avatar"/>

		</div>
	</form>
	</div>

	<!-- Form điền thông tin sản phẩm -->
	<div class="row">
	<div class="col-2"></div>
	<form class="col-8" method="POST">
		<div class="form-group">
 			<label for="_h_shozzer_product_id">Mã sản phẩm:</label>
  			<input type="text" class="form-control" name="_h_shozzer_product_id" id="_h_shozzer_product_id">
		</div>
		<div class="form-group">
  			<label for="_h_shozzer_product_name_">Tên sản phẩm:</label>
  			<input type="text" class="form-control" name="_h_shozzer_product_name" id="_h_shozzer_product_name_">
		</div>
		<div class="form-group">
  			<label for="_h_shozzer_buy_price">Giá mua:</label>
  			<input type="number" class="form-control" name="_h_shozzer_buy_price" id="_h_shozzer_buy_price">
		</div>
		<div class="form-group">
  			<label for="_h_shozzer_fixed_price">Giá niêm yết:</label>
  			<input type="number" class="form-control" name="_h_shozzer_fixed_price" id="_h_shozzer_fixed_price">
		</div>
		<div class="form-group">
  			<label for="_h_shozzer_pricing">Giá bán:</label>
  			<input type="number" class="form-control" name="_h_shozzer_pricing" id="_h_shozzer_pricing">
		</div>
		<div class="form-group">
  			<label for="_h_shozzer_material_product">Chất liệu sản phẩm:</label>
  			<input type="text" class="form-control" name="_h_shozzer_material" id="_h_shozzer_material">
		</div>
		<div class="form-group">
  			<label for="_h_shozzer_numer">Số lượng:</label>
  			<input type="number" class="form-control" name="_h_shozzer_number" id="_h_shozzer_number">
		</div>
		<div class="col-4"></div>
		<input class="btn btn-success col-md-4" type="submit" name="upload_click" value="Upload"/>
	</form>
	</div>
	<div>
	<?php
		if(isset($_POST['upload_click'])){
			// Code Ngu
			$json_head = "{";
			$json_tail = "}";
			$json_data = $json_head . "\"_h_shozzer_product_id\":"."\"".$_POST['_h_shozzer_product_id']."\",";
			$json_data = $json_data . "\"_h_shozzer_product_name\":"."\"".$_POST['_h_shozzer_product_name']."\",";
			$json_data = $json_data . "\"_h_shozzer_buy_price\":".$_POST['_h_shozzer_buy_price'].",";
			$json_data = $json_data . "\"_h_shozzer_fixed_price\":".$_POST['_h_shozzer_fixed_price'].",";
			$json_data = $json_data . "\"_h_shozzer_pricing\":".$_POST['_h_shozzer_pricing'].",";
			$json_data = $json_data . "\"_h_shozzer_material\":"."\"".$_POST['_h_shozzer_material']."\",";
			$json_data = $json_data . "\"_h_shozzer_number\":".$_POST['_h_shozzer_number'] .$json_tail;

			echo $json_data;


			// Code khôn
			$json_data2 = Array();
			$json_data2['_h_shozzer_product_id'] = $_POST['_h_shozzer_product_id'];
			$json_data2['_h_shozzer_product_name'] = $_POST['_h_shozzer_product_name'];
			$json_data2['_h_shozzer_buy_price'] = $_POST['_h_shozzer_buy_price'];
			$json_data2['_h_shozzer_fixed_price'] = $_POST['_h_shozzer_fixed_price'];
			$json_data2['_h_shozzer_pricing'] = $_POST['_h_shozzer_pricing'];
			$json_data2['_h_shozzer_material'] = $_POST['_h_shozzer_material'];
			$json_data2['_h_shozzer_number'] = $_POST['_h_shozzer_number'];
			$json = json_encode($json_data2, JSON_UNESCAPED_UNICODE);
			echo $json;
			// json_decode($json, false, 512, JSON_UNESCAPED_UNICODE) decode có utf-8

			$file = fopen('../infoproduct/'.$_POST['_h_shozzer_product_id'].".json",w);
			fwrite($file,$json);
			fclose($file);
		}

	?>
	</div>

	<script language="javascript">

	</script>
</body>
</html>
