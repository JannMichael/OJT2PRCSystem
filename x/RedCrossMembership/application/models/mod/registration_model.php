<? 
	class Registration_model extends CI_Model {
		
		public function __construct()
        {
            parent::__construct();
        }

		public function getReg(){
		$this->db->select("orNumber,IDNumber,lastName,firstName,middleName,address,contactNumber,validDate,expiryDate");
		$this->db->from('maablist');
		$query = $this->db->get();
		return $query->result();
		}
	}