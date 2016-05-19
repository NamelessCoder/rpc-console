<?php
namespace NamelessCoder\RpcConsole;

use NamelessCoder\Rpc\ClientComponent\Field\PopupField;

/**
 * Class CacheGroupsField
 */
class CacheGroupsField extends PopupField {

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
        return array('system', 'configuration', 'frontend', 'general');
    }

}
