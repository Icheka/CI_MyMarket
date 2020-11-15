<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE; 

//list all categories
$route['products/categories/list'] = "products/categories";

//list products by category
$route['products/list-by-category/(:any)/(:num)'] = "products/list_by_category/$1/$2";
$route['products/list-by-category/(:any)'] = "products/list_by_category/$1";

//list all products
$route['products/list'] = "products/list_all_products";

//find product(s) by argument
$route['products/find/(:any)'] = "products/search/$1";

// add review for a product:: id, name, comment
$route['product/reviews/add/(:any)/(:any)/(:any)'] = "reviews/add/$1/$2/$3";

// get all reviews for a product::id
$route['product/reviews/get/(:any)'] = "reviews/get/$1";
// ($item, $quantity, $firstname, $lastname, $address, $phone, $city, $state, $country)

// add products to checkout cart 
$route['cart/checkout/add/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = "cart/checkout/$1/$2/$3/$4/$5/$6/$7/$8/$9";