<?php echo $header; 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); 
include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

<div class="contact-page">
          <div class="contact-form">
          <div id="messages_product_view"></div>
          <form action="<?php echo $action; ?>" id="contactForm" method="post" enctype="multipart/form-data">
               <div class="fieldset">
                    <h2 class="legend"><?php echo $text_contact; ?></h2>
                    <ul class="form-list">
                         <li class="fields">
                              <div class="field">
                                   <div class="input-box">
                                        <input name="name" id="name" title="Name" value="<?php echo $name; ?>" class="input-text required-entry" type="text" placeholder="<?php echo $entry_name; ?>">
                                        
                                        <?php if ($error_name) { ?>
                                        <div class="text-danger"><?php echo $error_name; ?></div>
                                        <?php } ?>
                                   </div>
                              </div>
                              
                              <div class="field">
                                   <div class="input-box">
                                        <input name="email" id="email" title="Email" value="<?php echo $email; ?>" class="input-text required-entry validate-email" type="text" placeholder="<?php echo $entry_email; ?>">
                                        
                                        <?php if ($error_email) { ?>
                                        <div class="text-danger"><?php echo $error_email; ?></div>
                                        <?php } ?>
                                   </div>
                              </div>
                         </li>
                         <li class="wide"><div class="input-box"><textarea name="enquiry" id="comment" title="<?php echo $entry_enquiry; ?>" class="required-entry input-text" rows="5" placeholder="<?php echo $entry_enquiry; ?>"><?php echo $enquiry; ?></textarea>
                              <?php if ($error_enquiry) { ?>
                              <div class="text-danger"><?php echo $error_enquiry; ?></div>
                              <?php } ?>
                         </div></li>
                         <li class="wide"><div class="input-box"><label name="evaluation" class="required-entry input-text" rows="5" >THANK YOU FOR YOUR INQUIRY. WE WILL RESPOND AS SOON AS
POSSIBLE GENERALLY WITHIN A FEW HOURS.</label>
                         </div></li>
                    </ul>
               </div>
               
               <div class="buttons-set">
                    <button type="submit" title="Send Message" class="button"><span><span><?php echo $button_submit; ?></span></span></button>
               </div>
          </form>  
     </div>
     
     <?php if ($geocode) { ?>
     <div class="contact-map"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="1170" height="470" src="https://maps.google.com/maps?q=<?php echo urlencode($geocode); ?>&hl=<?php echo $geocode_hl; ?>&ie=UTF8&t=roadmap&z=16&iwloc=B&output=embed"></iframe></div>
     <?php } ?>
</div>
  
<?php include('catalog/view/theme/' . $config->get('theme_' . $config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>