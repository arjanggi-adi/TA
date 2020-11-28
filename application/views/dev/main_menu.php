<li class="header">MAIN NAVIGATION</li>

<li class="">
	<a href="<?php echo base_url('dev/dashboard'); ?>"><i class="fa fa-home"></i> Home</a>
</li>

<li class="treeview">
	<a href="#">
		<i class="fa fa-cog"></i> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span><span>Crud Atlet</span> 
	</a>
	<ul class="treeview-menu" style="display: none;">
		<li <?php if(isset($m_atlet)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('dev/crud/atlet')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Atlet</span>
			</a>
		</li>

		<li <?php if(isset($m_prestasi)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('dev/crud/prestasi')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Prestasi</span>
			</a>
		</li>

		<li <?php if(isset($m_cabor)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('dev/crud/cabor')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Cabor</span>
			</a>
		</li>

		<li <?php if(isset($m_turnamen)) { ?>class = "active" <?php } ?>>
			<a href='<?php echo site_url('dev/crud/turnamen')?>'>
				<i class="fa fa-circle-o"></i> 
				<span>Turnamen</span>
			</a>
		</li>
	</ul>
</li>

<li class="">
	<a href="<?php echo base_url('dev/crud/makanan') ;?>"><i class="fa fa-sign-out"></i>Makanan</a>
</li>

<li class="">
	<a href="<?php echo base_url('dev/access/logout') ;?>"><i class="fa fa-sign-out"></i>Sign Out</a>
</li>