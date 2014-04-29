<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="data/list.js"></script>
	<script type="text/javascript" src="js/pl.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script>
    $(document).ready(function() {
		$('#dt_ksiazki').dataTable( {
			"aaData": list_ksiazki,
			"aoColumns": [
				{ "sTitle": "Sygn.", "sWidth": "30px" },
				{ "sTitle": "Autor", "sWidth": "170px" },
				{ "sTitle": "Tytuł" },
				{ "sTitle": "Rok wydania", "sClass": "center", "sWidth": "40px" },
				{ "sTitle": "Tom", "sClass": "center", "sWidth": "20px" }
			],
			"oLanguage": lang_pl
		} );

		$('#dt_komiksy').dataTable( {
			"aaData": list_komiksy,
			"aoColumns": [
				{ "sTitle": "Sygnatura", "sWidth": "30px" },
				{ "sTitle": "Autor", "sWidth": "170px" },
				{ "sTitle": "Tytuł" },
				{ "sTitle": "Rok wydania", "sClass": "center", "sWidth": "40px" },
				{ "sTitle": "Tom", "sClass": "center", "sWidth": "20px" }
			],
			"oLanguage": lang_pl
		} );

		$('#dt_planszowe').dataTable( {
			"aaData": list_planszowe,
			"aoColumns": [
				{ "sTitle": "Sygnatura", "sWidth": "30px" },
				{ "sTitle": "Wydawca", "sWidth": "170px" },
				{ "sTitle": "Tytuł" }
			],
			"oLanguage": lang_pl
		} );

		$('#dt_komputerowe').dataTable( {
			"aaData": list_komputerowe,
			"aoColumns": [
				{ "sTitle": "Sygnatura", "sWidth": "30px" },
				{ "sTitle": "Wydawca", "sWidth": "170px" },
				{ "sTitle": "Tytuł" },
				{ "sTitle": "Rok wydania", "sClass": "center", "sWidth": "40px" },
				{ "sTitle": "rodzaj", "sClass": "center", "sWidth": "170px" }
			],
			"oLanguage": lang_pl
		} );	

		$('#tabs').tabs();
	} );
	</script>
</head>
<body>
    <div style="margin: auto; width: 1000px; font-size: 0.8em;">
    
    <div id="tabs">
        <ul>
            <li><a href="#ksiazki">Książki</a></li>
            <li><a href="#komiksy">Komiksy</a></li>
            <li><a href="#planszowe">Gry bez prądu</a></li>
            <li><a href="#komputerowe">Gry kompterowe</a></li>
        </ul>
        <div id="ksiazki">
            <table class="display" id="dt_ksiazki">
            </table>
        </div>
        <div id="komiksy">
            <table class="display" id="dt_komiksy">
            </table>
        </div>
        <div id="planszowe">
            <table class="display" id="dt_planszowe">
            </table>
        </div>
        <div id="komputerowe">
            <table class="display" id="dt_komputerowe">
            </table>
        </div>
    </div> 
     
        <table class="display" id="example">
        </table>
    </div>
</body>
</html>