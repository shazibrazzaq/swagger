<?php
/**
 * InsertProductType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Price2Spy API
 *
 * Price2Spy REST API Documentation
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InsertProductType Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InsertProductType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InsertProductType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'brand_name' => 'string',
        'category_name' => 'string',
        'check_frequency_interval' => 'int',
        'check_frequency_type' => 'string',
        'comment1' => 'string',
        'comment2' => 'string',
        'custom_field1' => 'string',
        'custom_field10' => 'string',
        'custom_field2' => 'string',
        'custom_field3' => 'string',
        'custom_field4' => 'string',
        'custom_field5' => 'string',
        'custom_field6' => 'string',
        'custom_field7' => 'string',
        'custom_field8' => 'string',
        'custom_field9' => 'string',
        'internal_id' => 'string',
        'metadata1_name' => 'string',
        'metadata2_name' => 'string',
        'metadata3_name' => 'string',
        'product_name' => 'string',
        'purchase_price' => 'float',
        'sku' => 'string',
        'supplier_name' => 'string',
        'target_price' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'brand_name' => null,
        'category_name' => null,
        'check_frequency_interval' => 'int32',
        'check_frequency_type' => null,
        'comment1' => null,
        'comment2' => null,
        'custom_field1' => null,
        'custom_field10' => null,
        'custom_field2' => null,
        'custom_field3' => null,
        'custom_field4' => null,
        'custom_field5' => null,
        'custom_field6' => null,
        'custom_field7' => null,
        'custom_field8' => null,
        'custom_field9' => null,
        'internal_id' => null,
        'metadata1_name' => null,
        'metadata2_name' => null,
        'metadata3_name' => null,
        'product_name' => null,
        'purchase_price' => null,
        'sku' => null,
        'supplier_name' => null,
        'target_price' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active' => 'active',
        'brand_name' => 'brandName',
        'category_name' => 'categoryName',
        'check_frequency_interval' => 'checkFrequencyInterval',
        'check_frequency_type' => 'checkFrequencyType',
        'comment1' => 'comment1',
        'comment2' => 'comment2',
        'custom_field1' => 'customField1',
        'custom_field10' => 'customField10',
        'custom_field2' => 'customField2',
        'custom_field3' => 'customField3',
        'custom_field4' => 'customField4',
        'custom_field5' => 'customField5',
        'custom_field6' => 'customField6',
        'custom_field7' => 'customField7',
        'custom_field8' => 'customField8',
        'custom_field9' => 'customField9',
        'internal_id' => 'internalId',
        'metadata1_name' => 'metadata1Name',
        'metadata2_name' => 'metadata2Name',
        'metadata3_name' => 'metadata3Name',
        'product_name' => 'productName',
        'purchase_price' => 'purchasePrice',
        'sku' => 'sku',
        'supplier_name' => 'supplierName',
        'target_price' => 'targetPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'brand_name' => 'setBrandName',
        'category_name' => 'setCategoryName',
        'check_frequency_interval' => 'setCheckFrequencyInterval',
        'check_frequency_type' => 'setCheckFrequencyType',
        'comment1' => 'setComment1',
        'comment2' => 'setComment2',
        'custom_field1' => 'setCustomField1',
        'custom_field10' => 'setCustomField10',
        'custom_field2' => 'setCustomField2',
        'custom_field3' => 'setCustomField3',
        'custom_field4' => 'setCustomField4',
        'custom_field5' => 'setCustomField5',
        'custom_field6' => 'setCustomField6',
        'custom_field7' => 'setCustomField7',
        'custom_field8' => 'setCustomField8',
        'custom_field9' => 'setCustomField9',
        'internal_id' => 'setInternalId',
        'metadata1_name' => 'setMetadata1Name',
        'metadata2_name' => 'setMetadata2Name',
        'metadata3_name' => 'setMetadata3Name',
        'product_name' => 'setProductName',
        'purchase_price' => 'setPurchasePrice',
        'sku' => 'setSku',
        'supplier_name' => 'setSupplierName',
        'target_price' => 'setTargetPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'brand_name' => 'getBrandName',
        'category_name' => 'getCategoryName',
        'check_frequency_interval' => 'getCheckFrequencyInterval',
        'check_frequency_type' => 'getCheckFrequencyType',
        'comment1' => 'getComment1',
        'comment2' => 'getComment2',
        'custom_field1' => 'getCustomField1',
        'custom_field10' => 'getCustomField10',
        'custom_field2' => 'getCustomField2',
        'custom_field3' => 'getCustomField3',
        'custom_field4' => 'getCustomField4',
        'custom_field5' => 'getCustomField5',
        'custom_field6' => 'getCustomField6',
        'custom_field7' => 'getCustomField7',
        'custom_field8' => 'getCustomField8',
        'custom_field9' => 'getCustomField9',
        'internal_id' => 'getInternalId',
        'metadata1_name' => 'getMetadata1Name',
        'metadata2_name' => 'getMetadata2Name',
        'metadata3_name' => 'getMetadata3Name',
        'product_name' => 'getProductName',
        'purchase_price' => 'getPurchasePrice',
        'sku' => 'getSku',
        'supplier_name' => 'getSupplierName',
        'target_price' => 'getTargetPrice'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CHECK_FREQUENCY_TYPE_DAYS = 'DAYS';
    const CHECK_FREQUENCY_TYPE_HOURS = 'HOURS';
    const CHECK_FREQUENCY_TYPE_MINUTES = 'MINUTES';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCheckFrequencyTypeAllowableValues()
    {
        return [
            self::CHECK_FREQUENCY_TYPE_DAYS,
            self::CHECK_FREQUENCY_TYPE_HOURS,
            self::CHECK_FREQUENCY_TYPE_MINUTES,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['brand_name'] = isset($data['brand_name']) ? $data['brand_name'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['check_frequency_interval'] = isset($data['check_frequency_interval']) ? $data['check_frequency_interval'] : null;
        $this->container['check_frequency_type'] = isset($data['check_frequency_type']) ? $data['check_frequency_type'] : null;
        $this->container['comment1'] = isset($data['comment1']) ? $data['comment1'] : null;
        $this->container['comment2'] = isset($data['comment2']) ? $data['comment2'] : null;
        $this->container['custom_field1'] = isset($data['custom_field1']) ? $data['custom_field1'] : null;
        $this->container['custom_field10'] = isset($data['custom_field10']) ? $data['custom_field10'] : null;
        $this->container['custom_field2'] = isset($data['custom_field2']) ? $data['custom_field2'] : null;
        $this->container['custom_field3'] = isset($data['custom_field3']) ? $data['custom_field3'] : null;
        $this->container['custom_field4'] = isset($data['custom_field4']) ? $data['custom_field4'] : null;
        $this->container['custom_field5'] = isset($data['custom_field5']) ? $data['custom_field5'] : null;
        $this->container['custom_field6'] = isset($data['custom_field6']) ? $data['custom_field6'] : null;
        $this->container['custom_field7'] = isset($data['custom_field7']) ? $data['custom_field7'] : null;
        $this->container['custom_field8'] = isset($data['custom_field8']) ? $data['custom_field8'] : null;
        $this->container['custom_field9'] = isset($data['custom_field9']) ? $data['custom_field9'] : null;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['metadata1_name'] = isset($data['metadata1_name']) ? $data['metadata1_name'] : null;
        $this->container['metadata2_name'] = isset($data['metadata2_name']) ? $data['metadata2_name'] : null;
        $this->container['metadata3_name'] = isset($data['metadata3_name']) ? $data['metadata3_name'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['purchase_price'] = isset($data['purchase_price']) ? $data['purchase_price'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['target_price'] = isset($data['target_price']) ? $data['target_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCheckFrequencyTypeAllowableValues();
        if (!is_null($this->container['check_frequency_type']) && !in_array($this->container['check_frequency_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'check_frequency_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string $brand_name brand_name
     *
     * @return $this
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string $category_name category_name
     *
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets check_frequency_interval
     *
     * @return int
     */
    public function getCheckFrequencyInterval()
    {
        return $this->container['check_frequency_interval'];
    }

    /**
     * Sets check_frequency_interval
     *
     * @param int $check_frequency_interval check_frequency_interval
     *
     * @return $this
     */
    public function setCheckFrequencyInterval($check_frequency_interval)
    {
        $this->container['check_frequency_interval'] = $check_frequency_interval;

        return $this;
    }

    /**
     * Gets check_frequency_type
     *
     * @return string
     */
    public function getCheckFrequencyType()
    {
        return $this->container['check_frequency_type'];
    }

    /**
     * Sets check_frequency_type
     *
     * @param string $check_frequency_type check_frequency_type
     *
     * @return $this
     */
    public function setCheckFrequencyType($check_frequency_type)
    {
        $allowedValues = $this->getCheckFrequencyTypeAllowableValues();
        if (!is_null($check_frequency_type) && !in_array($check_frequency_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'check_frequency_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['check_frequency_type'] = $check_frequency_type;

        return $this;
    }

    /**
     * Gets comment1
     *
     * @return string
     */
    public function getComment1()
    {
        return $this->container['comment1'];
    }

    /**
     * Sets comment1
     *
     * @param string $comment1 comment1
     *
     * @return $this
     */
    public function setComment1($comment1)
    {
        $this->container['comment1'] = $comment1;

        return $this;
    }

    /**
     * Gets comment2
     *
     * @return string
     */
    public function getComment2()
    {
        return $this->container['comment2'];
    }

    /**
     * Sets comment2
     *
     * @param string $comment2 comment2
     *
     * @return $this
     */
    public function setComment2($comment2)
    {
        $this->container['comment2'] = $comment2;

        return $this;
    }

    /**
     * Gets custom_field1
     *
     * @return string
     */
    public function getCustomField1()
    {
        return $this->container['custom_field1'];
    }

    /**
     * Sets custom_field1
     *
     * @param string $custom_field1 custom_field1
     *
     * @return $this
     */
    public function setCustomField1($custom_field1)
    {
        $this->container['custom_field1'] = $custom_field1;

        return $this;
    }

    /**
     * Gets custom_field10
     *
     * @return string
     */
    public function getCustomField10()
    {
        return $this->container['custom_field10'];
    }

    /**
     * Sets custom_field10
     *
     * @param string $custom_field10 custom_field10
     *
     * @return $this
     */
    public function setCustomField10($custom_field10)
    {
        $this->container['custom_field10'] = $custom_field10;

        return $this;
    }

    /**
     * Gets custom_field2
     *
     * @return string
     */
    public function getCustomField2()
    {
        return $this->container['custom_field2'];
    }

    /**
     * Sets custom_field2
     *
     * @param string $custom_field2 custom_field2
     *
     * @return $this
     */
    public function setCustomField2($custom_field2)
    {
        $this->container['custom_field2'] = $custom_field2;

        return $this;
    }

    /**
     * Gets custom_field3
     *
     * @return string
     */
    public function getCustomField3()
    {
        return $this->container['custom_field3'];
    }

    /**
     * Sets custom_field3
     *
     * @param string $custom_field3 custom_field3
     *
     * @return $this
     */
    public function setCustomField3($custom_field3)
    {
        $this->container['custom_field3'] = $custom_field3;

        return $this;
    }

    /**
     * Gets custom_field4
     *
     * @return string
     */
    public function getCustomField4()
    {
        return $this->container['custom_field4'];
    }

    /**
     * Sets custom_field4
     *
     * @param string $custom_field4 custom_field4
     *
     * @return $this
     */
    public function setCustomField4($custom_field4)
    {
        $this->container['custom_field4'] = $custom_field4;

        return $this;
    }

    /**
     * Gets custom_field5
     *
     * @return string
     */
    public function getCustomField5()
    {
        return $this->container['custom_field5'];
    }

    /**
     * Sets custom_field5
     *
     * @param string $custom_field5 custom_field5
     *
     * @return $this
     */
    public function setCustomField5($custom_field5)
    {
        $this->container['custom_field5'] = $custom_field5;

        return $this;
    }

    /**
     * Gets custom_field6
     *
     * @return string
     */
    public function getCustomField6()
    {
        return $this->container['custom_field6'];
    }

    /**
     * Sets custom_field6
     *
     * @param string $custom_field6 custom_field6
     *
     * @return $this
     */
    public function setCustomField6($custom_field6)
    {
        $this->container['custom_field6'] = $custom_field6;

        return $this;
    }

    /**
     * Gets custom_field7
     *
     * @return string
     */
    public function getCustomField7()
    {
        return $this->container['custom_field7'];
    }

    /**
     * Sets custom_field7
     *
     * @param string $custom_field7 custom_field7
     *
     * @return $this
     */
    public function setCustomField7($custom_field7)
    {
        $this->container['custom_field7'] = $custom_field7;

        return $this;
    }

    /**
     * Gets custom_field8
     *
     * @return string
     */
    public function getCustomField8()
    {
        return $this->container['custom_field8'];
    }

    /**
     * Sets custom_field8
     *
     * @param string $custom_field8 custom_field8
     *
     * @return $this
     */
    public function setCustomField8($custom_field8)
    {
        $this->container['custom_field8'] = $custom_field8;

        return $this;
    }

    /**
     * Gets custom_field9
     *
     * @return string
     */
    public function getCustomField9()
    {
        return $this->container['custom_field9'];
    }

    /**
     * Sets custom_field9
     *
     * @param string $custom_field9 custom_field9
     *
     * @return $this
     */
    public function setCustomField9($custom_field9)
    {
        $this->container['custom_field9'] = $custom_field9;

        return $this;
    }

    /**
     * Gets internal_id
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param string $internal_id internal_id
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

        return $this;
    }

    /**
     * Gets metadata1_name
     *
     * @return string
     */
    public function getMetadata1Name()
    {
        return $this->container['metadata1_name'];
    }

    /**
     * Sets metadata1_name
     *
     * @param string $metadata1_name metadata1_name
     *
     * @return $this
     */
    public function setMetadata1Name($metadata1_name)
    {
        $this->container['metadata1_name'] = $metadata1_name;

        return $this;
    }

    /**
     * Gets metadata2_name
     *
     * @return string
     */
    public function getMetadata2Name()
    {
        return $this->container['metadata2_name'];
    }

    /**
     * Sets metadata2_name
     *
     * @param string $metadata2_name metadata2_name
     *
     * @return $this
     */
    public function setMetadata2Name($metadata2_name)
    {
        $this->container['metadata2_name'] = $metadata2_name;

        return $this;
    }

    /**
     * Gets metadata3_name
     *
     * @return string
     */
    public function getMetadata3Name()
    {
        return $this->container['metadata3_name'];
    }

    /**
     * Sets metadata3_name
     *
     * @param string $metadata3_name metadata3_name
     *
     * @return $this
     */
    public function setMetadata3Name($metadata3_name)
    {
        $this->container['metadata3_name'] = $metadata3_name;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param float $purchase_price purchase_price
     *
     * @return $this
     */
    public function setPurchasePrice($purchase_price)
    {
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string $supplier_name supplier_name
     *
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets target_price
     *
     * @return float
     */
    public function getTargetPrice()
    {
        return $this->container['target_price'];
    }

    /**
     * Sets target_price
     *
     * @param float $target_price target_price
     *
     * @return $this
     */
    public function setTargetPrice($target_price)
    {
        $this->container['target_price'] = $target_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


