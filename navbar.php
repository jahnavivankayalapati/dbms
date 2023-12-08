
<style>


.sidebar-transparent {
    background-color: transparent;
    border: 1px solid #ddd;
    width: 250px;
    padding: 20px;
}


</style>
<nav id="sidebar" class='mx-lt-5 bg-custom' >
		
		<div class="sidebar-transparent" >

				<a href="index.php?page=home" class="nav-item nav-home"><span> Home</a>
				<a href="index.php?page=attendance" class="nav-item nav-attendance"></span> Attendance</a>
				
				<a href="index.php?page=employee" class="nav-item nav-employee"></span> Employee List</a>
				<a href="index.php?page=department" class="nav-item nav-department"></span> Depatment List</a>
				<a href="index.php?page=position" class="nav-item nav-position"></span> Position List</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
					
				<a href="index.php?page=users" class="nav-item nav-users"></i></span> Users</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
