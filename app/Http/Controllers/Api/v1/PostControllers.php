<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class PostControllers extends Controller
{
    public function getPost()
    {
        $data  = post::all();
        return response()->json([
            'status' => empty($data) ? 'error' : 'success',
            'message' => empty($data) ? 'Data not found' : 'Data found',
            'data' => $data
        ]);
    }
    public function getPostById($id)
    {
        $data = post::findOrFail($id);
        return response()->json([
            'status' => empty($data) ? 'error' : 'success',
            'message' => empty($data) ? 'Data not found' : 'Data found',
            'data' => $data
        ]);
    }

    public function createPost(Request $request)
    {
        $data = new post();
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        return response()->json([
            'status' => empty($data) ? 'error' : 'success',
            'message' => empty($data) ? 'Data not found' : 'Data found',
            'data' => $data
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        $data = post::find($id);
        $dd = [
            'title' => $request->title,
            'content' => $request->content
        ];
        $data->where('id', $id)->update($dd);
        return  response()->json([
            'status' => empty($data) ? 'error' : 'success',
            'message' => empty($data) ? 'Data not found' : 'Data Updated',
            'data' => $data
        ]);
    }

    public function deletePost($id)
    {
        $data = post::findOrFail($id);
        $data->delete();
        return  response()->json([
            'status' => empty($data) ? 'error' : 'success',
            'message' => empty($data) ? 'Data not found' : 'Data Deleted',
            'data' => $data
        ]);
    }
}
