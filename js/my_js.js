function deleteInsurance(id) {
    var confirm = window.confirm("Confirm delete data?");
    if (confirm) {
        window.location = "index.php?menu=ins&delIns=1&id=" + id;
    }
}

function deletePatient(citizen_id_number){
    var confirm = window.confirm("Confirm delete Patient?")
    if (confirm){
        window.location = "index.php?menu=pt&delPat=1&citizen_id_number=" + citizen_id_number;
    }
}

function updateInsurance(id){
    window.location = "index.php?menu=updIns&id=" + id;
}

function updatePatient(citizen_id_number){
    window.location="index.php?menu=updPat&citizen_id_number=" + citizen_id_number;
}