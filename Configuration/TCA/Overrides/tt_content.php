<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/*
 * SETUP COLUMNS
 */
$columns	= array(
	'tx_trb_basics_bootstrap3_cols_xs' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.column.tx_trb_basics_bootstrap3_cols_xs',
			'config' => array (
					'type' => 'select',
					'default' => 'col-xs-12',
					'items' => array(
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.0', 'hidden-xs'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.3', 'col-xs-3'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.4', 'col-xs-4'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.6', 'col-xs-6'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.8', 'col-xs-8'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.9', 'col-xs-9'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.12', 'col-xs-12'),
					)
			)
	),

	'tx_trb_basics_bootstrap3_cols_sm' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.column.tx_trb_basics_bootstrap3_cols_sm',
			'config' => array (
					'type' => 'select',
					'default' => 'col-sm-12',
					'items' => array(
							array('LLL:EXT:trb_basics_bootstrap3//Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.0', 'hidden-sm'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.3', 'col-sm-3'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.4', 'col-sm-4'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.6', 'col-sm-6'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.8', 'col-sm-8'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.9', 'col-sm-9'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.12', 'col-sm-12'),
					)
			)
	),

	'tx_trb_basics_bootstrap3_cols_md' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.column.tx_trb_basics_bootstrap3_cols_md',
			'config' => array (
					'type' => 'select',
					'default' => 'col-md-12',
					'items' => array(
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.0', 'hidden-md'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.3', 'col-md-3'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.4', 'col-md-4'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.6', 'col-md-6'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.8', 'col-md-8'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.9', 'col-md-9'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.12', 'col-md-12'),
					)
			)
	),

	'tx_trb_basics_bootstrap3_cols_lg' => array (
			'exclude' => 0,
			'label' => 'LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.column.tx_trb_basics_bootstrap3_cols_lg',
			'config' => array (
					'type' => 'select',
					'default' => 'col-lg-12',
					'items' => array(
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.0', 'hidden-lg'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.3', 'col-lg-3'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.4', 'col-lg-4'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.6', 'col-lg-6'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.8', 'col-lg-8'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.9', 'col-lg-9'),
							array('LLL:EXT:trb_basics_bootstrap3/Resources/Private/Language/locallang_db.xlf:tt_content.value.cols.12', 'col-lg-12'),
					)
			)
	),
);


/*
 * REGISTER COLUMNS
*/
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $columns);

/*
 * SETUP LAYOUT
 */
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content', 'general', 'tx_trb_basics_bootstrap3_cols_xs, tx_trb_basics_bootstrap3_cols_sm, tx_trb_basics_bootstrap3_cols_md, tx_trb_basics_bootstrap3_cols_lg');

