# Laravel Nova pt-BR Tradução

### 1. Instalação
`composer require tassianoalencar/laravel-nova-ptbr-localization`

### 2. Publicação dos recursos
`php artisan vendor:publish --tag=laravel-nova-ptbr-localization`

### 3. Ajustar configuração
No arquivo de configurações `config/app.php`.

Altere o locate para pt-BR

`'locale' => 'en',`  -> `'locale' => 'pt-BR',`

Altere o timezone para seu timezone

`'timezone' => 'UTC',` -> `'timezone' => 'America/Sao_Paulo',`