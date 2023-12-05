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

    <spam> • Encontrar a determinante entre matrizes quadradas 2x2.</spam>
  </div>
<br>
<br>
<form method="post" >
   
 <div style="    width: 150px;
    height: 150px;
    display: inline-block;
    margin-left: 30px;
    border:solid;
    border-radius: 10px;
    background: #D3D3D3;">
   <h5>matriz</h5>
   <div style="display: inline-block;">
   <input style="width: 50px; margin-left: 20px;" type="text" name="n1a"></label><br>
   <input style="width: 50px; margin-left: 20px;"type="text" name="n2a"></label><br>
   </div>
   <div style="display: inline-block;">
   <input style="width: 50px; ;" type="text" name="n1b"></label><br>
   <input style="width: 50px; ;"type="text" name="n2b"></label><br>

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

$y1=$_POST['n1b'];
$y2=$_POST['n2b'];

$r=$x1*$y2-$y1*$x2;
echo 'determinante = ';
echo $r;

}else{
   
}
?>

</div>

</div>