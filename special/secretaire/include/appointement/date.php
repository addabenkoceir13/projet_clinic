<?php 
include_once "index_appCar.php";
// include_once "../../secretaire/index.php";
// include_once "index_appCd.php.php";
// include_once "index_appLdm.php.php";
// include_once "index_appMvsv.php.php";
// include_once "index_appRim.php.php";
// include_once "index_appUsi.php.php";
$dateRdv ='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if ($_POST["submit"]) {
        $id_sec  = $_POST["id_sec"];
        $dateRdv = $_POST["date_app"];
        echo '<div class="date_app"> '.$dateRdv .'</div>';

// }
}
// ?>
