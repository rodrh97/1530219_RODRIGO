<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
	
	<div class="k2filter-field-select">
		
		<?php if($showtitles) : ?>
		<h3>
			<?php echo $field->name; ?>
		</h3>
		<?php endif; ?>
		
		<select name="searchword<?php echo $field->id; ?>" <?php if($onchange) : ?>onchange="submit_form_<?php echo $module->id; ?>()"<?php endif; ?>>
			<option value="" class="empty"><?php echo JText::_('MOD_K2_FILTER_FIELD_SELECT_DEFAULT').' '.$field->name; ?></option>
			<?php
			
				foreach ($field->content as $value) {
					$selected = '';
					if (JRequest::getVar('searchword'.$field->id) == $value && $value != "") { 
						$selected = ' selected="selected"';
					}
					echo '<option value="'.trim($value).'"'.$selected.'>'.$value.'</option>';
				}
			?>
		</select>
	</div>
    


