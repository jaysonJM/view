<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<a class="btn-warning" href="../view/new_record.php">new record</a>

<?php require '../view/dashboard.php'; ?>

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
    $sql = "SELECT * FROM registration WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
    $data = $query->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>

<div class="container">
    <div class="control-group">
        <label class="control-label">Address</label>
        <div class="controls">
            <label><?php echo $data['Address']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Name</label>
        <div class="controls">
            <label><?php echo $data['Name']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Plate Number</label>
        <div class="controls">
            <label><?php echo $data['Plate Number']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Vehicle Color</label>
        <div class="controls">
            <label><?php echo $data['Vehicle Color']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Engine Number</label>
        <div class="controls">
            <label><?php echo $data['Engine Number']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Chassis Number</label>
        <div class="controls">
            <label><?php echo $data['Chassis Number']; ?></label>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">DAID</label>
        <div class="controls">
            <label><?php echo $data['DAID']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Validity</label>
        <div class="controls">
            <label><?php echo $data['Validity']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">MV File Number</label>
        <div class="controls">
            <label><?php echo $data['MV File Number']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Serial numbers of 1st and 2nd plate</label>
        <div class="controls">
            <label><?php echo $data['Serial numbers of 1st and 2nd plate']; ?></label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">CID</label>
        <div class="controls">
            <label><?php echo $data['CID']; ?></label>
        </div>
    </div>





    

    <div class="form-actions">
        <a class="btn" href="new_record.php">Back</a>
    </div>
</div>
