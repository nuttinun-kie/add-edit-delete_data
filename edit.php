<?php include("head.php");?>
<?php include("database/con_db.php");?>
<section class="navbar navbar-fixed-top">
	<div style="padding: 20px;">
		<h5>Developer test</h5>
	</div>
</section>
<section id="main" class="container-fluid">
	<?php 
	$id =  $_GET['uid'];
	$sql = "SELECT * FROM user WHERE user_id = " .$id;
	$result = mysqli_query($conn, $sql);	
	$data = mysqli_fetch_assoc($result);

	$date =$data['user_birthday'];
	$get_date = explode("-",$date);
	$birthday = $get_date['2'] ."/" .$get_date['1'] ."/" .$get_date['0'];

	if($_POST){
		$user_name = $_POST['user_name'];
		$user_lastname = $_POST['user_lastname'];
		$user_gender = $_POST['user_gender'];
		$user_birthday = $_POST['user_birthday'];
		$user_email = $_POST['user_email'];
		$user_address = $_POST['user_address'];
		$user_numphone = $_POST['user_numphone'];

		$date = $user_birthday;
		$get_date = explode("/",$date);
		$birthday = $get_date['2'] ."-" .$get_date['1'] ."-" .$get_date['0'];

		$sql_update = "UPDATE user
						SET user_name = '" .$user_name ."',
						user_lastname = '" .$user_lastname ."',
						user_gender = '" .$user_gender ."',
						user_birthday = '" .$birthday ."',
						user_email = '" .$user_email ."',
						user_address = '" .$user_address ."',
						user_numphone = '" .$user_numphone ."'						
						WHERE user_id = " .$id;
		// echo $sql_update;
		mysqli_query($conn, $sql_update);
		?>
		<script type="text/JavaScript">
			setTimeout("location.href = 'home.php';",2000);
		</script>
		<?php
	}
	?>
	<div style="padding: 30px;">
		<h4 style="padding-bottom: 20px;">แก้ไขข้อมูล</h4>
		<?php if($_POST){ ?>
			<div id="alertbox" class="alert alert-success" role="alert"> บันทึกข้อมูลเรียบร้อย </div>
		<?php } ?>
		<div>	
			<form class="needs-validation" action="" method="POST" novalidate>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;">
					<div class="col-md-2 form-group">
						<label>ชื่อ (name)</label>
					</div>
					<div class="col-md-8 form-group">
						<input required style="width:50%;" type="text" class="form-control" name="user_name" placeholder="name" value="<?php echo $data['user_name']; ?>">
						<div class="invalid-feedback">กรุณาใส่ชื่อ</div>
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;">
					<div class="col-md-2 form-group">
						<label>นามสกุล (last name)</label>
					</div>
					<div class="col-md-8 form-group">
						<input required style="width:50%;" type="text" class="form-control" name="user_lastname" id="lastname" placeholder="last name" value="<?php echo $data['user_lastname']; ?>">
						<div class="invalid-feedback">กรุณาใส่นามสกุล</div>
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;">
					<div class="col-md-2 form-group">
						<label>เพศ (gender)</label>
					</div>
					<div class="col-md-8 form-group">
						<div class="form-check" style="padding-right: 20px;" >
							<input class="form-check-input" type="radio" name="user_gender" id="female" value="1"  <?php echo $data["user_gender"] == "1" ? "checked" : ""; ?> >
							<label class="form-check-label" for="female">
								หญิง (female)
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="user_gender" id="male" value="2" <?php echo $data["user_gender"] == "2" ? "checked" : ""; ?>>
							<label class="form-check-label" for="male">
								ชาย (male)
							</label>
						</div>
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 5px;">
					<div class="col-md-2 form-group">
						<label>วันเกิด (birthday)</label>
					</div>
					<div class="col-md-8 form-group">
						<input style="width:50%;" readonly type="text" name="user_birthday" class="form-control" id="birthday" placeholder="birthday" value="<?php echo $birthday; ?>">
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;">
					<div class="col-md-2 form-group">
					</div>
					<div class="col-md-8 form-group">
						<small id="birthdayHelp" class="form-text text-muted">* ปีเกิดเป็น ปี ค.ศ.</small>
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;">
					<div class="col-md-2 form-group">
						<label for="exampleFormControlInput1">อีเมลล์ (Email address)</label>
					</div>
					<div class="col-md-8 form-group">
						<input required style="width:50%;" type="email" class="form-control" name="user_email" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $data['user_email']; ?>">
						<i class='fas fa-calendar-alt' style='font-size:24px'></i>
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;">
					<div class="col-md-2 form-group">
						<label>ที่อยู่ (address)</label>
					</div>
					<div class="col-md-8 form-group">
						<textarea required style="width:50%;" class="form-control" name="user_address" placeholder="address"><?php echo $data['user_address']; ?></textarea> 
						<div class="invalid-feedback">กรุณาใส่ที่อยู่</div>
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;">
					<div class="col-md-2 form-group">
						<label>เบอร์โทรศัพท์ (phone number)</label>
					</div>
					<div class="col-md-8 form-group">
						<input required style="width:50%;" type="text" class="form-control" name="user_numphone" id="numphone" placeholder="0999999999" value="<?php echo "0" .$data['user_numphone']; ?>">
						<div class="invalid-feedback">กรุณาใส่เบอร์โทรศัพท์</div>
					</div>	
				</div>
				<div class="col-md-12 form-inline" style="padding-bottom: 20px;padding-top: 20px;">
					<div class="col-md-2 form-group">
						<label></label>
					</div>
					<div class="col-md-8 form-group">
						<button style="margin-right: 20px;" name="submit" value="submit" id="submit" type="submit" class="btn btn-success mb-2">ยืนยัน</button>
						<button type="reset" class="btn btn-danger mb-2">ยกเลิก</button>
					</div>	
				</div>
			</form>
		</div>
	</div>
</section>
<?php include("footer.php");?>
<script type="text/javascript">
	$( document ).ready(function() {
		console.log( "ready!" );
		$('#birthday').Zebra_DatePicker({
			format: 'd/m/Y'
		});
	});

	(function() {
		'use strict';
		window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
		}, false);
	})();

</script>