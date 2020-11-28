<li class="header">MAIN NAVIGATION</li>

<li class="">
	<a href="<?php echo base_url('member/dashboard'); ?>"><i class="fa fa-home"></i> Home</a>
</li>

<li class="treeview">
	<a href="#">
		<i class="fa fa-cog"></i> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span><span>Atlet</span>
	</a>
	<ul class="treeview-menu" style="display: none;">
		<li <?php if (isset($m_atlet)) { ?>class="active" <?php } ?>>
			<a href='<?php echo site_url('member/menumakanan/atletmakan') ?>'>
				<i class="fa fa-circle-o"></i>
				<span>Daftar makan</span>
			</a>
		</li>
	</ul>
</li>

<li class="">
	<a href="<?php echo base_url('member/menumakanan'); ?>"><i class="fa fa-sign-out"></i>Makanan</a>
</li>

<li class="">
	<a href="<?php echo base_url('member/access/logout'); ?>"><i class="fa fa-sign-out"></i>Sign Out</a>
</li>