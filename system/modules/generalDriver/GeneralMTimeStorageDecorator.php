<?php

class GeneralMTimeDataDecorator extends GeneralAbstractDataDecorator {

	public function __consturct(GeneralStorage $objData) {
		parent::__construct($objData);
		$this->setMTime();
	}

	protected $strMTimeFieldName = 'tstamp';

	public function getMTimeFieldName() {
		return $this->strMTimeFieldName;
	}

	public function setMTimeFieldName($strMTimeFieldName) {
		// TODO check naming constraints (must be passed down to decorated object)
		// TODO check storage conformance, e.g. if the column in sql data exists (must be passed down)
		$this->strMTimeFieldName = $strMTimeFieldName;
	}
	
	protected $intMTime;
	
	public function getMTime() {
		return $this->intMTime;
	}
	
	public function setMTime($intMTime = null) {
		$this->intMTime = $intMTime === null ? time() : intval($intMTime);
	}
	
	public function getEmptyModel() {
		$objRecord = parent::getEmptyModel();
		$this->updateMTime($objRecord);
		return $objRecord;
	}
	
	public function save(GeneralRecord $objRecord) {
		$this->updateMTime($objRecord);
		return parent::save($objRecord);
	}
	
	protected function updateMTime(GeneralRecord $objRecord) {
		$objRecord->set($this->getMTimeFieldName(), $this->getMTime());
	}

}
