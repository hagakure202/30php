
<?php
$array = [];

 echo posl(12);

function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

function posl($num){
    if($num < 0){
        return 0;
    }
    if($num < 3){
        return 1;
    }
    $n = posl($num-1)+posl($num-2);
    return $n;
}

die();
?>
<html>
<body>
<table border="1">
    <?php
    foreach ($arr as $key => $value) {
        ?>
        <tr>
            <td><?php echo $key ?></td>
            <?php
            // foreach ($value as $key => $value1) { ?>
                <td><?php echo $value1; ?></td>
            <!-- <?php //} ?> -->
        </tr>
        <?php

    }

    ?>

</table>
</body>
</html>
