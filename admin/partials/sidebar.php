<?php

$strNavData = file_get_contents($datasource . 'navitems.json');
$arrNavData = json_decode($strNavData);
?>

<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <?php //include_once($partials."profile.php"); 
        ?>


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">


                <?php foreach ($arrNavData as $navData) : ?>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link legitRipple"><i class="<?= $navData->icon ?>"></i> <span><?= $navData->name ?></span></a>
                        <?php if (isset($navData->submenu)) : ?>
                            <ul class="nav nav-group-sub" data-submenu-title="Pickers" style="display: none;">
                            <?php foreach($navData->submenu as $submenu):?>
                                <li class="nav-item"><a href="<?= $submenu->url ?>" class="nav-link legitRipple"><?= $submenu->name ?></a></li>
                            <?php endforeach?>
                            </ul>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->