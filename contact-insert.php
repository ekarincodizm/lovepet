<?php
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];
                
                $sql = "INSERT INTO tb_contact(firstname, lastname, email, subject, message) VALUES ('$firstname','$lastname','$email','$subject','$message')";

                $query = $conn->query($sql);


                if ($query) {

                    ?>
                    <script>
                        alert('บันทึกข้อมูลเรียบร้อย!');
                        window.location = 'index.php?menu=contact';
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Edit Fails!!!');
                        window.history.back();
                    </script>
                    <?php
                }
        ?>