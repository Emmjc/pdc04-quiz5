<?php
$this->breadcrumbs=array(
    'Users with Lastname starting with B and Hire Date in 2019',
);

$this->menu=array(
    array('label'=>'Create Account', 'url'=>array('create')),
    array('label'=>'Manage Account', 'url'=>array('admin')),
);

?>

<h1>Users with Lastname Starting with B and Hire Date in 2019</h1>

<table border="1">
    <thead>
        <tr>
            <th>Last Name</th>
            <th>Date Hired</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($sql as $val): ?>
        <tr>
            <td><?php echo $val->user->lastname; ?></td>
            <td><?php echo $val->user->date_hired; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
