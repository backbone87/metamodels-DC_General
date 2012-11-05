<?php

interface GeneralVersionStorage extends GeneralStorage {
	
	
	/**
	 * Save a new Version of a record
	 *
	 * @param int $intID ID of current record
	 * @param string $strVersion Version number
	 * @return void
	 */
	public function saveVersion(GeneralRecord $objModel);
	
	/**
	 * Return a model based of the version information
	 *
	 * @param mix $mixID The ID of record
	 * @param mix $mixVersion The ID of the Version
	 *
	 * @return GeneralRecord
	 */
	public function getVersion($mixID, $mixVersion);
	
	/**
	 * Return a list with all versions for this row
	 *
	 * @param mixed $mixID The ID of record
	 *
	 * @return InterfaceGeneralCollection
	 */
	public function getVersions(GeneralRecord $objRecord);
	
	/**
	 * Set a Version as active.
	 *
	 * @param mix $mixID The ID of record
	 * @param mix $mixVersion The ID of the Version
	 */
	public function setVersionActive($mixID, $mixVersion);
	
	/**
	 * Return the active version from a record
	 *
	 * @param mix $mixID The ID of record
	 *
	 * @return mix Version ID
	 */
	public function getActiveVersion($mixID);
	
}
