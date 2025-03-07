<?php
$this->breadcrumbs = array(
    'Users whose Firstname Ends with Y',
);

$this->menu = array(
    array('label' => 'Create Account', 'url' => array('create')),
    array('label' => 'Manage Account', 'url' => array('admin')),
);
?>

<h1>Users whose Firstname Ends with Y</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Date Hired</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($sql)): ?>
            <?php foreach ($sql as $user): ?>
                <tr>
                    <td><?php echo $user->account->id; ?></td>
                    <td><?php echo $user->account->username; ?></td>
                    <td><?php echo $user->firstname; ?></td>
                    <td><?php echo $user->middlename; ?></td>
                    <td><?php echo $user->lastname; ?></td>
                    <td><?php echo $user->gender; ?></td>
                    <td><?php echo $user->dob; ?></td>
                    <td><?php echo $user->date_hired; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8">No users found whose firstname ends with Y.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
