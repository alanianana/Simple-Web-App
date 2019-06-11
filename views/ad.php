<?php
include_once '../partials/header.php';
if(isset($_SESSION['admin'])) {
    include_once '../DB/database.php';
    $users = allUsers();
    ?>
    <div class="container">
        <br>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['surname'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td style="white-space: nowrap">
                        <a class="btn btn-sm btn-outline-danger" href="./udelete.php?id=<?php echo $user['id'] ?>">Delete</a>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}else{
    header("location : ./views/profile.php ");
}

    include_once '../partials/footer.php'; ?>