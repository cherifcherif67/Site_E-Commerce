<?php 
	class Commande
	{
		private $tabDesProduitsCommandé=array() ;
		public function ajouterProduit($produit)
		{
			$this->_tabDesProduitsCommandé[]=$produit;
		}
	}
?>