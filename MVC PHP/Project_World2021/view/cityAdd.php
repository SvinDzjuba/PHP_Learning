<?php
ob_start();
$title = 'Добавить город';
?>

<div class="box-header with-border">
    <h3 class="box-title"><strong> Manage - Add city</strong></h3>
    <!-- error message -->
    <?php
if (isset($error))
    echo '<p>' . $error . '</p>';
?>
</div>
<div>
    <form action="add-city-result" method="POST">
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name *:</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Name city" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Country code:</strong>
                    <select name="CountryCode" class="form-control">
                        <?php
                        foreach ($countryCodes as $code) {
                            echo '<option value="' . $code['CountryCode'] . '" >' . $code['CountryCode'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-top:10px;">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Population:</strong>
                    <input type="text" name="Population" class="form-control" placeholder="Population" value=0>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="send">Save city</button>
                <a href="cityList" type="button" class="btn btn-primary">Back to list</a>
            </div>
        </div>
    </form>
</div>


<?php
$content = ob_get_clean();
include 'view/templates/layout.php';
?>