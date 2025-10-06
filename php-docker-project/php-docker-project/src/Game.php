<?php
/**
 * Clase Game
 * @autor jpexposito
 * Gestiona el estado y la logica del juego del Ahorcado.
 */
final class Game
{
    private array $usedLetters;

    private string $word;

    private int $maxAttempts;

    private int $attemptsLeft;

    /**
     * Constructor
     *
     * @param string               $word        Palabra objetivo en MAYUSCULAS
     * @param int                  $maxAttempts Numero maximo de intentos (por defecto 6)
     * @param array<string,mixed>|null $state   Estado serializado para restaurar partida
     */
    public function __construct(string $word, int $maxAttempts = 6, ?array $state = null)
    {
        /**
         * implementacion de codigo
         */ 
    }

    /**
     * Procesa un intento de letra
     *
     * - Normaliza a MAYUSCULA
     * - Ignora entradas invalidas o repetidas
     * - Resta intentos si la letra no pertenece a la palabra
     *
     * @param string $letter Letra propuesta
     * @return void
     */
    public function guessLetter(string $letter): void
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Devuelve la palabra enmascarada con guiones bajos y letras acertadas
     *
     * @return string Palabra enmascarada separada por espacios (p. ej., "C _ S A")
     */
    public function getMaskedWord(): string
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Obtiene el numero de intentos restantes
     *
     * @return int Intentos restantes
     */
    public function getAttemptsLeft(): int
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Devuelve las letras ya jugadas
     *
     * @return string[] Letras usadas en MAYUSCULAS
     */
    public function getUsedLetters(): array
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Indica si la partida esta ganada
     *
     * @return bool true si la palabra está completamente descubierta, false en caso contrario
     */
    public function isWon(): bool
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Indica si la partida esta perdida
     *
     * @return bool true si no quedan intentos y no se gano, false en caso contrario
     */
    public function isLost(): bool
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Devuelve la palabra objetivo completa
     *
     * @return string Palabra en MAYÚSCULAS
     */
    public function getWord(): string
    {
        /**
         * implementacion de codigo
         */
    }

    /**
     * Serializa el estado relevante de la partida para persistir en sesión
     *
     * @return array{attemptsLeft:int, usedLetters: string[]}
     */
    public function toState(): array
    {
        /**
         * implementacion de codigo
         */
    }
}
?>