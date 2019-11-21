<?php
@$nilai = $_POST['nilai'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
		 <style>
		*{
		   margin: 0 auto;
		   box-sizing: border-box;
		   text-align: center;
		   font-family: 'Lato';
		  }
		  form{
		   margin-top: 10em;
		   padding: 40px 20px;
		   border: 1px solid silver;
		   width: 40em;
		  }
		  input{
		   padding: 10px;
		  }
		  .result{
		   width: 32em;
		   padding: 40px 20px;
		   background: #000;
		   color: white;
		   text-transform: capitalize;
		   font-size: 20px;
		  }
		  
		 </style>
    </head>
    <body>
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
		  <h1>Menentukan Nilai Grade</h1><br>
		 
            Masukkan nilai = 
            <input type="text" name="nilai" value="<?php echo $nilai; ?>"/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
            if ($nilai == "" ) {
                echo "";
            }else if ($nilai <= 59) {
                echo 'Nilai = '. $nilai .'; Grade = E.';
            } else if ($nilai >= 60 && $nilai <= 69) {
                echo 'Nilai = ' . $nilai . '; Grade = D';
            } else if ($nilai >= 70 && $nilai <= 79) {
                echo 'Nilai = ' . $nilai . '; Grade = C';
            } else if ($nilai >= 80 && $nilai <= 89) {
                echo 'Nilai = ' . $nilai . '; Grade = B';
            } else if ($nilai >= 90) {
                echo 'Nilai = ' . $nilai . '; Grade = A';
            } else {
                echo 'Nilai = ' . $nilai . '; tidak berada dalam GRADE bilangan.';
            }
            ?>
        </form>
    </body>
</html>
