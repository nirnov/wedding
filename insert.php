<?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "nirnov");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        if ($_POST['submit']) {

            // echo 'masuk';
            // die;

            $nama =  $_POST['namahadir'];
            $status_hadir = $_POST['status_hadir'];
            $ucapan =  $_POST['ucapanhadir'];  
            $namato =   $_POST['namato']; 
        }
        
         

        // echo $nama;
        // echo $status_hadir;
        // echo $ucapan;
        // die;
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO kiriman_ucapan (nama, status_hadir, ucapan)  VALUES ('$nama',
            '$status_hadir','$ucapan')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);

        header('location: index2.php?to='.$namato.'&st_submit=Y');
?>
