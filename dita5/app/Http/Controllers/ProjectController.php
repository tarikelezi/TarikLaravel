<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('blog.home', [
            'todos' => $todos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'description' => 'required',
        ]);

        $data['title']=$request['title'];
        $data['description']=$request['description'];
        $data['completed']=($request['completed']==1) ? 1 : 0;

        if(Todo::create($data))
        {
            return redirect()->route('home')->with('status','Todo eshte krijurar me sukses');
        }
        else{
            return redirect()->back()->with('status','TDiqka eshte gabim ne krijimin e Todo!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::find($id);
        return view('blog.show',['todo'=>$todo]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::find($id);
        return view('blog.edit',['todo'=>$todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            ]);
            $data['title']=$request['title'];
            $data['description']=$request['description'];
            $data['completed']=($request['completed']==1) ? 1 : 0;
            if(Todo::where('id',$id)->update($data))
            {
                return redirect()->route('home')->with('status','Todo eshte modifikuar me sukses');
            }
            else{
                return redirect()->back()->with('status','Diqka eshte gabim ne modifikimin e Todo!');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
