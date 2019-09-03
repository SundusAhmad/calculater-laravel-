<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use DB;


class CalculatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table("operations")->get();
        return view("result", compact("items"));
    
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("calculater");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $num1= $request->number1;
        $oper= $request->operation;
        $num2= $request->number2;
        $total=0;
        if( $oper == 'plus')
		{
		$total = $num1 +  $num2;	
		}
	    if($oper == 'minus')
		{
		$total =  $num1 -  $num2;	
		}
		if($oper == 'multiply')
		{
		$total =  $num1 *  $num2;	
		}
		if($oper == 'divided by')
		{
		$total =  $num1 /  $num2;	
        }
        $curTime = new \DateTime();
        DB::table("operations")->insert([
            "num1"=>$num1, 
            "oper"=>$oper,
            "num2"=>$num2,
            "result"=>$total,
            "date"=> $curTime->format("Y-m-d H:i:s")
        ]);
        return redirect(route("calculate.index"));
        
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
        //
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
}
