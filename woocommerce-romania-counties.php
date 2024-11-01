<?php
/*
Plugin Name: WooCommerce Romania Counties
Plugin URI: https://www.mcwebdesign.ro/2018/01/12/woocommerce-romania-counties-plugin/
Description: Adds Romanian Counties to your WooCommerce store.
Version: 1.0
Author: MC Web Design
Author URI: https://www.mcwebdesign.ro/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/
/*
 * Copyright (c) 2018 MC Web Design. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 */
function wc_ro_counties ($states) {

	$states['RO'] = array(
		'B' => 'București',
		'AB' => 'Alba',
		'AR' => 'Arad',
		'AG' => 'Argeș',
		'BC' => 'Bacău', 
		'BH' => 'Bihor', 
		'BN' => 'Bistrița-Năsăud', 
		'BT' => 'Botoșani', 
		'BV' => 'Brașov', 
		'BR' => 'Brăila',
		'BZ' => 'Buzău', 
		'CS' => 'Caraș-Severin',
		'CL' => 'Călărași',
		'CJ' => 'Cluj', 
		'CT' => 'Constanța', 
		'CV' => 'Covasna', 
		'DB' => 'Dâmbovița', 
		'DJ' => 'Dolj', 
		'GL' => 'Galați', 
		'GR' => 'Giurgiu', 
		'GJ' => 'Gorj', 
		'HR' => 'Harghita', 
		'HD' => 'Hunedoara', 
		'IL' => 'Ialomița ', 
		'IS' => 'Iași', 
		'IF' => 'Ilfov', 
		'MM' => 'Maramureș', 
		'MH' => 'Mehedinți', 
		'MS' => 'Mureș', 
		'NT' => 'Neamț', 
		'OT' => 'Olt', 
		'PH' => 'Prahova', 
		'SM' => 'Satu Mare', 
		'SJ' => 'Sălaj', 
		'SB' => 'Sibiu', 
		'SV' => 'Suceava', 
		'TR' => 'Teleorman', 
		'TM' => 'Timiș', 
		'TL' => 'Tulcea', 
		'VL' => 'Vaslui', 
		'VS' => 'Vâlcea', 
		'VR' => 'Vrancea', 
		);	

	return $states;
	
}

add_filter('woocommerce_states' , 'wc_ro_counties');