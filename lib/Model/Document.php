<?php
/**
 * Document
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
 * Document Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Document implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'assigned_user_id' => 'string',
        'project_id' => 'string',
        'vendor_id' => 'string',
        'name' => 'string',
        'url' => 'string',
        'preview' => 'string',
        'type' => 'string',
        'disk' => 'string',
        'hash' => 'string',
        'is_deleted' => 'bool',
        'is_default' => 'bool',
        'created_at' => 'float',
        'updated_at' => 'float',
        'deleted_at' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'user_id' => null,
        'assigned_user_id' => null,
        'project_id' => null,
        'vendor_id' => null,
        'name' => null,
        'url' => null,
        'preview' => null,
        'type' => null,
        'disk' => null,
        'hash' => null,
        'is_deleted' => null,
        'is_default' => null,
        'created_at' => 'integer',
        'updated_at' => 'integer',
        'deleted_at' => 'integer'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => true,
        'user_id' => true,
        'assigned_user_id' => true,
        'project_id' => true,
        'vendor_id' => true,
        'name' => true,
        'url' => true,
        'preview' => true,
        'type' => true,
        'disk' => true,
        'hash' => true,
        'is_deleted' => true,
        'is_default' => true,
        'created_at' => true,
        'updated_at' => true,
        'deleted_at' => true
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
        'id' => 'id',
        'user_id' => 'user_id',
        'assigned_user_id' => 'assigned_user_id',
        'project_id' => 'project_id',
        'vendor_id' => 'vendor_id',
        'name' => 'name',
        'url' => 'url',
        'preview' => 'preview',
        'type' => 'type',
        'disk' => 'disk',
        'hash' => 'hash',
        'is_deleted' => 'is_deleted',
        'is_default' => 'is_default',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'assigned_user_id' => 'setAssignedUserId',
        'project_id' => 'setProjectId',
        'vendor_id' => 'setVendorId',
        'name' => 'setName',
        'url' => 'setUrl',
        'preview' => 'setPreview',
        'type' => 'setType',
        'disk' => 'setDisk',
        'hash' => 'setHash',
        'is_deleted' => 'setIsDeleted',
        'is_default' => 'setIsDefault',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'deleted_at' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'assigned_user_id' => 'getAssignedUserId',
        'project_id' => 'getProjectId',
        'vendor_id' => 'getVendorId',
        'name' => 'getName',
        'url' => 'getUrl',
        'preview' => 'getPreview',
        'type' => 'getType',
        'disk' => 'getDisk',
        'hash' => 'getHash',
        'is_deleted' => 'getIsDeleted',
        'is_default' => 'getIsDefault',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'deleted_at' => 'getDeletedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('assigned_user_id', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('vendor_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('preview', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('disk', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The document hashed id
     *
     * @return self
     */
    public function setId($id)
    {
        
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id The user hashed id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets assigned_user_id
     *
     * @return string|null
     */
    public function getAssignedUserId()
    {
        return $this->container['assigned_user_id'];
    }

    /**
     * Sets assigned_user_id
     *
     * @param string|null $assigned_user_id The assigned user hashed id
     *
     * @return self
     */
    public function setAssignedUserId($assigned_user_id)
    {
        
        $this->container['assigned_user_id'] = $assigned_user_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id The project associated with this document
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets vendor_id
     *
     * @return string|null
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param string|null $vendor_id The vendor associated with this documents
     *
     * @return self
     */
    public function setVendorId($vendor_id)
    {
        
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The document name
     *
     * @return self
     */
    public function setName($name)
    {
        
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The document url
     *
     * @return self
     */
    public function setUrl($url)
    {
        
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets preview
     *
     * @return string|null
     */
    public function getPreview()
    {
        return $this->container['preview'];
    }

    /**
     * Sets preview
     *
     * @param string|null $preview The document preview url
     *
     * @return self
     */
    public function setPreview($preview)
    {
        
        $this->container['preview'] = $preview;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The document type
     *
     * @return self
     */
    public function setType($type)
    {
        
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets disk
     *
     * @return string|null
     */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
     * Sets disk
     *
     * @param string|null $disk The document disk
     *
     * @return self
     */
    public function setDisk($disk)
    {
        
        $this->container['disk'] = $disk;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash The document hashed
     *
     * @return self
     */
    public function setHash($hash)
    {
        
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted Flag to determine if the document is deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default Flag to determine if the document is a default doc
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return float|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param float|null $created_at Timestamp
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return float|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param float|null $updated_at Timestamp
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return float|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param float|null $deleted_at Timestamp
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        
        $this->container['deleted_at'] = $deleted_at;

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


