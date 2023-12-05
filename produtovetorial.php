<?php
include 'head.php'
?>

<div>
<div style=" margin-left: 30px;
    background-color: rgba(80, 80, 80, 0.1); 
    border:solid;
    border-radius: 10px;
    padding: 7px;
    
    ">
    <h2> Produto Vetorial </h2>
    <spam>• Realizar o produto vetorial entre dois vetores com três dimensões;
</spam>
</div>
<br>
<form method="post">
   
 <div class="vetor">
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

   <br>
   <br>

   <input type="submit" value="calcular" style="display: block; margin: 0 auto;">
    <br>
</form>
<div  style=" margin-left: 30px;
    background-color: rgba(80, 80, 80, 0.1);  
    border:solid;
    border-radius: 10px;
    padding: 7px;
    opacity: 0.8;">
<h4>resultado :</h4>
<?php
if($_POST){
$n1a=$_POST['n1a'];
$n2a=$_POST['n2a'];
$n3a=$_POST['n3a'];
$n1b=$_POST['n1b'];
$n2b=$_POST['n2b'];
$n3b=$_POST['n3b'];
$r1=$n1a*$n1b;
$r2=$n2a*$n2b;
$r3=$n3a*$n3b;
$r4=$r1+$r2+$r3;//produto escalar//
$r5=$n1a*$n1a+$n2a*$n2a+$n3a*$n3a;
//modulo de A =$r5//
$r6=$n1b*$n1b+$n2b*$n2b+$n3b*$n3b;
//modulo de B =$r6//
$r7=$r6*$r5;
$r8= sqrt($r7);
$r9=$r4/$r8;
echo $r9;

}else{
   
}
?>
</div>
</div>