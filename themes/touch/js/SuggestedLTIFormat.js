

    (function ($) {

        Drupal.behaviors.touch = {

            attach: function(context, settings) {

                $('#SuggestedLTI').html('<table width="100%" cellspacing="0" cellpadding="0" id="data-entry"></table>');

                $('#data-entry').dataTable({

	                "bProcessing": true,

                        "bScrollInfinite": true,

                        "sScrollY": "1000px",

                        "sDom": '<"top">rt<"bottom">',

                        "sAjaxSource": "/drupal/API/SuggestedLTIPull.php",

                        "aoColumns": [

				{ "sWidth": "25%" },

				 	{ "sWidth": "25%" },
					]

                });
            }

        }

    })(jQuery);
