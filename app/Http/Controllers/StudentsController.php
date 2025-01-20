<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $students = students::all();
        return view("home", compact("students"));
    }
    
    public function create(){
        return view("create");
    }

    public function store(Request $request){
        // students::create($request->all());
        // dd($request->all());
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
        students::create($validated);
        return redirect()->route('home')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id){
        $students = students::find($id);
        // dd($students);
        return view("edit", compact("students"));
    }

    public function update(Request $request, $id){
        // $students->update($request->all());
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
        $students = students::find($id);
        $students->update($validated);
        return redirect()->route('home')->with('info', 'Data berhasil diperbarui!');
    }

    public function destroy($id){
        $students = students::find($id);
        $students->delete();
        return redirect()->route('home')->with('success', 'Data berhasil dihapus!');
    }

    public function show($id){
        $students = students::find($id);
        return view("detail", compact("students"));
    }
}
