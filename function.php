<?php
function generate($preprocessor, $syntax, $vendor, $property)
{
    require "patterns.php";

    static $br = 0;
    $mixin = "";
    $mixin_vendor = "";
    switch ($preprocessor) {
        case "sass":
            switch ($syntax) {
                case"sass":
                case"minimal":
                    switch ($vendor) {
                        case "add":
                            $mixin_vendor .= $sass_minimal_vendor;
                            $mixin .= $sass_minimal_mixin;
                            break;
                        case "apply":
                            $mixin .= $sass_minimal_vendor_apply;
                            break;
                    }
                    break;
                case"scss":
                case"normalcss":
                    switch ($vendor) {
                        case "add":
                            $mixin_vendor .= $sass_normalcss_vendor;
                            $mixin .= $sass_normalcss_mixin;
                            break;
                        case "apply":
                            $mixin .= $sass_normalcss_vendor_apply;
                            break;
                    }
                    break;
            }
            break;
        case "less":
            switch ($syntax) {
                case"minimal":
                    switch ($vendor) {
                        case "add":
                            $mixin_vendor .= $less_minimal_vendor;
                            $mixin .= $less_minimal_mixin;
                            break;
                        case "apply":
                            $mixin .= $less_minimal_vendor_apply;
                            break;
                    }
                    break;
                case"normalcss":
                    switch ($vendor) {
                        case "add":
                            $mixin_vendor .= $less_normalcss_vendor;
                            $mixin .= $less_normalcss_mixin;
                            break;
                        case "apply":
                            $mixin .= $less_normalcss_vendor_apply;
                            break;
                    }
                    break;
            }
            break;
        case "stylus":
            switch ($syntax) {
                case"minimal":
                    switch ($vendor) {
                        case "add":
                            $mixin_vendor .= $stylus_minimal_vendor;
                            $mixin .= $stylus_minimal_mixin;
                            break;
                        case "apply":
                            $mixin .= $stylus_minimal_vendor_apply;
                            break;
                    }
                    break;
                case"normalcss":
                    switch ($vendor) {
                        case "add":
                            $mixin_vendor .= $stylus_normalcss_vendor;
                            $mixin .= $stylus_normalcss_mixin;
                            break;
                        case "apply":
                            $mixin .= $stylus_normalcss_vendor_apply;
                            break;
                    }
                    break;
            }
            break;
    }
    $br++;
    return array("vendor" => $mixin_vendor, "mixin" => $mixin);
}


function heading($preprocessor)
{
    switch ($preprocessor) {
        case "sass":
            return "SASS Mixins";
        case "less":
            return "LESS Mixins";
        case "stylus":
            return "STYLUS Mixins";
    }
    return "Preprocessor unknown!";
}


