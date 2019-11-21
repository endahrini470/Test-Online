<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Palindrome Checker</title>
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
  strong{
   background: red;
   padding: 5px;
   border-radius: 3px;
  }
 </style>
</head>
<body>
 
 <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
  <h1>Palindrome Checker</h1><br>
  <input type="text" name="palindrome" placeholder="Masukan Kata-kata">
  <input type="submit" name="submit" value="Check">
 </form>
 
 <div class="result">
  <?php 
   if (isset($_POST['submit'])) {
    $palindrome = $_POST['palindrome'];
    $split = str_split($palindrome);
    $jml   = strlen($palindrome);
    $nama2 = "";
    for ($i=($jml-1); $i >= 0; $i--) { 
     $nama2 .= $split[$i];
    }
 
    if (strtolower($palindrome)==strtolower($nama2)) {
     echo "Kata <strong>$palindrome</strong> adalah Palindrom";
    }else{
     echo "Kata <strong>$palindrome</strong> bukan palindrom";
    }
   }
   ?> 
  </div>
</body>
</html>