<?php 
	class Commande
	{
		private $tabDesProduitsCommandÃ©=array() ;
		public function ajouterProduit($produit)
		{
			$this->_tabDesProduitsCommandÃ©[]=$produit;
		}
	}
?>