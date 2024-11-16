<?php

return [

    'paths' => ['api/*'], // Aplica CORS solo a las rutas API
    'allowed_methods' => ['*'], // Permite todos los métodos HTTP
    'allowed_origins' => ['http://localhost:4200'], // Cambia según tu frontend
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['Content-Type', 'Authorization', 'X-Requested-With'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false, // Cambia a true si necesitas manejar cookies
];
