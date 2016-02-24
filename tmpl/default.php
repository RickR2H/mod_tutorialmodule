<?php
/**
 * @copyright	Copyright (c) 2016 R2H (http://www.r2h.nl). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

//JHtml::_('script', 'mod_r2h_tutorialmodule/script.js', array(), true);
//JHtml::_('stylesheet', 'mod_r2h_tutorialmodule/style.css', array(), true);

$componenttype  = $params->get('componenttype','');
$modid          = $module->id;

// Get the applications params
$jinput = JFactory::getApplication()->input;

// Get content type
$type = $jinput->get('option');
?>
<?php if($componenttype == $type || $componenttype == 'always') : ?>
	<div class="accordion" id="accordion<?php echo $modid; ?>">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor1">
					<?php //echo $value[0]; ?>sdf
				</a>
			</div>
			<div id="collapseTutor1" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php ///echo $value[1]; ?>wer
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor2">
					<?php //echo $value[0]; ?>asd
				</a>
			</div>
			<div id="collapseTutor2" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php ///echo $value[1]; ?>asd
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor3">
					<?php //echo $value[0]; ?>asd
				</a>
			</div>
			<div id="collapseTutor3" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php ///echo $value[1]; ?>asd
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor4">
					<?php //echo $value[0]; ?>asd
				</a>
			</div>
			<div id="collapseTutor4" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php ///echo $value[1]; ?>asd
				</div>
			</div>
		</div>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor5">
					<?php //echo $value[0]; ?>asd
				</a>
			</div>
			<div id="collapseTutor5" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php ///echo $value[1]; ?>asd
				</div>
			</div>
		</div>

	</div>
<?php endif ?>
