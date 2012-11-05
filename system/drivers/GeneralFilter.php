<?php

interface GeneralFilter {
	
	public function filter(GeneralCollection $objCollection);
	
	public function matches(GeneralRecord $objRecord);
	
}
