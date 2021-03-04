<?php echo $header; 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); 
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

<div class="contact-page">
    <div class="contact-form">
		<form id="finderForm" method="post" enctype="multipart/form-data">
			<div class="col-sm-12">
				<select name="distribution_location_id" class="form-control">
				<option value="0"><?php echo $text_location; ?></option>
				<?php foreach ($locations as $location) { ?>
				
				<?php if ($location['location_id'] == $distribution_location_id) { ?>
				<option value="<?php echo $location['location_id']; ?>" selected="selected"><?php echo $location['location_name']; ?></option>
				<?php } else { ?>
				<option value="<?php echo $location['location_id']; ?>"><?php echo $location['location_name']; ?></option>
				<?php } ?>
				<?php } ?>
				</select>
			</div>
			<div class="col-sm-12 text-center">
				<input type="button" value="<?php echo $button_search; ?>" id="button-search" class="btn btn-primary" style="margin-top: 30px" />
			</div>
			<div style="margin-top:80px; border-bottom: 1px solid #e1e1e1"> </div>
			<div class="col-sm-12" style="margin-top: 30px;">
				<?php foreach ($locations as $location) { ?>
				<?php if ($location['location_id'] == $distribution_location_id) { ?>
				<p>
					<label class="checkbox-inline" style="padding-left:0px;">
						<?php echo "1-".$finder_count . " ". $finder_count . " results for " . $location['location_name'] ?>
					</label>
				</p>
				<div class="row" style="padding-top:20px;">
				<?php foreach ($finders as $finder) { ?>
					<div class="col-sm-6 col-xs-12"> 
						<div class="row">
							<div class="col-sm-3 col-xs-12">
								<img src="<?php echo $finder['profile_image']?>" alt="<?php echo $finder['name']?>"/>
							</div>
							<div class="col-sm-9 col-xs-12" style="line-height:1.1">
								<p class="intro_content" style="padding-bottom:0px !important;"> <?php echo $finder['name'] ?> </p>
								<p> <?php echo $finder['level'] ?> </p>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
				<?php } ?>
				<?php } ?>

			</div>

		</form>
    </div>
</div>
<script type="text/javascript"><!--
$('select[name=\'distribution_location_id\']').trigger('change');
$('#button-search').bind('click', function() {
	url = 'index.php?route=information/distributors';

	var distribution_location_id = $('#content select[name=\'distribution_location_id\']').attr('value');
	
	if (distribution_location_id > 0) {
		url += '&distribution_location_id=' + encodeURIComponent(distribution_location_id);
	}
	location = url;
});
//--></script> 
<?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>