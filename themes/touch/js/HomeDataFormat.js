    (function ($) {
        Drupal.behaviors.touch = {
            attach: function(context, settings) {
                $('#HomeLTI').html('<table width="100%" cellspacing="0" cellpadding="0" id="data-entry"></table>');
                $('#data-entry').dataTable({
	                "bProcessing": true,
                        "bScrollInfinite": true,
                        "sScrollY": "1000px",
                        "sDom": '<"top">rt<"bottom">',
                        "sAjaxSource": "http://68.2.131.105:8080/drupal/API/HomeDataPull.php",
                        "aoColumns": [
				{ "sWidth": "25%" },
				{ "sWidth": "25%" },
				{ "sWidth": "25%" },
				{ "sWidth": "25%" }
                         ]
                });
            }
        }
    })(jQuery);