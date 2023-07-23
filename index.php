<?php
$koneksi = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <style>
        .dsp-flex{
            display:flex;
            padding:0 20px;
        }

        .flip {
            font-weight: bold;
             padding:20px;
             cursor:pointer;
             font-family:fantasy;
             font-size:30px;
        }
        
        .flip:hover{
            background: blue;
            color:white;
        }
    </style>
</head>
<body> 
    <h1 style="text-align:center;">Daftar Soal</h1>
    <div class="dsp-flex">
        <p class="flip" onclick="myFunction()">No 1</p>
        <p class="flip" onclick="myFunction1()">No 2</p>
    </div>
    <div id="n1" style="margin:20px">
        <h1>Mencari Kelipatan dari Bilangan 1 - 10</h1>
        <?php
            printf("kelipatan 1 : ");
                for($a=1;$a<=10;$a++){
                    $ab = $a % 1 == 0;
                    if ( $a != $ab ){
                        echo $a;
                    }else{
                        echo "<font style='color:blue;'> $a </font>";
                    }
                }
            ?>
            <br>
        <?php
            printf("kelipatan 2 : ");
                for($a=1;$a<=10;$a++){
                    $ab = $a % 2 == 0;
                    if ( $a != $ab ){
                        echo $a;
                    }else{
                        echo "<font style='color:blue;'> $a </font>";
                    }
                }
            ?>
            <br>
        <?php
            printf("kelipatan 3 : ");
                for ($i= 1; $i <= 10; $i++) { 
                    $ii = $i % 3 == 0;
                    if( $ii == $i) {
                        echo "<font style='color:blue;'> $i </font>";
                    }
                    else{
                        echo "<font style='letter-spacing:1px;'> $i </font>";
                    }
                }
            ?>
            <br>
        <?php
            printf("kelipatan 4 : ");
                for ($i= 1; $i <= 10; $i++) { 
                    $ab = $i % 4 == 0;
                    if ( $i != $ab ) {
                        echo "<font> $i </font>";
                    }else{
                        echo "<font style='color:blue;'> $i </font>";
                    }
                }
            ?>
            <br>
        <?php
            printf("kelipatan 5 : ");
                for ($i= 1; $i <= 10; $i++) { 
                    if ( ($i % 5 == 0) == $i ) {
                        echo "<font style='color:blue;'> $i </font>";
                    }else{
                        echo "<font> $i </font>";
                    }
                }
            ?>
    </div>
    <div id="n2" style="display:none; margin:20px">
       Output :
       <table  cellpadding="7" cellspacing="">
         <thead>
           <tr>
              <th>Group 1</th>
              <th>Group 2</th>
              <th>Group 3</th>
           </tr>
           </thead>
           <tbody>
           <?php 
					  
                include 'koneksi.php';
                $data_k = mysqli_query($koneksi, "SELECT * FROM list_name");
                if (mysqli_num_rows($data_k)) {
                    while ($data = mysqli_fetch_array($data_k)) {

                ?>
                 <tr>
                    <td><?php echo $data['nik'], "-", $data['name'];?></td>
                    
                 </tr>
            <?php 
            } }
           ?>
           </tbody>
        </table>

        
    </div>
</body>
<script>
function myFunction() {
  document.getElementById("n1").style.display = "block";
  document.getElementById("n2").style.display = "none";
}
function myFunction1() {
  document.getElementById("n1").style.display = "none";
  document.getElementById("n2").style.display = "block";
}
</script>
</html>