<div class="wrap">
	<h2>Real Sticky Options</h2>
		
    <div style="margin-left:0px;">
		
		<form method="POST" action="options.php"><?php wp_nonce_field('update-options'); ?>
			<div class="inside">
				<table class="form-table">
		<tr>
			<tr>
			<th><label for="real_sticky_page_title">Set a Page Title:</label></th>
			<td><input type="text" size="80" name="real_sticky_page_title" value="<?php $real_sticky_page_title = get_option('real_sticky_page_title'); if(!empty($real_sticky_page_title)) {echo $real_sticky_page_title;} else {echo 'Real Sticky';}?>">
			(Please NOT URL, just text)<br />
			<strong>e.g.,:</strong> 'Real Sticky' <strong>or</strong> 'Real Sticky1' <strong>or</strong> 'Real Sticky B' <strong>or</strong> 'My Page' <br />
			
			</td>
			</tr>
					
					
					
					<th><label for="real_sticky_css_style">Set Css Style:</label></th>
				<td>
				
	<textarea name="real_sticky_css_style" id="real_sticky_css_style" rows="10" cols="80"><?php 

	$real_sticky_css_style = get_option('real_sticky_css_style'); 

	if($real_sticky_css_style == ''){
	
	echo '&lt;style type="text/css"&gt;
		
    #real-sticky  { border-bottom:2px solid #DDDDDD; padding-bottom:10px; }
    #real-sticky  h2{ font-weight:bold; font-size:20px; margin-bottom:10px; }
	#real-sticky  p{ font-size:15px;  }
	

	&lt;/style&gt;';
	}
	else{
	echo $real_sticky_css_style;
	}
	

	?></textarea>
				</td>
			</tr></table>
			</div>
    	<input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="real_sticky_css_style , real_sticky_page_title" />
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options') ?>" /></p>
		</form>      
	</div>
</div>