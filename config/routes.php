<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('hello', function() {
  echo 'Hello world!';
});

Macaw::get('(:all)', function() {
  echo '未匹配到路由<br>'. '<br>';
  
});

Macaw::dispatch();