<?php 

namespace App\Calculadora;

use App\Calculadora\EstadosOrcamento\Finalizado;
use IteratorAggregate;
use Traversable;
use ArrayIterator;

class ListaDeOrcamentos implements IteratorAggregate {

    public array $orcamentos;
    public function __construct() 
    {
        $this->orcamentos = [];
    }

    public function addOrcamentos(Orcamento $orcamento) {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }

    public function mostrarOrcamento() {
        foreach ($this->orcamentos as $key => $orcamento) {
            echo $orcamento->quantidadeItens. PHP_EOL;
            echo $orcamento->valor. PHP_EOL;
            echo get_class ($orcamento->estadoAtual). PHP_EOL;

            echo  PHP_EOL;
        }
    }

    public function filtrarOrcamento(Orcamento $orcamento) {
        return \array_filter($this->orcamentos, function ($orcamentoScoped) use ($orcamento){
            return $orcamentoScoped == $orcamento;
        });
    }

    public function orcamentosFinalizados(){
        return \array_filter($this->orcamentos, function ($orcamento) {
            return $orcamento->estadoAtual instanceof Finalizado;
        });
    }
}