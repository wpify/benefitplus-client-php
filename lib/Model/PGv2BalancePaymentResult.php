<?php
/**
 * PGv2BalancePaymentResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  BenefitPlus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Benefit Plus payment gate API (version 2)
 *
 * OpenAPI dokumentace k [Platební bráně Benefit Plus v2](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125646355/Dokumentace+k+nov+platebn+br+n+pro+e-shopy+v2).
 *
 * OpenAPI spec version: 2.2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BenefitPlus\Model;

use \ArrayAccess;
use \BenefitPlus\ObjectSerializer;

/**
 * PGv2BalancePaymentResult Class Doc Comment
 *
 * @category Class
 * @description DTO slouží pro vracení informací o možnostech doplatku objednávky. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1254883345/DTO+PGv2+BalancePayment+Result)
 * @package  BenefitPlus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PGv2BalancePaymentResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PGv2_BalancePayment_Result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'eshop_order_guid' => 'string',
'price' => 'float',
'pc_payment_price' => 'float',
'currency' => '\BenefitPlus\Model\PGv2Unit',
'pc_currency' => '\BenefitPlus\Model\PGv2Unit',
'pc_payment_methods' => '\BenefitPlus\Model\PGv2BalancePaymentTypeResult[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'eshop_order_guid' => null,
'price' => null,
'pc_payment_price' => null,
'currency' => null,
'pc_currency' => null,
'pc_payment_methods' => null    ];

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
        'eshop_order_guid' => 'EshopOrderGUID',
'price' => 'Price',
'pc_payment_price' => 'PCPaymentPrice',
'currency' => 'Currency',
'pc_currency' => 'PCCurrency',
'pc_payment_methods' => 'PCPaymentMethods'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eshop_order_guid' => 'setEshopOrderGuid',
'price' => 'setPrice',
'pc_payment_price' => 'setPcPaymentPrice',
'currency' => 'setCurrency',
'pc_currency' => 'setPcCurrency',
'pc_payment_methods' => 'setPcPaymentMethods'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eshop_order_guid' => 'getEshopOrderGuid',
'price' => 'getPrice',
'pc_payment_price' => 'getPcPaymentPrice',
'currency' => 'getCurrency',
'pc_currency' => 'getPcCurrency',
'pc_payment_methods' => 'getPcPaymentMethods'    ];

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
        $this->container['eshop_order_guid'] = isset($data['eshop_order_guid']) ? $data['eshop_order_guid'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['pc_payment_price'] = isset($data['pc_payment_price']) ? $data['pc_payment_price'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['pc_currency'] = isset($data['pc_currency']) ? $data['pc_currency'] : null;
        $this->container['pc_payment_methods'] = isset($data['pc_payment_methods']) ? $data['pc_payment_methods'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['eshop_order_guid'] === null) {
            $invalidProperties[] = "'eshop_order_guid' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
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
     * Gets eshop_order_guid
     *
     * @return string
     */
    public function getEshopOrderGuid()
    {
        return $this->container['eshop_order_guid'];
    }

    /**
     * Sets eshop_order_guid
     *
     * @param string $eshop_order_guid GUID zaregistrované objednávky. Vrací se stejná hodnota, která byla zaslána v žádosti.
     *
     * @return $this
     */
    public function setEshopOrderGuid($eshop_order_guid)
    {
        $this->container['eshop_order_guid'] = $eshop_order_guid;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Hodnota platby.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets pc_payment_price
     *
     * @return float
     */
    public function getPcPaymentPrice()
    {
        return $this->container['pc_payment_price'];
    }

    /**
     * Sets pc_payment_price
     *
     * @param float $pc_payment_price Doplatek privátní kartou. Pokud null, je doplatek roven 0.
     *
     * @return $this
     */
    public function setPcPaymentPrice($pc_payment_price)
    {
        $this->container['pc_payment_price'] = $pc_payment_price;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \BenefitPlus\Model\PGv2Unit
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \BenefitPlus\Model\PGv2Unit $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets pc_currency
     *
     * @return \BenefitPlus\Model\PGv2Unit
     */
    public function getPcCurrency()
    {
        return $this->container['pc_currency'];
    }

    /**
     * Sets pc_currency
     *
     * @param \BenefitPlus\Model\PGv2Unit $pc_currency pc_currency
     *
     * @return $this
     */
    public function setPcCurrency($pc_currency)
    {
        $this->container['pc_currency'] = $pc_currency;

        return $this;
    }

    /**
     * Gets pc_payment_methods
     *
     * @return \BenefitPlus\Model\PGv2BalancePaymentTypeResult[]
     */
    public function getPcPaymentMethods()
    {
        return $this->container['pc_payment_methods'];
    }

    /**
     * Sets pc_payment_methods
     *
     * @param \BenefitPlus\Model\PGv2BalancePaymentTypeResult[] $pc_payment_methods List možností platby doplatku. Uvedeno pouze pokud doplatek existuje.
     *
     * @return $this
     */
    public function setPcPaymentMethods($pc_payment_methods)
    {
        $this->container['pc_payment_methods'] = $pc_payment_methods;

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
