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

    <spam>  • Encontrar a determinante entre matrizes quadradas 4x4.</spam>
  </div>
<br>
<br>
<form method="post" >
   
 <div style="    width: 270px;
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
   <input style="width: 50px; margin-left: 20px;"type="text" name="n4a"></label><br>
   </div>
   <div style="display: inline-block;">
   <input style="width: 50px; ;" type="text" name="n1b"></label><br>
   <input style="width: 50px; ;"type="text" name="n2b"></label><br>
   <input style="width: 50px; ;"type="text" name="n3b"></label><br>
   <input style="width: 50px; ;"type="text" name="n4b"></label><br>
   </div>
   <div style="display: inline-block;">
   <input style="width: 50px; ;" type="text" name="n1c"></label><br>
   <input style="width: 50px; ;"type="text" name="n2c"></label><br>
   <input style="width: 50px; ;"type="text" name="n3c"></label><br>
   <input style="width: 50px; ;"type="text" name="n4c"></label><br>
   </div>
   <div style="display: inline-block;">
   <input style="width: 50px; ;" type="text" name="n1d"></label><br>
   <input style="width: 50px; ;"type="text" name="n2d"></label><br>
   <input style="width: 50px; ;"type="text" name="n3d"></label><br>
   <input style="width: 50px; ;"type="text" name="n4d"></label><br>
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
$x4=$_POST['n4a'];

$y1=$_POST['n1b'];
$y2=$_POST['n2b'];
$y3=$_POST['n3b'];
$y4=$_POST['n4b'];

$z1=$_POST['n1c'];
$z2=$_POST['n2c'];
$z3=$_POST['n3c'];
$z4=$_POST['n4c'];

$k1=$_POST['n1d'];
$k2=$_POST['n2d'];
$k3=$_POST['n3d'];
$k4=$_POST['n4d'];

$r1=$y2*$z3*$k4;
$r2=$z2*$k3*$y4;
$r3=$k2*$y3*$z4;
//ao contradio
$rr1= $y4*$z3*$k2;
$rr2= $z4*$k3*$y2;
$rr3= $k4*$y3*$z2;
//calculo final
$rrr1=$r1+$r2+$r3;
$rrr2=$rr1+$rr2+$rr3;
$total1=$rrr1-$rrr2;  //reduzida a¹¹
//pt2
$f1=$y1*$z3*$k4;
$f2=$z1*$k3*$y4;
$f3=$k1*$y3*$z4;
//ao contradio
$ff1= $y4*$z3*$k1;
$ff2= $z4*$k3*$y1;
$ff3= $k4*$y3*$z1;
//calculo final
$fff1=$f1+$f2+$f3;
$fff2=$ff1+$ff2+$ff3;
$total2=$fff1-$fff2;   //reduzida a²¹
//pt3
$q1=$y1*$z2*$k4;
$q2=$z1*$k2*$y4;
$q3=$k1*$y2*$z4;
//ao contradio
$qq1= $y4*$z2*$k1;
$qq2= $z4*$k2*$y1;
$qq3= $k4*$y2*$z1;
//calculo final
$qqq1=$q1+$q2+$q3;
$qqq2=$qq1+$qq2+$qq3;
$total3=$qqq1-$qqq2;   //reduzida a³¹
//pt4
$p1=$y1*$z2*$k3;
$p2=$z1*$k2*$y3;
$p3=$k1*$y2*$z3;
//ao contradio
$pp1= $y3*$z2*$k1;
$pp2= $z3*$k2*$y1;
$pp3= $k3*$y2*$z1;
//calculo final
$ppp1=$p1+$p2+$p3;
$ppp2=$pp1+$pp2+$pp3;
$total4=$ppp1-$ppp2;   //reduzida a⁴¹

//cofatores
$total22=-1*$total2;
$total44=-1*$total4;

$total5=$x1*$total1;
$total6=$x2*$total22;
$total7=$x3*$total3;
$total8=$x4*$total44;
// end
$total9=$total5+$total6+$total7+$total8;
echo 'determinante = ';
echo $total9;

echo '<br>';
echo 'As reduzidas são respectivamente';
echo '<br> a¹¹='.$total1;
echo '<br> a²¹='.$total2;
echo '<br> a³¹='.$total3;
echo '<br> a⁴¹='.$total4;
echo '<br>';

}else{
   
}
?>

</div>

</div>
