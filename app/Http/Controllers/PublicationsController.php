<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PublicationsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Publications.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentUser = auth()->user();

        return view('Publications.crear', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'image_url' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);


        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $filename = $file->getClientOriginalName();
            $request->merge(['image_url' => $filename]);
        }

        $publication = Publication::create([
            'title'         => $request['title'],
            'description'   => $request['description'],
            'user_id'       => auth()->user()->id,
            'image_url'     => 'images/' . $name,
        ]);


        // $publication->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Publications.ver');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Publication::find($id);
        return view('Publications.editar', get_defined_vars());
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
            'title'     => 'required',
            'image_url' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        // TODO: If validate fail reurn Alert
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $filename = $file->getClientOriginalName();
            $request->merge(['image_url' => $filename]);
        }

        $publication = Publication::find($id);

        $file_path = public_path() . '/' . $publication->image_url;


        $publication->update([
            'title'         => $request['title'],
            'description'   => $request['description'],
        ]);

        if($request->image_url != null){ // There is an image to update
            if($publication->profile->image_url != null ){ // There is an image in the prject to delete
                if(file_exists($file_path)){
                    unlink($file_path);
                }
            }
            $publication->image_url = 'images/' . $name;
        }
        $publication->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function like(Request $request){
        $like = Like::where('publication_id',$request->id)
                    ->where('user_id',$request->user_id)
                    ->get();

        if(count($like) == 0){
            Like::create([
                'user_id' => $request->user_id,
                'publication_id' => $request->id,
            ]);
            return response()->json('like' , 202);
        }else{
            $like->first()->delete();
            return response()->json('unlike' , 202);
        }
    }



    public function getTotalLikesPublication(Request $request){
        $likes = Like::where('publication_id',$request->id)
                    ->get();

        return response()->json(count($likes) , 202);
    }



    
    public function addComment(Request $request){
        $comment = Comment::create([
                'user_id' => $request->user_id,
                'publication_id' => $request->id,
                'text' => $request->text,
            ]);

        $comment = Arr::add($comment, 'username', $comment->user->username);
        
        return response()->json($comment , 202);
    }
}
