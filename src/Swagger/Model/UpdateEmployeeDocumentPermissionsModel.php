<?php
/**
 * UpdateEmployeeDocumentPermissionsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Australia
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: AU
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * UpdateEmployeeDocumentPermissionsModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateEmployeeDocumentPermissionsModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateEmployeeDocumentPermissionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'visible' => 'bool',
        'requires_employee_acknowledgement' => 'bool',
        'send_notification_to_employee' => 'bool',
        'send_notification_immediately' => 'bool',
        'send_initial_notification_on' => '\DateTime',
        'send_reminder_every_x_days' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'visible' => null,
        'requires_employee_acknowledgement' => null,
        'send_notification_to_employee' => null,
        'send_notification_immediately' => null,
        'send_initial_notification_on' => 'date-time',
        'send_reminder_every_x_days' => 'int32',
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
        'id' => 'id',
        'visible' => 'visible',
        'requires_employee_acknowledgement' => 'requiresEmployeeAcknowledgement',
        'send_notification_to_employee' => 'sendNotificationToEmployee',
        'send_notification_immediately' => 'sendNotificationImmediately',
        'send_initial_notification_on' => 'sendInitialNotificationOn',
        'send_reminder_every_x_days' => 'sendReminderEveryXDays',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'visible' => 'setVisible',
        'requires_employee_acknowledgement' => 'setRequiresEmployeeAcknowledgement',
        'send_notification_to_employee' => 'setSendNotificationToEmployee',
        'send_notification_immediately' => 'setSendNotificationImmediately',
        'send_initial_notification_on' => 'setSendInitialNotificationOn',
        'send_reminder_every_x_days' => 'setSendReminderEveryXDays',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'visible' => 'getVisible',
        'requires_employee_acknowledgement' => 'getRequiresEmployeeAcknowledgement',
        'send_notification_to_employee' => 'getSendNotificationToEmployee',
        'send_notification_immediately' => 'getSendNotificationImmediately',
        'send_initial_notification_on' => 'getSendInitialNotificationOn',
        'send_reminder_every_x_days' => 'getSendReminderEveryXDays',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['requires_employee_acknowledgement'] = isset($data['requires_employee_acknowledgement']) ? $data['requires_employee_acknowledgement'] : null;
        $this->container['send_notification_to_employee'] = isset($data['send_notification_to_employee']) ? $data['send_notification_to_employee'] : null;
        $this->container['send_notification_immediately'] = isset($data['send_notification_immediately']) ? $data['send_notification_immediately'] : null;
        $this->container['send_initial_notification_on'] = isset($data['send_initial_notification_on']) ? $data['send_initial_notification_on'] : null;
        $this->container['send_reminder_every_x_days'] = isset($data['send_reminder_every_x_days']) ? $data['send_reminder_every_x_days'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets requires_employee_acknowledgement
     *
     * @return bool
     */
    public function getRequiresEmployeeAcknowledgement()
    {
        return $this->container['requires_employee_acknowledgement'];
    }

    /**
     * Sets requires_employee_acknowledgement
     *
     * @param bool $requires_employee_acknowledgement
     *
     * @return $this
     */
    public function setRequiresEmployeeAcknowledgement($requires_employee_acknowledgement)
    {
        $this->container['requires_employee_acknowledgement'] = $requires_employee_acknowledgement;

        return $this;
    }

    /**
     * Gets send_notification_to_employee
     *
     * @return bool
     */
    public function getSendNotificationToEmployee()
    {
        return $this->container['send_notification_to_employee'];
    }

    /**
     * Sets send_notification_to_employee
     *
     * @param bool $send_notification_to_employee
     *
     * @return $this
     */
    public function setSendNotificationToEmployee($send_notification_to_employee)
    {
        $this->container['send_notification_to_employee'] = $send_notification_to_employee;

        return $this;
    }

    /**
     * Gets send_notification_immediately
     *
     * @return bool
     */
    public function getSendNotificationImmediately()
    {
        return $this->container['send_notification_immediately'];
    }

    /**
     * Sets send_notification_immediately
     *
     * @param bool $send_notification_immediately
     *
     * @return $this
     */
    public function setSendNotificationImmediately($send_notification_immediately)
    {
        $this->container['send_notification_immediately'] = $send_notification_immediately;

        return $this;
    }

    /**
     * Gets send_initial_notification_on
     *
     * @return \DateTime
     */
    public function getSendInitialNotificationOn()
    {
        return $this->container['send_initial_notification_on'];
    }

    /**
     * Sets send_initial_notification_on
     *
     * @param \DateTime $send_initial_notification_on
     *
     * @return $this
     */
    public function setSendInitialNotificationOn($send_initial_notification_on)
    {
        $this->container['send_initial_notification_on'] = $send_initial_notification_on;

        return $this;
    }

    /**
     * Gets send_reminder_every_x_days
     *
     * @return int
     */
    public function getSendReminderEveryXDays()
    {
        return $this->container['send_reminder_every_x_days'];
    }

    /**
     * Sets send_reminder_every_x_days
     *
     * @param int $send_reminder_every_x_days
     *
     * @return $this
     */
    public function setSendReminderEveryXDays($send_reminder_every_x_days)
    {
        $this->container['send_reminder_every_x_days'] = $send_reminder_every_x_days;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
     * @param int $offset Offset
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
