<?php
class Nutrition_model extends CI_Model
{
  public function fetch_data(){
      $query=$this->db->get("nutrition_plan");
      return $query;
  }
//    public function open2($id){
//echo "uddeepa";

//        $query = $this->db->query("SELECT detail from nutrition_plan WHERE n_no= $id");
//        print $query;

//        $this->db->select("detail");
//        $this->db->from('nutrition_plan');
//        $this->db->where('n_no',$id);
//        $query = $this->db->get();
//
//        foreach ($query->result() as $row)
//        {
//             echo $row->detail;
//
//        }


//        $row = $query->row_array($id);
//
//
//        echo $row['detail'];


//    }
}

