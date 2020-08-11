<?php

namespace App\Http\Controllers;

use App\employment;
use Illuminate\Http\Request;

class EmploymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employment = employment::all();
        return view('employments/index', ['employment'=> $employment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employments/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $employment = new employment;
        // $employment->name = $request->name;
        // $employment->email = $request->email;
        // $employment->jabatan = $request->jabatan;
        // $employment->hp = $request->hp;

        // $employment->save();

   
        // employment::create([
        //     "name"=> $request->name,
        //     "email"=> $request->email,
        //     "jabatan"=> $request->jabatan,
        //     "hp"=> $request->hp
        // ]);
        $messages = [
            'required' => ':attribute Tidak Boleh Kosong!',
        ];

        $request->validate([
            "name"=> "required",
            "email"=> "required",
            "jabatan"=> "required",
            "hp"=> "required"
        ], $messages);


        employment::create($request->all());

        return redirect('/employments')->with('status', 'Data Karyawan Berhasil Ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show(employment $employment)
    {
        return view('employments/show', ['employment'=> $employment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(employment $employment)
    {
        return view('employments/update', ['employment'=> $employment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employment $employment)
    {
        $messages = [
            'required' => ':attribute Tidak Boleh Kosong!',
        ];

        $request->validate([
            "name"=> "required",
            "email"=> "required",
            "jabatan"=> "required",
            "hp"=> "required"
        ], $messages);

        employment::where('id', $employment->id)
                    ->update([
                        "name"=> $request->name,
                        "email"=> $request->email,
                        "jabatan"=> $request->jabatan,
                        "hp"=> $request->hp,

                    ]);
                    $status = 'Data Karyawan Berhasil Diupdate!';
        return view('employments/show', ['employment'=> $request, 'status'=> $status])->with('status', 'Data Karyawan Berhasil Diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function destroy(employment $employment)
    {
        employment::destroy($employment->id);
        return redirect('/employments')->with('status', 'Data Karyawan Berhasil Dihapus!');
    }
}
