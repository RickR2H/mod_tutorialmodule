<?php
/**
 * @copyright	Copyright (c) 2016 R2H (http://www.r2h.nl). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

//JHtml::_('script', 'mod_r2h_tutorialmodule/script.js', array(), true);
//JHtml::_('stylesheet', 'mod_r2h_tutorialmodule/style.css', array(), true);

// Get the component type form the module params
$componenttype  = $params->get('componenttype','');

// Get Module ID
$modid          = $module->id;

// Get the titles from the params
$header1        = $params->get('header1','');
$header2        = $params->get('header2','');
$header3        = $params->get('header3','');
$header4        = $params->get('header4','');
$header5        = $params->get('header5','');

// Get the applications params
$jinput = JFactory::getApplication()->input;

// Get content type from the application
$type = $jinput->get('option');
?>

<?php if($componenttype == $type || $componenttype == 'always') : ?>
	<?php if(!empty($header1) && !empty($tutorial1)) : ?>
	<div class="accordion" id="accordion<?php echo $modid; ?>">
		<div class="accordion-group">
			<div class="accordion-heading" style="background-color: #FCF8E3">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor1">
					<?php echo $header1; ?>
				</a>
			</div>
			<div id="collapseTutor1" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php echo $tutorial1; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if(!empty($header2) && !empty($tutorial2)) : ?>
		<div class="accordion-group">
			<div class="accordion-heading" style="background-color: #FCF8E3">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor2">
					<?php echo $header2; ?>
				</a>
			</div>
			<div id="collapseTutor2" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php echo $tutorial2; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if(!empty($header3) && !empty($tutorial3)) : ?>
		<div class="accordion-group">
			<div class="accordion-heading" style="background-color: #FCF8E3">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor3">
					<?php echo $header3; ?>
				</a>
			</div>
			<div id="collapseTutor3" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php echo $tutorial3; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if(!empty($header4) && !empty($tutorial4)) : ?>
		<div class="accordion-group">
			<div class="accordion-heading" style="background-color: #FCF8E3">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor4">
					<?php echo $header4; ?>
				</a>
			</div>
			<div id="collapseTutor4" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php echo $tutorial4; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if(!empty($header5) && !empty($tutorial5)) : ?>
		<div class="accordion-group">
			<div class="accordion-heading" style="background-color: #FCF8E3">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $modid; ?>" href="#collapseTutor5">
					<?php echo $header5; ?>
				</a>
			</div>
			<div id="collapseTutor5" class="accordion-body collapse">
				<div class="accordion-inner">
					<?php echo $tutorial5; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
<?php endif ?>
