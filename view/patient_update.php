<?php
//For data fetch
$citizen_id_number = filter_input(INPUT_GET, 'citizen_id_number');
if (isset($citizen_id_number)) {
    $patient = getPatient($citizen_id_number);
}

//For Update
$input = filter_input(INPUT_POST, "btnUpdate");
if (isset($input)) {
    $medrecordnumber = filter_input(INPUT_POST, 'txtMRN');
    $citizenidnumber = filter_input(INPUT_POST, 'txtCIN');
    $name = filter_input(INPUT_POST, 'txtName');
    $address = filter_input(INPUT_POST, 'txtAddress');
    $birthplace = filter_input(INPUT_POST, 'txtBirthPlace');
    $birthdate = filter_input(INPUT_POST, 'txtBirthDate');
    $phonenumber = filter_input(INPUT_POST, 'txtPhoneNumber');
    $photo = filter_input(INPUT_POST, 'txtPhoto');
    $insurance = filter_input(INPUT_POST, 'txtInsurance');
    updatePatient($medrecordnumber, $citizenidnumber, $name, $address, $birthplace, $birthdate, $phonenumber, $photo, $insurance);
    header("location:index.php?menu=pt");
}
?>

<form method="post">
    <fieldset>
        <legend> Update Patient</legend>
        <label> Patient Name </label>
        <label>Med Record Number : </label>
        <input type="text" name="txtMRN" id="MRN" placeholder="Med Rec No. (ex. D-00000001)" autofocus required class="form-input">
        <label>Id Number : </label>
        <input type="text" name="txtCIN" id="CIN" placeholder="13 Digit Number (ex. 1234567890123)" autofocus required class="form-input">
        <label>Name : </label>
        <input type="text" name="txtName" id="Name" placeholder="Name (ex. Gordon Ramsey)" autofocus required class="form-input">
        <label>Address : </label>
        <input type="text" name="txtAddress" id="Address" placeholder="Address (ex. Dago Resort No.3)" autofocus required class="form-input">
        <label>Birth Place : </label>
        <input type="text" name="txtBirthPlace" id="BirthPlace" placeholder="Birth Place (ex. Tasikmalaya)" autofocus required class="form-input">
        <label>Birth Date : </label>
        <input type="date" name="txtBirthDate" id="BirthDate" placeholder="Birth Date (ex. 2018-03-04)" autofocus required class="form-input">
        <label>Phone Number : </label>
        <input type="text" name="txtPhoneNumber" id="PhoneNumber" placeholder="Phone Number (ex. 081437258115)" autofocus required class="form-input">
        <label>Photo : </label>
        <input type="text" name="txtPhoto" id="Photo" placeholder="Photo (ex. Mr. Knee)" autofocus required class="form-input">
        <select name="txtInsurance">
            <?php
            $data = getAllInsurance();
            foreach ($data as $insurance) {
                echo "<option value='".$insurance['id']."'>" . $insurance['name_class']."</option>" ;
            }
            ?>
        </select>
        <input type="submit" name="btnUpdate" value="Update Patient" class="button button-primary">
    </fieldset>
</form>