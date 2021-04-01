<?php namespace App\Models;
use CodeIgniter\Model;

class BrancheProduct extends Model{
	protected $table = "brancheproduct";
	protected $allowedFields = ["productId","quantity","sellingprice","lastprice","usedQuantity","infoId","createdBy","created_at"];
	protected $useTimestamps = true;
}
