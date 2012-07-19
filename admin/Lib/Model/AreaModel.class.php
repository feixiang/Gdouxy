<?php

import('RelationModel');

class AreaModel extends RelationModel {
    protected $_link = array(
        'Organ' => HAS_MANY
    );
}

?>