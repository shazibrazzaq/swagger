<?php
/**
 * SearchProductsType
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
 * SearchProductsType Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchProductsType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchProductsType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'brand_id' => 'int',
        'brand_name' => 'string',
        'category_id' => 'int',
        'category_name' => 'string',
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
        'date_change_from' => 'string',
        'date_change_to' => 'string',
        'email_recipients' => 'string',
        'internal_id' => 'string',
        'metadata1_id' => 'int',
        'metadata1_name' => 'string',
        'metadata2_id' => 'int',
        'metadata2_name' => 'string',
        'metadata3_id' => 'int',
        'metadata3_name' => 'string',
        'priority' => 'int',
        'product_id' => 'int',
        'product_name' => 'string',
        'search_mode' => 'string',
        'sku' => 'string',
        'supplier_id' => 'int',
        'supplier_name' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'brand_id' => 'int32',
        'brand_name' => null,
        'category_id' => 'int32',
        'category_name' => null,
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
        'date_change_from' => null,
        'date_change_to' => null,
        'email_recipients' => null,
        'internal_id' => null,
        'metadata1_id' => 'int32',
        'metadata1_name' => null,
        'metadata2_id' => 'int32',
        'metadata2_name' => null,
        'metadata3_id' => 'int32',
        'metadata3_name' => null,
        'priority' => 'int32',
        'product_id' => 'int32',
        'product_name' => null,
        'search_mode' => null,
        'sku' => null,
        'supplier_id' => 'int32',
        'supplier_name' => null,
        'url' => null
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
        'brand_id' => 'brandId',
        'brand_name' => 'brandName',
        'category_id' => 'categoryId',
        'category_name' => 'categoryName',
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
        'date_change_from' => 'dateChangeFrom',
        'date_change_to' => 'dateChangeTo',
        'email_recipients' => 'emailRecipients',
        'internal_id' => 'internalId',
        'metadata1_id' => 'metadata1Id',
        'metadata1_name' => 'metadata1Name',
        'metadata2_id' => 'metadata2Id',
        'metadata2_name' => 'metadata2Name',
        'metadata3_id' => 'metadata3Id',
        'metadata3_name' => 'metadata3Name',
        'priority' => 'priority',
        'product_id' => 'productId',
        'product_name' => 'productName',
        'search_mode' => 'searchMode',
        'sku' => 'sku',
        'supplier_id' => 'supplierId',
        'supplier_name' => 'supplierName',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'brand_id' => 'setBrandId',
        'brand_name' => 'setBrandName',
        'category_id' => 'setCategoryId',
        'category_name' => 'setCategoryName',
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
        'date_change_from' => 'setDateChangeFrom',
        'date_change_to' => 'setDateChangeTo',
        'email_recipients' => 'setEmailRecipients',
        'internal_id' => 'setInternalId',
        'metadata1_id' => 'setMetadata1Id',
        'metadata1_name' => 'setMetadata1Name',
        'metadata2_id' => 'setMetadata2Id',
        'metadata2_name' => 'setMetadata2Name',
        'metadata3_id' => 'setMetadata3Id',
        'metadata3_name' => 'setMetadata3Name',
        'priority' => 'setPriority',
        'product_id' => 'setProductId',
        'product_name' => 'setProductName',
        'search_mode' => 'setSearchMode',
        'sku' => 'setSku',
        'supplier_id' => 'setSupplierId',
        'supplier_name' => 'setSupplierName',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'brand_id' => 'getBrandId',
        'brand_name' => 'getBrandName',
        'category_id' => 'getCategoryId',
        'category_name' => 'getCategoryName',
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
        'date_change_from' => 'getDateChangeFrom',
        'date_change_to' => 'getDateChangeTo',
        'email_recipients' => 'getEmailRecipients',
        'internal_id' => 'getInternalId',
        'metadata1_id' => 'getMetadata1Id',
        'metadata1_name' => 'getMetadata1Name',
        'metadata2_id' => 'getMetadata2Id',
        'metadata2_name' => 'getMetadata2Name',
        'metadata3_id' => 'getMetadata3Id',
        'metadata3_name' => 'getMetadata3Name',
        'priority' => 'getPriority',
        'product_id' => 'getProductId',
        'product_name' => 'getProductName',
        'search_mode' => 'getSearchMode',
        'sku' => 'getSku',
        'supplier_id' => 'getSupplierId',
        'supplier_name' => 'getSupplierName',
        'url' => 'getUrl'
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

    const SEARCH_MODE_LIKE = 'LIKE';
    const SEARCH_MODE_EQUAL = 'EQUAL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSearchModeAllowableValues()
    {
        return [
            self::SEARCH_MODE_LIKE,
            self::SEARCH_MODE_EQUAL,
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
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['brand_name'] = isset($data['brand_name']) ? $data['brand_name'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
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
        $this->container['date_change_from'] = isset($data['date_change_from']) ? $data['date_change_from'] : null;
        $this->container['date_change_to'] = isset($data['date_change_to']) ? $data['date_change_to'] : null;
        $this->container['email_recipients'] = isset($data['email_recipients']) ? $data['email_recipients'] : null;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['metadata1_id'] = isset($data['metadata1_id']) ? $data['metadata1_id'] : null;
        $this->container['metadata1_name'] = isset($data['metadata1_name']) ? $data['metadata1_name'] : null;
        $this->container['metadata2_id'] = isset($data['metadata2_id']) ? $data['metadata2_id'] : null;
        $this->container['metadata2_name'] = isset($data['metadata2_name']) ? $data['metadata2_name'] : null;
        $this->container['metadata3_id'] = isset($data['metadata3_id']) ? $data['metadata3_id'] : null;
        $this->container['metadata3_name'] = isset($data['metadata3_name']) ? $data['metadata3_name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['search_mode'] = isset($data['search_mode']) ? $data['search_mode'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSearchModeAllowableValues();
        if (!is_null($this->container['search_mode']) && !in_array($this->container['search_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'search_mode', must be one of '%s'",
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
     * Gets brand_id
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param int $brand_id brand_id
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

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
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

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
     * Gets date_change_from
     *
     * @return string
     */
    public function getDateChangeFrom()
    {
        return $this->container['date_change_from'];
    }

    /**
     * Sets date_change_from
     *
     * @param string $date_change_from date_change_from
     *
     * @return $this
     */
    public function setDateChangeFrom($date_change_from)
    {
        $this->container['date_change_from'] = $date_change_from;

        return $this;
    }

    /**
     * Gets date_change_to
     *
     * @return string
     */
    public function getDateChangeTo()
    {
        return $this->container['date_change_to'];
    }

    /**
     * Sets date_change_to
     *
     * @param string $date_change_to date_change_to
     *
     * @return $this
     */
    public function setDateChangeTo($date_change_to)
    {
        $this->container['date_change_to'] = $date_change_to;

        return $this;
    }

    /**
     * Gets email_recipients
     *
     * @return string
     */
    public function getEmailRecipients()
    {
        return $this->container['email_recipients'];
    }

    /**
     * Sets email_recipients
     *
     * @param string $email_recipients email_recipients
     *
     * @return $this
     */
    public function setEmailRecipients($email_recipients)
    {
        $this->container['email_recipients'] = $email_recipients;

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
     * Gets metadata1_id
     *
     * @return int
     */
    public function getMetadata1Id()
    {
        return $this->container['metadata1_id'];
    }

    /**
     * Sets metadata1_id
     *
     * @param int $metadata1_id metadata1_id
     *
     * @return $this
     */
    public function setMetadata1Id($metadata1_id)
    {
        $this->container['metadata1_id'] = $metadata1_id;

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
     * Gets metadata2_id
     *
     * @return int
     */
    public function getMetadata2Id()
    {
        return $this->container['metadata2_id'];
    }

    /**
     * Sets metadata2_id
     *
     * @param int $metadata2_id metadata2_id
     *
     * @return $this
     */
    public function setMetadata2Id($metadata2_id)
    {
        $this->container['metadata2_id'] = $metadata2_id;

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
     * Gets metadata3_id
     *
     * @return int
     */
    public function getMetadata3Id()
    {
        return $this->container['metadata3_id'];
    }

    /**
     * Sets metadata3_id
     *
     * @param int $metadata3_id metadata3_id
     *
     * @return $this
     */
    public function setMetadata3Id($metadata3_id)
    {
        $this->container['metadata3_id'] = $metadata3_id;

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
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * Gets search_mode
     *
     * @return string
     */
    public function getSearchMode()
    {
        return $this->container['search_mode'];
    }

    /**
     * Sets search_mode
     *
     * @param string $search_mode search_mode
     *
     * @return $this
     */
    public function setSearchMode($search_mode)
    {
        $allowedValues = $this->getSearchModeAllowableValues();
        if (!is_null($search_mode) && !in_array($search_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'search_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['search_mode'] = $search_mode;

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
     * Gets supplier_id
     *
     * @return int
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param int $supplier_id supplier_id
     *
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


