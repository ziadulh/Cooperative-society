<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\addmember;
use Illuminate\Support\Facades\DB;

class memberListController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $w = addmember::all();
        return view('posts.allMemberList')->with('w',$w);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.addNewMember');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new addmember;
        $member->title = $request->input('title');
        $member->email = $request->input('email');
        $member->phone = $request->input('phone');
        $member->membershipType = $request->input('membershipType');
        $member->tAmount = $request->input('tAmount');
        $member->gAmount = 0;
        $member->rAmount = $request->input('tAmount');
        $member->tInstallment = $request->input('tInstallment');
        $member->gInstallment = 0;
        $member->rInstallment = $request->input('tInstallment');
        $member->save();

        return redirect('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $w = addmember::find($id);
        return view('posts.details')->with('w', $w);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $w = addmember::find($id);
        return view('posts.edit')->with('w', $w);
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
        $member = addmember::find($id);
        $member->title = $request->input('title');
        $member->email = $request->input('email');
        $member->phone = $request->input('phone');
        $member->membershipType = $request->input('membershipType');
        $member->tAmount = $request->input('tAmount');
        $member->gAmount = $request->input('gAmount');
        $member->rAmount = $request->input('rAmount');
        $member->tInstallment = $request->input('tInstallment');
        $member->gInstallment = $request->input('gInstallment');
        $member->rInstallment = $request->input('rInstallment');
        $member->save();

        return redirect('/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $w = addmember::find($id);
        $w->delete();
        return redirect('/members');
    }


    public function updateacountinformation($id)
    {
        $w = addmember::find($id);
        return view('posts.uAccount')->with('w', $w);
    }

    public function assignedinformation(Request $request,$id)
    {
        $member = addmember::find($id);
     
        $member->gAmount = $request->input('gAmount') + $member->gAmount;
        $member->rAmount = $member->tAmount - $member->gAmount;
        $member->gInstallment = $member->gInstallment + 1;
        $member->rInstallment = $member->tInstallment - 1;
        $member->save();
        return redirect('/members');
    }

}
