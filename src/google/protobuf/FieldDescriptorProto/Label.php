<?php
/**
 * Generated by Protobuf protoc plugin.
 */


namespace google\protobuf\FieldDescriptorProto;

/**
 * Protobuf enum : Label
 */
class Label extends \Protobuf\Enum
{

    /**
     * LABEL_OPTIONAL = 1
     */
    const LABEL_OPTIONAL_VALUE = 1;

    /**
     * LABEL_REQUIRED = 2
     */
    const LABEL_REQUIRED_VALUE = 2;

    /**
     * LABEL_REPEATED = 3
     */
    const LABEL_REPEATED_VALUE = 3;

    /**
     * @var \google\protobuf\FieldDescriptorProto\Label
     */
    protected static $LABEL_OPTIONAL = null;

    /**
     * @var \google\protobuf\FieldDescriptorProto\Label
     */
    protected static $LABEL_REQUIRED = null;

    /**
     * @var \google\protobuf\FieldDescriptorProto\Label
     */
    protected static $LABEL_REPEATED = null;

    /**
     * @return \google\protobuf\FieldDescriptorProto\Label
     */
    public static function LABEL_OPTIONAL()
    {
        if (self::$LABEL_OPTIONAL !== null) {
            return self::$LABEL_OPTIONAL;
        }

        return self::$LABEL_OPTIONAL = new \google\protobuf\FieldDescriptorProto\Label('LABEL_OPTIONAL', self::LABEL_OPTIONAL_VALUE);
    }

    /**
     * @return \google\protobuf\FieldDescriptorProto\Label
     */
    public static function LABEL_REQUIRED()
    {
        if (self::$LABEL_REQUIRED !== null) {
            return self::$LABEL_REQUIRED;
        }

        return self::$LABEL_REQUIRED = new \google\protobuf\FieldDescriptorProto\Label('LABEL_REQUIRED', self::LABEL_REQUIRED_VALUE);
    }

    /**
     * @return \google\protobuf\FieldDescriptorProto\Label
     */
    public static function LABEL_REPEATED()
    {
        if (self::$LABEL_REPEATED !== null) {
            return self::$LABEL_REPEATED;
        }

        return self::$LABEL_REPEATED = new \google\protobuf\FieldDescriptorProto\Label('LABEL_REPEATED', self::LABEL_REPEATED_VALUE);
    }

    /**
     * @param int $value
     * @return \google\protobuf\FieldDescriptorProto\Label
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1: return self::LABEL_OPTIONAL();
            case 2: return self::LABEL_REQUIRED();
            case 3: return self::LABEL_REPEATED();
            default: return null;
        }
    }


}

