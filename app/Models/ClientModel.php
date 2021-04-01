<?php namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model{
	protected $table = "clients";
	protected $allowedFields = ["names","phone","created_at","brancheId","email","createdBy","address"];
	protected $useTimestamps = true;
}