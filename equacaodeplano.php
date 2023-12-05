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
    <h2> Equação de Plano </h2><br>

    <spam>• Encontrar a equação de um plano dados três diferentes pontos com três dimensões
(x,y,z).</spam>
  </div>
<br>
<br>
<form method="post" >
   
 <div class="vetor" >
 <h5>vator 1 </h5>
   <label style="margin-left:5px ;"> valor 1: <input class="val" type="text" name="n1a"></label><br>
   <label style="margin-left:5px ;"> valor 2: <input class="val" type="text" name="n2a"></label><br> 
   <label style="margin-left:5px ;"> valor 3: <input class="val" type="text" name="n3a"></label><br>
 </div>

 <div class="vetor">
 <h5>vator 2 </h5>
   <label style="margin-left:5px ;"> valor 1: <input class="val" type="text" name="n1b"></label><br>
   <label style="margin-left:5px ;"> valor 2: <input class="val" type="text" name="n2b"></label><br> 
   <label style="margin-left:5px ;"> valor 3: <input class="val" type="text" name="n3b"></label><br>
 </div>
 <div class="vetor">
 <h5>vator 3 </h5>
   <label style="margin-left:5px ;"> valor 1: <input class="val" type="text" name="n1c"></label><br>
   <label style="margin-left:5px ;"> valor 2: <input class="val" type="text" name="n2c"></label><br> 
   <label style="margin-left:5px ;"> valor 3: <input class="val" type="text" name="n3c"></label><br>
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
    $x1 = $_POST['n1a'];
    $y1 = $_POST['n2a'];
    $z1 = $_POST['n3a'];
    $x2 = $_POST['n1b'];
    $y2 = $_POST['n2b'];
    $z2 = $_POST['n3b'];
    $x3 = $_POST['n1c'];
    $y3 = $_POST['n2c'];
    $z3 = $_POST['n3c'];

    // multiplicando pra direita
    $rr1 = ($y2 + -$y1) * ($z3 + -$z1);
    $rr2 = ($z2 + -$z1) * ($x3 + -$x1);
    $rr3 = ($x2 + -$x1) * ($y3 + -$x2);

    // multiplicando pra esquerda
    $rr4 = ($y2 - $y1) * ($x3 - $x1);
    $rr5 = ($z2 - $z1) * ($y3 - $x2);
    $rr6 = ($x2 - $x1) * ($z3 - $z1);

    // descobrindo os valores das variáveis a partir dos resultados
    $x = $rr1 - $rr5;
    $y = $rr2 - $rr6;
    $z = $rr3 - $rr4;

    // descobrindo o valor restante a partir da soma das multiplicações da matriz
    $r = $rr1 * -$x1 + $rr2 * -$x2 + $rr3 * -$z1 - ($rr4 * -$z1 + $rr5 * -$x1 + $rr6 * -$x2);

    echo $x . 'x, ' . $y . 'y, ' . $z . 'z, ' . $r;}else{
      
    }
?>

</div>

</div>