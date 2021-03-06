<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = 'h2';
$document = JFactory::getDocument();
$itemStyle = '#item-'.$item->id.' {background-image:linear-gradient(rgba(0, 23, 130, 0.15),rgba(0, 23, 130, 0.15)),url('.JUri::base().trim(json_decode($item->images)->image_fulltext).');}';
$itemStyle .= '#item-'.$item->id.':hover {background-image:linear-gradient(rgba(0, 23, 130, 0.55),rgba(0, 23, 130, 0.55)),url('.JUri::base().trim(json_decode($item->images)->image_fulltext).');}';
$document->addStyleDeclaration($itemStyle);
?>
<div id="item-<?php echo $item->id; ?>" class="newsfeed jumbotron"> 
    <?php if ($params->get('item_title')) : ?>

        <<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
        <?php if ($item->link !== '' && $params->get('link_titles')) : ?>
            <a href="<?php echo $item->link; ?>">
                <?php echo $item->title; ?>
            </a>
        <?php else : ?>
            <?php echo $item->title; ?>
        <?php endif; ?>
        </<?php echo $item_heading; ?>>

    <?php endif; ?>

    <?php if (!$params->get('intro_only')) : ?>
        <?php echo $item->afterDisplayTitle; ?>
    <?php endif; ?>

    <?php echo $item->beforeDisplayContent; ?>

    <?php if ($params->get('show_introtext', '1')) : ?>
        <?php echo $item->introtext; ?>
    <?php endif; ?>

    <?php echo $item->afterDisplayContent; ?>

    <?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
        <?php echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
    <?php endif; ?>
</div>