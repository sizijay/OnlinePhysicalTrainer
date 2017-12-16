<?php
class Nutrition_model extends CI_Model
{
  public function fetch_data(){
      $query=$this->db->get("nutrition_plan");
      return $query;
  }
}

?>