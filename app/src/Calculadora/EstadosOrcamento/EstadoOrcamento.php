<?php

namespace App\Calculadora\EstadosOrcamento;

use App\Calculadora\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /**
     * Summary of calculadoraDescontoExtra
     * @throws DomainException
     */

    abstract public function calculadoraDescontoExtra(Orcamento $orcamento): float;

    /**
     * @throws DomainException
     */
    public function aprova(Orcamento $orcamento): void
    {
        throw new DomainException("Este orçamento não pode ser aprovado");
    }

    /**
     * @throws DomainException
     */
    public function reprova(Orcamento $orcamento): void
    {
        throw new DomainException("Este orçamento não pode ser reprovado");
    }

    /**
     * @throws DomainException
     */
    public function finaliza(Orcamento $orcamento): void
    {
        throw new DomainException("Este orçamento não pode ser finalizado");
    }
}