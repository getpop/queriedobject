<?php
namespace PoP\QueriedObject\ModuleProcessors;

trait QueriedDBObjectModuleProcessorTrait
{
    protected function getQueriedDBObjectID(array $module, array &$props, &$data_properties)
    {
        $vars = \PoP\ComponentModel\Engine_Vars::getVars();
        return $vars['routing-state']['queried-object-id'];
    }
}