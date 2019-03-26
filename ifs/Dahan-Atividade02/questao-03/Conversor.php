<?php

class Conversor
{
    private $moedaOrigem;

    public static $TAXA_CAMBIO_DOLAR_REAL = 3.87;
    public static $TAXA_CAMBIO_EURO_REAL = 4.37;
    public static $TAXA_CAMBIO_LIBRA_REAL = 5.11;
    public static $TAXA_CAMBIO_PESO_REAL = 0.09;
    public static $TAXA_CAMBIO_IENE_REAL = 0.04;

    private static $SIGLA_DOLAR_AMERICANO = 'USD';
    private static $SIGLA_EURO = 'EUR';
    private static $SIGLA_LIBRA_ESTERLINA = 'GBP';
    private static $SIGLA_PESO_ARGENTINO = 'ARS';
    private static $SIGLA_IENE_JAPONES = 'JPY';

    private static $SIGLA_INVALIDA = '$$$';


    public function converter($valor):float
    {
        $isValorValido = self::validarValor($valor);
        $cambio = self::definirTaxaDeCambio($this->moedaOrigem);

        if($cambio != self::$SIGLA_INVALIDA AND $isValorValido) {
            $valorCambiado = floatval($valor) * $cambio;
        } else {
            return 'Valores inválidos';
        }

        return  $valorCambiado;// $valorCambiado;
    }


    public function getMoedaOrigem()
    {
        return $this->moedaOrigem;
    }

    public function setMoedaOrigem($moedaOrigem): void
    {
        $this->moedaOrigem = $moedaOrigem;
    }

    public function definirSinalMoeda():string
    {
        switch ($this->moedaOrigem) {
            case Conversor::$SIGLA_DOLAR_AMERICANO:
                return 'U&dollar;';
                break;
            case Conversor::$SIGLA_EURO:
                return '&euro;';
                break;
            case Conversor::$SIGLA_LIBRA_ESTERLINA:
                return '&pound;';
                break;
            case Conversor::$SIGLA_PESO_ARGENTINO:
                return '&#8369;';
                break;
            case Conversor::$SIGLA_IENE_JAPONES:
                return '&yen;';
                break;
        }
    }
    private static function definirTaxaDeCambio($sigla)
    {
        switch ($sigla) {
            case Conversor::$SIGLA_DOLAR_AMERICANO:
                return Conversor::$TAXA_CAMBIO_DOLAR_REAL;
                break;
            case Conversor::$SIGLA_EURO:
                return Conversor::$TAXA_CAMBIO_EURO_REAL;
                break;
            case Conversor::$SIGLA_LIBRA_ESTERLINA:
                return Conversor::$TAXA_CAMBIO_LIBRA_REAL;
                break;
            case Conversor::$SIGLA_PESO_ARGENTINO:
                return Conversor::$TAXA_CAMBIO_PESO_REAL;
                break;
            case Conversor::$SIGLA_IENE_JAPONES:
                return Conversor::$TAXA_CAMBIO_IENE_REAL;
                break;
            default:
                return Conversor::$SIGLA_INVALIDA;
                break;
        }
    }

    private static function validarValor($valor) {
        return !preg_match('/\.\./', $valor);
    }
}