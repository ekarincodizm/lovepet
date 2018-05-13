
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการกิจกรรม
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

  <!-- Main row -->
  <div class="row">

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<!-- ccccc -->





<div class="box">

  <div class="box-header">
    <a href="index.php?menu=activity-form-add" class="btn btn-info">เพิ่มกิจกรรม</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>#</th>
        <th>รูปภาพ</th>
        <th>หัวข้อ</th>
        <th>รายละเอียด</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_activity ORDER BY(id) DESC";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td>
          <img src="../upload/<?php echo $row['picture']; ?>" alt="" width="100">
        </td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['detail']; ?></td>
        
        <td>
          <a href="index.php?menu=activity-form-edit&id=<?php echo $row['id'];?>" class="btn btn-primary"> แก้ไข </a>
        </td>
        <td>
          <a href="index.php?menu=activity-del&id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบ!');"> ลบ </a>
        </td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->






 <!-- ccc -->



        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
<!-- </div> -->
