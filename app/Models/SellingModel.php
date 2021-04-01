<?php namespace App\Models;
use CodeIgniter\Model;

class SellingModel extends Model{
	protected $table = "infoinvoices";
	protected $allowedFields = ["quantity","invoiceId","created_at","unitprice","productId"];
	protected $useTimestamps = true;
}