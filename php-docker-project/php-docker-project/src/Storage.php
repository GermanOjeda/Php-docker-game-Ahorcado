<?php
/**
 * Clase Storage
 * @jpexposito
 * Clase que persiste el estado en sesion.
 */
final class Storage
{
    public function __construct(private string $key = 'ahorcado')
    {
        /**
         * implementacion de codigo
         */
    }

    public function get(string $name, $default = null)
    {
        /**
         * implementacion de codigo
         */
    }

    public function set(string $name, $value): void
    {
        /**
         * implementacion de codigo
         */
    }

    public function reset(): void
    {
        /**
         * implementacion de codigo
         */
    }
}
?>