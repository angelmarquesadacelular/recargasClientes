<?php
//include 'conexion.php';
require "php\claseSesion.php";
$q=$_POST['q'];
$res=montoCarrier($q);
?>
<style>
  .select
  {
  border: 1px solid #DBE1EB;
  font-size: 18px;
  font-family: Arial, Verdana;
  padding-left: 7px;
  padding-right: 7px;
  padding-top: 10px;
  padding-bottom: 10px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
  }
  
  .select:hover
  {
  border-color: #FBFFAD;
  }
  
  .select option
  {
  border: 1px solid #DBE1EB;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  }
  
  .select option:hover
  {
  background: #FC4F06;
  background: linear-gradient(left, #FC4F06, #D85F2B);
  background: -moz-linear-gradient(left, #FC4F06, #D85F2B);
  background: -webkit-linear-gradient(left, #FC4F06, #D85F2B);
  background: -o-linear-gradient(left, #FC4F06, #D85F2B);
  font-style: italic;
  color: #FFFFFF;
  }
 </style>
<select id="montoCarrier"  class="select" name="montoCarrier" onchange="myFunction2(this.value)">

<option value="0">Monto</option>
<?php while($fila=$res->fetch_array(MYSQLI_ASSOC)){ ?>
 <option value="<?php echo $fila['id']; ?>"><?php echo $fila['monto']; ?></option>
<?php } ?>

</select>