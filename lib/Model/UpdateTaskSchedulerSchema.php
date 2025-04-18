<?php
/**
 * UpdateTaskSchedulerSchema
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Invoice Ninja
 *
 * Invoice Ninja. Open Source Invoicing lives here.
 *
 * The version of the OpenAPI document: 5.5.58
 * Contact: contact@invoiceninja.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace IvkeyMinds\InvoiceNinjaClient\Model;

use \ArrayAccess;
use \IvkeyMinds\InvoiceNinjaClient\ObjectSerializer;

/**
 * UpdateTaskSchedulerSchema Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateTaskSchedulerSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateTaskSchedulerSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'paused' => 'bool',
        'repeat_every' => 'string',
        'start_from' => 'int',
        'job' => 'string',
        'date_range' => 'string',
        'date_key' => 'string',
        'start_date' => 'string',
        'end_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'paused' => null,
        'repeat_every' => null,
        'start_from' => null,
        'job' => null,
        'date_range' => null,
        'date_key' => null,
        'start_date' => null,
        'end_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'paused' => true,
        'repeat_every' => true,
        'start_from' => true,
        'job' => true,
        'date_range' => true,
        'date_key' => true,
        'start_date' => true,
        'end_date' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'paused' => 'paused',
        'repeat_every' => 'repeat_every',
        'start_from' => 'start_from',
        'job' => 'job',
        'date_range' => 'date_range',
        'date_key' => 'date_key',
        'start_date' => 'start_date',
        'end_date' => 'end_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paused' => 'setPaused',
        'repeat_every' => 'setRepeatEvery',
        'start_from' => 'setStartFrom',
        'job' => 'setJob',
        'date_range' => 'setDateRange',
        'date_key' => 'setDateKey',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paused' => 'getPaused',
        'repeat_every' => 'getRepeatEvery',
        'start_from' => 'getStartFrom',
        'job' => 'getJob',
        'date_range' => 'getDateRange',
        'date_key' => 'getDateKey',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate'
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
        $this->setIfExists('paused', $data ?? [], null);
        $this->setIfExists('repeat_every', $data ?? [], null);
        $this->setIfExists('start_from', $data ?? [], null);
        $this->setIfExists('job', $data ?? [], null);
        $this->setIfExists('date_range', $data ?? [], null);
        $this->setIfExists('date_key', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
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
     * Gets paused
     *
     * @return bool|null
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool|null $paused The scheduler paused state
     *
     * @return self
     */
    public function setPaused($paused)
    {
        
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets repeat_every
     *
     * @return string|null
     */
    public function getRepeatEvery()
    {
        return $this->container['repeat_every'];
    }

    /**
     * Sets repeat_every
     *
     * @param string|null $repeat_every Accepted values (DAY,WEEK,MONTH,3MONTHS,YEAR)
     *
     * @return self
     */
    public function setRepeatEvery($repeat_every)
    {
        
        $this->container['repeat_every'] = $repeat_every;

        return $this;
    }

    /**
     * Gets start_from
     *
     * @return int|null
     */
    public function getStartFrom()
    {
        return $this->container['start_from'];
    }

    /**
     * Sets start_from
     *
     * @param int|null $start_from Timestamp when we should start the scheduler, default is today
     *
     * @return self
     */
    public function setStartFrom($start_from)
    {
        
        $this->container['start_from'] = $start_from;

        return $this;
    }

    /**
     * Gets job
     *
     * @return string|null
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     *
     * @param string|null $job Job, we can find list of available jobs in Scheduler model
     *
     * @return self
     */
    public function setJob($job)
    {
        
        $this->container['job'] = $job;

        return $this;
    }

    /**
     * Gets date_range
     *
     * @return string|null
     */
    public function getDateRange()
    {
        return $this->container['date_range'];
    }

    /**
     * Sets date_range
     *
     * @param string|null $date_range The string representation of the date range of data to be returned
     *
     * @return self
     */
    public function setDateRange($date_range)
    {
        
        $this->container['date_range'] = $date_range;

        return $this;
    }

    /**
     * Gets date_key
     *
     * @return string|null
     */
    public function getDateKey()
    {
        return $this->container['date_key'];
    }

    /**
     * Sets date_key
     *
     * @param string|null $date_key The date column to search between.
     *
     * @return self
     */
    public function setDateKey($date_key)
    {
        
        $this->container['date_key'] = $date_key;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date The start date to search between
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date The end date to search between
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        
        $this->container['end_date'] = $end_date;

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


