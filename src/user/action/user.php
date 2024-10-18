<?php
	class user extends componnen{
		
		function ambil_list(){					
			$action_process='';
						
			$user = $this->action_process('user','process_user','ambil_list');

			if($user['results']==='Success'){
				$results['results'] = 'Success';
				$results['data'] = $user['data'];
				$results['msg'] = '';
			}else{
				$results['results'] = 'Fail';
				$results['data'] = '';
				$results['msg'] = 'user failed';
			}

			exit(json_encode($results));
		}

		function ambil_data(){					
			$action_process='';

			$data['user_id'] = $this->post('user_id');			

			$user = $this->action_process('user','process_user','ambil_data', $data);

			if($user['results']==='Success'){
				$results['results'] = 'Success';
				$results['data'] = $user['data'];
				$results['msg'] = '';
			}else{
				$results['results'] = 'Fail';
				$results['data'] = '';
				$results['msg'] = 'user failed';
			}

			exit(json_encode($results));
		}

		function cek_data(){					
			$action_process='';

			$data['user_id'] = $this->post('user_id');			

			$user = $this->action_process('user','process_user','ambil_data', $data);

			if(count($user['data']) >= 1){
				$results['results'] = 'Success';
				$results['data'] = true;
				$results['msg'] = '';
			}else{
				$results['results'] = 'Fail';
				$results['data'] = false;
				$results['msg'] = 'user failed';
			}

			exit(json_encode($results));
		}


		function tambah_data(){			
			$action_process='';

			$data['user_id'] = $this->post('user_id');
			$data['nama'] = $this->post('nama');
			$data['password'] = $this->post('password');

			$user = $this->action_process('user','process_user','tambah_data', $data);

			if($user['results']==='Success'){
				$results['results'] = 'Success';
				$results['data'] = $user['data'];
				$results['msg'] = '';
			}else{
				$results['results'] = 'Fail';
				$results['data'] = '';
				$results['msg'] = 'user failed'.$user['msg'];
			}

			exit(json_encode($results));
		}

		function tambah_data_mix(){			
			$action_process='';

			$data['user_id'] = $this->post('user_id');
			$data['nama'] = $this->post('nama');
			$data['password'] = $this->post('password');

			$user = $this->action_process('user','process_user','tambah_data_mix', $data);

			if($user['results']==='Success'){
				$results['results'] = 'Success';
				$results['data'] = $user['data'];
				$results['msg'] = '';
			}else{
				$results['results'] = 'Fail';
				$results['data'] = '';
				$results['msg'] = 'user failed'.$user['msg'];
			}

			exit(json_encode($results));
		}

		function hapus_data(){			
			$action_process='';

			$data['user_id'] = $this->post('user_id');

			$user = $this->action_process('user','process_user','hapus_data', $data);

			if($user['results']==='Success'){
				$results['results'] = 'Success';
				$results['data'] = $user['data'];
				$results['msg'] = '';
			}else{
				$results['results'] = 'Fail';
				$results['data'] = '';
				$results['msg'] = 'user failed';
			}

			exit(json_encode($results));
		}

		function rubah_data(){			
			$action_process='';

			$data['nama'] = $this->post('nama');
			$data['password'] = $this->post('password');

			$where['user_id'] = $this->post('user_id');

			$user = $this->action_process('user','process_user','rubah_data', $data, $where);

			if($user['results']==='Success'){
				$results['results'] = 'Success';
				$results['data'] = $user['data'];
				$results['msg'] = '';
			}else{
				$results['results'] = 'Fail';
				$results['data'] = '';
				$results['msg'] = 'user failed';
			}

			exit(json_encode($results));
		}



	}
?>