<?php
    // Definición de la clase 'usuario'
    class usuario{
        // Declaración de las propiedades privadas de la clase.
        // Las propiedades privadas solo pueden ser accedidas dentro de esta clase.
        private $nombre;
        private $apellido;
        private $email;
        private $contraseña;
        private $peso;
        private $altura;
        private $edad;
        private $telefono
        private $direccion;
        private $id_cliente;

        // Constructor de la clase.
        // Este método se llama automáticamente al crear un nuevo objeto de la clase 'usuario'.
        // Permite inicializar las propiedades de la clase cuando se crea un nuevo objeto.
        public function __construct($nombre=NULL, $apellido=NULL, $email=NULL, $contraseña=NULL, $peso=NULL, $altura=NULL, $edad=NULL, $telefono=NULL, $direccion=NULL, $id_cliente=NULL){
            // Asignación de los valores recibidos a las propiedades de la clase.
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->email=$email;
            $this->contraseña=$contraseña;
            $this->peso=$peso;
            $this->altura=$altura
            $this->edad=$edad;
            $this->telefono=$telefono;
            $this->direccion=$direccion;
            $this->id_cliente=$id_cliente;
        }

        // Métodos 'get' y 'set' para cada propiedad.
        // Los métodos 'get' permiten obtener el valor de una propiedad.
        // Los métodos 'set' permiten asignar un valor a una propiedad.
  
        public function getNombre(){
            return $this->nombre;
        }
    
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
    
        public function getApellido(){
            return $this->apellido;
        }
    
        public function setApellido($apellido){
            $this->apellido=$apellido;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email=$email;
        }
        public function getContraseña(){
            return $this->contraseña;
        }
    
        public function setContraseña($contraseña){
            $this->contraseña=$contraseña;
        }
        public function getPeso(){
            return $this->peso;
        }
    
        public function setPeso($peso){
            $this->peso=$peso;
        }
        public function getAltura(){
            return $this->altura;
        }
    
        public function setEAltura($altura){
            $this->altura=$altura;
        }
        public function getEdad(){
            return $this->edad;
        }
    
        public function setEdad($edad){
            $this->edad=$edad;
        }
        public function getTelefono(){
            return $this->telefono;
        }
    
        public function setTelefono($telefono){
            $this->telefono=$telefono;
        }

        public function getDireccion(){
            return $this->direccion;
        }
    
        public function setDireccion($direccion){
            $this->direccion=$direccion;
        }

        public function getId_cliente(){
            return $this->id_cliente;
        }
    
        public function setId_cliente($id_cliente){
            $this->id_cliente=$id_cliente;
        }

        // Método mágico __toString()
        // Este método se llama automáticamente cuando un objeto de la clase 'usuario' se convierte en una cadena de texto (por ejemplo, al imprimirlo).
        public function __toString(){
            return $this->nombre.", ".$this->apellido.", ".$this->email.", ".$this->contraseña.", ".$this->peso.", ".$this->altura.", ".$this->edad.", ".$this->telefono.", ".$this->direccion.", ".$this->id_cliente.".";
        }
    }


?>