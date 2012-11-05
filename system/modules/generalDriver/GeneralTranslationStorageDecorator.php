<?php

class GeneralTranslationDataDecorator extends GeneralAbstractDataDecorator {
	
	public function __consturct(GeneralStorage $objData) {
		parent::__construct($objData);
	}
	
	protected $strLanguageFieldName = 'language';
	
	public function getLanguageFieldName() {
		return $this->strLanguageFieldName;
	}
	
	public function setLanguageFieldName($strLanguageFieldName) {
		// TODO OH: check naming constraints (must be passed down to decorated object)
		// TODO OH: check storage conformance, e.g. if the column in sql data exists (must be passed down)
		$this->strLanguageFieldName = $strLanguageFieldName;
	}
	
	protected $strDefaultLanguage = 'en';
	
	public function getDefaultLanguage($strDefaultLanguage) {
		return $this->strDefaultLanguage;
	}
	
	public function setDefaultLanguage($strDefaultLanguage) {
		// TODO OH: add lang code format check
		$this->strDefaultLanguage = $strDefaultLanguage;
	}
	
	protected $strFallbackLanguage = 'en';
	
	public function getFallbackLanguage($strFallbackLanguage) {
		return $this->strFallbackLanguage;
	}
	
	public function setFallbackLanguage($strFallbackLanguage) {
		// TODO OH: add lang code format check
		$this->strFallbackLanguage = $strFallbackLanguage;
	}
	
	public function getLanguageOf(GeneralRecord $objRecord) {
		// TODO OH: check if the Field exists
		// TODO OH: check if the record belongs to this data storage
		return $objRecord->get($this->getLanguageFieldName());
	}
	
	public function createRecord() {
		$objRecord = parent::createRecord();
		$objRecord->set($this->getLanguageFieldName(), $this->getDefaultLanguage());
		return $objRecord;
	}
	
}
