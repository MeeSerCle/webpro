<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/managerindex.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
    <section>
    <?php
    include("headermanager.php");
    ?>
    <div class="option-box">
    <h1 class="option">เลือกสิ่งที่ท่านต้องการ...</h1>
    
    <form role="form" action="../index.html" method="post" id="login-form" autocomplete="off">
         <div class="form-group">
            <label for="inputState" class="sr-only">กรุณาเลือกภาควิชา</label>
            <select id="inputState" class="form-control">
            <option value="" disabled selected>กรุณาเลือกภาควิชา</option>
                <option>ภาควิชาคณิตศาสตร์ประยุกต์</option>
                <option>ภาควิชาวิทยาการคอมพิวเตอร์</option>
                <option>ภาควิชาเคมีสิ่งแวดล้อม</option>
                <option>ภาควิชาเคมีอุตสาหกรรม</option>
                <option>ภาควิชาเทคโนโลยีชีวภาพ</option>
                <option>ภาควิชาจุลชีววิทยาอุตสาหกรรม</option>
                <option>ภาควิชาฟิสิกส์ประยุกต์</option>
                <option>ภาควิชาสถิติประยุกต์</option>
            </select>
        </div>
        <button type="submit" class="btn-form">ติดตามผล</button>
    </form>
  </div>
  </section>
</body>
</html>