<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request){
        $project['projectname'] = $request->projectName;
        $project['projectaddress'] = $request->projectAddress;
        $project['unitquantity'] = $request->unitQuantity;
        $project['maxaoal'] = $request->maxGoal;
        $project['unitprice'] = $request->unitPrice;
        $project['starttime'] = $request->startTime;
        $project['endtime'] = $request->endTime;
        $project['videolink'] = $request->videoLink;
        
        $image_one = $request->imageOne;
        $image_two = $request->imageTwo;
        $image_three = $request->imageThree;
        $image_four = $request->imageFour;

        return response()->json($project);
    }

}
