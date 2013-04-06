<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_userdep";
$def->class = "erLhcoreClassModelUserDep";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['user_id'] = new ezcPersistentObjectProperty();
$def->properties['user_id']->columnName   = 'user_id';
$def->properties['user_id']->propertyName = 'user_id';
$def->properties['user_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['dep_id'] = new ezcPersistentObjectProperty();
$def->properties['dep_id']->columnName   = 'dep_id';
$def->properties['dep_id']->propertyName = 'dep_id';
$def->properties['dep_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['instance_id'] = new ezcPersistentObjectProperty();
$def->properties['instance_id']->columnName   = 'instance_id';
$def->properties['instance_id']->propertyName = 'instance_id';
$def->properties['instance_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['last_activity'] = new ezcPersistentObjectProperty();
$def->properties['last_activity']->columnName   = 'last_activity';
$def->properties['last_activity']->propertyName = 'last_activity';
$def->properties['last_activity']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['hide_online'] = new ezcPersistentObjectProperty();
$def->properties['hide_online']->columnName   = 'hide_online';
$def->properties['hide_online']->propertyName = 'hide_online';
$def->properties['hide_online']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

return $def;

?>