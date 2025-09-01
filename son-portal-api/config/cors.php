<?php

return [
  'paths' => ['api/*', 'login', 'logout', 'register', 'user'],
  'allowed_methods' => ['*'],
  'allowed_origins' => ['http://localhost:5173', 'http://127.0.0.1:5173', 'https://app.yourdomain.com'],
  'allowed_headers' => ['*'],
  'supports_credentials' => false, // token auth doesn't need cookies
];