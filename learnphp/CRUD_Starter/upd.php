<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>

    <?php include("./config.php"); ?>

    <!-- Select Student ID -->
    <form class="post-form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="form-group">
            <label>Select Student ID</label>
            <select name="sid" required>
                <option disabled selected>Select ID</option>

                <?php
                $sql = "SELECT * FROM student";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['sid']}'>{$row['sid']}</option>";
                }
                ?>
            </select>
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if (isset($_POST['showbtn'])) {

        $sid = (int) $_POST['sid'];

        // JOIN to get class name + id
        $sql = "SELECT * 
                FROM student 
                JOIN studentclass 
                ON student.sclass = studentclass.cid 
                WHERE student.sid = {$sid}";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>

            <!-- Edit Form -->
            <form class="post-form" action="updatedata.php" method="post">
                <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="sname" value="<?php echo $row['sname']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Class</label>
                    <select name="sclass" required>
                        <?php
                        $class_sql = "SELECT * FROM studentclass";
                        $class_result = mysqli_query($conn, $class_sql);

                        while ($class = mysqli_fetch_assoc($class_result)) {
                            $selected = ($class['cid'] == $row['sclass']) ? "selected" : "";
                            echo "<option value='{$class['cid']}' $selected>{$class['cname']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" required>
                </div>

                <input class="submit" type="submit" value="Update">
            </form>

    <?php
        }
    }
    ?>
</div>
</body>

</html>