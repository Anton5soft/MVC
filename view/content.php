
<div id='content'>
    <br />
    <strong>Сортировка пузырьком</strong> <br />
		<?php print_r($b);?>
    <br />
    <p>Память которую потребляет функция</p>
    <?php echo memory_get_usage() - $mem_start1; ?>
    <br />
    <p>Время которое потребляет функция</p>
   <?php echo microtime(true) - $start1; ?>
    <br />
   <strong>Сортировка вставкой</strong> <br />
    <?php print_r($c); ?>
    <br />
    <p>Память которую потребляет функция </p>
    <?php echo memory_get_usage() - $mem_start2;?>
    <br />
    <p>Время которое потребляет функция</p>
    <?php echo microtime(true) - $start2; ?>
    <br />
    <strong>Сортировка шела</strong> <br />
    <?php  print_r($a); ?>
    <br />
    <p>Память которую потребляет функция </p>
    <?php echo memory_get_usage() - $mem_start3;?>
    <br />
    <p>Время которое потребляет функция</p>
    <?php echo microtime(true) - $start3; ?>
    <br />
    <strong>Быстрая сортировка</strong> <br />
    <?php print_r($e); ?>
    <br />
    <p>Память которую потребляет функция</p>
    <?php echo memory_get_usage() - $mem_start4;?>
    <br />
     <p>Время которое потребляет функция </p>
    <?php echo microtime(true) - $start4;?>
       </div>


