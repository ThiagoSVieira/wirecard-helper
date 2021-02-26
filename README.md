# wirecard-helper
<h1>Biblioteca para auxiliar o uso do SDK Wirecard</h1>

Utilização:

Alterar o valor da varíavel $token para o token da sua conta.

```
$token = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX_v2';
```

Alterar o endpoint para sandbox ou produção, dependendo do seu ambiente de desenvolvimento.

```
// SANDBOX
  $moip = new Moip(new OAuth($token), Moip::ENDPOINT_SANDBOX); 
// PRODUÇÃO
  $moip = new Moip(new OAuth($token), Moip::ENDPOINT_PRODUCTION); 
```
