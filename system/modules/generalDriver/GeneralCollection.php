<?php

interface GeneralCollection extends IteratorAggregate, Countable {
	
	/**
	 * Get record at a specific index.
	 * 
	 * @param integer $i The index position to return the record for.
	 * @return GeneralRecord The record at the given index.
	 * @throws OutOfBoundsException If the given index is negative or greater
	 * 		than or equal to the amount of records in this collection.
	 */
	public function get($i);
	
	/**
	 * Set record at a specific index.
	 * 
	 * @param integer $i The index position to set the record for.
	 * @param GeneralRecord $record The record to set at the given index.
	 * @return GeneralRecord The record that was previously set at the given
	 * 		index.
	 * @throws OutOfBoundsException If the given index is negative or greater
	 * 		than or equal to the amount of records in this collection.
	 */
	public function set($i, GeneralRecord $record);
	
	/**
	 * Remove record at a specific index.
	 * 
	 * @param integer $i The index position of the record to be removed.
	 * @return GeneralRecord The record that was previously set at the given
	 * 		index.
	 * @throws OutOfBoundsException If the given index is negative or greater
	 * 		than or equal to the amount of records in this collection.
	 */
	public function delete($i);

	/**
	 * Add a record to the end of this collection.
	 * 
	 * @param GeneralRecord $record The record to be added.
	 * @return integer The new amount of records in this collection.
	 */
	public function push(GeneralRecord $record);

	/**
	 * Remove a record from the end of this collection and return it.
	 * 
	 * @return GeneralRecord The removed record.
	 * @throws UnderflowException If the collection is empty.
	 */
	public function pop();

	/**
	 * Add a record at the beginning of this collection.
	 *
	 * @param GeneralRecord $record The record to be added.
	 * @return integer The new amount of records in this collection.
	 */
	public function unshift(GeneralRecord $record);

	/**
	 * Remove a record from the beginning of this collection and return it.
	 *
	 * @return GeneralRecord The removed record.
	 * @throws UnderflowException If the collection is empty.
	 */
	public function shift();

	/**
	 * Insert a record at the specific index.
	 * Move all records at position >= $i one index up.
	 *
	 * @param integer $i The index position to insert at.
	 * @param GeneralRecord $record The record to be inserted.
	 * @return integer The new amount of records in this collection.
	 * @throws OutOfBoundsException If the given index is negative or greater
	 * 		than the amount of records in this collection.
	 */
	public function insert($i, GeneralRecord $record);
	
	/**
	 * Replace the given record with another one.
	 * 
	 * @param GeneralRecord $needle The record to be replaced.
	 * @param GeneralRecord $replacement The record that will replace the found
	 * 		record.
	 * @return integer The index position of the replaced record or null, if
	 * 		there was no replacement.
	 */
	public function replace(GeneralRecord $needle, GeneralRecord $replacement);

	/**
	 * Remove the given index or model from the collection and renew the index.
	 * ATTENTION: Don't use key to unset in foreach because of the new index.
	 * 
	 * @param mixed $mixedValue
	 */
	public function remove(GeneralRecord $needle);

	/**
	 * Make a reverse sorted collection.
	 *
	 * @return Collection
	 */
	public function reverse($callback = null);

	/**
	 * Sort the records and return the new sorted collection.
	 *
	 * @param callback $callback
	 *
	 * @return Collection
	 */
	public function sort($callback = null);
	
	public function getPropertyIterator($name);
	
}
