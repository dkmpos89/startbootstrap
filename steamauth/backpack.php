<?php

function loadbackpack() 
{
	$content_inventory = "<!DOCTYPE html>"+
							"<html lang='en'>"+
							"<head>"+
							"</head>"+
							"<body>"+
								"<div class='col-md-3 col-sm-6 hero-feature'>"+
									"<div class='thumbnail'>"+
		                    			"<img src='http://placehold.it/800x500' alt=''>"+
		                    			"<div class='caption'>"+
					                        "<h3>Feature Label</h3>"+
					                        "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>"+
					                       	"<p>"+
		                            		"<a href='#'' class='btn btn-primary'>Buy Now!</a>"+ 
		                            		"<a href='#'' class='btn btn-default'>More Info</a>"+
		                        			"</p>"+
		                    			"</div>"+
		                			"</div>"+
		            			"</div>"+
							"</body>"+
						"</html>";

	echo $content_inventory;
}
	
?>