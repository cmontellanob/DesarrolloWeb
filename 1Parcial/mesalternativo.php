<?php 
$n=$_GET["txtMes"];
?>
<select>
<option <?php if ($n==1) echo'selected="selected"';?> value="1">Enero</option>
<option <?php if ($n==2) echo'selected="selected"';?> value="2">Febrero</option>
<option <?php if ($n==3) echo'selected="selected"';?>value="3">Marzo</option>
<option <?php if ($n==4) echo'selected="selected"';?>value="4">Abril</option>
<option <?php if ($n==5) echo'selected="selected"';?>value="5">Mayo</option>
<option <?php if ($n==6) echo'selected="selected"';?>value="6">Junio</option>
<option <?php if ($n==7) echo'selected="selected"';?> value="7">Julio</option>
<option <?php if ($n==8) echo'selected="selected"';?> value="8">Agosto</option>
<option <?php if ($n==9) echo'selected="selected"';?> value="9">Septiembre</option>
<option <?php if ($n==10) echo'selected="selected"';?> value="10">Octubre</option>
<option <?php if ($n==11) echo'selected="selected"';?> value="11">Noviembre</option>
<option <?php if ($n==12) echo'selected="selected"';?>value="12">Diciembre</option>
</select>