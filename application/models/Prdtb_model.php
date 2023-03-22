<?php
class Prdtb_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('prdtb',$data);
        return true;
	}
	function saverecord($data)
	{
        $this->db->insert('brandtb',$data);
        return true;
	}


	function basic_table()
  {
    $query=$this->db->get("prdtb");
    return $query->result();
  }
  function responsive_table()
  {
    $query=$this->db->get("brandtb");
    return $query->result();
  }
   function displayrecordsById($id)
	{
	$query=$this->db->query("select * from prdtb where id='".$id."'");
	return $query->result();
	}
	/*Update*/
	function update_records($name,$brand,$notes,$items_in_stock,$items_in_ordered,$id)
	{
	$query=$this->db->query("update prdtb SET name='$name',brand='$brand',notes='$notes',items_in_stock='$items_in_stock',items_in_ordered='$items_in_ordered' where id='".$id."'");
	}
	function deleterecords($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("prdtb");
    return true;
  }
  function deleterecord($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("brandtb");
    return true;
  }
	
}