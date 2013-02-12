<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_example_calendar
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('bootstrap.tooltip');

// Agregamos el calendario
JHTML::_('behavior.calendar');
$doc =& JFactory::getDocument();
$doc->addScriptDeclaration('window.addEvent(\'domready\', function() {Calendar.setup({
				inputField     :    "modrsv-calendar",        // ID del input en donde vamos a instanciar el calendario
				ifFormat       :    "%Y-%m-%d",               // Formato de la Fecha
				button         :    "modrsv-calendar-ctrl",   // ID del control el cual dispara el calendario
				align          :    "Tr",                     // Alineación (Top right - Esquina superior Derecha)
				singleClick    :    true
				});});'
);

?>
<form action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post" id="recervaciones-form" class="form-inline">
	
		<!-- calendar input -->
		<div id="form-recervaciones-phone" class="control-group">
			<div class="controls">
				<div class="input-prepend input-append">
					<span class="add-on">
						<i class="icon-calendar tip" title="Fecha"></i>
						<label for="modrsv-phone" class="element-invisible">Fecha</label>
					</span>
					<input id="modrsv-calendar" type="text" name="phone" class="input-small" tabindex="1" size="18" placeholder="Fecha" />
					<a href="#" id='modrsv-calendar-ctrl' class="btn hasTooltip" title="Inserte la fecha"><i class="icon-question-sign"></i></a>
				</div>
			</div>
		</div>

	
		<div id="form-recervaciones-submit" class="control-group">
			<div class="controls">
				<button type="submit" tabindex="3" name="Submit" class="btn btn-primary btn">Reservar Ahora</button>
			</div>
		</div>
		<?php
			$usersConfig = JComponentHelper::getParams('com_users');
			if ($usersConfig->get('allowUserRegistration')) : ?>
		<?php endif; ?>
	</div>
</form>
<br>
