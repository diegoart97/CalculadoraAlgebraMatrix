<?php
include 'head.php'
?>


<div >
  <div style=" margin-left: 30px;
    background-color: rgba(80, 80, 80, 0.1); 
    border:solid;
    border-radius: 10px;
    padding: 7px;
    ">
    <h2> Equação de Plano</h2><br>

    <spam> • Encontrar a equação de um plano perpendicular a dois vetores u = ai + bj + ck e v = di +
ej + fk e que passa pelo ponto (x,y,z).</spam>
  </div>
<br>
<br>
<form method="post" >
   
 <div class="vetor" >
 <h5>valor de P </h5>
   <label style="margin-left:5px ;"> valor 1: <input class="val" type="text" name="n1a"></label><br>
   <label style="margin-left:5px ;"> valor 2: <input class="val" type="text" name="n2a"></label><br> 
   <label style="margin-left:5px ;"> valor 3: <input class="val" type="text" name="n3a"></label><br>
 </div>

 <div class="vetor">
 <h5>vator A </h5>
   <label style="margin-left:5px ;">I: <input class="val" type="text" name="n1b"></label><br>
   <label style="margin-left:5px ;">J: <input class="val" type="text" name="n2b"></label><br> 
   <label style="margin-left:5px ;">K: <input class="val" type="text" name="n3b"></label><br>
 </div>
 <div class="vetor">
 <h5>vator B </h5>
   <label style="margin-left:5px ;">I: <input class="val" type="text" name="n1c"></label><br>
   <label style="margin-left:5px ;">J: <input class="val" type="text" name="n2c"></label><br> 
   <label style="margin-left:5px ;">K: <input class="val" type="text" name="n3c"></label><br>
 </div>
   <br>
   <br>

    <input type="submit" value="calcular" style="display: block; margin: 0 auto;">
    <br>
</form>
<div style=" margin-left: 30px;
    background-color: rgba(80, 80, 80, 0.1);  
    border:solid;
    border-radius: 10px;
    padding: 7px;
    opacity: 0.8;" >
<h4>resultado :</h4>
<?php
if($_POST){
$x0=$_POST['n1a'];
$y0=$_POST['n2a'];
$z0=$_POST['n3a'];
$a1=$_POST['n1b'];
$a2=$_POST['n2b'];
$a3=$_POST['n3b'];
$b1=$_POST['n1c'];
$b2=$_POST['n2c'];
$b3=$_POST['n3c'];
$c =$a2*$b3-$a3*$b2;
$d =$a3*$b1-$a1*$b3;
$e =$a1*$b2-$a2*$b1;
$r1 =$c* -$x0;
$r2 =$d* -$y0;
$r3 = $e * -$z0;
$r4= $r1 + $r2 + $r3;

echo $c.'x +'.$d.'y +'.$e.'z '.$r4.'=0';
}else{
   
}
?>

</div>

</div>