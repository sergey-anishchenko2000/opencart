							</div>
							
							<?php if( count($column_right) ) { ?> 
							<div class="col-md-<?php echo $grid_content_right; ?>" id="column-right">
								<?php foreach ($column_right as $module) {
									echo $module;
								} ?>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				
				<div>	
					<div class="col-sm-12">	
						<?php 
						$contentbottom = $modules_old_opencart->getModules('content_bottom');
						if( count($contentbottom) ) { ?>
							<?php
							foreach ($contentbottom as $module) {
								echo $module;
							}
							?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>				  
</div>