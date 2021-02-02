<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Jobs::all();
        return view('admin.jobs', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $datalist = Category::with('children')->get();
        return view('admin.jobs_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Jobs;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->image =Storage::putFile('images',$request->file('image'));
        $data->category_id= $request->input('category_id');
        $data->company = $request->input('company');
        $data->location = $request->input('location');
        $data->user_id= Auth::id();
        $data->salaries= $request->input('salaries');
        $data->detail= $request->input('detail');
        $data->save();
        return redirect()->route('admin_jobs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs,$id)
    {
        //

        $data = Jobs::find($id);
        $datalist = Category::with('children')->get();
        return view('admin.jobs_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Jobs $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs,$id)
    {
        //
        $data = Jobs::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->company = $request->input('company');
        $data->location = $request->input('location');
        $data->user_id = Auth::id();
        $data->salaries= $request->input('salaries');
        $data->detail= $request->input('detail');
        if ($request->file('image')!=null)
            $data->image = Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs,$id)
    {
        //

        //DB::table('jobs')->where('id', '=', $id)->delete();
        $data = Jobs::find($id);

        $data->delete();
        return redirect()->route('admin_jobs');
    }
}
