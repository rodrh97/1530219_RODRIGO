<?php// no direct accessdefined('_JEXEC') or die('Restricted access');$active = '';if(JRequest::getVar("view") == "item") {	$active = JRequest::getInt("id");}?>	<div class="k2filter-field-title-select">			<?php if($showtitles) : ?>		<h3><?php echo JText::_("MOD_K2_FILTER_SELECT_TITLE_HEADER"); ?></h3>		<?php endif; ?>				<script type="text/javascript">			jQuery(document).ready(function() {				jQuery('.item-title-select').on("change", function() {					var val = jQuery(this).find("option:selected").val();					if(val != "") {						window.location.href = val;					}				});			});		</script>				<select class="item-title-select inputbox">			<option value="">-- <?php echo JText::_('MOD_K2_FILTER_SELECT_TITLE_HEADER'); ?> --</option>			<?php				require_once(JPATH_SITE . '/components/com_k2/helpers/route.php');				foreach ($titles as $title) {					$link = K2HelperRoute::getItemRoute($title->id.':'.urlencode($title->alias), $title->catid.':'.urlencode($title-calias));					$link = urldecode(JRoute::_($link));									echo '<option value="'.$link.'"';					if($active == $title->id) echo " selected='selected'";					echo '>'.trim($title->title).'</option>';				}			?>		</select>	</div>