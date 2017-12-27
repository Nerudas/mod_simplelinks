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

use Joomla\Utilities\ArrayHelper;
use Joomla\CMS\Helper\ModuleHelper;

$links = ($params->get('links', 0)) ? ArrayHelper::fromObject($params->get('links'), false) : array();

require ModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
