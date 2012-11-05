<?php

class GeneralConjunctionFilter implements GeneralFilter {
	
	protected $arrFilters = array();
	
	public function __construct() {
	}
	
	public function addFilter(GeneralFilter $objFilter) {
		$this->arrFilters[] = $objFilter;
	}
	
	public function matches(GeneralRecord $objRecord) {
		foreach($this->arrFilters as $objFilter) {
			if(!$objFilter->matches($objRecord)) {
				return false;
			}
		}
		return true;
	}
	
}
