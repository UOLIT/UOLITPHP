<?php 
	class process_user extends componnen{
		
		function ambil_list(){			
			$query = "SELECT * FROM tbl_user ";
		    $user = $this->query_global($query);

			return $user;			
		}

		function ambil_data($data){
			$query = "SELECT * FROM tbl_user Where user_id = '".$data['user_id']."'";
		    $user = $this->query_global($query);						

			return $user;
		}

		function cek_data($data){
			$query = "SELECT * FROM tbl_user Where user_id = '".$data['user_id']."'";
		    $user = $this->query_global($query);						

			return $user;
		}

		function tambah_data($data){
			$dataproses = [
				"data" => [
					"table" => "tbl_user",
					"proses" => "insert",
					"data" => $data,
					"where" => []
				]
			];
			$user = $this->proses_query_global ($dataproses);

			return $user;
		}

		function tambah_data_mix($data){

			$data2['user_id'] = 'xyz';
			$data2['nama'] = 'xyz';
			$data2['password'] = 'xyz';

			$data3['user_id'] = '1';

			$dataproses = [
				"data" => [
					"table" => "tbl_user",
					"proses" => "insert",
					"data" => $data,
					"where" => []
				],
				"data2" => [
					"table" => "tbl_user",
					"proses" => "insert",
					"data" => $data2,
					"where" => []
				],
				"data3" => [
					"table" => "tbl_user",
					"proses" => "delete",
					"data" => [],
					"where" => $data3
				]
			];

			$user = $this->proses_query_global ($dataproses);

			return $user;
		}

		function hapus_data($data){

			$dataproses = [
				"data" => [
					"table" => "tbl_user",
					"proses" => "delete",
					"data" => [],
					"where" => $data
				]
			];
			$user = $this->proses_query_global ($dataproses);

			return $user;			
		}


		function rubah_data($data, $where){
			
			$dataproses = [
				"data" => [
					"table" => "tbl_user",
					"proses" => "update",
					"data" => $data,
					"where" => $where
				]
			];
			$user = $this->proses_query_global ($dataproses);

			return $user;
		}



	}
?>