<?php 
if($registry->has('theme_options') == true) { 
	$theme_options = $registry->get('theme_options');
	$config = $registry->get('config');
	
	require_once( DIR_TEMPLATE.$config->get('theme_' . $config->get('config_theme') . '_directory')."/lib/module.php" );
	$modules = new Modules($registry); ?>
	
	<!-- FOOTER
		================================================== -->
	<div class="footer <?php if($theme_options->get( 'footer_layout' ) == 2) { echo 'fixed'; } else { echo 'full-width'; } ?>">
		<div class="background-footer"></div>
		<div class="background">
			<div class="shadow"></div>
			<div class="pattern">
				<div class="container">
					<?php 
					$footer_top = $modules->getModules('footer_top');
					if( count($footer_top) ) { 
						foreach ($footer_top as $module) {
							echo $module;
						}
					} ?>
					
					<?php
					$footer_center = $modules->getModules('footer'); 
					if( count($footer_center) ) { 
						foreach ($footer_center as $module) {
							echo $module;
						}
					} ?>
					
					<?php 
					$footer_bottom = $modules->getModules('footer_bottom');
					if( count($footer_bottom) ) { 
						foreach ($footer_bottom as $module) {
							echo $module;
						}
					} ?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/js/megamenu.js"></script>
</div>

<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
</div>
<?php } ?>
</body>
</html>