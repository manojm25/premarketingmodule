<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    public function postchangestatus($checkedIds,$interviewstatus){
        $this->db->where_in('id', $checkedIds);
        $this->db->update('tblusers', array('interviewstatus' => $interviewstatus));
        return $this->db->affected_rows() > 0;
    }

    public function Postassigingrespectives($checkedIds, $selectedmanager, $selectedteamleader)
    {
        $this->db->where_in('id', $checkedIds);

        // Update the "Teammanager" and "Teamleader" columns
         $data = array(
          'TeamManger' => $selectedmanager,
          'TeamLeader' => $selectedteamleader
        );

      $this->db->update('tblusers', $data);

    // Check the affected rows to see if the update was successful
    if ($this->db->affected_rows() > 0) {
        return true;
    } else {
        return false;
    }
    }
}
