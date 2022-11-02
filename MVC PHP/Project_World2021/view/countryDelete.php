<?php
ob_start();
$title = 'Удалить страну';
?>

<?php
$continents = array('Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America');
?>
<div class="box-header with-border">
    <h3 class="box-title"><strong> Manage - Delete country</strong></h3>
    <!-- error message -->
    <?php
    if (isset($error)) echo '<p>' . $error . '</p>';
    ?>
</div>
<div>
    <form action="delete-result?<?php echo $country['Code']; ?>" method="POST">
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Code *:</strong>
                    <input type="text" name="Code" class="form-control" placeholder="Code country" value="<?php echo $country['Code']; ?>" maxlength=3 required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name *:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name country" value="<?php echo $country['Name']; ?>" readonly>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Delete country</button>
                <a href="countryList" type="button" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </form>
</div>


<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>