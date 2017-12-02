<?php

$config = require '../config.php';
require('../core/cordatabase/Connection.php');
require('../core/database/QueryBuilder.php');

return new QueryBuilder(
    Connection::make($config['database'])
);