<ul class="nav nav-list">
	<?php
	$id_level = $this->session->userdata('admin_level');
	$main_menu = $this->db->join('mainmenu', 'mainmenu.idmenu=tab_akses_mainmenu.id_menu')
		->where('tab_akses_mainmenu.id_level', $id_level)
		->where('tab_akses_mainmenu.r', '1')
		->order_by('mainmenu.idmenu', 'asc')
		->get('tab_akses_mainmenu')
		->result();
	foreach ($main_menu as $rs) {
	?>
		<?php
		$row = $this->db->where('mainmenu_idmenu', $rs->idmenu)->get('submenu')->num_rows();
		if ($row > 0) {
			$sub_menu = $this->db->join('submenu', 'submenu.id_sub=tab_akses_submenu.id_sub_menu')
				->where('submenu.mainmenu_idmenu', $rs->idmenu)
				->where('tab_akses_submenu.id_level', $id_level)
				->where('tab_akses_submenu.r', '1')
				->get('tab_akses_submenu')
				->result();
		?>
			<li class="hover text-center">
				<a class="dropdown-toggle">
					<i class="<?= $rs->icon_class ?>"></i><br>
					<span class="menu-text">
						<?= $rs->nama_menu ?>pdkajlkjdss
					</span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<?php
				echo "<ul class='submenu'>";
				foreach ($sub_menu as $rsub) {
				?>
			<li class="hover text-center">
				<a href="<?= base_url() . $rsub->link_sub ?>">
					<i class="menu-icon fa fa-caret-right"></i><br>
					<?= $rsub->nama_sub ?>
				</a>
				<b class="arrow"></b>
			</li>
		<?php
				}
				echo "</ul>";
			} else {
		?>
		</li>
		<li class="hover text-center">
			<a href="<?= base_url() . $rs->link_menu ?>">
				<i class="<?= $rs->icon_class ?>"></i><br>
				<span class="menu-text"><?= $rs->nama_menu ?> </span>
			</a>
			<b class="arrow"></b>
		</li>
<?php
			}
		}
?>
<?php
if ($id_level == 1) { ?>
<?php
}
?>
<li class="hover text-center">
	<a href="<?= base_url() ?>C_layanan">
		<i class="fas fa-th fa-2x"></i><br>
		<span class="menu-text"> Layanan </span>
	</a>
</li>
<li class="hover text-center">
	<a href="<?= base_url() ?>Kategori">
		<i class="fas fa-th fa-2x"></i><br>
		<span class="menu-text"> Kategori </span>
	</a>
	<b class="arrow"></b>
</li>

<li class="hover text-center">
	<a href="<?= base_url() ?>C_galeri">
		<i class="fas fa-images fa-2x"></i><br>
		<span class="menu-text"> Galeri </span>
	</a>
</li>
<li class="hover text-center">
	<a href="<?= base_url() ?>Album">
		<i class="fas fa-images fa-2x"></i><br>
		<span class="menu-text"> Album </span>
	</a>
	<b class="arrow"></b>
</li>
<li class="hover text-center btn-group">
	<a href="<?= base_url() ?>login/logout">
		<i class="fas fa-power-off fa-2x"></i><br>
		<span class="menu-text"> Logout </span>
	</a>
	<b class="arrow"></b>
</li>
</ul>