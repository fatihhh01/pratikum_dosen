<?php
// fungsi salam dengan parameter $nama
 function salam($nama="nurul fikri"){
    echo "hello, selamat datang! ".$nama;
 }
?>

<h1>belajar fungsi</h1>
<?php
 salam("fatih");
 echo "<br>";
 salam();
?>