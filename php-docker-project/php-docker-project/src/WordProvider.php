<?php
/**
 * Clase WordProvider
 * @jpexposito
 * Proporciona palabras desde un fichero (u otra fuente) en MAYUSCULAS y sin acentos.
 */
final class WordProvider
{

    private string $filePath;

    public function __construct(string $filePath)
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Obtiene una palabra aleatoria
     *
     * @return string Palabra en MAYUSCULAS y sin acentos/diacriticos
     * @throws \RuntimeException Si el fichero no es legible o esta vacio
     */
    public function randomWord(): string
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Normaliza texto eliminando acentos y caracteres no alfabéticos A-Z
     *
     * @param string $text Texto de entrada
     * @return string Texto normalizado
     */
    private function normalize(string $text): string
    {
        /**
         * implementacion de codigo
         */
    }
}
?>