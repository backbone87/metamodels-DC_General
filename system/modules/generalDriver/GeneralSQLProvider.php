<?php

class GeneralSQLProvider implements GeneralProvider {

	private $storedRecords = array();
	
	private $newRecords = array();
	
	public function getConnection() {
		return Database::getInstance();
	}
	
	public function createRecord(GeneralRecord $base = null) {
		$record = new GeneralSQLRecord($this);
		if($base) foreach($base as $name => $value) {
			$record->set($name, $value);
		}
		return $record;
	}
	
	public function createReference($ref) {
		throw new GeneralProviderDomainException();
		return new GeneralSQLReference($this, $ref);
	}
	
	public function isModified(GeneralReference $ref) {
		$this->checkObject($ref);
		if(!isset($this->records[spl_object_hash($ref)])) {
			return true;
		}
	}
	
	public function isEqual(GeneralReference $a, GeneralReference $b) {
		$this->checkObject($a);
		$this->checkObject($b);
		return $a->id() == $b->id();
	}
	
	public function isObject(GeneralProviderObject $obj) {
		return $obj->getProvider() === $this;
	}
	
	public function isStored(GeneralProviderObject $obj) {
		$this->checkObject($obj);
		if($obj instanceof GeneralReference) {
			
		}
	}
	
	public function store(GeneralRecord $record);
	
	public function delete(GeneralReference $ref);
	
	public function fetch(GeneralReference $ref) {
		$this->checkObject($ref);
		
		$record = new GeneralSQLRecord();
		return $record;
	}
	
    public function query(GeneralQuery $qry);
    
    public function count(GeneralQuery $qry);
    
    public function checkObject(GeneralProviderObject $obj) {
    	if(!$this->isObject($obj)) {
    		throw new GeneralProviderDomainException();
    	}
    }
    
}
