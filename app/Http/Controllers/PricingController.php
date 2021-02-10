<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pricing($id)
    {
        // dd($id);
        $course = Course::find($id);
        return view('instructor.pricing',[
            'course' => $course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $course = Course::find($id);
        $course->price = $request->input('price');
        $course->save();
        return redirect()->route('instructor.edit', $course->id)->with('success', 'Le prix de votre cours a bien été mis à jour');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
