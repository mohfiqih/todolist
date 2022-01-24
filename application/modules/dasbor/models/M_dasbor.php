<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dasbor extends CI_Model
{
     function total_user()
     {
         return $this->db->get('user')->num_rows();
     }
}
?>