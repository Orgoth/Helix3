<?php
/**
 * @package Helix3 Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2020 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('JPATH_BASE') or die;
?>

<?php if ( $displayData['params']->get('quote_text') ) : ?>
	<div class="entry-quote">
		<blockquote>
			<p><?php echo $displayData['params']->get('quote_text'); ?></p>
			<?php if ($displayData['params']->get('quote_author')) : ?>
				<small><?php echo $displayData['params']->get('quote_author'); ?></small>
			<?php endif; ?>
		</blockquote>
	</div>
<?php endif; ?>