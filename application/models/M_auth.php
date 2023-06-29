<?php
    class M_auth extends CI_Model {
        private $_table = "tbl_admin";
        const SESSION_KEY = "admin_id";

        public function rules()
        {
            return[
                [
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required'
                ],
                [
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required'
                ]
            ];
        }

        public function login($username, $password)
        {
            $password = md5($password);
            $this->db->where('username', $username);
            $query = $this->db->get($this->_table);
            $admin = $query->row();

            // utk cek apa admin terdaftar?
            if (!$admin){
                return FALSE;
            }

            // utk cek apa pw sudah benar?
            if($password != $admin->password){
                return FALSE;
            }

            // create session
            $this->session->set_userdata([self::SESSION_KEY => $admin->id]);
            $this->_update_last_login($admin->id);

            return $this->session->has_userdata(self::SESSION_KEY);
        }

        public function current_user()
	    {
            if (!$this->session->has_userdata(self::SESSION_KEY)) {
                return null;
            }

            $admin_id = $this->session->userdata(self::SESSION_KEY);
            $query = $this->db->get_where($this->_table, ['id' => $admin_id]);
            return $query->row();
	    }

        public function logout()
	    {
            $this->session->unset_userdata(self::SESSION_KEY);
            return !$this->session->has_userdata(self::SESSION_KEY);
	    }

        private function _update_last_login($id)
	    {
            $data = [
                'last_login' => date("Y-m-d H:i:s"),
            ];

            return $this->db->update($this->_table, $data, ['id' => $id]);
	    }
    }
?>