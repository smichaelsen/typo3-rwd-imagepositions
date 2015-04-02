<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'RWD Image Positions');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . $_EXTKEY . '/Configuration/TSConfig/" extensions="ts">');