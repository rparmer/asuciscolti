function listAllContent() {
	(function($) {
		$('#reportsData').html('<table width="100%" cellspacing="0" cellpadding="0" id="data-entry"></table>');
		$('#data-entry').dataTable({
			"bProcessing": true,
			"bScrollInfinite": true,						"bAutoWidth": true,
			"sScrollY": "100%",						"iDisplayLength": -1,
			"sDom": '<"top">rt<"bottom">',
			"aaSorting": [],
			"sAjaxSource": "/drupal/API/Report/listAllContentPull.php",
			"aoColumns": [
				{ "sTitle": "Name", "sWidth": "15%" },
				{ "sTitle": "Consumer key", "sWidth": "12.5%" },
				{ "sTitle": "Shared secret", "sWidth": "12.5%" },
				{ "sTitle": "Domain" },
				{ "sTitle": "Privacy", "sWidth": "12.5%" },
				{ "sTitle": "Submitted", "sWidth": "12.5%" }
			],
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

