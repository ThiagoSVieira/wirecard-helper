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
			->setTaxDocument($data["cpf"])
			->setType('MERCHANT')
			->setTransparentAccount(true)
			->setPhone($data["DDD"], $data["telefone"], 55)
			->addAddress(
				$data['rua'], 
				$data['numero'], 
				$data['bairro'], 
				$data['cidade'], 
				$data['estado'], 
				$data['cep'], 
				$data['complemento'], 
				'BRA'
			);
			if($business <> null){
				$account->setCompanyName($business['nome_fantasia'], $business['razao_social'])
				->setCompanyOpeningDate($business['data_abertura'])
				->setCompanyPhone($business['DDD'], $business['telefone'], 55)
				->setCompanyTaxDocument($business['cnpj'])
				->setCompanyAddress(
					$business['rua'], 
					$business['numero'],
					$business['bairro'], 
					$business['cidade'], 
					$business['estado'], 
					$business['cep'], 
					$business['complemento'], 
					'BRA'
				);					
			}
			$account->create();			
			return $account;	
		} catch (Exception $e) {
			return $e->getMessage();
		}		
	}

}

?>