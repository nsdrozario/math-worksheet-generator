<?php
$subject = $_POST['subject'];
$value = $_POST['value'];
$subject_cal = array();
ob_start();
 ?>
   <div>
     <input type='number' style='width: 60px;' id='val_1' name='val_1'> + <input type='number' style='width: 60px;' id='val_2' name='val_2'>
     <input type='button' name='submit' onclick="$('#solution').html('<p><h3>' + (parseFloat($('#val_1').val()) + parseFloat($('#val_2').val())) + '</h3></p>');" value='='>
     <span id='solution'></span>
   </div>
 <?php
 $subject_cal['arithm']['add'] = ob_get_clean();
 ob_start();
  ?>
    <div>
      <input type='number' style='width: 60px;' id='val_1' name='val_1'> - <input type='number' style='width: 60px;' id='val_2' name='val_2'>
      <input type='button' name='submit' onclick="$('#solution').html('<p><h3>' + (parseFloat($('#val_1').val()) - parseFloat($('#val_2').val())) + '</h3></p>');" value='='>
      <span id='solution'></span>
    </div>
  <?php
$subject_cal['arithm']['sub'] = ob_get_clean();
ob_start();
  ?>
    <div>
      <input type='number' style='width: 60px;' id='val_1' name='val_1'> x <input type='number' style='width: 60px;' id='val_2' name='val_2'>
      <input type='button' name='submit' onclick="$('#solution').html('<p><h3>' + (parseFloat($('#val_1').val()) * parseFloat($('#val_2').val())) + '</h3></p>');" value='='>
      <span id='solution'></span>
    </div>
<?php
$subject_cal['arithm']['mult'] = ob_get_clean();
ob_start();
?>
  <div>
    <input type='number' style='width: 60px;' id='val_1' name='val_1'> / <input type='number' style='width: 60px;' id='val_2' name='val_2'>
    <input type='button' name='submit' onclick="$('#solution').html('<p><h3>' + (parseFloat($('#val_1').val()) / parseFloat($('#val_2').val())) + '</h3></p>');" value='='>
    <span id='solution'></span>
  </div>
<?php
$subject_cal['arithm']['divide'] = ob_get_clean();
echo $subject_cal[$subject][$value];
?>
