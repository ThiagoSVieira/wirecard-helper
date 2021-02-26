<?php 

require_once "vendor/autoload.php";

use Moip\Moip;
use Moip\Auth\OAuth;
use App\Conta\TransparentAccount;

$token = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX_v2';
$moip = new Moip(new OAuth($token), Moip::ENDPOINT_SANDBOX);      


/* Instanciando a classe */
$transparentAccount = new TransparentAccount();	

/* Criando conta transparente */
// Dados pessoais
$data = array(
	"nome" 				=> "Thiago",
	"sobrenome" 		=> "Vieira",
	"email" 			=> "email@email.com",
	"data_nascimento" 	=> "1991-12-28",
	"cpf" 				=> "111.222.333.45",
	"DDD" 				=> "11",
	"telefone" 			=> "000",
	"complemento"		=> "",
	"rua"	 			=> "Rua Alegre",
	"bairro" 			=> "Nome do Bairro",
	"cidade" 			=> "Nome da Cidade",
	"estado" 			=> "UF",
	"pais"	 			=> "BR"
);

// Dados da empresa (opcional) 
$business = array(
	"nome_fantasia" 	=> "Nome Fantasia",
	"razao_social" 		=> "Razao Social LTDA",
	"data_abertura" 	=> "2015-02-11",
	"DDD" 				=> "11",
	"telefone" 			=> "37000000",
	"cnpj" 				=> "00.000.000/0001-00",
	"complemento"		=> "",
	"rua"	 			=> "Rua Alegre",
	"bairro" 			=> "Nome do Bairro",
	"cidade" 			=> "Nome da Cidade",
	"estado" 			=> "UF",
	"pais"	 			=> "BR"
);
$account = $transparentAccount->createAccount($moip, $data, $business);

?>