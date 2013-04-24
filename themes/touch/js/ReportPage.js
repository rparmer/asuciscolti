function listAllContent() {
	(function($) {
		$('#reportsData').html('<table width="100%" 		cellspacing="0" cellpadding="0" id="data-entry"></table>');
		$('#data-entry').dataTable({
			"bProcessing": true,
			"bScrollInfinite": true,
			"sScrollY": "1000px",
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
			],
			"bAutoWidth": true

		});
	})(jQuery);
}