<?php
include_once('core/file/connection.php');

class query_process extends connection{

    function query_global($query) {
        $this->dbConnect();

        $results = array();
        
        try {
            $this->conn->beginTransaction();

            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            $data_results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($data_results) > 0) {

                $results['results'] = 'Success';
                $results['data'] = $data_results;
                $results['msg'] = '';

                $this->conn->commit();
            } else {
                $results['results'] = 'Error';
                $results['data'] = '';
                $results['msg'] = 'No data found';

                $this->conn->rollBack();
            }
        } catch (PDOException $e) {
            $results['results'] = 'Error';
            $results['data'] = '';
            $results['msg'] = $e->getMessage();

            $this->conn->rollBack();
        }

        $this->closeConnection();

        return $results;
    }


    function select($select = '*', $from, $where = array(), $order = '', $limit = '', $asc_desc = '', $offset = '') {
        $this->dbConnect();

        $array = array();
        $select = !empty($select) ? $select : '*';
        $from = !empty($from) ? $from : '';

        $whereClauses = [];
        $params = [];

        if(!empty($where)){
            foreach ($where as $field => $value) {
                $whereClauses[] = "$field = :$field";
                $params[":$field"] = $value;
            }
        }

        $whereClause = !empty($whereClauses) ? 'WHERE ' . implode(' AND ', $whereClauses) : '';

        $orderClause = !empty($order) ? "ORDER BY $order $asc_desc" : '';

        $limitClause = !empty($limit) ? "LIMIT ".$limit : '';

        $offsetClause = !empty($offset) ? "OFFSET ".$offset : '';

        $query = "SELECT $select FROM $from $whereClause $orderClause $limitClause $offsetClause";

        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute($params);

            $data_results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $this->closeConnection();

            if (count($data_results) > 0) {
                $results['results'] = 'Success';
                $results['data'] = $data_results;
                $results['msg'] = '';
            } else {
                $results['results'] = 'Error';
                $results['data'] = null;
                $results['msg'] = 'No data found';
            }
        } catch (PDOException $e) {
            $results['results'] = 'Error';
            $results['data'] = null;
            $results['msg'] = $e->getMessage();
        }

        return $results;
    }


    function insert($table, $data) {
        $this->dbConnect();

        $results = array();

        $fields = implode(',', array_keys($data));
        $values = ':' . implode(',:', array_keys($data));

        $query = "INSERT INTO $table ($fields) VALUES ($values)";

        try {
            $this->conn->beginTransaction();

            $stmt = $this->conn->prepare($query);

            foreach ($data as $key => $value) {
                $stmt->bindParam(":$key", $data[$key]);
            }

            $stmt->execute();



            $this->conn->commit();

            $this->closeConnection();

            $results['results'] = 'Success';
            $results['msg'] = '';
        } catch (PDOException $e) {

            $this->conn->rollBack();


            $results['results'] = 'Error';
            $results['msg'] = $e->getMessage();
            $results['rolledBackData'] = $data;
        }

        return $results;
    }

	function update($table, $data, $where) {
	    $this->dbConnect();

	    $set = [];
	    $params = [];

	    foreach ($data as $key => $value) {
	        $set[] = "$key = :$key";
	        $params[":$key"] = $value;
	    }

	    $setClause = implode(', ', $set);

	    $whereClauses = [];
	    foreach ($where as $field => $condition) {
	        $whereClauses[] = "$field = :$field";
	        $params[":$field"] = $condition;
	    }

	    $whereClause = implode(' AND ', $whereClauses);

	    $query = "UPDATE $table SET $setClause WHERE $whereClause";

	    $stmt = $this->conn->prepare($query);

	    try {

	        foreach ($params as $param => &$value) {
	            $stmt->bindParam($param, $value);
	        }

	        $stmt->execute();
	        $this->closeConnection();
	        $results['results'] = 'Success';
	        $results['msg'] = '';
	    } catch (PDOException $e) {
	        $results['results'] = 'Error';
	        $results['msg'] = $e->getMessage();
	    }

	    return $results;
	}

	function delete($table, $where) {
	    $this->dbConnect();

	    $whereClauses = [];
	    $params = [];

	    foreach ($where as $field => $condition) {
	        $whereClauses[] = "$field = :$field";
	        $params[":$field"] = $condition;
	    }

	    $whereClause = implode(' AND ', $whereClauses);

	    $query = "DELETE FROM $table WHERE $whereClause";

	    $stmt = $this->conn->prepare($query);

	    try {

	        foreach ($params as $param => &$value) {
	            $stmt->bindParam($param, $value);
	        }

	        $stmt->execute();
	        $this->closeConnection();
	        $results['results'] = 'Success';
	        $results['msg'] = '';
	    } catch (PDOException $e) {
	        $results['results'] = 'Error';
	        $results['msg'] = $e->getMessage();
	    }

	    return $results;
	}


    function processTableData($data) {
        $table = $data['table'];
        $proses = strtolower($data['proses']);
        $tableData = $data['data'];
        $whereConditions = $data['where'];

        switch ($proses) {
            case 'insert':

                $fields = implode(',', array_keys($tableData));
                $values = ':' . implode(',:', array_keys($tableData));

                $query = "INSERT INTO $table ($fields) VALUES ($values)";

                break;

            case 'update':

                $updateFields = '';
                foreach ($tableData as $column => $value) {
                    $updateFields .= "$column = :$column, ";
                }
                $updateFields = rtrim($updateFields, ', ');

                $whereClause = '';
                foreach ($whereConditions as $column => $value) {
                    $whereClause .= "$column = :$column AND ";
                }
                $whereClause = rtrim($whereClause, 'AND ');

                $query = "UPDATE $table SET $updateFields WHERE $whereClause";
                break;

            case 'delete':

                $whereClause = '';                
                foreach ($whereConditions as $column => $value) {
                    $whereClause .= "$column = :$column AND ";
                }
                $whereClause = rtrim($whereClause, 'AND ');

                $query = "DELETE FROM $table WHERE $whereClause";

                break;

            default:

                throw new Exception("Invalid or unsupported operation: $proses");
        }

        return $query;
    }


    function proses_query_global($dataArrays) {
    $this->dbConnect();

    $results = array();

    try {
        $this->conn->beginTransaction();

        foreach ($dataArrays as $key => $data) {
            $query = $this->processTableData($data);

            $stmt = $this->conn->prepare($query);

            if (!empty($data['data'])) {
                foreach ($data['data'] as $column => $value) {
                    if (!is_array($data['data'][$column])) {
                        $stmt->bindParam(":$column", $data['data'][$column]);
                    }
                }
            }

            if (!empty($data['where'])) {
                foreach ($data['where'] as $column => $value) {
                    if (!is_array($data['where'][$column])) {
                        $stmt->bindParam(":$column", $data['where'][$column]);
                    }
                }
            }

            $stmt->execute();
        }

            if ($this->conn->inTransaction()) {
                
                $this->conn->commit();
            }

        $this->closeConnection();

        $results['results'] = 'Success';
        $results['data'] = '';
        $results['msg'] = '';

    } catch (PDOException $e) {

        if ($this->conn->inTransaction()) {
            $this->conn->rollBack();
        }


        error_log("Database Error: " . $e->getMessage());

        $results['results'] = 'Error';
        $results['data'] = '';
        $results['msg'] = ' An error occurred. Please try again later.';

    } catch (Exception $e) {


        error_log("General Error: " . $e->getMessage());

        $results['results'] = 'Error';
        $results['data'] = '';
        $results['msg'] = 'An unexpected error occurred. Please contact support.';
    }

    return $results;
}



    function closeConnection() {
        $this->conn = null;
    }
}
?>
