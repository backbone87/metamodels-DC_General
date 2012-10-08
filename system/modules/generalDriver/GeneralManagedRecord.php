<?php

interface GeneralManagedRecord extends GeneralRecord, GeneralReference {

	public function save();
	
	public function delete();
	
}
