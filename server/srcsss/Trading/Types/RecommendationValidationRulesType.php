<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\ValueTypeCodeType $ValueType
 * @property integer $MinValues
 * @property integer $MaxValues
 * @property \DTS\eBaySDK\Trading\Enums\SelectionModeCodeType $SelectionMode
 * @property \DTS\eBaySDK\Trading\Enums\AspectUsageCodeType $AspectUsage
 * @property integer $MaxValueLength
 * @property \DTS\eBaySDK\Trading\Enums\ProductRequiredCodeType $ProductRequired
 * @property integer $Confidence
 * @property \DTS\eBaySDK\Trading\Types\NameValueRelationshipType[] $Relationship
 * @property \DTS\eBaySDK\Trading\Enums\VariationPictureRuleCodeType $VariationPicture
 * @property \DTS\eBaySDK\Trading\Enums\VariationSpecificsRuleCodeType $VariationSpecifics
 * @property \DTS\eBaySDK\Trading\Enums\ValueFormatCodeType $ValueFormat
 */
class RecommendationValidationRulesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ValueType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ValueType'
        ],
        'MinValues' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinValues'
        ],
        'MaxValues' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxValues'
        ],
        'SelectionMode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SelectionMode'
        ],
        'AspectUsage' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AspectUsage'
        ],
        'MaxValueLength' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxValueLength'
        ],
        'ProductRequired' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProductRequired'
        ],
        'Confidence' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Confidence'
        ],
        'Relationship' => [
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueRelationshipType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Relationship'
        ],
        'VariationPicture' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationPicture'
        ],
        'VariationSpecifics' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        ],
        'ValueFormat' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ValueFormat'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}