
<section id="main-content">
   <section class="wrapper">
        <?php
                $id = $_POST["id"];
                $header = $_POST["header"];
                $detail = $_POST["detail"];
                
                $sql = "UPDATE tb_heal_pet SET title='$header', detail='$detail' WHERE id ='$id' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('แก้ไขข้อมูลเรียบร้อย!');
                        window.location = 'index.php?menu=heal-form-show';
                    </script>
                    <?php
                }else{
                    // echo $sql;
                    ?>
                    <script>
                        alert('Edit Fails!!!');
                        window.history.back();
                    </script>
                    <?php
                }
        ?>
   </section>
</section>