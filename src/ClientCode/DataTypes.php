<?php

namespace Harranali\Tfserving;

class DataTypes
{
    /**
     * Not a legal value for DataType.  Used to indicate a DataType field
     * has not been set.
     *
     * Generated from protobuf enum <code>DT_INVALID = 0;</code>
     */
    const DT_INVALID = 0;
    /**
     * Data types that all computation devices are expected to be
     * capable to support.
     *
     * Generated from protobuf enum <code>DT_FLOAT = 1;</code>
     */
    const DT_FLOAT = 1;
    /**
     * Generated from protobuf enum <code>DT_DOUBLE = 2;</code>
     */
    const DT_DOUBLE = 2;
    /**
     * Generated from protobuf enum <code>DT_INT32 = 3;</code>
     */
    const DT_INT32 = 3;
    /**
     * Generated from protobuf enum <code>DT_UINT8 = 4;</code>
     */
    const DT_UINT8 = 4;
    /**
     * Generated from protobuf enum <code>DT_INT16 = 5;</code>
     */
    const DT_INT16 = 5;
    /**
     * Generated from protobuf enum <code>DT_INT8 = 6;</code>
     */
    const DT_INT8 = 6;
    /**
     * Generated from protobuf enum <code>DT_STRING = 7;</code>
     */
    const DT_STRING = 7;
    /**
     * Single-precision complex
     *
     * Generated from protobuf enum <code>DT_COMPLEX64 = 8;</code>
     */
    const DT_COMPLEX64 = 8;
    /**
     * Generated from protobuf enum <code>DT_INT64 = 9;</code>
     */
    const DT_INT64 = 9;
    /**
     * Generated from protobuf enum <code>DT_BOOL = 10;</code>
     */
    const DT_BOOL = 10;
    /**
     * Quantized int8
     *
     * Generated from protobuf enum <code>DT_QINT8 = 11;</code>
     */
    const DT_QINT8 = 11;
    /**
     * Quantized uint8
     *
     * Generated from protobuf enum <code>DT_QUINT8 = 12;</code>
     */
    const DT_QUINT8 = 12;
    /**
     * Quantized int32
     *
     * Generated from protobuf enum <code>DT_QINT32 = 13;</code>
     */
    const DT_QINT32 = 13;
    /**
     * Float32 truncated to 16 bits.  Only for cast ops.
     *
     * Generated from protobuf enum <code>DT_BFLOAT16 = 14;</code>
     */
    const DT_BFLOAT16 = 14;
    /**
     * Quantized int16
     *
     * Generated from protobuf enum <code>DT_QINT16 = 15;</code>
     */
    const DT_QINT16 = 15;
    /**
     * Quantized uint16
     *
     * Generated from protobuf enum <code>DT_QUINT16 = 16;</code>
     */
    const DT_QUINT16 = 16;
    /**
     * Generated from protobuf enum <code>DT_UINT16 = 17;</code>
     */
    const DT_UINT16 = 17;
    /**
     * Double-precision complex
     *
     * Generated from protobuf enum <code>DT_COMPLEX128 = 18;</code>
     */
    const DT_COMPLEX128 = 18;
    /**
     * Generated from protobuf enum <code>DT_HALF = 19;</code>
     */
    const DT_HALF = 19;
    /**
     * Generated from protobuf enum <code>DT_RESOURCE = 20;</code>
     */
    const DT_RESOURCE = 20;
    /**
     * Do not use!  These are only for parameters.  Every enum above
     * should have a corresponding value below (verified by types_test).
     *
     * Generated from protobuf enum <code>DT_FLOAT_REF = 101;</code>
     */
    const DT_FLOAT_REF = 101;
    /**
     * Generated from protobuf enum <code>DT_DOUBLE_REF = 102;</code>
     */
    const DT_DOUBLE_REF = 102;
    /**
     * Generated from protobuf enum <code>DT_INT32_REF = 103;</code>
     */
    const DT_INT32_REF = 103;
    /**
     * Generated from protobuf enum <code>DT_UINT8_REF = 104;</code>
     */
    const DT_UINT8_REF = 104;
    /**
     * Generated from protobuf enum <code>DT_INT16_REF = 105;</code>
     */
    const DT_INT16_REF = 105;
    /**
     * Generated from protobuf enum <code>DT_INT8_REF = 106;</code>
     */
    const DT_INT8_REF = 106;
    /**
     * Generated from protobuf enum <code>DT_STRING_REF = 107;</code>
     */
    const DT_STRING_REF = 107;
    /**
     * Generated from protobuf enum <code>DT_COMPLEX64_REF = 108;</code>
     */
    const DT_COMPLEX64_REF = 108;
    /**
     * Generated from protobuf enum <code>DT_INT64_REF = 109;</code>
     */
    const DT_INT64_REF = 109;
    /**
     * Generated from protobuf enum <code>DT_BOOL_REF = 110;</code>
     */
    const DT_BOOL_REF = 110;
    /**
     * Generated from protobuf enum <code>DT_QINT8_REF = 111;</code>
     */
    const DT_QINT8_REF = 111;
    /**
     * Generated from protobuf enum <code>DT_QUINT8_REF = 112;</code>
     */
    const DT_QUINT8_REF = 112;
    /**
     * Generated from protobuf enum <code>DT_QINT32_REF = 113;</code>
     */
    const DT_QINT32_REF = 113;
    /**
     * Generated from protobuf enum <code>DT_BFLOAT16_REF = 114;</code>
     */
    const DT_BFLOAT16_REF = 114;
    /**
     * Generated from protobuf enum <code>DT_QINT16_REF = 115;</code>
     */
    const DT_QINT16_REF = 115;
    /**
     * Generated from protobuf enum <code>DT_QUINT16_REF = 116;</code>
     */
    const DT_QUINT16_REF = 116;
    /**
     * Generated from protobuf enum <code>DT_UINT16_REF = 117;</code>
     */
    const DT_UINT16_REF = 117;
    /**
     * Generated from protobuf enum <code>DT_COMPLEX128_REF = 118;</code>
     */
    const DT_COMPLEX128_REF = 118;
    /**
     * Generated from protobuf enum <code>DT_HALF_REF = 119;</code>
     */
    const DT_HALF_REF = 119;
    /**
     * Generated from protobuf enum <code>DT_RESOURCE_REF = 120;</code>
     */
    const DT_RESOURCE_REF = 120;
}

