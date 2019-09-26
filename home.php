<?php include("head.php");?>
<?php include("database/con_db.php");?>
<section class="navbar navbar-fixed-top">
	<div style="padding: 20px;">
		<h5>Developer test</h5>
	</div>
</section>
<section id="main" class="container-fluid">
	<?php 
	$sql = "SELECT * FROM user WHERE is_delete = 'N'";
	$result = mysqli_query($conn, $sql);	
	?>
	<div style="padding: 30px;">
		<div style="padding-bottom: 30px;">
			<a href="add.php"><button type="button" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;เพิ่มข้อมูล</button></a>
		</div>
		<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" align="center" style="width:100%">
			<thead class="thead-dark">
				<tr>
					<th class="th-sm">ชื่อ-นามสกุล</th>
					<th class="th-sm" style="text-align: center;">เพศ</th>
					<th class="th-sm" style="text-align: center;">วันเกิด</th>
					<th class="th-sm">อีเมลล์</th>
					<th class="th-sm">ที่อยู่</th>
					<th class="th-sm">เบอร์โทรศัพท์</th>
					<th class="th-sm"></th>
				</tr>
			</thead>
			<tbody>
				<?php while($data = mysqli_fetch_assoc($result)) { 
					$date = $data['user_birthday'];
					$get_date = explode("-",$date);
					$birthday = $get_date['2'] ."/" .$get_date['1'] ."/" .$get_date['0'];
					?>
					<tr>
						<td><?php echo $data["user_name"] ." " .$data["user_lastname"]; ?></td>
						<td style="text-align: center;"><?php echo $data["user_gender"] == "1" ? "หญิง" : "ชาย"; ?></td>
						<td style="text-align: center;"><?php echo $birthday; ?></td>
						<td><?php echo $data["user_email"]; ?></td>
						<td><?php echo $data["user_address"]; ?></td>
						<td><?php echo "0" .$data["user_numphone"]; ?></td>
						<td style="text-align: center;">
							<a href="edit.php?uid=<?php echo $data["user_id"]; ?>">
								<button type="button" class="btn btn-warning">
									<i class="fa fa-pencil-square-o"></i>
								</button>
							</a>
							<button id="del" type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal_delete" onclick="f_del('<?php echo $data["user_id"]; ?>','<?php echo $data["user_name"]; ?>')" ><i class="fa fa-trash" aria-hidden="true"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>  
		</table>
	</div>
</section>

<!-- Modal -->
<div class="modal fade" id="Modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ยืนยันการลบข้อมูล</h5>
			</div>
			<div class="modal-body">
				<p>ต้องการลบข้อมูลของ user : <span></span> </p>
				<input type="hidden" class="form-control" id="emp_id" name="emp_id">
			</div>
			<div class="modal-footer">
				<button name="del_submit" value="submit" id="del_submit" type="submit" class="btn btn-success" onclick="changeText()">ยืนยัน</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>        
			</div>
		</div>
	</div>
</div>
<!--modal-->
<script>
	$(document).ready(function() {
		$('#Modal_delete').on('shown.bs.modal', function () {})
		$('#example').DataTable({
			/*"language": {
	            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
	        }*/
		});
	});

	function f_del(id,name) {
		document.getElementById("emp_id").value = id;
		$( "span" ).html(name);	
	}

	function changeText() {
		var id = document.getElementById("emp_id").value;
		$.post("delete.php", {id: id}, function(data){
			console.log(data);
			setTimeout((function() {
			  window.location.reload();
			}), 1000);
		});
	}


</script>

<?php include("footer.php");?>
