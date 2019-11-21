<?php
@$bil = $_POST['bilangan'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bilangan Ganjil Genap</title>
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
		  <h1>Menentukan Bilangan Ganjil Genap</h1><br>
		 
			Masukkan Angka = 
            <input type="text" name="bilangan" value="<?php echo $bil; ?>"/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
				if ($bil == "") {
                echo "";
				}else if($bil % 2 == 0){
				echo 'Bilangan  ' . $bil . ' Adalah Bilangan Genap.';
				}else{
				echo 'Bilangan  ' . $bil . ' Adalah Bilangan Ganjil.';}
			?>

        </form>
    </body>
</html>
