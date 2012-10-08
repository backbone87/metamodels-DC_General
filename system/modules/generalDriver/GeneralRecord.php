<?php

interface GeneralRecord extends GeneralProviderObject, IteratorAggregate {

	/**
	 * Fetch property from model.
	 */
	public function get($key);

	/**
	 * Update property in model.
	 */
	public function set($key, $value);
	
	/**
	 * @return array
	 */
	public function toArray();
	
}
