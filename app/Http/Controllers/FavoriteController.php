<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Post;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemuser = $request->user();
        $itemfavorite = Favorite::where('user_id', $itemuser->id)
            ->paginate(10);
        $data = array(
            'title' => 'favorite',
            'itemfavorite' => $itemfavorite
        );
        return view('favorite.index', $data)->with('no', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_id' => 'required',
        ]);
        $user = $request->user();
        $validasifavorite = Favorite::where('post_id', $request->post_id)
            ->where('user_id', $user->id)
            ->first();
        if ($validasifavorite) {
            $validasifavorite->delete(); //kalo udah ada, berarti favorite dihapus
            return back()->with('success', 'favorite berhasil dihapus');
        } else {
            $inputan = $request->all();
            $inputan['user_id'] = $user->id;
            $itemfavorite = Favorite::create($inputan);
            return back()->with('success', 'post berhasil ditambahkan ke favorite');
        }

        // $validatedData = $request->validate([
        //     'post_id' => 'required',
        // ]);

        // $validatedData['user_id'] = auth()->user()->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        //
    }
}
