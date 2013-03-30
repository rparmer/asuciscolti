    (function ($) {
        Drupal.behaviors.touch = {
            attach: function(context, settings) {
                $('#DatabaseLTI').html('<table width="100%" cellspacing="0" cellpadding="0" id="data-entry"></table>');
                $('#data-entry').dataTable({
	                "bProcessing": true,
                        "sAjaxSource": "/drupal/API/DataBaseDataPull.php",
                        "aoColumns": [
				{ "sTitle": "LTI Name ", "sWidth": "100px" },
				{ "sTitle": "Description", "sWidth": "200px" },
                                { "sWidth": "100px" }
                         ]
                });
            }
        }
    })(jQuery);
