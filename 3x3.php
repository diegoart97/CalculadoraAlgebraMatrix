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
    <h2> Produto Escalar </h2><br>

    <spam>  • Encontrar a determinante entre matrizes quadradas 3x3.</spam>
  </div>
<br>
<br>
<form method="post" >
   
 <div style="    width: 220px;
    height: 170px;
    display: inline-block;
    margin-left: 30px;
    border:solid;
    border-radius: 10px;
    background: #D3D3D3;">
   <h5>matriz</h5>
   <div style="display: inline-block;">
   <input style="width: 50px; margin-left: 20px;" type="text" name="n1a"></label><br>
   <input style="width: 50px; margin-left: 20px;"type="text" name="n2a"></label><br>
   <input style="width: 50px; margin-left: 20px;"type="text" name="n3a"></label><br>
   </div>
   <div style="display: inline-block;">
   <input style="width: 50px; ;" type="text" name="n1b"></label><br>
   <input style="width: 50px; ;"type="text" name="n2b"></label><br>
   <input style="width: 50px; ;"type="text" name="n3b"></label><br>
   </div>
   <div style="display: inline-block;">
   <input style="width: 50px; ;" type="text" name="n1c"></label><br>
   <input style="width: 50px; ;"type="text" name="n2c"></label><br>
   <input style="width: 50px; ;"type="text" name="n3c"></label><br>
   </div>
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
$x1=$_POST['n1a'];
$x2=$_POST['n2a'];
$x3=$_POST['n3a'];
$y1=$_POST['n1b'];
$y2=$_POST['n2b'];
$y3=$_POST['n3b'];
$z1=$_POST['n1c'];
$z2=$_POST['n2c'];
$z3=$_POST['n3c'];
//calculo da esquerda pra direita
$r1=$x1*$y2*$y3;
$r2=$y1*$z2*$x3;
$r3=$z1*$x2*$y3;
//calculo da direita para esquerda
$rr1= $x3*$y2*$z1;
$rr2= $y3*$z2*$x1;
$rr3= $z3*$x2*$y1;
//calculo final
$rrr1=$r1+$r2+$r3;
$rrr2=$rr1+$rr2+$rr3;
$total=$rrr1-$rrr2;
echo 'determinante = ';

echo $total;

echo '<br>';
echo 'As reduzidas são respectivamente';
// reduzida
$d1 = $y2*$z3;
$d2 = $y3*$z2;
$dd= $d1-$d2;
echo '<br> a¹¹='. $dd; //reduzida a¹¹
//PT2
$xd1 = $y1*$z3;
$xd2 = $y3*$z1;
$xdd= $xd1-$xd2;
echo '<br> a²¹='. $xdd; //reduzida a²¹
//pt3
$yd1 = $y1*$z2;
$yd2 = $y2*$z1;
$ydd= $yd1-$yd2;
echo '<br> a³¹='. $ydd; //reduzida a³¹
}else{
   
}
?>

</div>

</div>