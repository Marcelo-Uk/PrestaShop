<?php

ini_set('memory_limit','256M');

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__.'/app',
    __DIR__.'/src',
    __DIR__.'/classes',
    __DIR__.'/controllers',
    __DIR__.'/tests',
    __DIR__.'/tools/profiling',
])->notPath([
    __DIR__.'/app/parameters.php',
    'Unit/Resources/config/params.php',
    'Unit/Resources/config/params_modified.php',
    'Resources/modules_tests/testtrickyconflict/override/classes/Cart.php',
    'Resources/modules_tests/override_for_unit_test/classes/Cart.php',
]);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'array_indentation' => true,
        'cast_spaces' => [
            'space' => 'single',
        ],
        'combine_consecutive_issets' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'error_suppression' => [
            'mute_deprecation_error' => false,
            'noise_remaining_usages' => false,
            'noise_remaining_usages_exclude' => [],
        ],
        'function_to_constant' => false,
        'method_chaining_indentation' => true,
        'no_alias_functions' => false,
        'no_superfluous_phpdoc_tags' => false,
        'non_printable_character' => [
            'use_escape_sequences_in_strings' => true,
        ],
        'phpdoc_align' => [
            'align' => 'left',
        ],
        'phpdoc_summary' => false,
        'protected_to_private' => false,
        'psr_autoloading' => false,
        'self_accessor' => false,
        'yoda_style' => false,
        'single_line_throw' => false,
        'no_alias_language_construct_call' => false,
        'no_null_property_initialization' => false,
        'nullable_type_declaration_for_default_null_value' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => false,
            'import_functions' => false,
        ],
    ])
    ->setFinder($finder)
    ->setCacheFile(__DIR__.'/var/.php_cs.cache');
