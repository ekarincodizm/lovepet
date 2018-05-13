
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    ข้อมูลติดต่อ
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
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>#</th>
        <th>วันที่</th>
        <th>อีเมลล์</th>
        <th>หัวข้อ</th>
        <th>ข้อความ</th>
        <th>รายละเอียด</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_contact ORDER BY(id) DESC";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['time_reg']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><a href="index.php?menu=contact-detail&id=<?php echo $row['id']; ?>" class="btn btn-info">รายละเอียด</a></td>
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
