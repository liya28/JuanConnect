<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - JuanConnect: Barangay Dumlog MIS</title>
    <link rel="shortcut icon" href="Picture/logo_dumlog.png" />
    
    <!-- Stylesheets -->

    <link href="Resident_Profiling/css/bootstrap.min.css" rel="stylesheet">
    <link href="Resident_Profiling/vendor/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-about-page.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="nav">
		<a href="page-login.php">home</a>
		<a href="page-about.php">about</a>
	</div>

    <div class="container" style="padding-top: 5em; padding-left: 15%;">
        <!-- Card 1 -->
        <div class="col-sm-3 card ">
            <div style="padding:5px;">
                <img src="Picture/logo_dumlog.png" alt="MIS" style="width:100%">
            </div>
            <h4>JUANCONNECT: BARANGAY DUMLOG</h4>
            <p class="title">Barangay Dumlog MIS</p>
            <p>A computerized system to manage and process barangay data efficiently.</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#bmis">Read More</button></p>
        </div>

        <div class="col-sm-1"></div>
        
        <!-- Card 2 -->
        <div class="card col-sm-3">
            <div style="padding:5px;">
                <img src="Picture/logo_dumlog.png" alt="Mission and Vision" style="width:100%">
            </div>
            <h4>MISSION AND VISION</h4>
            <p class="title">Our Commitment</p>
            <p>Enhance the quality of life of Dumloganons through sustainable and efficient service delivery.</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mv">Read More</button></p>
        </div>

        <div class="col-sm-1"></div>
        
        <!-- Card 3 -->
        <div class="card col-sm-3">
            <div style="padding:5px;">
                <img src="Picture/logo_dumlog.png" alt="Profile" style="width:100% ">
            </div>
            <h4>BARANGAY DUMLOG</h4>
            <p class="title">Barangay Profile</p>
            <p>Discover key facts and figures about Barangay Dumlog, Talisay City, Cebu.</p>
            <p><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#inprofile">Read More</button></p>
        </div>
    </div>

    <!-- Modals -->
    <!-- BMIS Modal -->
    <div id="bmis" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Barangay Management Information System</h4>
                </div>
                <div class="modal-body">
                    <p>The Barangay Management Information System supports data-driven governance by simplifying record keeping, boosting transparency, and improving access to resident data—ultimately creating a smoother, more responsive barangay experience.</p> </font>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Profile Modal -->
    <div id="inprofile" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Barangay Dumlog Profile</h4>
                </div>
                <div class="modal-body">
                    <img src="Picture/logo_dumlog.png" width="500" class="img-responsive center-block" style="border: 1px solid;">
                    <hr>
                    <table class="table table-bordered">
                        <tr><td><strong>Region</strong></td><td>Region VII (Central Visayas)</td></tr>
                        <tr><td><strong>Province</strong></td><td>Cebu</td></tr>
                        <tr><td><strong>City</strong></td><td>Talisay City</td></tr>
                        <tr><td><strong>Barangay</strong></td><td>Dumlog</td></tr>
                        <tr><td><strong>Population</strong></td><td>To be updated</td></tr>
                        <tr><td><strong>Land Area</strong></td><td>To be updated</td></tr>
                        <tr><td><strong>Barangay Captain</strong></td><td>To be updated</td></tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="Resident_Profiling/jquery/jquery-3.3.1.min.js"></script>
    <script src="Resident_Profiling/js/bootstrap.min.js"></script>
    <script src="Resident_Profiling/vendor/js/jquery.dataTables.min.js"></script>
    <script src="Resident_Profiling/vendor/js/dataTables.bootstrap.min.js"></script>
</body>
</html>