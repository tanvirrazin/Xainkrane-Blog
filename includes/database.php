<?php

    require_once("constants.php");

    class Database {

        private $resultSet;
        private $connection;
        private $db_select;


        public function __construct(){
            $this->connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
            $this->db_select = mysql_select_db(DB_NAME,$this->connection);
        }

        public function db_close(){
            if(isset($this->connection)){
                mysql_close($this->connection);
            }
        }

        public function fetch_last_few_blog($N=10){
            $blog_object_array = array();
            $query = "SELECT * FROM blogs ORDER BY id DESC LIMIT {$N} ";
            $this->resultSet = mysql_query($query);
            while($res = mysql_fetch_array($this->resultSet)){
                $object = array();
                $u_id = $res["user_id"];
                $user_res = mysql_query("SELECT username FROM users WHERE id={$u_id} ");
                $user = mysql_fetch_array($user_res);
                $object = array(
                    "id"=>$res["id"],
                    "username"=>$user["username"],
                    "headline"=>$res["headline"],
                    "body"=>$res["body"]
                );
                $blog_object_array[] = $object;
            }
            return $blog_object_array;
        }

        public function find_blog_by_id($id){


            $query = "SELECT * FROM blogs WHERE id={$id} LIMIT 1 ";
            $this->resultSet = mysql_query($query);
            if(isset($this->resultSet)){
                $blog = mysql_fetch_array($this->resultSet);
                $user_res = mysql_query("SELECT username FROM users WHERE id={$blog['user_id']} ");
                $user = mysql_fetch_array($user_res);
                $blog['username'] = $user['username'];
                return $blog;
            } else {
                return null;
            }

        }

        public function find_user($username, $password){

            $query = "SELECT * ";
            $query .= "FROM users ";
            $query .= "WHERE username='{$username}' ";
            $query .= "AND password='{$password}' ";
            $query .= "LIMIT 1 ";

            $this->resultSet = mysql_query($query);
            $found_user = null;
            if(mysql_num_rows($this->resultSet)==1){
                $found_user = mysql_fetch_array($this->resultSet);
            }
            return $found_user;
        }

        public function insert_user($username, $password, $email){

            $query = "INSERT INTO users ";
            $query .= "( username, password, email ) ";
            $query .= "VALUES ( '{$username}','{$password}','{$email}') ";

            mysql_query($query,$this->connection);
            if(mysql_affected_rows()==1){
                return true;
            } else {
                return false;
            }
        }

        public function insert_blog($user_id, $headline, $body){

            $query = "INSERT INTO blogs ";
            $query .= "(user_id, headline, body) ";
            $query .= "VALUES ($user_id, '{$headline}', '{$body}') ";

            mysql_query($query,$this->connection);
            if(mysql_affected_rows()==1){
                return true;
            } else {
                return false;
            }
        }
    }

    $dbase = new Database();