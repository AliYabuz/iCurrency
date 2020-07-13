<!DOCTYPE html>
<title>Currency Dönüştürücü</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    body { padding: 1rem;

     }
</style>
</head>


</nav>

<body>
    <br /><center>

<form class="form-inline" method="POST">
<center>
<div class="input-group mb-3 input-dark bg-dark">
    
  <div class="input-group-prepend">
    <span class="input-group-text">TRY</span>
  </div>
  <input name="try" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>

<br />

</form>

</body>
<?php

if(isset($_POST['try'])){
    echo "<center><h4>Bu sonuçlar kesin olmayıp sizlere sadece tahmini kur fiyatlarını sunar</h4>";
    echo "<img src='data:image/png;base64,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' height='21' width='32'>  >> ".`expr {$_POST['try']} / 7`."  United States Dollar";
    echo "<br /><img src='https://f0.pngfuel.com/png/150/920/flag-of-united-kingdom-png-clip-art.png' height='21' width='32'>  >> ".`expr {$_POST['try']} / 5`."  Australian Dollar";
    echo "<br /> <img src='https://lh3.googleusercontent.com/proxy/osXGCC6GK3RPPSOCAVTfydFHkCEzjQHeQ3t4afa6baD187u-AyGSqU5KbdRlyZjjqXJjeCKp5bSBVVXGfiEQu11wipp1VRI' height='21' width='32'>  >> ".`expr {$_POST['try']} / 9`."  Great Britain Pound";
    if(`expr {$_POST['try']} / 6364939`==0){
        echo "<br /> <img src='https://upload.wikimedia.org/wikipedia/commons/9/9a/BTC_Logo.svg' height='21' width='32'>  >> ".`expr {$_POST['try']} / 6364939`."  Bitcoin <a style='color: red;'>(not even worth)</a>";

    }else{
        echo "<br /> <img src='https://upload.wikimedia.org/wikipedia/commons/9/9a/BTC_Logo.svg' height='21' width='32'>  >> ".`expr {$_POST['try']} / 6364939`."  Bitcoin <a style='color: green;'>(good!)</a>";

    }
    if(`expr {$_POST['try']} / 165077`==0){
        echo "<br /> <img src='https://i.ya-webdesign.com/images/ethereum-logo-png-16.png' height='21' width='32'>  >> ".`expr {$_POST['try']} / 165077`."  Etherium <a style='color: red;'>(not even worth)</a>";

    }else{
        echo "<br /> <img src='https://i.ya-webdesign.com/images/ethereum-logo-png-16.png' height='21' width='32'>  >> ".`expr {$_POST['try']} / 165077`."  Etherium <a style='color: green;'>(good!)</a>";

    }

}

?>
