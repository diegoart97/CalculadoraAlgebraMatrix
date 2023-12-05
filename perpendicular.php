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

    <spam>• Encontrar a equação de um plano que passa por um ponto (x,y,z) e perpendicular a um
vetor v = ai + bj + ck.
 (x,y,z)</spam>
  </div>
<br>
<br>
<form method="post" >
   
 <div class="vetor" >
 <h5>vator </h5>
   <label style="margin-left:5px ;"> valor 1: <input class="val" type="text" name="n1a"></label><br>
   <label style="margin-left:5px ;"> valor 2: <input class="val" type="text" name="n2a"></label><br> 
   <label style="margin-left:5px ;"> valor 3: <input class="val" type="text" name="n3a"></label><br>
 </div>


 <div class="vetor">
 <h5>          </h5>
   <label style="margin-left:5px ;"> I:<input class="val" type="text" name="n1b"></label><br>
   <label style="margin-left:5px ;"> J:<input class="val" type="text" name="n2b"></label><br> 
   <label style="margin-left:5px ;">K:<input class="val" type="text" name="n3b"></label><br>
 </div>
   <br>
   <br>

    <input type="submit" value="calcular" style="display: block; margin-left: 30px">
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
$d=$a1*$x0+$a2*$y0+$a3*$z0; ;//calculo para encontrar o D
echo $a1.'x +'. $a2 .'y +' .$a3.'z ='. $d ; // montando a equação

}else{
   
}
?>

</div>

</div>