<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<?php 

								if(isset($_POST['submit'])){
									$action =$_POST['from'];
									$run =$_POST['to'];
									$value = $_POST['valueNum'];
									$total;
									
								
									
									if ($action == "THB"){
										if ($run=="THB1") {
											$total=$value*1;
											$monetary = 'THA';
										}
										if ($run=="USD1") {
											$total=$value*35.2;
											$monetary = 'USD';
										}
										if ($run=="EUR1") {
											$total=$value*37.2;
											$monetary = 'EUR';
										}
										if ($run=="LAK1") {
											$total=$value*234;
											$monetary = 'LAK';
										}
									}
									if ($action == "USD"){
										if ($run=="THB1") {
											$total=$value*35.2;
											$monetary = 'THB';
										}
										if ($run=="USD1") {
											$total=$value*1;
											$monetary = 'USD';
										}
										if ($run=="EUR1") {
											$total=$value*0.94;
											$monetary = 'EUR';
										}
										if ($run=="LAK1") {
											$total=$value*8000;
											$monetary = 'LAK';
										}
									}
									if ($action == "EUR"){
										if ($run=="THB1") {
											$total=$value*37.25;
											$monetary = 'THB';
										}
										if ($run=="USD1") {
											$total=$value*1.07;
											$monetary = 'USD';
										}
										if ($run=="EUR1") {
											$total=$value*1;
											$monetary = 'EUR';
										}
										if ($run=="LAK1") {
											$total=$value*8500;
											$monetary = 'LAK';
										}
									}
									if ($action == "LAK"){
										if ($run=="THB1") {
											$total=$value*0.004;
											$monetary = 'THB';
										}
										if ($run=="USD1") {
											$total=$value*0.0001;
											$monetary = 'USD';
										}
										if ($run=="EUR1") {
											$total=$value*0.0001;
											$monetary = 'EUR';
										}
										if ($run=="LAK1") {
											$total=$value*1;
											$monetary = 'LAK';
										}
									}



								}
								
							
							 ?>
</head>
<body>

<div class="Head_boxmenu">
	<div class="wrapper">
		<div class="Head_boxmenu1">
			<div class="Box">
				<div class="box-title">แลกสกุลเงิน</div>
				<form method="post" action="web4_currency.php">
					<div>
						<span class="inplabel1">จำนวนเงิน:</span>
							<input type="number" name="valueNum" min="0">
					</div>
					
					<div>
						<span class="inplabel1">เลือกสกุลเงิน</span>
							<select name="from">
								<option value="THB">บาท (THA)</option>
								<option value="USD">ดอลลาร์ (USD)</option>
								<option value="EUR">ยูโร (EUR)</option>
								<option value="LAK">กีบลาว (LAK)</option>
							</select>
					</div>
					<div>
						<span class="inplabel1">แลกสกุลเงิน</span>
							<select name="to">
								<option value="THB1">บาท (THA)</option>
								<option value="USD1">ดอลลาร์ (USD)</option>
								<option value="EUR1">ยูโร (EUR)</option>
								<option value="LAK1">กีบลาว (LAK)</option>
							</select>
					</div>

					<div>
						<span class="inplabel2"></span>
							<input name="submit" type="submit" value="แปลง">

					</div>
					
					
					

					<div class="total"><?php echo $total ;?>&nbsp;&nbsp;<?php echo $monetary ; ?></div>
</form>
					
			</div>

			
		</div>


	</div>
</div>
							



</body>
</html>