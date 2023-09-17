<?php
defined('TYPO3') or die('Access denied.');

//$GLOBALS['TBE_STYLES']['skins']['ww_sitepackage']['stylesheetDirectories'][] = 'EXT:ww_sitepackage/Configuration/BeStyles/';

// News addtional template
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['templateLayouts']['numbers'] = array('Nummeriert', 'numbers');
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['templateLayouts']['loadmore'] = array('Load More', 'load_more');