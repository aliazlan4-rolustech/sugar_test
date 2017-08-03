<?php
// created: 2017-08-03 16:31:05
$dictionary["m1234_class_m1234_student_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'm1234_class_m1234_student_1' => 
    array (
      'lhs_module' => 'm1234_Class',
      'lhs_table' => 'm1234_class',
      'lhs_key' => 'id',
      'rhs_module' => 'm1234_Student',
      'rhs_table' => 'm1234_student',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'm1234_class_m1234_student_1_c',
      'join_key_lhs' => 'm1234_class_m1234_student_1m1234_class_ida',
      'join_key_rhs' => 'm1234_class_m1234_student_1m1234_student_idb',
    ),
  ),
  'table' => 'm1234_class_m1234_student_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'm1234_class_m1234_student_1m1234_class_ida' => 
    array (
      'name' => 'm1234_class_m1234_student_1m1234_class_ida',
      'type' => 'id',
    ),
    'm1234_class_m1234_student_1m1234_student_idb' => 
    array (
      'name' => 'm1234_class_m1234_student_1m1234_student_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'm1234_class_m1234_student_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'm1234_class_m1234_student_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'm1234_class_m1234_student_1m1234_class_ida',
        1 => 'm1234_class_m1234_student_1m1234_student_idb',
      ),
    ),
  ),
);