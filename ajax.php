<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if ($action== 'datesalesreport') {
	$datesalesreport=$crud->datesalesreport();
	if ($datesalesreport) {
		echo $datesalesreport;
	}
}
if ($action== 'report_presentation') {
	extract($_GET);
	$report_presentation=$crud->report_presentation();
	if ($report_presentation) {
		echo $report_presentation;
	}
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == "save_settings"){
	$save = $crud->save_settings();
	if($save)
		echo $save;
}
if($action == "save_category"){
	$save = $crud->save_category();
	if($save)
		echo $save;
}
if($action == "delete_category"){
	$save = $crud->delete_category();
	if($save)
		echo $save;
}
if($action == "save_group"){
	$save = $crud->save_group();
	if($save)
		echo $save;
}
if($action == "delete_group"){
	$save = $crud->delete_group();
	if($save)
		echo $save;
}
if($action == "save_type"){
	$save = $crud->save_type();
	if($save)
		echo $save;
}
if($action == "delete_type"){
	$save = $crud->delete_type();
	if($save)
		echo $save;
}

if($action == "save_supplier"){
	$save = $crud->save_supplier();
	if($save)
		echo $save;
}
if($action == "delete_supplier"){
	$save = $crud->delete_supplier();
	if($save)
		echo $save;
}
if($action == "save_product"){
	$save = $crud->save_product();
	if($save)
		echo $save;
}
if($action == "delete_product"){
	$save = $crud->delete_product();
	if($save)
		echo $save;
}
if($action == "save_receiving"){
	$save = $crud->save_receiving();
	if($save)
		echo $save;
}
if($action == "delete_receiving"){
	$save = $crud->delete_receiving();
	if($save)
		echo $save;
}
if($action == "save_customer"){
	$save = $crud->save_customer();
	if($save)
		echo $save;
}
if($action == "delete_customer"){
	$save = $crud->delete_customer();
	if($save)
		echo $save;
}

if($action == "chk_prod_availability"){
	$save = $crud->chk_prod_availability();
	if($save)
		echo $save;
}

if ($action=="chk_prod_availability_for_invoice") {
	$save= $crud->chk_prod_availability_for_invoice();
	if ($save) {
		echo $save;
	}
}
// if ($action=="check_item_available_quantity_by_batch_for_sale") {
// 	extract($_GET);
// 	$save=$crud->check_item_available_quantity_by_batch_for_sale($product_id,$batch_no);
// 	if ($save) {
// 		echo $save;
// 	}
// }
// if ($action=="check_the_batch_for_product") {
// 	extract($_GET);
// 	$save=$crud->check_the_batch_for_product($product_id);
// 	if ($save) {
// 		echo $save;
// 	}
// }
if($action == "save_sales"){
	$save = $crud->save_sales();
	if($save)
		echo $save;
}
if ($action== "save_wholesale") {
	$save = $crud->save_wholesale();
	if ($save) {
		echo $save;
	}
}

if($action == "delete_sales"){
	$save = $crud->delete_sales();
	if($save)
		echo $save;
}

if ($action=="save_invoice") {
	$save = $crud->save_invoice();
	if ($save) {
		echo $save;
	}
}
if ($action=="delete_invoice") {
	$save = $crud->delete_invoice();
	if ($save) {
		echo $save;
	}
}
if($action == "save_expired"){
	$save = $crud->save_expired();
	if($save)
		echo $save;
}

if($action == "delete_expired"){
	$save = $crud->delete_expired();
	if($save)
		echo $save;
}