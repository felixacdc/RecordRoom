<?php

require_once ('core/libs/smarty/Smarty.class.php');

$template = new Smarty();

$template->display('home/index.tpl');