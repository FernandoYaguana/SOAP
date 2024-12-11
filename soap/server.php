<?php

// Definir la clase que implementa las operaciones SOAP
class HolaMundo {

    // Definir la operación "saludoSoap" que se encuentra en el WSDL
    public function saludoSoap($parameters) {
        // En este caso, simplemente devuelve el mensaje con un saludo
        return "Hola, " . $parameters;
    }
}

// Activar el servidor SOAP
$server = new SoapServer('server.wsdl');

// Asociar la clase al servidor SOAP
$server->setClass('HolaMundo');

// Manejar la solicitud SOAP
$server->handle();

?>






