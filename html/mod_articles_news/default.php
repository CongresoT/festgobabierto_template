<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div id="newsflashCarousel" class="carousel slide newsflash<?php echo $moduleclass_sfx; ?>" data-ride="carousel">
    <div class="carousel-inner">
        <?php 
            $i = 0;
            foreach ($list as $item) : 
        ?>
                <div class="item <?php echo(($i==0)?'active':''); ?>">
        <?php
                    require JModuleHelper::getLayoutPath('mod_articles_news', '_item');
                    $i++;
        ?>
                </div>
        <?php endforeach; ?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#newsflashCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#newsflashCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>

</div>
