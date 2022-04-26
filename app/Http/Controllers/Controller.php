<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comment;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('index');
    }

    public function comment(){
        // $comments = DB::table('comments')->orderby('id','desc')->get();

        $comments = Comment::orderby('id','desc')->get();
        // dd($comments);
        return view('shopping.comment',compact('comments'));
    }

    public function save_comment(Request $request){

        // DB::table('comments')->insert([
        //     'title' => $request->title,
        //     'name' => $request->name,
        //     'context' => $request->content,
        //     'email' => '',
        // ]);

        Comment::create([
            'title' => $request->title,
            'name' => $request->name,
            'context' => $request->content,
            'email' => '',
        ]);

        return redirect('/comment');
    }

    public function edit_comment($id){
        $comment = Comment::find($id);
        return view('shopping.edit',compact('comment'));

    }

    public function update_comment($id, Request $request){
        Comment::where('id' , $id)->update([
            'title' => $request->title,
            'name' => $request->name,
            'context' => $request->content,
            'email' => '',
        ]);
        return view('shopping.edit',compact('comment'));

    }

    public function delete_comment($id){
        Comment::where('id', $id)->delete();
        return redirect('/comment');
    }
}
