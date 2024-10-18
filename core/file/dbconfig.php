<?php
    class Dbconfig {
        protected $HostName;
        protected $UserName;
        protected $Password;
        protected $Database;
        protected $Port;

        function config() {
            $this ->HostName = 'localhost';
            $this ->UserName = 'postgres';
            $this ->Password = '';
            $this ->Database = '';
            $this ->Port     = '';
        }
    }
?>
