<?php

class Producto {
    private $nombre;
    private $precio;
    private $cantidadDisponible;

    public function __construct($nombre, $precio, $cantidadDisponible) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidadDisponible = $cantidadDisponible;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCantidadDisponible() {
        return $this->cantidadDisponible;
    }

    public function actualizarCantidad($cantidad) {
        $this->cantidadDisponible -= $cantidad;
    }
}

?>
