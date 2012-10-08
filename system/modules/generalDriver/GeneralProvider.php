<?php

interface GeneralProvider {

	public function createRecord(GeneralRecord $base = null);
	
	public function createReference($ref);
	
	public function isModified(GeneralReference $record);
	
	public function isEqual(GeneralReference $a, GeneralReference $b);
	
	public function isStored(GeneralProviderObject $obj);
	
	public function isObject(GeneralProviderObject $obj);
	
	public function store(GeneralRecord $record);
	
	public function delete(GeneralReference $ref);
	
	public function fetch(GeneralReference $ref);
	
    public function query(GeneralQuery $query);
	
    public function count(GeneralQuery $query);

}
