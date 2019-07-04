<?php
	#
	# $Id: cache-port.php,v 1.6 2007-06-04 02:16:33 dan Exp $
	#
	# Copyright (c) 2006-2007 DVL Software Limited
	#

	require_once('cache.php');

// base class for caching
// Supplies methods for adding, removing, and retrieving.
//

define('CACHE_PORT_COMMITS', 'Commits');
define('CACHE_PORT_DETAIL',  'Detail');

class CacheCommit extends Cache {

	const CacheCategory = 'commits';

	var $PageSize = 100;

	function __construct() {
		return parent::__construct();
	}
	
	function PageSizeSet($PageSize) {
		$this->PageSize = $PageSize;
	}

	function RetrieveCommit($MessageId, $PageNum = 1) {
		$this->_Log("CacheCommit: Retrieving for $MessageId $PageNum");
		$Key = $this->_CommitKey($MessageId, $PageNum);
		$result = parent::Retrieve($Key);

		return $result;
	}

	function AddCommit($MessageId, $PageNum = 1) {
		$this->_Log("CacheCommit: Adding for $MessageId $PageNum");

		$CacheDir = $this->CacheDir . '/' . CacheCommit::CacheCategory . '/' . $MessageId);
		$Key = $this->_CommitKey($MessageId, $PageNum);
		 
		if (!file_exists($CacheDir)) {
			$this->_Log("CacheCommit: creating directory $CacheDir");
			$old_mask = umask(0000);
			if (!mkdir($CacheDir, 0774, true)) {
				$this->_Log("CacheCommit: unable to create directory $CacheDir");
			}
			umask($old_mask);
		}

		$result = 0;
		$result = parent::Add($Key);

		return $result;
	}

	function RemoveCommit($MessageId, $PageNum = 1) {
		$this->_Log("CacheCommit: Removing for $MessageId");

		#
		# the wild card allows us to remove all cache entries for this port
		# regardless of the CacheType or page number
		#
		$Key = $this->_CommitKey($MessageId, $PageNum);
		$result = parent::Remove($Key, $data);

		return $result;
	}

	function _CommitKey($MessageId, $PageNum = 1) {
		// might want some parameter checking here
		$Key = CacheCommit::CacheCategory . "/$MessageId.PageSize$this->PageSize.PageNum$PageNum.html";

		return $Key;
	}

	function _CacheFileName($key) {
		return $this->CacheDir . '/'. $key;
	}
	

}
