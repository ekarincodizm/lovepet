<section class="content-header">
  <h1>
    ข้อมูลติดต่อ
  </h1>
</section>

<section class="content">
<div class="box box-success">
    <a href="index.php?menu=contact-form-show" class="btn btn-success" style="margin: 10px;">กลับ</a>
  <div class="box-header with-border">
      <h3 class="box-title">ข้อมูลติดต่อ</h3>
  </div>

  <?php
        $sql = "SELECT * FROM tb_contact WHERE id =".$_GET['id'];
        $query = $conn->query($sql);
        $row = $query->fetch_array();
  ?>
<div class="row">
    <div class="col-md-12">
        <p style="padding: 10px;">
                <b>วันที่ :</b>  <?php echo DateCookky($row['time_reg']); ?> <br><br>
                <b>ชื่อผู้ติดต่อ :</b>  <?php echo $row['firstname'].' '.$row['lastname']; ?> <br><br>
                <b>หัวข้อ :</b>  <?php echo $row['subject']; ?> <br><br>
                <b>ข้อความ :</b>  <?php echo $row['message']; ?> <br><br>
        </p>
    </div>
</div>
  

  <!-- /.box-body -->
</div>
</div>
</section>
