<?php
  use DOTENV\DotEnv;
  (new DotEnv(__DIR__ . '\.env'))->load();

  $api_key= getenv("API_KEY");
  $api_url= getenv("API_URL");
?>