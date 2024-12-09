<?php

    class DatabaseConnection {
        private $host = 'localhost';     // Servidor de base de datos
        private $dbname = 'u906904841_convoca';   // Nombre de tu base de datos
        private $username = 'u906904841_admin'; // Usuario de base de datos
        private $password = 'Q+5>m8S:';   // Contraseña de base de datos
        private $port = 3306;             // Puerto predeterminado de MariaDB
        private $charset = 'utf8mb4';     // Juego de caracteres recomendado
        
        private $conexion;

        public function conectar() {
            try {
                // Configuración de opciones de conexión
                $opciones = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $this->charset"
                ];

                // Crear conexión PDO 
                $this->conexion = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname};port={$this->port};charset={$this->charset}", 
                    $this->username, 
                    $this->password, 
                    $opciones
                );

                return $this->conexion;

            } catch (PDOException $e) {
                // Manejo de errores
                error_log("Error de conexión: " . $e->getMessage());
                throw new Exception("No se pudo conectar a la base de datos.");
            }
        }

        public function desconectar() {
            $this->conexion = null;
        }

        // Método para realizar consultas preparadas
        public function consulta($sql, $parametros = []) {
            try {
                $stmt = $this->conexion->prepare($sql);
                $stmt->execute($parametros);
                return $stmt;
            } catch (PDOException $e) {
                error_log("Error en consulta: " . $e->getMessage());
                throw $e;
            }
        }
    }