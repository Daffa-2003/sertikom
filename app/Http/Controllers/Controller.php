<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $data = post::all();
        return view('page.list', ['data' => $data]);
    }

    public function create()
    {
        return view('page.add');
    }

    public function createProses(Request $request)
    {
        $dd = new post();
        $dd->title = $request->title;
        $dd->content = $request->content;
        $dd->save();
        return redirect()->route('index');
    }

    public function show($id)
    {
        $data = post::find($id);
        return view('page.show', ['data' => $data]);
    }
    public function edit(Request $request, $id)
    {
        $data = post::find($id);
        $dd = [
            'title' => $request->title,
            'content' => $request->content
        ];
        $data->where('id', $id)->update($dd);
        return redirect()->route('index');
    }
    public function destroy($id)
    {
        $data = post::find($id);
        $data->delete();
        return redirect()->route('index');
    }
}
