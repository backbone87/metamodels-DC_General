<?php

interface GeneralStorageContext {
	
	public function isReadonly();
	
	public function setReadonly($blnReadonly);

    public function getFields();

    public function setFields($arrFields);  

}