<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<a class="btn-warning" href="../view/new_record.php">new record</a>

<?php require '../view/dashboard.php'; ?>
<!--DRIVER_TBL-->
<?php
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("Location: new_record.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM driver_tbl WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    $data = $query->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>

<div class="container">
    <div class="control-group">
        <label class="control-label">driver_license</label>
        <div class="controls">
            <label><?php echo $data['driver_license']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">fname</label>
        <div class="controls">
            <label><?php echo $data['fname']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">lname</label>
        <div class="controls">
            <label><?php echo $data['lname']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">mname</label>
        <div class="controls">
            <label><?php echo $data['mname']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">age</label>
        <div class="controls">
            <label><?php echo $data['age']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">gender</label>
        <div class="controls">
            <label><?php echo $data['gender']; ?></label>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">nationality</label>
        <div class="controls">
            <label><?php echo $data['nationality']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">plate_no</label>
        <div class="controls">
            <label><?php echo $data['plate_no']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">province</label>
        <div class="controls">
            <label><?php echo $data['province']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">municipality</label>
        <div class="controls">
            <label><?php echo $data['municipality']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">barangay</label>
        <div class="controls">
            <label><?php echo $data['barangay']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">street</label>
        <div class="controls">
            <label><?php echo $data['street']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">reg_num</label>
        <div class="controls">
            <label><?php echo $data['reg_num']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">email</label>
        <div class="controls">
            <label><?php echo $data['email']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">contact</label>
        <div class="controls">
            <label><?php echo $data['contact']; ?></label>
        </div>
    </div>





    

    <div class="form-actions">
        <a class="btn" href="new_record.php">Back</a>
    </div>
</div>
