<?php

declare(strict_types=1);

namespace Sylarele\PhpCsFixerConfig;

use PhpCsFixer\Config as CsFixerConfig;

class Config
{
    protected readonly array $rules;

    public function __construct()
    {
        $this->rules = [
            '@PhpCsFixer' => true,

            'blank_line_before_statement' => [
                'statements' => [
                    'break',
                    'case',
                    'continue',
                    'declare',
                    'default',
                    'do',
                    'for',
                    'foreach',
                    'if',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                    'yield_from',
                ],
            ],

            'class_definition' => [
                'inline_constructor_arguments' => false,
                'multi_line_extends_each_single_line' => true,
                'single_item_single_line' => true,
                'single_line' => true,
            ],

            'control_structure_continuation_position' => [
                'position' => 'same_line',
            ],

            'declare_parentheses' => true,
            'declare_strict_types' => true,
            'global_namespace_import' => true,
            'list_syntax' => true,
            'modernize_strpos' => true,
            'not_operator_with_successor_space' => true,
            'ordered_interfaces' => true,
            'ordered_traits' => true,
            'simplified_if_return' => true,
            'ternary_to_null_coalescing' => true,
            'multiline_whitespace_before_semicolons' => 'no_multi_line',

            'yoda_style' => [
                'always_move_variable' => false,
                'equal' => null,
                'identical' => null,
                'less_and_greater' => null,
            ],
        ];
    }

    public function toCsFixer(): CsFixerConfig
    {
        return (new CsFixerConfig())
            ->setRules($this->rules)
            ->setRiskyAllowed(true)
            ->setUsingCache(true);
    }

    public static function make(): self
    {
        return new self();
    }
}
