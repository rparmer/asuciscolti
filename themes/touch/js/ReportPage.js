function listAllContent() {
	(function($) {
		$('#reportsData').html('<table width="100%" cellspacing="3" cellpadding="0" id="data-entry"></table>');
		$('#data-entry').dataTable({
			"bProcessing": true,
			"bScrollInfinite": true,
			"sScrollX": "160%",
			"bScrollCollapse": true ,
			"bAutoWidth": false,
			"sScrollY": "100%",		
			"iDisplayLength": -1,
			"sDom": '<"top">rt<"bottom">',
			"aaSorting": [],
			"sAjaxSource": "/drupal/API/Report/listAllContentPull.php",
			"aoColumns": [
				{ "sTitle": "Name" },
				{ "sTitle": "Consumer key" },
				{ "sTitle": "Shared secret" },
				{ "sTitle": "Domain" },
				{ "sTitle": "Privacy" },
				{ "sTitle": "Submitted" }
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
}

