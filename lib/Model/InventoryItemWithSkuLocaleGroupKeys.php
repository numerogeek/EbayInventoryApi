<?php
/**
 * InventoryItemWithSkuLocaleGroupKeys
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\EbayInventoryClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: 1.11.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\EbayInventoryClient\Model;

use \ArrayAccess;
use \Swagger\EbayInventoryClient\ObjectSerializer;

/**
 * InventoryItemWithSkuLocaleGroupKeys Class Doc Comment
 *
 * @category Class
 * @description This type is used to provide details about each retrieved inventory item record.
 * @package  Swagger\EbayInventoryClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryItemWithSkuLocaleGroupKeys implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryItemWithSkuLocaleGroupKeys';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'availability' => '\Swagger\EbayInventoryClient\Model\Availability',
        'condition' => 'string',
        'condition_description' => 'string',
        'inventory_item_group_keys' => 'string[]',
        'locale' => 'string',
        'package_weight_and_size' => '\Swagger\EbayInventoryClient\Model\PackageWeightAndSize',
        'product' => '\Swagger\EbayInventoryClient\Model\Product',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'availability' => null,
        'condition' => null,
        'condition_description' => null,
        'inventory_item_group_keys' => null,
        'locale' => null,
        'package_weight_and_size' => null,
        'product' => null,
        'sku' => null
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
        'availability' => 'availability',
        'condition' => 'condition',
        'condition_description' => 'conditionDescription',
        'inventory_item_group_keys' => 'inventoryItemGroupKeys',
        'locale' => 'locale',
        'package_weight_and_size' => 'packageWeightAndSize',
        'product' => 'product',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'condition' => 'setCondition',
        'condition_description' => 'setConditionDescription',
        'inventory_item_group_keys' => 'setInventoryItemGroupKeys',
        'locale' => 'setLocale',
        'package_weight_and_size' => 'setPackageWeightAndSize',
        'product' => 'setProduct',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'condition' => 'getCondition',
        'condition_description' => 'getConditionDescription',
        'inventory_item_group_keys' => 'getInventoryItemGroupKeys',
        'locale' => 'getLocale',
        'package_weight_and_size' => 'getPackageWeightAndSize',
        'product' => 'getProduct',
        'sku' => 'getSku'
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
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['condition_description'] = isset($data['condition_description']) ? $data['condition_description'] : null;
        $this->container['inventory_item_group_keys'] = isset($data['inventory_item_group_keys']) ? $data['inventory_item_group_keys'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['package_weight_and_size'] = isset($data['package_weight_and_size']) ? $data['package_weight_and_size'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
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
     * Gets availability
     *
     * @return \Swagger\EbayInventoryClient\Model\Availability
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \Swagger\EbayInventoryClient\Model\Availability $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the getItemConditionPolicies method of the Metadata API. This method returns condition ID values that map to the enumeration values defined in the ConditionEnum type. The Item condition ID and name values topic in the Selling Integration Guide has a table that maps condition ID values to ConditionEnum values. The getItemConditionPolicies call reference page has more information. A condition value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required. Since the condition of an inventory item must be specified before being published in an offer, this field is always returned in the 'Get' calls for SKUs that are part of a published offer. If a SKU is not part of a published offer, this container will only be returned if set for the inventory item. Note: In the US and Australian marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', but this item condition is only available for use for a select number of US and Australian sellers. Other sellers on these two marketplaces will be blocked if they try to create a new listing or revise an existing listing with this item condition. Any active listings on the US and Australian marketplaces that had 'Manufacturer Refurbished' as the item condition have been automatically updated by eBay to the 'Seller Refurbished' item condition (Condition ID 2500). For all other marketplaces besides the US and Australia, Condition ID 2000 still maps to 'Manufacturer Refurbished'. Any US or Australian seller who is interested in eligibility requirements to list with 'Certified Refurbished' should see the Certified refurbished program page in Seller Center. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets condition_description
     *
     * @return string
     */
    public function getConditionDescription()
    {
        return $this->container['condition_description'];
    }

    /**
     * Sets condition_description
     *
     * @param string $condition_description This string field is used by the seller to more clearly describe the condition of used items, or items that are not 'Brand New', 'New with tags', or 'New in box'. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item's pictures do not contradict one another.Max length: 1000.
     *
     * @return $this
     */
    public function setConditionDescription($condition_description)
    {
        $this->container['condition_description'] = $condition_description;

        return $this;
    }

    /**
     * Gets inventory_item_group_keys
     *
     * @return string[]
     */
    public function getInventoryItemGroupKeys()
    {
        return $this->container['inventory_item_group_keys'];
    }

    /**
     * Sets inventory_item_group_keys
     *
     * @param string[] $inventory_item_group_keys This array is returned if the inventory item is associated with any inventory item group(s). The value(s) returned in this array are the unique identifier(s) of the inventory item's variation in a multiple-variation listing. This array is not returned if the inventory item is not associated with any inventory item groups.
     *
     * @return $this
     */
    public function setInventoryItemGroupKeys($inventory_item_group_keys)
    {
        $this->container['inventory_item_group_keys'] = $inventory_item_group_keys;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale This field is for future use only. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets package_weight_and_size
     *
     * @return \Swagger\EbayInventoryClient\Model\PackageWeightAndSize
     */
    public function getPackageWeightAndSize()
    {
        return $this->container['package_weight_and_size'];
    }

    /**
     * Sets package_weight_and_size
     *
     * @param \Swagger\EbayInventoryClient\Model\PackageWeightAndSize $package_weight_and_size package_weight_and_size
     *
     * @return $this
     */
    public function setPackageWeightAndSize($package_weight_and_size)
    {
        $this->container['package_weight_and_size'] = $package_weight_and_size;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Swagger\EbayInventoryClient\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Swagger\EbayInventoryClient\Model\Product $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
     * @param string $sku The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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


