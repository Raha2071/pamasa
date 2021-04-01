<?php namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model{
	protected $table = "category";
	protected $allowedFields = ["names","description","created_at"];
	protected $useTimestamps = true;
}