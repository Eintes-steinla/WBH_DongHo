<div class="container-fluid form" style="padding: 20px">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-6">
			<legend>Thông tin giao hàng</legend>
			<i>Giao hàng tận nhà chỉ áp dụng ở TP HCM</i>
			<div class="form-group">
				<label for="">Tên: </label>
				<input type="text" class="form-control" id="ten" name="ten" value="">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại: </label>
				<input type="number" class="form-control" name="sodt" id="order_tel" value="">
			</div>
			<div class="form-group">
				<label for="">Quận: </label>
				<select class="form-control" name="quan" id="quan">
					<option value="q1">Quận 1</option>
					<option value="q2">Quận 2</option>
					<option value="q3">Quận 3</option>
					<option value="q4">Quận 4</option>
					<option value="q5">Quận 5</option>
					<option value="q6">Quận 6</option>
					<option value="q7">Quận 7</option>
					<option value="q8">Quận 8</option>
					<option value="q9">Quận 9</option>
					<option value="q10">Quận 10</option>
					<option value="q11">Quận 11</option>
					<option value="q12">Quận 12</option>
					<option value="qtd">Quận Thủ Đức</option>
					<option value="qbt">Quận Bình Thạnh</option>
					<option value="qgv">Quận Gò Vấp</option>
					<option value="qtb">Quận Tân Bình</option>
					<option value="qbt">Quận Bình Tân</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ cụ thể: </label>
				<input type="text" class="form-control" name="dc" id="addr" value="">
			</div>

		</div>
		<div class="col-sm-4">
			<h4><?php echo $title; ?></h4>
			<hr style="border: 1px solid #337ab7;">
			<form action="client/order" method="GET">
				<table class="table" style="font-size: 14px; background-color: #eaeaea">
					<thead>
						<tr>
							<th>Ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Đơn giá</th>
							<th>Số lượng</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="<?php echo $data['anhchinh']; ?>" class='sanpham' data-masp='<?php echo $data['masp'] ?>' style="width: 80px"></td>
							<td><?php echo $data['tensp'] ?></td>
							<td class="prices" data-price='<?php echo $data['gia'] ?>'><?php echo $data['gia'] ?></td>
							<td><input type="number" class="num" data-type='buynow' name="num[]" value="1" class="form-control" style="width: 80px;" min='1'></td>
						</tr>
						<tr>
							<td colspan="4" style="text-align: right;">
								<h3><b>Tổng tiền: </b><span id='totalPrice' style="color: red; font-size: 28px;"></span> VND</h3>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<a id='orderCompleteBtn' class="pull-right btn btn-primary btn-lg">Xác nhận</a><br><br>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
<script>
	var price = 0;
	$('.prices').each(function() {
		price += parseInt($(this).data('price').replace(/\s/g, ''));
	})
	price = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
	$('#totalPrice').text(price);
	countPrice();
</script>