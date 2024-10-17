
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        display: grid;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        place-items: center;
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <h1> recommended books</h1>
    <?php
    $paymentstatus = 1;
    switch($paymentstatus){
      case 0:
        echo '<p>unpayed</p>';
        break;
      case 1:'<p>payed</p>';  
    } 
    match($paymentstatus){
      0 => '<p>unpayed</p>',
      1 => '<p>payed</p>',
    }
  

?>  
  </body>
</html>