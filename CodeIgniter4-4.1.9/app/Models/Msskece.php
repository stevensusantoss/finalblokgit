<?php

namespace App\Models;
use CodeIgniter\Model;

class Msskece extends Model
{
public function tampil($table){
 return $this->db->table($table)->get()->getResult();
	}
	public function join($table,$table2,$on){
 return $this ->db->table($table)
 			  ->join($table2,$on)
 			  ->get()
 			  ->getResult();
 	}
	public function joinw($table,$table2,$on,$w){
		return $this->db->table($table)
		->join($table2,$on,)
		->where($w)
		->get()
		->getRow();
	}
	public function filter($table, $table2, $on, $filter1, $filter2, $awal, $akhir){
		return $this->db->table($table)
		->join($table2,$on)
		->where($filter1,$awal)
		->where($filter2,$akhir)
		->get()
		->getResult();
	}
	public function input($table, $data){
 return $this ->db->table($table)->insert($data);
	}
	public function hapus($table,$where){
 return $this ->db->table($table)->delete($where);
	}
		public function getWhere($table,$where){
 return $this ->db->table($table)->getWhere($where)->getRow();
	}
	public function edit($table,$data,$where){
 return $this ->db->table($table)->update($data,$where);
 	}
}