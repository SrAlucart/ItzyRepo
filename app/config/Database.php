<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'izyacademy_db';
    private $username = 'root';
    private $password = ''; 
    private $port = '3307';
    public $conn;

    // Método para obtener la conexión
    public function getConnection() {
        $this->conn = null;

        try {
            $dsn = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
            
        } catch (PDOException $exception) {
            error_log("Error de conexión: " . $exception->getMessage());
            die("Error de conexión: No se pudo establecer el vínculo con la base de datos.");
        }

        return $this->conn;
    }
}