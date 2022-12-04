<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\HomeTestimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeTestimonialController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = HomeTestimonial::latest()->paginate(10);
        return view("admin.testimonial.index", compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.testimonial.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:home_testimonials|max:50',
            'title' => 'required|unique:home_testimonials|max:20',
            'comment' => 'required|unique:home_testimonials|max:500',
           
        ],[
            

            'name.required' => 'Please Input name ',
            'name.unique' => 'Testimonial ' . $request->name . ' Already Exist',
            'name.max' => 'Maximum Number is 50 Character',

            'title.required' => 'Please Input name ',
            'title.unique' => 'Testimonial ' . $request->title . ' Already Exist',
            'title.max' => 'Maximum Number is 20 Character',

            'comment.required' => 'Please Input Long Coment',
            'comment.unique' => 'Testimonial ' . $request->comment . ' Already Exist',
            'comment.max' => 'Maximum Number is 500 Character',

        ]);


        HomeTestimonial::insert([
            'title' => $request->title,
            'name' => $request->name,
            'comment' => $request->comment,
            'created_at' => Carbon::now(),
        ]);



        return redirect()->route('admin.home.testimonial')->with('success', 'Home testimonial created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = HomeTestimonial::findOrFail($id);
        return view("admin.testimonial.edit", compact('testimonial'));
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
        //
        $validated = $request->validate([
            'name' => 'required|max:50',
            'title' => 'required|max:20',
            'comment' => 'required|max:500',
           
        ],[
            

            'name.required' => 'Please Input name ',
            'name.max' => 'Maximum Number is 50 Character',

            'title.required' => 'Please Input name ',
            'title.unique' => 'Testimonial ' . $request->title . ' Already Exist',
            'title.max' => 'Maximum Number is 20 Character',

            'comment.required' => 'Please Input Long Comment',
            'comment.max' => 'Maximum Number is 500 Character',

        ]);

        $testimonial = HomeTestimonial::findOrFail($id);

        $testimonial->update([
            'title' => $request->title,
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

            return redirect()->route("admin.home.testimonial")->with('success', 'Home testimonial updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $testimonial = HomeTestimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->back()->with('success', 'Home testimonial Deleted Permanently');
    }
}
