<?php

\sowerphp\core\Routing_Router::connect('/api/bind10/:controller/*', [
    'module' => 'Bind10',
    'action' => 'api',
]);
