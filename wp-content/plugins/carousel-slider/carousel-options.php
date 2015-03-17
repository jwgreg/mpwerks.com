<div id="wpbody">
	<div class="wrap">
		<h2><?php _e('Carousel Settings' ,'carouselslider'); ?></h2>
		<form action="options.php" method="post">
			<?php
				settings_fields( 'sis_carousel_settings' );
				$options = get_option( 'sis_carousel_settings' );
			?>
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[max_items]"><?php _e('Maximum Items' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[max_items]" id="" value="<?php esc_attr_e($options['max_items']); ?>">
							<p class="description"><?php _e('This variable allows you to set the maximum amount of items displayed at a time with the widest browser width &#40;window &gt;= 1200&#41;' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Items Desktop' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_desktop]" id="" value="<?php esc_attr_e($options['items_desktop']); ?>">
							<p class="description"><?php _e('This allows you to preset the number of slides visible with  &#40;window &lt;= 1199&#41; browser width' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Items Desktop Small' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_desktop_small]" id="" value="<?php esc_attr_e($options['items_desktop_small']); ?>">
							<p class="description"><?php _e('This allows you to preset the number of slides visible with  &#40;window &lt;= 979&#41; browser width' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Items Tablet' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_tablet]" id="" value="<?php esc_attr_e($options['items_tablet']); ?>">
							<p class="description"><?php _e('This allows you to preset the number of slides visible with  &#40;window &lt;= 768&#41; browser width' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Items Mobile' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" min="1" max="10" name="sis_carousel_settings[items_mobile]" id="" value="<?php esc_attr_e($options['items_mobile']); ?>">
							<p class="description"><?php _e('This allows you to preset the number of slides visible with  &#40;window &lt;= 479&#41; browser width' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[items_single]"><?php _e('Single Item' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[items_single]' value='false' <?php if ( 'false' == $options['items_single'] ) echo 'checked="checked"'; ?> /> <?php _e('NO' ,'carouselslider'); ?>
                            <input type='radio' name='sis_carousel_settings[items_single]' value='true' <?php if ( 'true' == $options['items_single'] ) echo 'checked="checked"'; ?> /> <?php _e('Yes' ,'carouselslider'); ?>
                    		<p class="description"><?php _e('If you select "Yes", it will display only one item and top five options will be automatically stopped.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[transitionstyle]"><?php _e('Transition Style' ,'carouselslider'); ?></label>
						</th>
						<td>
							<select name="sis_carousel_settings[transitionstyle]">
								<option value="fade" <?php selected( $options['transitionstyle'], 'fade' ); ?>><?php _e('fade' ,'carouselslider'); ?></option>
								<option value="backSlide" <?php selected( $options['transitionstyle'], 'backSlide' ); ?>><?php _e('backSlide' ,'carouselslider'); ?></option>
								<option value="goDown" <?php selected( $options['transitionstyle'], 'goDown' ); ?>><?php _e('goDown' ,'carouselslider'); ?></option>
								<option value="scaleUp" <?php selected( $options['transitionstyle'], 'scaleUp' ); ?>><?php _e('scaleUp' ,'carouselslider'); ?></option>
							</select>
							<p class="description"><?php _e('Transition style works only in modern browsers that support CSS3 translate3d methods and only with single item on screen.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Slide Speed' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" name="sis_carousel_settings[slide_speed]" id="" value="<?php esc_attr_e($options['slide_speed']); ?>">
							<p class="description"><?php _e('Slide speed in milliseconds. Default speed is &lsquo;200&rsquo; milliseconds.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Pagination Speed' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" name="sis_carousel_settings[pagination_speed]" id="" value="<?php esc_attr_e($options['pagination_speed']); ?>">
							<p class="description"><?php _e('Pagination speed in milliseconds. Default speed is &lsquo;800&rsquo; milliseconds.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Rewind Speed' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="number" name="sis_carousel_settings[rewind_speed]" id="" value="<?php esc_attr_e($options['rewind_speed']); ?>">
							<p class="description"><?php _e('Rewind speed in milliseconds. Default speed is &lsquo;1000&rsquo; milliseconds.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_autoplay"><?php _e('AutoPlay' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[autoplay]" id="" value="<?php esc_attr_e($options['autoplay']); ?>">
							<p class="description"><?php _e('Change to any integrer for example &lsquo;autoPlay : 5000&rsquo; to play every 5 seconds. If you set &lsquo;autoPlay: true&rsquo; default speed will be 5 seconds.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Stop On Hover' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[stoponhover]' value='false' <?php if ( 'false' == $options['stoponhover'] ) echo 'checked="checked"'; ?> /> <?php _e('NO' ,'carouselslider'); ?>
                            <input type='radio' name='sis_carousel_settings[stoponhover]' value='true' <?php if ( 'true' == $options['stoponhover'] ) echo 'checked="checked"'; ?> /> <?php _e('Yes' ,'carouselslider'); ?>
							<p class="description"><?php _e('Stop autoplay on mouse hover.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Navigation' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[navigation]' value='false' <?php if ( 'false' == $options['navigation'] ) echo 'checked="checked"'; ?> /> <?php _e('NO' ,'carouselslider'); ?>
                            <input type='radio' name='sis_carousel_settings[navigation]' value='true' <?php if ( 'true' == $options['navigation'] ) echo 'checked="checked"'; ?> /> <?php _e('Yes' ,'carouselslider'); ?>
							<p class="description"><?php _e('Display &lsquo;next&rsquo; and &lsquo;prev&rsquo; buttons.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[navigation_bg_color]"><?php _e('Navigation Color' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[navigation_bg_color]" id="navigation_bg_color" value="<?php esc_attr_e($options['navigation_bg_color']); ?>">
							<p class="description"><?php _e('Choose color for Navigation Background.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for="sis_carousel_settings[navigation_arrow_color]"><?php _e('Navigation Arrow Color' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[navigation_arrow_color]" id="navigation_arrow_color" value="<?php esc_attr_e($options['navigation_arrow_color']); ?>">
							<p class="description"><?php _e('Choose color for Navigation Arrow.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Scroll Per Page' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[scrollperpage]' value='false' <?php if ( 'false' == $options['scrollperpage'] ) echo 'checked="checked"'; ?> /> <?php _e('NO' ,'carouselslider'); ?>
                            <input type='radio' name='sis_carousel_settings[scrollperpage]' value='true' <?php if ( 'true' == $options['scrollperpage'] ) echo 'checked="checked"'; ?> /> <?php _e('Yes' ,'carouselslider'); ?>
							<p class="description"><?php _e('Scroll per page not per item. This affect next/prev buttons and mouse/touch dragging.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Pagination' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[pagination]' value='false' <?php if ( 'false' == $options['pagination'] ) echo 'checked="checked"'; ?> /> <?php _e('NO' ,'carouselslider'); ?>
                            <input type='radio' name='sis_carousel_settings[pagination]' value='true' <?php if ( 'true' == $options['pagination'] ) echo 'checked="checked"'; ?> /> <?php _e('Yes' ,'carouselslider'); ?>
							<p class="description"><?php _e('Show pagination.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Pagination Color' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[pagination_bg_color]" id="pagination_bg_color" value="<?php esc_attr_e($options['pagination_bg_color']); ?>">
							<p class="description"><?php _e('Choose color for Pagination Background.' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Pagination Numbers' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type='radio' name='sis_carousel_settings[paginationnumbers]' value='false' <?php if ( 'false' == $options['paginationnumbers'] ) echo 'checked="checked"'; ?> /> <?php _e('NO' ,'carouselslider'); ?>
                            <input type='radio' name='sis_carousel_settings[paginationnumbers]' value='true' <?php if ( 'true' == $options['paginationnumbers'] ) echo 'checked="checked"'; ?> /> <?php _e('Yes' ,'carouselslider'); ?>
							<p class="description"><?php _e('Show numbers inside pagination buttons' ,'carouselslider'); ?></p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">
							<label for=""><?php _e('Pagination Number Color' ,'carouselslider'); ?></label>
						</th>
						<td>
							<input type="text" name="sis_carousel_settings[pagination_num_color]" id="pagination_num_color" value="<?php esc_attr_e($options['pagination_num_color']); ?>">
							<p class="description"><?php _e('Choose color for Pagination Number.' ,'carouselslider'); ?></p>
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit"><input type="submit" value="<?php _e('Save Changes' ,'carouselslider') ?>" class="button button-primary" id="submit" name="submit"></p>
		</form>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>