<?php
//For data fetch
$med_record_number = filter_input(INPUT_GET, 'med_record_number');
if (isset($med_record_number)) {
    $med_record_number = getPatient($med_record_number);
}

//For Update
$input = filter_input(INPUT_POST, "btnUpdate");
if (isset($input)) {
    $name = filter_input(INPUT_POST, 'txtName');
    updateInsurance($id, $name);
    header("location:index.php?menu=ins");
}
?>

<form method="post">
    <fieldset>
        <legend> Update Insurance</legend>
        <label> Insurance Name </label>
        <input type="text" name="txtName" id="genreId" placeholder="Name (ex. SunHealth Gold)" autofocus required
               class="form-input" value="<?php echo $insurance['name_class']; ?>">
        <input type="submit" name="btnUpdate" value="Update Insurance" class="button button-primary">
    </fieldset>
</form>