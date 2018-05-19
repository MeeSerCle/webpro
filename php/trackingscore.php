<?php include("personalheader.php"); ?>
<nav class="secondary">
   
        <span style="color:#000000">กรอกคะแนน</span>
        <span style="color:#a19668">*กรุณากรอกคะแนนลงในช่องผลงาน</span>
    
</nav>
<div class="container">
	<div class="row">
		<h2>คณะวิทยาศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</h2>
		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3>รายละเอียดข้อตกลงคำรับรองการปฏิบัติงานประจำปีงบประมาณ 2561</h3>
		    </div>
		    <div id="toolbar-admin" class="panel-body">
		        <div class="btn-toolbar" role="toolbar" aria-label="admin">
                    <div class="btn-group pull-right" role="group">
                        <button id="btn-online" class="btn btn-success">ส่งครบ</button>
                        <button id="btn-offline" class="btn btn-warning">ยังไม่รู้สถานะ</button>
                        <button id="btn-out-of-order" class="btn btn-danger">ยังไม่ครบ</button>
                        <button id="btn-out-of-order" class="btn btn-default btn-filter">ทั้งหมด</button>
                    </div>
                </div>
		    </div>
		    <table class="table table-striped table-hover" style="width:100%">
		        <thead>
		            <tr>
		                <th class="col-check"></th>
		                <th width="70%"><center>ตัวชี้วัด</center></th>
		                <th width="10%" stlye="width:200px;">เป้าหมาย</th>
		                <th width="10%">ผลงาน</th>
		                <th width="10%">&nbsp;&nbsp;&nbsp;&nbsp;สถานะ</th>
		                
		            </tr>
		        </thead>


		        <tbody>
			      <?php
			        include('connect.php');
			        $sql = "SELECT * FROM kpi;";
			      	$result = mysqli_query($cn,$sql);
			      	$i = 0;
			      	while($row = mysqli_fetch_array($result)) {
			      		$i++;
			      		$id = $row["Id"];
			      		$Criteria  = $row["Criteria"];
			      		$OBJECT  = $row["OBJECT"];
			      		$PORT = $row["PORT"];
			      		$STATUS  = $row["STATUS"];
			      		echo "
			            <tr>
			              <td>$id</td>
			              <td>$Criteria</td>
			              <td>$OBJECT</td>
			              <td>$PORT</td>
			              <td>$STATUS</td>
			            </tr>
			      		";
			      	}
			      	mysqli_close($cn);
			      ?>
			    </tbody>




<!--
		        <tbody>
		            <tr class="success">
		                
		                <td>1</td>
		                <td>ผลิตบัณฑิตที่พึ่งประสงค์</td>
		                <td>5</td>
		      			<td><center>
      					<div class="col-xs-8">
       					 <textarea  class="form-control" rows="1"></textarea>
      					</div>
      				</center>
      					</td>
      					<td><button type="button" class="btn btn-primary">ส่ง</button></td>
		                <td class="status">ส่งครบ</td>
		            
		            </tr>
		            <tr class="success">
		                
		                <td>2</td>
		                <td>ร้อยละของบัณฑิตระดับปริญญาตรี</td>
		                <td>100</td>
		                <td>
		                	<div class="col-xs-8">
       					 <textarea  class="form-control" rows="1"></textarea>
      					</div></td>
      					<td><button type="button" class="btn btn-primary">ส่ง</button></td>
		                <td class="status">ส่งครบ</td>
		                
		            </tr>
		            <tr class="warning">
		                
		                <td>3</td>
		                <td>จำนวนงานวิจัย หรืองานออกแบบ หรืองานสร้างสรรค์ หรือสิ่งประดิษฐ์ ของนักศึกษาที่จะได้รับการตีพิมพ์</td>
		                <td>10</td>
		                <td>
		                	<div class="col-xs-8">
       					 <textarea  class="form-control" rows="1"></textarea>
      					</div>
		                </td>
		                <td><button type="button" class="btn btn-primary">ส่ง</button></td>
		                <td class="status">Offline</td>
		               
		            </tr>
		            <tr class="danger">
		                
		                <td>4</td>
		                <td>อัตราผลตอบแทนเฉลี่ยของบัณฑิตเมื่อเทียบกับค่ามาตรฐานกระทรวงแรงงาน</td>
		                <td>20</td>
		                <td>
		                	<div class="col-xs-8">
       					 <textarea  class="form-control" rows="1"></textarea>
      					</div>
		                </td>
		                <td><button type="button" class="btn btn-primary">ส่ง</button></td>
		                <td class="status">ยังไม่ครบ</td>
		                
		            </tr>
		            <tr class="warning">
		                
		                <td>5</td>
		                <td>ร้อยละของจำนวนโครงการบริการวิชาการที่แก้ไขปัญหาสังคม หรือสร้างความเข้มแข็งให้สังคม </td>
		                <td>30</td>
		               <td><div class="col-xs-8">
       					 <textarea  class="form-control" rows="1"></textarea>
      					</div></td>
      					<td><button type="button" class="btn btn-primary">ส่ง</button></td>
		                <td class="status">Offline</td>
		                
		            </tr>
		        -->
		        </tbody>
		    </table>
		</div>
	</div>
</div>
<?php include("process/footer.php"); ?>