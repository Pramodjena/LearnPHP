<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php

    // Database connection :
    include("./config.php");

    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";

    $result = mysqli_query($conn, $sql) or die("query unsuccessful!!");


    if (mysqli_num_rows($result) > 0) {

    ?>
        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <tbody>
                    <td><?php echo $row['sid'] ?></td>
                    <td><?php echo $row['sname'] ?></td>
                    <td><?php echo $row['saddress'] ?></td>
                    <td><?php echo $row['sclass'] ?></td>
                    <td><?php echo $row['sphone'] ?></td>
                    <td>
                        <a href='edit.php'>Edit</a>
                        <a href='delete-inline.php'>Delete</a>
                    </td>
                    </tr>
                </tbody>
        <?php }
        } ?>
        </table> 

</div>
</div>
</body>

</html>