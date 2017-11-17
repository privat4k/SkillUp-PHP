<?php
$file_name = "subscribers.txt";
$data = file($file_name);
?>
<style>
    td {text-align: center};
</style>
<table border="1">
    <thead>
    <td>Email</td>
    </thead>
    <?php
    foreach( $data as $value ):
        $value = explode( "\t", $value );
        ?>

        <tr>
            <td><?=$value[0]?></td>
        </tr>
        <?php
    endforeach;
    ?>
</table>

<p><a href="index11.php"> Введите email </a></p>