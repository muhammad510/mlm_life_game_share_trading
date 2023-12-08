<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Close_model extends CI_Model
{

    function get_close_ac($id)
    {
       
       return $this->db->select("m.name,m.status,ac.*")
       ->where('m.id',$id)->from('member as m')
       ->join('account_closed as ac','ac.member_id=m.id')
       ->get()->row_array();

    }

}
?>