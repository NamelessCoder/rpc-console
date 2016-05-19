<?php
namespace NamelessCoder\RpcConsole;

use Helhum\Typo3Console\Service\Database\Schema\SchemaUpdateType;
use NamelessCoder\Rpc\ClientComponent\Field\PopupField;

/**
 * Class SchemaTypesField
 */
class SchemaTypesField extends PopupField {

    /**
     * @return string
     */
    public function getType() {
        return 'PopupField';
    }

    /**
     * @return array
     */
    public function getOptions() {
        return array_values(SchemaUpdateType::getConstants());
    }

}
