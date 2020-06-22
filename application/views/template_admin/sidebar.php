<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url('assets/vendor/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Admin</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li <?php if ($title == "Dashboard") echo "class='active'" ?>>
				<a href="<?= site_url('dashboard'); ?>">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>

				</a>
			</li>
			<li <?php if ($title == "Data Pegawai") echo "class='active'" ?>>
				<a href="<?= site_url('data-pegawai'); ?>">
					<i class="fa fa-list-alt"></i> <span>Data Pegawai</span>

				</a>
			</li>

			<li <?php if ($title == "Data All Pengajuan") echo "class='active'" ?>>
				<a href="<?= site_url('data-pengajuan-all'); ?>">
					<i class="fa fa-table"></i> <span>Data All Pengajuan </span>

				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Data Pengajuan</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li <?php if ($title == "Janda/Duda") echo "class='active'" ?>><a href="<?= site_url('list_jd'); ?>"><i class="fa fa-circle-o"></i> Janda / Duda</a></li>
					<li <?php if ($title == "Batas Usia") echo "class='active'" ?>><a href="<?= site_url('list_bu'); ?>"><i class="fa fa-circle-o"></i> Batas Usia</a></li>
					<li <?php if ($title == "Permintaan Sendiri") echo "class='active'" ?>><a href="<?= site_url('list_ps'); ?>"><i class="fa fa-circle-o"></i> Permintaan Sendiri</a></li>
				</ul>
			</li>




			<li class="header">LABELS</li>
			<li><a href="<?= site_url('adminLogout') ?>"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>
