<?php

return [
  'target_php_version' => 8.1,
  'directory_list' => [
    'src',
    'vendor',
  ],
  'minimum_severity' => 10, // corresponds to Phan\Issue::SEVERITY_CRITICAL
  'exclude_analysis_directory_list' => [
    'vendor',
  ],
  'plugins' => [
    'UnreachableCodePlugin',
  ],
  'check_docblock_signature_param_type_match' => FALSE,
  'check_docblock_signature_return_type_match' => FALSE,
];
