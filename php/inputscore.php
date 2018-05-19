<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" type="text/css" href="index2.css"> -->
  <link rel="stylesheet" type="text/css" href="../css/trackingscore.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
<?php include("personalheader.php"); ?>
<section>
<div class="container">
	<div class="row">
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
		                <th width="60%"><center>ตัวชี้วัด</center></th>
		                <th width="10%" stlye="width:200px;">เป้าหมาย</th>
		                <th width="10%">ผลงาน</th>
                    <th width="10%">ยืนยัน</th>
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
                $colorRED = RED;
                $colorORANGE = ORANGE;
                $colorGREEN = GREEN;
                $color;
                $Statusname;
                if($STATUS==$colorRED){
                  $color = "rgb(220, 53, 69)"; 
                  $Statusname = "ยังไม่ครบ";            
                  }
                else if($STATUS==$colorGREEN){
                  $color = "rgb(40, 167, 69)";
                  $Statusname = "ส่งครบ";
                }
                else{
                  $color = "rgb(255,193, 7)";
                  $Statusname = "ยังไม่รู้สถานะ";
                }
			      		echo "
			            <tr>
			              <td>$i</td>
                    <td>$Criteria</td>
                    <td>$OBJECT</td>
			              <td><input type=\"text\" name=\"portfolio\"></td>
                    <td><button class=\"button\" style=\"vertical-align:middle\" type=\"submit\"><span>ส่ง</span></button></td>
			              <td style=\"background-color:$color;\">$Statusname</td>
			            </tr>
			      		";
			      	}
			      	mysqli_close($cn);
			      ?>
			    </tbody>
		    </table>
		</div>
	</div>
</div>
</section>
</body>
</html>