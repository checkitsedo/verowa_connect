<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaconnect_domain_model_event',
			'EXT:verowa_connect/Resources/Private/Language/locallang_csh_tx_verowaconnect_domain_model_event.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaconnect_domain_model_event'
		);
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaconnect_domain_model_organizer',
			'EXT:verowa_connect/Resources/Private/Language/locallang_csh_tx_verowaconnect_domain_model_organizer.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaconnect_domain_model_organizer'
		);
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaconnect_domain_model_room',
			'EXT:verowa_connect/Resources/Private/Language/locallang_csh_tx_verowaconnect_domain_model_room.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaconnect_domain_model_room'
		);
		
	}
);
