<?php
session_start();
?>

<ul>
    <?php 
	foreach ($_SESSION['array'] as $elem => $value ): ?>
	
        <li><?php echo $elem . ": " . $value; ?></li>
    <?php endforeach; ?>
</ul>