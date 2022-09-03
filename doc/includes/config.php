<?php
	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$base 						= $protocol."localhost/Running%20Projects/aaladinkids/";
	$companyName			= "Aladin Kids";
	$currency					= "BDT";
	$EmailToSend			= "jhmasterlimon11@gmail.com";
	$self_url 				= $protocol.$_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0];
	$min_prid 				= 100100;
	$GoogleMapApi			= 'AIzaSyCM2ZcxLK4zaOcu8UCvyYxkFYP2j0a48_4';
	$product_page_limit	= 16;
	$secondary_category = true;
	$category_sample 		= "3,1170,255";
	$category_icon 			= "19,19";
	/*
		Case 1	: Image
		Case 2	: Image Link
		Case 3	: Image Heading
		Case 4	: Heading Link
		Case 5	: Text Line 1
		Case 6	: Text Line 1 Link
		Case 7	: Text Line 2
		Case 8	: Text Line 2 Link
		Case 9	: Text Line 3
		Case 10	: Text Line 3 Link	
	*/
	$bannerToEdit	= 
					array(
						"home page banners"		=> array("page" => 'index', "position" => 1, "fields" => "2")
					);	
	$stickersToEdit	=
					array(
						"home page stickers top 1"		=> array("page" => 'index', "position" => 2, "fields" => "2"),
						"home page stickers top 2"		=> array("page" => 'index', "position" => 3, "fields" => "2"),
						"home page stickers bottom image"	=> array("page" => 'index', "position" => 4, "fields" => "2"),
						"home page stickers bottom video"	=> array("page" => 'index', "position" => 5, "fields" => "5")
					);
	
	$stickersToEdit_NoDb	= 
					array(
						"proudct page sticker"		=> array("total_image" => 2, "old_image" => "asset/images/offer.png,asset/images/offer1.jpg")
					);
	
	define("SERVER_NAME", "");
	define("USER_NAME", "root");
	define("PASSWORD", "");
	define("DATABASE_NAME", "ecommerce_Shopping");
	
	$conn = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
	if($conn->connect_error) {
		die("Server Error !");
	}
?>