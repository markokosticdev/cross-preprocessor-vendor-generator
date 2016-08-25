<?php
//sass

//minimal - sass
$sass_minimal_vendor = '=vendor($property, $value...)' . "\n" .
    '-webkit-#{$property}: $value' . "\n" .
    '-moz-#{$property}: $value' . "\n" .
    '-ms-#{$property}: $value' . "\n" .
    '-o-#{$property}: $value' . "\n" .
    '#{$property}: $value' . "\n\n";

$sass_minimal_mixin = '=' . $property . '($value...)' . "\n\t" . '+vendor(\'' . $property . '\',$value)' . "\n\n";

$sass_minimal_vendor_apply = '=' . $property . '($value...)' . "\n" .
    '-webkit-' . $property . ': $value' . "\n" .
    '-moz-' . $property . ': $value' . "\n" .
    '-ms-' . $property . ': $value' . "\n" .
    '-o-' . $property . ': $value' . "\n" .
    $property . ': $value' . "\n\n";


//normalcss - scss
$sass_normalcss_vendor = '@mixin vendor($property, $value...){' . "\n" .
    '-webkit-#{$property}: $value;' . "\n" .
    '-moz-#{$property}: $value;' . "\n" .
    '-ms-#{$property}: $value;' . "\n" .
    '-o-#{$property}: $value;' . "\n" .
    '#{$property}: $value;' . "\n" .
    '}' . "\n\n";

$sass_normalcss_mixin = '@mixin ' . $property . '($value...){' . "\n\t" . '@include vendor(\'' . $property . '\',$value);' . "\n}\n\n";

$sass_normalcss_vendor_apply = '@mixin ' . $property . '($value...){' . "\n" .
    '-webkit-' . $property . ': $value;' . "\n" .
    '-moz-' . $property . ': $value;' . "\n" .
    '-ms-' . $property . ': $value;' . "\n" .
    '-o-' . $property . ': $value;' . "\n" .
    $property . ': $value;' . "\n" .
    '}' . "\n\n";


//less

//minimal - less
$less_minimal_vendor = "";

$less_minimal_mixin = "";

$less_minimal_vendor_apply = "";


//normalcss - less
$less_normalcss_vendor = '.vendor(@property, @value...){' . "\n" .
    '-webkit-@{property}: @value;' . "\n" .
    '-moz-@{property}: @value;' . "\n" .
    '-ms-@{property}: @value;' . "\n" .
    '-o-@{property}: @value;' . "\n" .
    '@{property}: @value;' . "\n" .
    '}' . "\n\n";

$less_normalcss_mixin = '.' . $property . '(@value...){' . "\n\t" . '.vendor(\'' . $property . '\',@value);' . "\n}\n\n";

$less_normalcss_vendor_apply = '.' . $property . '(@value...){' . "\n" .
    '-webkit-' . $property . ': @value;' . "\n" .
    '-moz-' . $property . ': @value;' . "\n" .
    '-ms-' . $property . ': @value;' . "\n" .
    '-o-' . $property . ': @value;' . "\n" .
    $property . ': @value;' . "\n" .
    '}' . "\n\n";


//stylus

//minimal - stylus
$stylus_minimal_vendor = 'vendor(property, value)' . "\n" .
    '-webkit-{property} value' . "\n" .
    '-moz-{property} value' . "\n" .
    '-ms-{property} value' . "\n" .
    '-o-{property} value' . "\n" .
    '{property} value' . "\n\n";

$stylus_minimal_mixin = $property . '(value)\n\tvendor(\'' . $property . "',value)\n\n";

$stylus_minimal_vendor_apply = $property . '(value)' . "\n" .
    '-webkit-' . $property . ' value' . "\n" .
    '-moz-' . $property . ' value' . "\n" .
    '-ms-' . $property . ' value' . "\n" .
    '-o-' . $property . ' value' . "\n" .
    $property . ' value' . "\n\n";


//normalcss - stylus
$stylus_normalcss_vendor = 'vendor(property, value){' . "\n" .
    '-webkit-{property}: value;' . "\n" .
    '-moz-{property}: value;' . "\n" .
    '-ms-{property}: value;' . "\n" .
    '-o-{property}: value;' . "\n" .
    '{property}: value;' . "\n" .
    '}' . "\n\n";

$stylus_normalcss_mixin = $property . '(value){\n\tvendor(\'' . $property . "',value);\n}\n\n";

$stylus_normalcss_vendor_apply = $property . '(value){' . "\n" .
    '-webkit-' . $property . ': value;' . "\n" .
    '-moz-' . $property . ': value;' . "\n" .
    '-ms-' . $property . ': value;' . "\n" .
    '-o-' . $property . ': value;' . "\n" .
    $property . ': value;' . "\n" .
    '}' . "\n\n";