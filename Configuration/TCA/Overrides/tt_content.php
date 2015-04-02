<?php

$lllFile = 'LLL:EXT:rwd_imagepositions/Resources/Private/Language/locallang_db.xlf:';

$addColumns = [
	'tx_rwdimagepositions_imagebreakpoint' => [
		'label' => $lllFile . 'tt_content.tx_rwdimagepositions_imagebreakpoint',
		'config' => [
			'type' => 'select',
			'items' => [
				[$lllFile . 'tt_content.tx_rwdimagepositions_imagebreakpoint.xs', 'xs'],
				[$lllFile . 'tt_content.tx_rwdimagepositions_imagebreakpoint.sm', 'sm'],
				[$lllFile . 'tt_content.tx_rwdimagepositions_imagebreakpoint.md', 'md'],
				[$lllFile . 'tt_content.tx_rwdimagepositions_imagebreakpoint.lg', 'lg'],
			],
		],
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $addColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_rwdimagepositions_imagebreakpoint', 'text,textpic', 'after:imagecols');
