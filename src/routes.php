       <?php
       $routes = [
       'getSingleInfoForMyIP',
       'getSingleInfoForIP',
       'getMyIPAddressLocation',
       'getIPAddressLocation',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

