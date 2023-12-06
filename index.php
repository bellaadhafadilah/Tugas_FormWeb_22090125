<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
         <h2>Form HTML dan Form Handling PHP</h2>

         <?php
         $nim= $nama = $alamat= $email = $nohp = $prodi="";

         if ($_SERVER["REQUEST_METHOD"] == "POST"
         && isset ($_POST["nim"])
         && isset ($_POST["nama"])
         && isset ($_POST["alamat"])
         && isset ($_POST["email"])
         && isset ($_POST["no hp"])
         && isset ($_POST["prodi"])) {
            $nim = $_POST ["nim"];
            $nama = $_POST ["nama"];
            $alamat = $_POST ["alamat"];
            $email = $_POST ["email"];
            $nohp = $_POST ["no hp"];
            $prodi = $_POST ["prodi"];

         }
        ?>

        <?php
        $nim=$nama=$alamat=$email=$nohp=$prodi="";
        $nimErr=$namaErr=$alamatErr=$emailErr=$nohpErr=$prodiErr="";

        if ($_SERVER["REQUEST_METHOD"] == "POST"
        && isset ($_POST["nim"])
        && isset ($_POST["nama"])
        && isset ($_POST["alamat"])
        && isset ($_POST["email"])
        && isset ($_POST["nohp"])
        && isset ($_POST["prodi"])) {
            if (empty($_POST["nim"])){
                $nimErr = "Nim kosong";
            } else {
                $nim = test_input($_POST["nim"]);
            }
            if (empty($_POST["nama"])){
                $namaErr = "Nama kosong";
            } else {
                $nama = test_input($_POST["nama"]);
            }
            if (empty($_POST["alamat"])){
                $alamatErr = "alamat kosong";
            } else {
                $alamat = test_input($_POST["alamat"]);
            }
            if (empty($_POST["email"])){
                $emailErr = "email kosong";
            } else {
                $email = test_input($_POST["email"]);
            } 
            if (empty($_POST["nohp"])){
                $nohpErr = "nohp kosong";
            } else {
                $nohp = test_input($_POST["nohp"]);
            }
            if (empty($_POST["prodi"])){
                $prodiErr = "prodi kosong";
            } else {
                $prodi = test_input($_POST["prodi"]);
            }
             
            
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <form action ="<?php echo htmlspecialchars 
        ($_SERVER['PHP_SELF']);?>" method = "POST">
        NIM : <input type ="text" name="nim"><span class="error">* <?php echo $nimErr;?></span><br><br>
        Nama : <input type ="text" name="nama"><span class="error">* <?php echo $namaErr;?></span><br><br>
        Alamat : <input type = "text" name="alamat"><span class="error">* <?php echo $alamatErr;?></span><br><br>
        Email : <input type = "text" name="email"><span class="error">* <?php echo $emailErr;?></span><br><br>
        NoHp : <input type = "text" name="nohp"><span class="error">* <?php echo $nohpErr;?></span><br><br>
        Prodi : <input type = "text" name="prodi"><span class="error">* <?php echo $prodiErr;?></span><br><br>
        <input type="submit">
        </form>

        <?php
        echo "NIM:";
        echo $nim;
        echo "<br>";
        echo "Nama:"; 
        echo $nama;
        echo "<br>";
        echo "Alamat:"; 
        echo $alamat;
        echo "<br>";
        echo "Email:"; 
        echo $email;
        echo "<br>";
        echo "NoHp:"; 
        echo $nohp;
        echo "<br>";
        echo "Prodi:"; 
        echo $prodi;
        echo "<br>";


        ?>           
    </body>
</html>