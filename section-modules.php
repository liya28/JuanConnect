<?php
session_start();
require_once('db.php');

$sesID = $_SESSION['id'];
$userData = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM `accounts` WHERE ID = '$sesID'"));

$position = $_SESSION['position'];
$committee = $_SESSION['committee'] ?? null;

function renderMenuItem($href, $icon, $label) {
    return "<a href=\"$href\" target=\"FraDisplay\"><img src=\"$icon\" style=\"float:left\" width=\"28\">&nbsp;$label</a>";
}

function renderGeneralMenu($extra = '') {
    return ' <div class="holder"><b>ACTIONS</b></div>' .
        renderMenuItem("Resident_Profiling/Dash/index.php", "Icon/home.png", "Dashboard") .
        renderMenuItem("account.php", "Icon/pen.png", "Account") .
        $extra .
        renderMenuItem("Resident_Profiling/resident.php", "Icon/residents.png", "Resident Profiling") .
        renderMenuItem("Communication/index.php", "Icon/announcement.png", "Announcement") .
        renderMenuItem("Special_Projects/index.php", "Icon/special.png", "Special Projects") .
        renderMenuItem("Barangay_Officials/index.php", "Icon/add.png", "Barangay Officials");
}

function renderCommitteeHeader($name) {
    return "<h3><center><b>Committee on <u>$name</u></center></b></h3>";
}

?>
<html>
<head>
<link rel="shortcut icon" href="Pictures/logo_dumlog.png">
<link rel="stylesheet" type="text/css" href="css/style-module-section.css">
</head>
<body>
<div class="banner">
    <img src="Picture/logo_dumlog.png" style="float:left; border-radius: 50%; filter: invert(0%)!important;" width="50" height="50">
    <div style="text-align: center;">
        <span>Welcome</span><br>
        <p><?php echo $userData[1]; ?></p>
    </div>
</div>

<center><h3><?php echo $position; ?></h3></center>

<?php
switch ($position) {
    case 'Barangay Secretary':
        echo renderGeneralMenu(
            renderMenuItem("Clearance_and_Forms/index.php", "Icon/certificates.png", "Clearance and Forms") .
            renderMenuItem("Health_and_Sanitation/index.php", "Icon/health.png", "Health and Sanitation") .
            renderMenuItem("Peace_and_Order/incident.php", "Icon/blotter.png", "Peace and Order") .
            renderMenuItem("Finance/index.php", "Icon/finance.png", "Finance") .
            renderMenuItem("Report/viewreport.php", "Icon/clearances.png", "Reports")
        );
        echo renderMenuItem("admin.php", "Icon/settings.png", "Account Setting");
        break;

    case 'Barangay Captain':
        echo renderGeneralMenu(
            renderMenuItem("Clearance_and_Forms/index.php", "Icon/certificates.png", "Clearance and Forms") .
            renderMenuItem("Health_and_Sanitation/index.php", "Icon/health.png", "Health and Sanitation") .
            renderMenuItem("Peace_and_Order/incident.php", "Icon/blotter.png", "Peace and Order") .
            renderMenuItem("Finance/index.php", "Icon/finance.png", "Finance")
        );
        break;

    case 'Barangay Councilor':
        echo renderCommitteeHeader($committee);
        $extraLinks = '';
        if ($committee == "Peace and Order") {
            $extraLinks = renderMenuItem("Clearance_and_Forms/index.php", "Icon/certificates.png", "Clearance and Forms") .
                          renderMenuItem("Peace_and_Order/incident.php", "Icon/blotter.png", "Peace and Order") .
                          renderMenuItem("Finance/index.php", "Icon/finance.png", "Finance");
        } elseif ($committee == "Agriculture") {
            $extraLinks = renderMenuItem("Clearance_and_Forms/index.php", "Icon/certificates.png", "Clearance and Forms") .
                          renderMenuItem("Finance/index.php", "Icon/finance.png", "Finance");
        } elseif ($committee == "Health,Education & Sport") {
            $extraLinks = renderMenuItem("Clearance_and_Forms/index.php", "Icon/certificates.png", "Clearance and Forms") .
                     renderMenuItem("Health_and_Sanitation/index.php", "Icon/health.png", "Health and Sanitation") .
                          renderMenuItem("Finance/index.php", "Icon/finance.png", "Finance");
        } elseif ($committee == "Ways and Means" || $committee == "Budget & Appropriation") {
            $extraLinks = renderMenuItem("Clearance_and_Forms/index.php", "Icon/certificates.png", "Clearance and Forms") .
                          renderMenuItem("Finance/index.php", "Icon/finance.png", "Finance");
        } elseif ($committee == "Infrastructure") {
            $extraLinks = renderMenuItem("Finance/index.php", "Icon/finance.png", "Finance");
        }
        echo renderGeneralMenu($extraLinks);
        break;
}
?>
</body>
</html>
