<?php
/**
 * ODataQueryOptionsOfPayCategory
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Australia
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: AU
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ODataQueryOptionsOfPayCategory Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ODataQueryOptionsOfPayCategory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ODataQueryOptionsOfPayCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'if_match' => 'object',
        'if_none_match' => 'object',
        'context' => '\OpenAPI\Client\Model\ODataQueryContext',
        'request' => 'object',
        'raw_values' => '\OpenAPI\Client\Model\ODataRawQueryOptions',
        'select_expand' => '\OpenAPI\Client\Model\SelectExpandQueryOption',
        'filter' => '\OpenAPI\Client\Model\FilterQueryOption',
        'order_by' => '\OpenAPI\Client\Model\OrderByQueryOption',
        'skip' => '\OpenAPI\Client\Model\SkipQueryOption',
        'top' => '\OpenAPI\Client\Model\TopQueryOption',
        'inline_count' => '\OpenAPI\Client\Model\InlineCountQueryOption',
        'validator' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'if_match' => null,
        'if_none_match' => null,
        'context' => null,
        'request' => null,
        'raw_values' => null,
        'select_expand' => null,
        'filter' => null,
        'order_by' => null,
        'skip' => null,
        'top' => null,
        'inline_count' => null,
        'validator' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'if_match' => false,
		'if_none_match' => false,
		'context' => false,
		'request' => false,
		'raw_values' => false,
		'select_expand' => false,
		'filter' => false,
		'order_by' => false,
		'skip' => false,
		'top' => false,
		'inline_count' => false,
		'validator' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'if_match' => 'ifMatch',
        'if_none_match' => 'ifNoneMatch',
        'context' => 'context',
        'request' => 'request',
        'raw_values' => 'rawValues',
        'select_expand' => 'selectExpand',
        'filter' => 'filter',
        'order_by' => 'orderBy',
        'skip' => 'skip',
        'top' => 'top',
        'inline_count' => 'inlineCount',
        'validator' => 'validator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'if_match' => 'setIfMatch',
        'if_none_match' => 'setIfNoneMatch',
        'context' => 'setContext',
        'request' => 'setRequest',
        'raw_values' => 'setRawValues',
        'select_expand' => 'setSelectExpand',
        'filter' => 'setFilter',
        'order_by' => 'setOrderBy',
        'skip' => 'setSkip',
        'top' => 'setTop',
        'inline_count' => 'setInlineCount',
        'validator' => 'setValidator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'if_match' => 'getIfMatch',
        'if_none_match' => 'getIfNoneMatch',
        'context' => 'getContext',
        'request' => 'getRequest',
        'raw_values' => 'getRawValues',
        'select_expand' => 'getSelectExpand',
        'filter' => 'getFilter',
        'order_by' => 'getOrderBy',
        'skip' => 'getSkip',
        'top' => 'getTop',
        'inline_count' => 'getInlineCount',
        'validator' => 'getValidator'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('if_match', $data ?? [], null);
        $this->setIfExists('if_none_match', $data ?? [], null);
        $this->setIfExists('context', $data ?? [], null);
        $this->setIfExists('request', $data ?? [], null);
        $this->setIfExists('raw_values', $data ?? [], null);
        $this->setIfExists('select_expand', $data ?? [], null);
        $this->setIfExists('filter', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('skip', $data ?? [], null);
        $this->setIfExists('top', $data ?? [], null);
        $this->setIfExists('inline_count', $data ?? [], null);
        $this->setIfExists('validator', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets if_match
     *
     * @return object|null
     */
    public function getIfMatch()
    {
        return $this->container['if_match'];
    }

    /**
     * Sets if_match
     *
     * @param object|null $if_match 
     *
     * @return self
     */
    public function setIfMatch($if_match)
    {
        if (is_null($if_match)) {
            throw new \InvalidArgumentException('non-nullable if_match cannot be null');
        }
        $this->container['if_match'] = $if_match;

        return $this;
    }

    /**
     * Gets if_none_match
     *
     * @return object|null
     */
    public function getIfNoneMatch()
    {
        return $this->container['if_none_match'];
    }

    /**
     * Sets if_none_match
     *
     * @param object|null $if_none_match 
     *
     * @return self
     */
    public function setIfNoneMatch($if_none_match)
    {
        if (is_null($if_none_match)) {
            throw new \InvalidArgumentException('non-nullable if_none_match cannot be null');
        }
        $this->container['if_none_match'] = $if_none_match;

        return $this;
    }

    /**
     * Gets context
     *
     * @return \OpenAPI\Client\Model\ODataQueryContext|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \OpenAPI\Client\Model\ODataQueryContext|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        if (is_null($context)) {
            throw new \InvalidArgumentException('non-nullable context cannot be null');
        }
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets request
     *
     * @return object|null
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param object|null $request 
     *
     * @return self
     */
    public function setRequest($request)
    {
        if (is_null($request)) {
            throw new \InvalidArgumentException('non-nullable request cannot be null');
        }
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets raw_values
     *
     * @return \OpenAPI\Client\Model\ODataRawQueryOptions|null
     */
    public function getRawValues()
    {
        return $this->container['raw_values'];
    }

    /**
     * Sets raw_values
     *
     * @param \OpenAPI\Client\Model\ODataRawQueryOptions|null $raw_values raw_values
     *
     * @return self
     */
    public function setRawValues($raw_values)
    {
        if (is_null($raw_values)) {
            throw new \InvalidArgumentException('non-nullable raw_values cannot be null');
        }
        $this->container['raw_values'] = $raw_values;

        return $this;
    }

    /**
     * Gets select_expand
     *
     * @return \OpenAPI\Client\Model\SelectExpandQueryOption|null
     */
    public function getSelectExpand()
    {
        return $this->container['select_expand'];
    }

    /**
     * Sets select_expand
     *
     * @param \OpenAPI\Client\Model\SelectExpandQueryOption|null $select_expand select_expand
     *
     * @return self
     */
    public function setSelectExpand($select_expand)
    {
        if (is_null($select_expand)) {
            throw new \InvalidArgumentException('non-nullable select_expand cannot be null');
        }
        $this->container['select_expand'] = $select_expand;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \OpenAPI\Client\Model\FilterQueryOption|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \OpenAPI\Client\Model\FilterQueryOption|null $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        if (is_null($filter)) {
            throw new \InvalidArgumentException('non-nullable filter cannot be null');
        }
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \OpenAPI\Client\Model\OrderByQueryOption|null
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \OpenAPI\Client\Model\OrderByQueryOption|null $order_by order_by
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {
        if (is_null($order_by)) {
            throw new \InvalidArgumentException('non-nullable order_by cannot be null');
        }
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return \OpenAPI\Client\Model\SkipQueryOption|null
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param \OpenAPI\Client\Model\SkipQueryOption|null $skip skip
     *
     * @return self
     */
    public function setSkip($skip)
    {
        if (is_null($skip)) {
            throw new \InvalidArgumentException('non-nullable skip cannot be null');
        }
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets top
     *
     * @return \OpenAPI\Client\Model\TopQueryOption|null
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param \OpenAPI\Client\Model\TopQueryOption|null $top top
     *
     * @return self
     */
    public function setTop($top)
    {
        if (is_null($top)) {
            throw new \InvalidArgumentException('non-nullable top cannot be null');
        }
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets inline_count
     *
     * @return \OpenAPI\Client\Model\InlineCountQueryOption|null
     */
    public function getInlineCount()
    {
        return $this->container['inline_count'];
    }

    /**
     * Sets inline_count
     *
     * @param \OpenAPI\Client\Model\InlineCountQueryOption|null $inline_count inline_count
     *
     * @return self
     */
    public function setInlineCount($inline_count)
    {
        if (is_null($inline_count)) {
            throw new \InvalidArgumentException('non-nullable inline_count cannot be null');
        }
        $this->container['inline_count'] = $inline_count;

        return $this;
    }

    /**
     * Gets validator
     *
     * @return object|null
     */
    public function getValidator()
    {
        return $this->container['validator'];
    }

    /**
     * Sets validator
     *
     * @param object|null $validator validator
     *
     * @return self
     */
    public function setValidator($validator)
    {
        if (is_null($validator)) {
            throw new \InvalidArgumentException('non-nullable validator cannot be null');
        }
        $this->container['validator'] = $validator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


