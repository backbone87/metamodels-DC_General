<?php

interface GeneralStorage {

    /**
     * Fetch an empty single record (new item).
     *
     * @return GeneralRecord
     */
    public function createRecord();

    /**
     * Fetch an empty new collection.
     *
     * @return InterfaceGeneralCollection
     */
    public function getEmptyCollection();

    public function fetch(GeneralStorageContext $objConfig);

    public function fetchEach(GeneralStorageConfigDefault $objConfig);

    public function fetchAll(GeneralStorageConfigDefault $objConfig);

    public function getCount(GeneralStorageContext $objConfig);

	public function save(GeneralStorageContext $objConfig, GeneralRecord $objItem);

    public function saveEach(GeneralStorageContext $objConfig, GeneralRecordCollection $items);

    public function delete(GeneralStorageContext $objConfig, GeneralRecord $objItem);

}

?>
