<?php namespace App\Models;
use CodeIgniter\Model;

class BrancheinfoModel extends Model{
	protected $table = "brancheproductinfo";
	protected $allowedFields = ["brancheId","created_by","status"."createdBy","created_at"];
	protected $useTimestamps = true;
}
