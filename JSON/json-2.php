<?php
$json = file_get_contents('http://localhost/integration/jsongenerate.php');

$data = json_decode($json,true);
$list = $data['records'];

?>
<table border>
<?php
foreach($list as $value){
?>
    <tr>
        <td><?php echo $value['sto_id'];?></td>
        <td><?php echo $value['sto_name'];;?></td>
        <td><?php echo $value['sto_description'];;?></td>
        <td><?php echo $value['sto_price'];;?></td>
    </tr>
<?php
}
?>
</table>