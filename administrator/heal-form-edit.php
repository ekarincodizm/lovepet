<?php
$id = $_GET['id'];
$sql = "SELECT * FROM tb_heal_pet WHERE id = '$id'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<section class="content-header">
  <h1>
    เพิ่มสาระหมาแมว
  </h1>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มสาระหมาแมว</h3>
  </div>
  <form class="form-group" action="index.php?menu=heal-update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value=<?php echo $_GET['id']?>"">
    <div class="box-body">
      หัวข้อ
      <input type="test" name="header" class="form-control" value="<?php echo $row['title'] ?>" required>
      <br>
      รายละเอียด
      <textarea name="detail"  class="form-control textarea" rows="5" placeholder="รายละเอียด"><?php echo $row['detail'] ?></textarea>
      <br>

      <input class="btn btn-primary" type="submit" value="บันทึก"> 
      <a href="#" onclick="window.location = 'index.php?menu=heal-form-show';" class="btn btn-default">ยกเลิก</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
</section>
