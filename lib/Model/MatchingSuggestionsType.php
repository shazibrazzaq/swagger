<?php
/**
 * MatchingSuggestionsType
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
 * MatchingSuggestionsType Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MatchingSuggestionsType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MatchingSuggestionsType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'matching_suggestion_id' => 'int',
        'my_product_id' => 'int',
        'my_product_name' => 'string',
        'suggested_url' => 'string',
        'suggested_url_availability' => 'bool',
        'suggested_url_name' => 'string',
        'suggested_url_price' => 'float',
        'suggested_url_sitename' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'matching_suggestion_id' => 'int32',
        'my_product_id' => 'int32',
        'my_product_name' => null,
        'suggested_url' => null,
        'suggested_url_availability' => null,
        'suggested_url_name' => null,
        'suggested_url_price' => null,
        'suggested_url_sitename' => null
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
        'matching_suggestion_id' => 'matchingSuggestionID',
        'my_product_id' => 'myProductID',
        'my_product_name' => 'myProductName',
        'suggested_url' => 'suggestedURL',
        'suggested_url_availability' => 'suggestedURLAvailability',
        'suggested_url_name' => 'suggestedURLName',
        'suggested_url_price' => 'suggestedURLPrice',
        'suggested_url_sitename' => 'suggestedURLSitename'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'matching_suggestion_id' => 'setMatchingSuggestionId',
        'my_product_id' => 'setMyProductId',
        'my_product_name' => 'setMyProductName',
        'suggested_url' => 'setSuggestedUrl',
        'suggested_url_availability' => 'setSuggestedUrlAvailability',
        'suggested_url_name' => 'setSuggestedUrlName',
        'suggested_url_price' => 'setSuggestedUrlPrice',
        'suggested_url_sitename' => 'setSuggestedUrlSitename'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'matching_suggestion_id' => 'getMatchingSuggestionId',
        'my_product_id' => 'getMyProductId',
        'my_product_name' => 'getMyProductName',
        'suggested_url' => 'getSuggestedUrl',
        'suggested_url_availability' => 'getSuggestedUrlAvailability',
        'suggested_url_name' => 'getSuggestedUrlName',
        'suggested_url_price' => 'getSuggestedUrlPrice',
        'suggested_url_sitename' => 'getSuggestedUrlSitename'
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
        $this->container['matching_suggestion_id'] = isset($data['matching_suggestion_id']) ? $data['matching_suggestion_id'] : null;
        $this->container['my_product_id'] = isset($data['my_product_id']) ? $data['my_product_id'] : null;
        $this->container['my_product_name'] = isset($data['my_product_name']) ? $data['my_product_name'] : null;
        $this->container['suggested_url'] = isset($data['suggested_url']) ? $data['suggested_url'] : null;
        $this->container['suggested_url_availability'] = isset($data['suggested_url_availability']) ? $data['suggested_url_availability'] : null;
        $this->container['suggested_url_name'] = isset($data['suggested_url_name']) ? $data['suggested_url_name'] : null;
        $this->container['suggested_url_price'] = isset($data['suggested_url_price']) ? $data['suggested_url_price'] : null;
        $this->container['suggested_url_sitename'] = isset($data['suggested_url_sitename']) ? $data['suggested_url_sitename'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets matching_suggestion_id
     *
     * @return int
     */
    public function getMatchingSuggestionId()
    {
        return $this->container['matching_suggestion_id'];
    }

    /**
     * Sets matching_suggestion_id
     *
     * @param int $matching_suggestion_id matching_suggestion_id
     *
     * @return $this
     */
    public function setMatchingSuggestionId($matching_suggestion_id)
    {
        $this->container['matching_suggestion_id'] = $matching_suggestion_id;

        return $this;
    }

    /**
     * Gets my_product_id
     *
     * @return int
     */
    public function getMyProductId()
    {
        return $this->container['my_product_id'];
    }

    /**
     * Sets my_product_id
     *
     * @param int $my_product_id my_product_id
     *
     * @return $this
     */
    public function setMyProductId($my_product_id)
    {
        $this->container['my_product_id'] = $my_product_id;

        return $this;
    }

    /**
     * Gets my_product_name
     *
     * @return string
     */
    public function getMyProductName()
    {
        return $this->container['my_product_name'];
    }

    /**
     * Sets my_product_name
     *
     * @param string $my_product_name my_product_name
     *
     * @return $this
     */
    public function setMyProductName($my_product_name)
    {
        $this->container['my_product_name'] = $my_product_name;

        return $this;
    }

    /**
     * Gets suggested_url
     *
     * @return string
     */
    public function getSuggestedUrl()
    {
        return $this->container['suggested_url'];
    }

    /**
     * Sets suggested_url
     *
     * @param string $suggested_url suggested_url
     *
     * @return $this
     */
    public function setSuggestedUrl($suggested_url)
    {
        $this->container['suggested_url'] = $suggested_url;

        return $this;
    }

    /**
     * Gets suggested_url_availability
     *
     * @return bool
     */
    public function getSuggestedUrlAvailability()
    {
        return $this->container['suggested_url_availability'];
    }

    /**
     * Sets suggested_url_availability
     *
     * @param bool $suggested_url_availability suggested_url_availability
     *
     * @return $this
     */
    public function setSuggestedUrlAvailability($suggested_url_availability)
    {
        $this->container['suggested_url_availability'] = $suggested_url_availability;

        return $this;
    }

    /**
     * Gets suggested_url_name
     *
     * @return string
     */
    public function getSuggestedUrlName()
    {
        return $this->container['suggested_url_name'];
    }

    /**
     * Sets suggested_url_name
     *
     * @param string $suggested_url_name suggested_url_name
     *
     * @return $this
     */
    public function setSuggestedUrlName($suggested_url_name)
    {
        $this->container['suggested_url_name'] = $suggested_url_name;

        return $this;
    }

    /**
     * Gets suggested_url_price
     *
     * @return float
     */
    public function getSuggestedUrlPrice()
    {
        return $this->container['suggested_url_price'];
    }

    /**
     * Sets suggested_url_price
     *
     * @param float $suggested_url_price suggested_url_price
     *
     * @return $this
     */
    public function setSuggestedUrlPrice($suggested_url_price)
    {
        $this->container['suggested_url_price'] = $suggested_url_price;

        return $this;
    }

    /**
     * Gets suggested_url_sitename
     *
     * @return string
     */
    public function getSuggestedUrlSitename()
    {
        return $this->container['suggested_url_sitename'];
    }

    /**
     * Sets suggested_url_sitename
     *
     * @param string $suggested_url_sitename suggested_url_sitename
     *
     * @return $this
     */
    public function setSuggestedUrlSitename($suggested_url_sitename)
    {
        $this->container['suggested_url_sitename'] = $suggested_url_sitename;

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


