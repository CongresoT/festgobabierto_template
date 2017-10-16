<?php
defined('_JEXEC') or die('Restricted access');

$cfg = JEVConfig::getInstance();

$cfg = JEVConfig::getInstance();
$option = JEV_COM_COMPONENT;
$Itemid = JEVHelper::getItemid();

$compname = JEV_COM_COMPONENT;
$viewname = $this->getViewName();
$viewpath = JURI::root() . "components/$compname/views/" . $viewname . "/assets";
$viewimages = $viewpath . "/images";

$view = $this->getViewName();

//$this->data = $data = $this->datamodel->getWeekData($this->year, $this->month, $this->day);
$this->data = $data = $this->datamodel->getWeekData(2017, 11, 7);

// previous and following month names and links
$followingWeek = $this->datamodel->getFollowingWeek($this->year, $this->month, $this->day);
$precedingWeek = $this->datamodel->getPrecedingWeek($this->year, $this->month, $this->day);
?>
<h2>Agenda</h2>
<h4>Baja el app de <a target="_blank" href="http://www.eventmobi.com/festgobabierto">Eventmobi</a> para organizar tu agenda.</h4>
<div id='jev_maincal' class='jev_listview'>

    <?php
    $hasevents = false;
    for ($d = 0; $d < 7; $d ++) {
        $num_events = count($data ['days'] [$d] ['rows']);
        if ($num_events == 0)
            continue;

        ?>
        <div class="jev_daysnames">
            <?php if ($d == 1): ?>
            7 de Noviembre
            <?php else: ?>
            8 de Noviembre
            <?php endif; ?>            
        </div>

        <div class="jev_listrow">
            <?php
            if ($num_events > 0) {
                $hasevents = true;
                echo "<ul class='ev_ul'>\n";

                for ($r = 0; $r < $num_events; $r ++) {
                    $row = $data ['days'] [$d] ['rows'] [$r];
                    
                    $listyle = 'style="border-color:' . $row->bgcolor() . ';"';
                    echo "<li class='ev_td_li'".$listyle.">\n";
                    echo "<span class='glyphicon glyphicon-time'></span>";
                    echo "<span style='display:inline-block; color:".$row->bgcolor()."'>";
                        $this->loadedFromTemplate('icalevent.list_row', $row, 0);
                    echo "</span></br>";
                    echo "<span class='glyphicon glyphicon-map-marker'></span>";
                    echo ($row->_location);
                    echo "<br/>";
                    
                    echo "</li>\n";
                }
                echo "</ul>\n";
            }
            ?>
        </div>
        <?php
    } // end for days
    if (!$hasevents) {
        echo '<div class="list_no_e">' . "\n";
        echo JText::_('JEV_NO_EVENTS_FOUND');
        echo "</div>\n";
    }
    ?>
<div class="jev_clear"></div>
</div>