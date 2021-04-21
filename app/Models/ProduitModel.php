<?php namespace App\Models;
use CodeIgniter\Model;

class ProduitModel extends Model{
	protected $table = "products";
	protected $allowedFields = ["names","categoryId","purchasedprice","quantity","sellingPrice","barcode","usedQuantity","created_at","createdBy","description"];
	protected $useTimestamps = true;
}
