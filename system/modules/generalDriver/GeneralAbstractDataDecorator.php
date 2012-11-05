<?php

abstract class GeneralAbstractDataDecorator extends GeneralStorage {
	
	// TODO OH: this should be private?
	protected $objData;
	
	protected function __construct(GeneralStorage $objData) {
		$this->objData = $objData;
	}
	
	public function fetch(GeneralStorageConfigDefault $objConfig) {
		return $this->objData->fetch($objConfig);
	}
	
	public function fetchAll(GeneralStorageConfigDefault $objConfig) {
		return $this->objData->fetchAll($objConfig);
	}
	
	public function fetchEach(GeneralStorageConfigDefault $objConfig) {
		return $this->objData->fetchEach($objConfig);
	}
	
	public function save(GeneralRecord $objItem, $recursive = false) {
		return $this->objData->save($objItem, $recursive);
	}
	
	public function saveEach(InterfaceGeneralCollection $objItems, $recursive = false) {
		return $this->objData->saveEach($objItems, $recursive);
	}
	
}
