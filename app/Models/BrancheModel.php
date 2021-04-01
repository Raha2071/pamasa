<?php namespace App\Models;
use CodeIgniter\Model;

class BrancheModel extends Model{
	protected $table = "branche";
	protected $allowedFields = ["names","employeeId","location","created_at","status"];
	protected $useTimestamps = true;
}