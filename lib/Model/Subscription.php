<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Subscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'product_id' => 'string',
        'company_id' => 'string',
        'recurring_invoice_id' => 'string',
        'is_recurring' => 'bool',
        'frequency_id' => 'string',
        'auto_bill' => 'string',
        'promo_code' => 'string',
        'promo_discount' => 'float',
        'is_amount_discount' => 'bool',
        'allow_cancellation' => 'bool',
        'per_seat_enabled' => 'bool',
        'currency_id' => 'int',
        'max_seats_limit' => 'int',
        'trial_enabled' => 'bool',
        'trial_duration' => 'int',
        'allow_query_overrides' => 'bool',
        'allow_plan_changes' => 'bool',
        'refund_period' => 'int',
        'webhook_configuration' => 'string',
        'is_deleted' => 'bool',
        'archived_at' => 'float',
        'created_at' => 'float',
        'updated_at' => 'float'
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
        'product_id' => null,
        'company_id' => null,
        'recurring_invoice_id' => null,
        'is_recurring' => null,
        'frequency_id' => null,
        'auto_bill' => null,
        'promo_code' => null,
        'promo_discount' => null,
        'is_amount_discount' => null,
        'allow_cancellation' => null,
        'per_seat_enabled' => null,
        'currency_id' => null,
        'max_seats_limit' => null,
        'trial_enabled' => null,
        'trial_duration' => null,
        'allow_query_overrides' => null,
        'allow_plan_changes' => null,
        'refund_period' => null,
        'webhook_configuration' => null,
        'is_deleted' => null,
        'archived_at' => 'integer',
        'created_at' => 'integer',
        'updated_at' => 'integer'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'user_id' => false,
        'product_id' => false,
        'company_id' => false,
        'recurring_invoice_id' => false,
        'is_recurring' => false,
        'frequency_id' => false,
        'auto_bill' => false,
        'promo_code' => false,
        'promo_discount' => false,
        'is_amount_discount' => false,
        'allow_cancellation' => false,
        'per_seat_enabled' => false,
        'currency_id' => false,
        'max_seats_limit' => false,
        'trial_enabled' => false,
        'trial_duration' => false,
        'allow_query_overrides' => false,
        'allow_plan_changes' => false,
        'refund_period' => false,
        'webhook_configuration' => false,
        'is_deleted' => false,
        'archived_at' => false,
        'created_at' => false,
        'updated_at' => false
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
        'id' => 'id',
        'user_id' => 'user_id',
        'product_id' => 'product_id',
        'company_id' => 'company_id',
        'recurring_invoice_id' => 'recurring_invoice_id',
        'is_recurring' => 'is_recurring',
        'frequency_id' => 'frequency_id',
        'auto_bill' => 'auto_bill',
        'promo_code' => 'promo_code',
        'promo_discount' => 'promo_discount',
        'is_amount_discount' => 'is_amount_discount',
        'allow_cancellation' => 'allow_cancellation',
        'per_seat_enabled' => 'per_seat_enabled',
        'currency_id' => 'currency_id',
        'max_seats_limit' => 'max_seats_limit',
        'trial_enabled' => 'trial_enabled',
        'trial_duration' => 'trial_duration',
        'allow_query_overrides' => 'allow_query_overrides',
        'allow_plan_changes' => 'allow_plan_changes',
        'refund_period' => 'refund_period',
        'webhook_configuration' => 'webhook_configuration',
        'is_deleted' => 'is_deleted',
        'archived_at' => 'archived_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'product_id' => 'setProductId',
        'company_id' => 'setCompanyId',
        'recurring_invoice_id' => 'setRecurringInvoiceId',
        'is_recurring' => 'setIsRecurring',
        'frequency_id' => 'setFrequencyId',
        'auto_bill' => 'setAutoBill',
        'promo_code' => 'setPromoCode',
        'promo_discount' => 'setPromoDiscount',
        'is_amount_discount' => 'setIsAmountDiscount',
        'allow_cancellation' => 'setAllowCancellation',
        'per_seat_enabled' => 'setPerSeatEnabled',
        'currency_id' => 'setCurrencyId',
        'max_seats_limit' => 'setMaxSeatsLimit',
        'trial_enabled' => 'setTrialEnabled',
        'trial_duration' => 'setTrialDuration',
        'allow_query_overrides' => 'setAllowQueryOverrides',
        'allow_plan_changes' => 'setAllowPlanChanges',
        'refund_period' => 'setRefundPeriod',
        'webhook_configuration' => 'setWebhookConfiguration',
        'is_deleted' => 'setIsDeleted',
        'archived_at' => 'setArchivedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'product_id' => 'getProductId',
        'company_id' => 'getCompanyId',
        'recurring_invoice_id' => 'getRecurringInvoiceId',
        'is_recurring' => 'getIsRecurring',
        'frequency_id' => 'getFrequencyId',
        'auto_bill' => 'getAutoBill',
        'promo_code' => 'getPromoCode',
        'promo_discount' => 'getPromoDiscount',
        'is_amount_discount' => 'getIsAmountDiscount',
        'allow_cancellation' => 'getAllowCancellation',
        'per_seat_enabled' => 'getPerSeatEnabled',
        'currency_id' => 'getCurrencyId',
        'max_seats_limit' => 'getMaxSeatsLimit',
        'trial_enabled' => 'getTrialEnabled',
        'trial_duration' => 'getTrialDuration',
        'allow_query_overrides' => 'getAllowQueryOverrides',
        'allow_plan_changes' => 'getAllowPlanChanges',
        'refund_period' => 'getRefundPeriod',
        'webhook_configuration' => 'getWebhookConfiguration',
        'is_deleted' => 'getIsDeleted',
        'archived_at' => 'getArchivedAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('recurring_invoice_id', $data ?? [], null);
        $this->setIfExists('is_recurring', $data ?? [], null);
        $this->setIfExists('frequency_id', $data ?? [], null);
        $this->setIfExists('auto_bill', $data ?? [], null);
        $this->setIfExists('promo_code', $data ?? [], null);
        $this->setIfExists('promo_discount', $data ?? [], null);
        $this->setIfExists('is_amount_discount', $data ?? [], null);
        $this->setIfExists('allow_cancellation', $data ?? [], null);
        $this->setIfExists('per_seat_enabled', $data ?? [], null);
        $this->setIfExists('currency_id', $data ?? [], null);
        $this->setIfExists('max_seats_limit', $data ?? [], null);
        $this->setIfExists('trial_enabled', $data ?? [], null);
        $this->setIfExists('trial_duration', $data ?? [], null);
        $this->setIfExists('allow_query_overrides', $data ?? [], null);
        $this->setIfExists('allow_plan_changes', $data ?? [], null);
        $this->setIfExists('refund_period', $data ?? [], null);
        $this->setIfExists('webhook_configuration', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('archived_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * @param string|null $id ______
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
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
     * @param string|null $user_id ______
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id ______
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            throw new \InvalidArgumentException('non-nullable product_id cannot be null');
        }
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id ______
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        if (is_null($company_id)) {
            throw new \InvalidArgumentException('non-nullable company_id cannot be null');
        }
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets recurring_invoice_id
     *
     * @return string|null
     */
    public function getRecurringInvoiceId()
    {
        return $this->container['recurring_invoice_id'];
    }

    /**
     * Sets recurring_invoice_id
     *
     * @param string|null $recurring_invoice_id ______
     *
     * @return self
     */
    public function setRecurringInvoiceId($recurring_invoice_id)
    {
        if (is_null($recurring_invoice_id)) {
            throw new \InvalidArgumentException('non-nullable recurring_invoice_id cannot be null');
        }
        $this->container['recurring_invoice_id'] = $recurring_invoice_id;

        return $this;
    }

    /**
     * Gets is_recurring
     *
     * @return bool|null
     */
    public function getIsRecurring()
    {
        return $this->container['is_recurring'];
    }

    /**
     * Sets is_recurring
     *
     * @param bool|null $is_recurring ______
     *
     * @return self
     */
    public function setIsRecurring($is_recurring)
    {
        if (is_null($is_recurring)) {
            throw new \InvalidArgumentException('non-nullable is_recurring cannot be null');
        }
        $this->container['is_recurring'] = $is_recurring;

        return $this;
    }

    /**
     * Gets frequency_id
     *
     * @return string|null
     */
    public function getFrequencyId()
    {
        return $this->container['frequency_id'];
    }

    /**
     * Sets frequency_id
     *
     * @param string|null $frequency_id integer const representation of the frequency
     *
     * @return self
     */
    public function setFrequencyId($frequency_id)
    {
        if (is_null($frequency_id)) {
            throw new \InvalidArgumentException('non-nullable frequency_id cannot be null');
        }
        $this->container['frequency_id'] = $frequency_id;

        return $this;
    }

    /**
     * Gets auto_bill
     *
     * @return string|null
     */
    public function getAutoBill()
    {
        return $this->container['auto_bill'];
    }

    /**
     * Sets auto_bill
     *
     * @param string|null $auto_bill enum setting
     *
     * @return self
     */
    public function setAutoBill($auto_bill)
    {
        if (is_null($auto_bill)) {
            throw new \InvalidArgumentException('non-nullable auto_bill cannot be null');
        }
        $this->container['auto_bill'] = $auto_bill;

        return $this;
    }

    /**
     * Gets promo_code
     *
     * @return string|null
     */
    public function getPromoCode()
    {
        return $this->container['promo_code'];
    }

    /**
     * Sets promo_code
     *
     * @param string|null $promo_code ______
     *
     * @return self
     */
    public function setPromoCode($promo_code)
    {
        if (is_null($promo_code)) {
            throw new \InvalidArgumentException('non-nullable promo_code cannot be null');
        }
        $this->container['promo_code'] = $promo_code;

        return $this;
    }

    /**
     * Gets promo_discount
     *
     * @return float|null
     */
    public function getPromoDiscount()
    {
        return $this->container['promo_discount'];
    }

    /**
     * Sets promo_discount
     *
     * @param float|null $promo_discount ______
     *
     * @return self
     */
    public function setPromoDiscount($promo_discount)
    {
        if (is_null($promo_discount)) {
            throw new \InvalidArgumentException('non-nullable promo_discount cannot be null');
        }
        $this->container['promo_discount'] = $promo_discount;

        return $this;
    }

    /**
     * Gets is_amount_discount
     *
     * @return bool|null
     */
    public function getIsAmountDiscount()
    {
        return $this->container['is_amount_discount'];
    }

    /**
     * Sets is_amount_discount
     *
     * @param bool|null $is_amount_discount ______
     *
     * @return self
     */
    public function setIsAmountDiscount($is_amount_discount)
    {
        if (is_null($is_amount_discount)) {
            throw new \InvalidArgumentException('non-nullable is_amount_discount cannot be null');
        }
        $this->container['is_amount_discount'] = $is_amount_discount;

        return $this;
    }

    /**
     * Gets allow_cancellation
     *
     * @return bool|null
     */
    public function getAllowCancellation()
    {
        return $this->container['allow_cancellation'];
    }

    /**
     * Sets allow_cancellation
     *
     * @param bool|null $allow_cancellation ______
     *
     * @return self
     */
    public function setAllowCancellation($allow_cancellation)
    {
        if (is_null($allow_cancellation)) {
            throw new \InvalidArgumentException('non-nullable allow_cancellation cannot be null');
        }
        $this->container['allow_cancellation'] = $allow_cancellation;

        return $this;
    }

    /**
     * Gets per_seat_enabled
     *
     * @return bool|null
     */
    public function getPerSeatEnabled()
    {
        return $this->container['per_seat_enabled'];
    }

    /**
     * Sets per_seat_enabled
     *
     * @param bool|null $per_seat_enabled ______
     *
     * @return self
     */
    public function setPerSeatEnabled($per_seat_enabled)
    {
        if (is_null($per_seat_enabled)) {
            throw new \InvalidArgumentException('non-nullable per_seat_enabled cannot be null');
        }
        $this->container['per_seat_enabled'] = $per_seat_enabled;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return int|null
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param int|null $currency_id ______
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {
        if (is_null($currency_id)) {
            throw new \InvalidArgumentException('non-nullable currency_id cannot be null');
        }
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets max_seats_limit
     *
     * @return int|null
     */
    public function getMaxSeatsLimit()
    {
        return $this->container['max_seats_limit'];
    }

    /**
     * Sets max_seats_limit
     *
     * @param int|null $max_seats_limit ______
     *
     * @return self
     */
    public function setMaxSeatsLimit($max_seats_limit)
    {
        if (is_null($max_seats_limit)) {
            throw new \InvalidArgumentException('non-nullable max_seats_limit cannot be null');
        }
        $this->container['max_seats_limit'] = $max_seats_limit;

        return $this;
    }

    /**
     * Gets trial_enabled
     *
     * @return bool|null
     */
    public function getTrialEnabled()
    {
        return $this->container['trial_enabled'];
    }

    /**
     * Sets trial_enabled
     *
     * @param bool|null $trial_enabled ______
     *
     * @return self
     */
    public function setTrialEnabled($trial_enabled)
    {
        if (is_null($trial_enabled)) {
            throw new \InvalidArgumentException('non-nullable trial_enabled cannot be null');
        }
        $this->container['trial_enabled'] = $trial_enabled;

        return $this;
    }

    /**
     * Gets trial_duration
     *
     * @return int|null
     */
    public function getTrialDuration()
    {
        return $this->container['trial_duration'];
    }

    /**
     * Sets trial_duration
     *
     * @param int|null $trial_duration ______
     *
     * @return self
     */
    public function setTrialDuration($trial_duration)
    {
        if (is_null($trial_duration)) {
            throw new \InvalidArgumentException('non-nullable trial_duration cannot be null');
        }
        $this->container['trial_duration'] = $trial_duration;

        return $this;
    }

    /**
     * Gets allow_query_overrides
     *
     * @return bool|null
     */
    public function getAllowQueryOverrides()
    {
        return $this->container['allow_query_overrides'];
    }

    /**
     * Sets allow_query_overrides
     *
     * @param bool|null $allow_query_overrides ______
     *
     * @return self
     */
    public function setAllowQueryOverrides($allow_query_overrides)
    {
        if (is_null($allow_query_overrides)) {
            throw new \InvalidArgumentException('non-nullable allow_query_overrides cannot be null');
        }
        $this->container['allow_query_overrides'] = $allow_query_overrides;

        return $this;
    }

    /**
     * Gets allow_plan_changes
     *
     * @return bool|null
     */
    public function getAllowPlanChanges()
    {
        return $this->container['allow_plan_changes'];
    }

    /**
     * Sets allow_plan_changes
     *
     * @param bool|null $allow_plan_changes ______
     *
     * @return self
     */
    public function setAllowPlanChanges($allow_plan_changes)
    {
        if (is_null($allow_plan_changes)) {
            throw new \InvalidArgumentException('non-nullable allow_plan_changes cannot be null');
        }
        $this->container['allow_plan_changes'] = $allow_plan_changes;

        return $this;
    }

    /**
     * Gets refund_period
     *
     * @return int|null
     */
    public function getRefundPeriod()
    {
        return $this->container['refund_period'];
    }

    /**
     * Sets refund_period
     *
     * @param int|null $refund_period ______
     *
     * @return self
     */
    public function setRefundPeriod($refund_period)
    {
        if (is_null($refund_period)) {
            throw new \InvalidArgumentException('non-nullable refund_period cannot be null');
        }
        $this->container['refund_period'] = $refund_period;

        return $this;
    }

    /**
     * Gets webhook_configuration
     *
     * @return string|null
     */
    public function getWebhookConfiguration()
    {
        return $this->container['webhook_configuration'];
    }

    /**
     * Sets webhook_configuration
     *
     * @param string|null $webhook_configuration ______
     *
     * @return self
     */
    public function setWebhookConfiguration($webhook_configuration)
    {
        if (is_null($webhook_configuration)) {
            throw new \InvalidArgumentException('non-nullable webhook_configuration cannot be null');
        }
        $this->container['webhook_configuration'] = $webhook_configuration;

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
     * @param bool|null $is_deleted ______
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return float|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param float|null $archived_at Timestamp
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        if (is_null($archived_at)) {
            throw new \InvalidArgumentException('non-nullable archived_at cannot be null');
        }
        $this->container['archived_at'] = $archived_at;

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
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
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
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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

