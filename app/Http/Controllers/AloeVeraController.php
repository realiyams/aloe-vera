<?php

namespace App\Http\Controllers;

use AloeVera as GlobalAloeVera;
use Illuminate\Http\Request;
use App\Models\AloeVera;
//use Cviebrock\EloquentSluggable\Services\SlugService;

class AloeVeraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['index', 'show']
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$aloe = AloeVera::all();
        //dd($aloe);


        return view('aloe.index')
            ->with('aloe_veras', AloeVera::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aloe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'jumlahDaun' => 'required',
            'warnaDaun' => 'required',
            'kondisiDaun' => 'required',
            'jumlahTunas' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048',
        ]);

        $newImageName = uniqid() . '-' . $request->image->extension();

        //dd($newImageName);
        $request->image->move(public_path('images'), $newImageName);

        //$slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        //dd($slug);

        AloeVera::create([
            'jumlahDaun' => $request->input('jumlahDaun'),
            'warnaDaun' => $request->input('warnaDaun'),
            'kondisiDaun' => $request->input('kondisiDaun'),
            'jumlahTunas' => $request->input('jumlahTunas'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/aloe')
            ->with('message', 'Aloe Vera telah ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('aloe.show')
            ->with('aloe_veras', AloeVera::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('aloe.edit')
            ->with('aloe_veras', AloeVera::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jumlahDaun' => 'required',
            'warnaDaun' => 'required',
            'kondisiDaun' => 'required',
            'jumlahTunas' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048',
        ]);

        $newImageName = uniqid() . '-' . $request->image->extension();

        AloeVera::where('id', $id)
            ->update([
                'jumlahDaun' => $request->input('jumlahDaun'),
                'warnaDaun' => $request->input('warnaDaun'),
                'kondisiDaun' => $request->input('kondisiDaun'),
                'jumlahTunas' => $request->input('jumlahTunas'),
                'image_path' => $newImageName,
                'user_id' => auth()->user()->id
            ]);

            return redirect('/aloe')
                ->with('message', 'Aloe Vera telah berhasil diedit');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aloe_veras = AloeVera::where('id', $id);
        $aloe_veras->delete();

        return redirect('/aloe')
        ->with('message', 'Aloe Vera telah berhasil dihapus !');
    }
}
