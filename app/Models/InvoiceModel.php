<?php namespace App\Models;
use CodeIgniter\Model;

class InvoiceModel extends Model{
	protected $table = "invoices";
	protected $allowedFields = ["clientId","createdBy","created_at","status","brancheId"];
	protected $useTimestamps = true;
}