<?php

$arr = [];

for ($i = 0; $i < 100; $i++) {
    array_push($arr, rand(1, 100));
}

$arr = array_unique($arr);
$arr = array_values($arr);
?>
<table style="border:1px solid;border-collapse: collapse;">
    <?php for ($i = 0; $i < count($arr); $i++) { ?>
        <tr style="border:1px solid;border-collapse: collapse;">
            <td style="padding:10px 100px;border:1px solid;border-collapse: collapse;">
                <?php echo $i; ?>
            </td>
            <td style="padding:10px 100px;border:1px solid;border-collapse: collapse;">
                <?php echo $arr[$i]; ?>
            </td>
        </tr>
    <?php } ?>
</table>
