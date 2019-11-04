<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shop Registeration</title>

</head>

<body>

<div id="container">
	<h1 align="center">เมนู</h1>
    <table>
    <TR>
                     <TH> menu_id </TH>
                     <TH> menu_name </TH>
                     <TH> mcategory_id </TH>
                     <TH> mshop_id </TH>
                     <TH> mprice </TH>
                     <TH> Edit </TH>
                     <TH> Delete </TH>
            </TR>
            <?php
            foreach($data->result() as $row){
            ?>
            <tr>
                <td><?php echo $row->menu_id ?></td>
                <td><?php echo $row->menu_name ?></td>
                <td><?php echo $row->mcategory_id ?></td>
                <td><?php echo $row->mshop_id ?></td>
                <td><?php echo $row->mprice ?></td>
                <td><a href="http://localhost/cyberlifecafe/index.php/Manage_menu/edit_menu?m_id=<?php echo $row->menu_id?>">Edit</a></td>
                <td><a href="http://localhost/cyberlifecafe/index.php/Manage_menu/delete_menu?m_id=<?php echo $row->menu_id?>">Delete</a></td>
            </tr>
            <?php }?> 
             
    </table>
</div>
</body>
</html>