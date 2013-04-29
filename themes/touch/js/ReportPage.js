function listAllContent() {
	(function($) {
		$('#reportsData').html('<table width="100%" cellspacing="3" cellpadding="0" id="data-entry"></table>');
		$('#data-entry').dataTable({
			"bProcessing": true,
			"bScrollInfinite": true,
			"sScrollX": "100%",
			"bScrollCollapse": true ,
			"bAutoWidth": false,
			"sScrollY": "100%",		
			"iDisplayLength": -1,
			"sDom": '<"top">rt<"bottom">',
			"aaSorting": [],
			"sAjaxSource": "/drupal/API/Report/listAllContentPull.php",
			"aoColumns": [
				{ "sTitle": "Name", "sWidth": "15%" },								{ "sTitle": "Consumer key", "sWidth": "15%" },								{ "sTitle": "Shared secret", "sWidth": "15%" },								{ "sTitle": "Domain", "sWidth": "30%" },								{ "sTitle": "Privacy", "sWidth": "15%" },								{ "sTitle": "Submitted", "sWidth": "10%" }
			]

		});
	})(jQuery);
}

function listExpirationDates() {
	(function($) {
		$('#reportsData').html('<table width="100%" cellspacing="0" cellpadding="0" id="data-entry"></table>');
		$('#data-entry').dataTable({
			"bProcessing": true,
			"bScrollInfinite": true,
			"sScrollY": "100%",
			"sDom": '<"top">rt<"bottom">',
			"aaSorting": [[1,"asc"]],
			"sAjaxSource": "/drupal/API/Report/listExpirationDatesPull.php",
			"aoColumns": [
				{ "sTitle": "Name", "sWidth": "60%" },
				{ "sTitle": "Expiration date" }
			],
			"bAutoWidth": true

		});
	})(jQuery);
}function listPremiumApps() {		(function($) {				$('#reportsData').html('<table width="100%" cellspacing="3" cellpadding="0" id="data-entry"></table>');				$('#data-entry').dataTable({						"bProcessing": true,						"bScrollInfinite": true,						"sScrollX": "100%",						"bScrollCollapse": true ,						"bAutoWidth": false,						"sScrollY": "100%",								"iDisplayLength": -1,						"sDom": '<"top">rt<"bottom">',						"aaSorting": [],						"sAjaxSource": "/drupal/API/Report/listPremiumAppsPull.php",						"aoColumns": [								{ "sTitle": "Name", "sWidth": "15%" },								{ "sTitle": "Consumer key", "sWidth": "15%" },								{ "sTitle": "Shared secret", "sWidth": "15%" },								{ "sTitle": "Domain", "sWidth": "30%" },								{ "sTitle": "Privacy", "sWidth": "15%" },								{ "sTitle": "Submitted", "sWidth": "10%" }						]					});		})(jQuery);}function listFreeApps() {		(function($) {				$('#reportsData').html('<table width="100%" cellspacing="3" cellpadding="0" id="data-entry"></table>');				$('#data-entry').dataTable({						"bProcessing": true,						"bScrollInfinite": true,						"sScrollX": "100%",						"bScrollCollapse": true ,						"bAutoWidth": false,						"sScrollY": "100%",								"iDisplayLength": -1,						"sDom": '<"top">rt<"bottom">',						"aaSorting": [],						"sAjaxSource": "/drupal/API/Report/listFreeAppsPull.php",						"aoColumns": [								{ "sTitle": "Name", "sWidth": "15%" },								{ "sTitle": "Consumer key", "sWidth": "15%" },								{ "sTitle": "Shared secret", "sWidth": "15%" },								{ "sTitle": "Domain", "sWidth": "30%" },								{ "sTitle": "Privacy", "sWidth": "15%" },								{ "sTitle": "Submitted", "sWidth": "10%" }						]				});		})(jQuery);}

