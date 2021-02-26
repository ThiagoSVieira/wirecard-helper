<?php 

namespace App\Conta;

class TransparentAccount{
	
	public function createAccount($moip, $data){	
		try {
			$account = $moip->accounts()
			->setName($data["nome"])
		  	->setLastName($data["sobrenome"])
			->setEmail($data["email"])			
			->setBirthDate($data["data_nascimento"])
			->setTaxDocument($usuario["cpf"])
			->setType('MERCHANT')
			->setTransparentAccount(true)
			->setPhone($data["DDD"], $data["numero"], 55)
			->addAddress(
				$data["rua"], 
				'0', 
				$data["bairro"], 
				$data["cidade"], 
				$data["estado"], 
				$data["cep"], 
				$data["pais"]
			)
			//->addAlternativePhone(11, 66448899, 55)
			//->addAddress('Rua de teste', 123, 'Bairro', 'Sao Paulo', 'SP', '01234567', 'Apt. 23', 'BRA')
			//->setCompanyName('Empresa Teste', 'Teste Empresa ME')
			//->setCompanyOpeningDate('2011-01-01')
			//->setCompanyPhone(11, 66558899, 55)
			//->setCompanyTaxDocument('69086878000198')
			//->setCompanyAddress('Rua de teste 2', 123, 'Bairro Teste', 'Sao Paulo', 'SP', '01234567', 'Apt. 23', 'BRA')
			//->setCompanyMainActivity('82.91-1/00', 'Atividades de cobranças e informações cadastrais')
			->create();			
			return $account;	
		} catch (Exception $e) {
			return $e->getMessage();
		}		
	}

}

?>