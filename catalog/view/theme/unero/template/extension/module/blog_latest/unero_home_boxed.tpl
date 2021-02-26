<?php
if($registry->has('theme_options') == false) { 
 header("location: themeinstall/index.php"); 
 exit; 
}
$theme_options = $registry->get('theme_options');
?>
<div class="box blog-module blog-latest-posts box-no-advanced">
    <div class="box-heading"><?php echo $heading_title; ?></div>
    <div class="strip-line"></div>
    <div class="box-content">
    	<div class="home-boxed-posts row">
        <?php if(!empty($articles)):?> 
            <?php foreach($articles as $article):?>
	            <?php if($article['thumb']):?>
	            <div class="col-sm-4">
	                <div class="media">
	                    <div  class="thumb-holder">
	                        <a href="<?php echo $article['href']; ?>"><img alt="" src="<?php echo $article['thumb'] ?>"></a>
	                    </div>
	                    
	                    <div class="media-body">
	                        <div class="date-published"><?php echo date('d.m.Y', strtotime($article['date_published'])) ?></div>
	                        <h5><a href="<?php echo $article['href']; ?>"><?php echo $article['title'] ?></a></h5>
	                        
	                        <div class="post-description">
	                            <?php echo $article['description']?>
	                        </div>
	                        
	                        <a href="<?php echo $article['href']; ?>" class="read-more"><?php echo $button_read_more ?></a>
	                    </div>
	                </div>
	            </div>
	            <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>
</div>