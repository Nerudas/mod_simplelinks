<?php
/**
 * @package    Simple Links Module
 * @version    1.0.0
 * @author     Nerudas  - nerudas.ru
 * @copyright  Copyright (c) 2013 - 2017 Nerudas. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://nerudas.ru
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

?>
<ul>
	<?php foreach ($links as $link): ?>
		<li>
			<a href="<?php echo $link->href; ?>" class="<?php echo $link->class; ?>"
			   target="<?php echo $link->target; ?>">
				<?php echo Text::_($link->text); ?>
			</a>
		</li>
	<?php endforeach; ?>
</ul>
