<?php
/**
 * @version 2.3.12
 * @package JEM
 * @copyright (C) 2013-2021 joomlaeventmanager.net
 * @copyright (C) 2005-2009 Christoph Lukes
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
defined('_JEXEC') or die;
?>
<div class="width-100" style="padding: 10px 1vw;">
    <fieldset class="options-form">
		<legend><?php echo JText::_( 'COM_JEM_EVENT_HANDLING' ); ?></legend>
		<ul class="adminformlist">
			<li><?php echo $this->form->getLabel('oldevent'); ?> <?php echo $this->form->getInput('oldevent'); ?></li>
			<li id="evhandler1"><?php echo $this->form->getLabel('minus'); ?> <?php echo $this->form->getInput('minus'); ?></li>
		</ul>
	</fieldset>
</div>
