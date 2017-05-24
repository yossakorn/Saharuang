<html>
<?php
<title>Compare Order</title>
<form action="compare_order.php" method="post">
  <center>
  <h1>The Order From Customer</h1><br>

  sugar :<input type="number" name="o_sugar" value="0" />
  <input type='variable' name='total_sugar' value='<?php echo "$sugar_sum";?>'/>
  <input type="submit" name="sugar_cal" value="Calculate" class="btn btn-primary"/><br>

  molasses :<input type="number" name="o_molasses" value="0" />
  <input type='variable' name='total_sugar' value='<?php echo "$molasses_sum";?>'/>
  <input type="submit" name="molasses_cal" value="Calculate" class="btn btn-primary"/><br>


  </center>
</form>
?>

</html>
