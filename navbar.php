<style>
</style>
<nav id="sidebar" class='mx-lt-4 bg-dark' >
		
		<div class="sidebar-list newPrivilegeBased">

				<a href="index.php?page=home" class="nav-item nav-home" data-privilageRequired="ViewHome"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=inventory" class="nav-item nav-inventory" data-privilageRequired="ViewInventory"><span class='icon-field'><i class="fa fa-list"></i></span> Inventory</a>
				<a href="index.php?page=sales" class="nav-item nav-sales" data-privilageRequired="ViewSales"><span class='icon-field'><i class="fa fa-coins"></i></span> Sales</a>
				<a href="index.php?page=invoice_list" class="nav-item nav-invoice" data-privilageRequired="ViewInvoices"><span class='icon-field'><i class="fa fa-book"></i></span> Invoices</a>
				<a href="index.php?page=receiving" class="nav-item nav-receiving nav-manage_receiving" data-privilageRequired="ViewReceiving"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Receiving</a>
				<a href="index.php?page=product" class="nav-item nav-product" data-privilageRequired="FullViewOfItem"><span class='icon-field'><i class="fa fa-boxes"></i></span> Item List</a>
				<a href="index.php?page=group" class="nav-item nav-group" data-privilageRequired="ViewItemGroup"><span class='icon-field'><i class="fa fa-list"></i></span> Item Group</a>
				<a href="index.php?page=categories" class="nav-item nav-categories" data-privilageRequired="ViewCategory"><span class='icon-field'><i class="fa fa-list"></i></span> Item Category</a>
				<a href="index.php?page=types" class="nav-item nav-types" data-privilageRequired="ViewItemUnits"><span class='icon-field'><i class="fa fa-th-list"></i></span> Item units</a>
				<!-- <a href="index.php?page=expired_product" class="nav-item nav-expired_product"><span class='icon-field'><i class="fa fa-list"></i></span> Expired List</a> -->
				<!-- <a href="index.php?page=supplier" class="nav-item nav-supplier"><span class='icon-field'><i class="fa fa-truck-loading"></i></span> Supplier List</a> -->
				<!-- <a href="index.php?page=customer" class="nav-item nav-customer"><span class='icon-field'><i class="fa fa-user-friends"></i></span> Customer List</a> -->
				
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=report" class="nav-item nav-users" data-privilageRequired="ViewReport"><span class='icon-field'><i class="fa fa-folder"></i></span> Report</a>
				<a href="index.php?page=users" class="nav-item nav-users" data-privilageRequired="Viewusers"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
			<?php endif; ?>
			
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
	// if ($('#newPrivilege').find('a[data-privilageRequired="'+1+'"]')) {
	// 	$('a[data-privilageRequired="'+1+'"]').css('display','none')
	// }
</script>
<!-- <?php if($_SESSION['login_type'] != 1): ?>
	<style>
		.nav-item{
			display: none!important;
		}
		.nav-sales ,.nav-home ,.nav-inventory ,.nav-invoice{
			display: block!important;
		}
	</style>
<?php endif ?> -->
<?php
include "Privilaege_on_Role.php";
?>