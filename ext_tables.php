<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nslazyload_domain_model_lazyload', 'EXT:ns_lazy_load/Resources/Private/Language/locallang_csh_tx_nslazyload_domain_model_lazyload.xlf');
    },
    $_EXTKEY
);
