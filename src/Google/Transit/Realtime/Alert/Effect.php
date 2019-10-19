<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/gtfs-realtime.proto3

namespace Google\Transit\Realtime\Alert;

/**
 * What is the effect of this problem on the affected entity.
 *
 * Protobuf type <code>Google.Transit.Realtime.Alert.Effect</code>
 */
class Effect
{
    /**
     * Generated from protobuf enum <code>PROTO3_DEFAULT_EFFECT = 0;</code>
     */
    const PROTO3_DEFAULT_EFFECT = 0;
    /**
     * Generated from protobuf enum <code>NO_SERVICE = 1;</code>
     */
    const NO_SERVICE = 1;
    /**
     * Generated from protobuf enum <code>REDUCED_SERVICE = 2;</code>
     */
    const REDUCED_SERVICE = 2;
    /**
     * We don't care about INsignificant delays: they are hard to detect, have
     * little impact on the user, and would clutter the results as they are too
     * frequent.
     *
     * Generated from protobuf enum <code>SIGNIFICANT_DELAYS = 3;</code>
     */
    const SIGNIFICANT_DELAYS = 3;
    /**
     * Generated from protobuf enum <code>DETOUR = 4;</code>
     */
    const DETOUR = 4;
    /**
     * Generated from protobuf enum <code>ADDITIONAL_SERVICE = 5;</code>
     */
    const ADDITIONAL_SERVICE = 5;
    /**
     * Generated from protobuf enum <code>MODIFIED_SERVICE = 6;</code>
     */
    const MODIFIED_SERVICE = 6;
    /**
     * Generated from protobuf enum <code>OTHER_EFFECT = 7;</code>
     */
    const OTHER_EFFECT = 7;
    /**
     * Generated from protobuf enum <code>UNKNOWN_EFFECT = 8;</code>
     */
    const UNKNOWN_EFFECT = 8;
    /**
     * Generated from protobuf enum <code>STOP_MOVED = 9;</code>
     */
    const STOP_MOVED = 9;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Effect::class, \Google\Transit\Realtime\Alert_Effect::class);

