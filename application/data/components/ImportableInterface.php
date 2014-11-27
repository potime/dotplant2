<?php
namespace app\data\components;

/**
 * Interface ImportableInterface
 * Model that implement this interface can process additional data
 * from import documents such as additional fields or relations
 * @package app\data\components
 */
interface ImportableInterface {
    /**
     * Process fields before the actual model is saved(inserted or updated)
     * @param array $fields
     * @return void
     */
    public function processImportBeforeSave(array $fields, $propertyMultipleValuesDelimiter);

    /**
     * Process fields after the actual model is saved(inserted or updated)
     * @param array $fields
     * @return void
     */
    public function processImportAfterSave(array $fields, $propertyMultipleValuesDelimiter);
}