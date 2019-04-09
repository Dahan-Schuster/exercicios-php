<?php
/**
 * Created by PhpStorm.
 * User: dahan
 * Date: 24/03/19
 * Time: 14:41
 */

class CPF extends Documento
{
    public function __toString():string
    {
        if ($this->validar()):

            $cpf = strval($this->getNumero());

            $cpfFormatado = substr($cpf, 0, 3) . "." .
                substr($cpf, 3, 3) . "." .
                substr($cpf, 6, 3) . "-" .
                substr($cpf, -2);

            return $cpfFormatado;
        else:
            return "CPF inválido";
        endif;
    }

    public function validar(): bool
    {
        $cpf = $this->getNumero();

        if (empty($cpf)) return false;


        $cpf = preg_match('/[0-9]/', $cpf) ? $cpf : 0;

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


        if (strlen($cpf) != 11) {
            return false;
        } else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            return false;

        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }

}