<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('portfolio.index', [
            'portfolios' => Portfolio::latest()->paginate()
        ]);
    }

    public function create()
    {
        $portfolio = new Portfolio();
        return view('portfolio.create', compact('portfolio'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required'
        ], [
            'title.required' => 'El campo titulo es obligatorio',
            'description.required' => 'El campo descripción es obligatorio'
        ]);

        //Portfolio::create($data);
        $portfolio = new Portfolio();
        $portfolio->title = request()->title;
        $portfolio->url = str_slug(request()->title);
        $portfolio->description = request()->description;
        $portfolio->save();

        return redirect()->route('portfolio.index')->with('status', 'El portafolio fue creado con exito!');
    }

    public function show(Portfolio $portfolio)
    {
        return view('portfolio.show', [
            'portfolio' => $portfolio
        ]);
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', [
            'portfolio' => $portfolio
        ]);
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ], [
            'title.required' => 'El campo titulo es obligatorio',
            'description.required' => 'El campo descripción es obligatorio'
        ]);


        $portfolio->update($data);

        return redirect()->route('portfolio.index')->with('status', 'El portafolio fue actualizado con exito!');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('status', 'El portafolio fue eliminado con exito!');
    }
}
