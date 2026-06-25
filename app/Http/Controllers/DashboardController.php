<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;

class DashboardController extends Controller
{
    public function index()
    {
        $totalClientes  = Cliente::count();
        $totalProdutos  = Produto::count();
        $totalVendas    = Venda::count();
        $ultimasVendas  = Venda::with(['cliente', 'produto'])
                               ->orderByDesc('data_venda')
                               ->limit(5)
                               ->get();

        return view('dashboard', compact(
            'totalClientes',
            'totalProdutos',
            'totalVendas',
            'ultimasVendas'
        ));
    }
}
