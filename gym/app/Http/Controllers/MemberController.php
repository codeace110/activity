<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

use App\Trainer;
use App\Membership;
use App\Member;


class MemberController extends Controller
{
    /**
     * Display a list of members.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $members = Member::all();
        return view('members.index', ['members' => $members]);
        
    }



    /**
     * Show the form for creating a new member.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers = Trainer::all();
        $memberships = Membership::all();
        return view('members.create', compact('trainers','memberships'));
    }

    /**
     * Store a newly created member in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membership_type;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;
        $member->save();
        return redirect('members');
    }

    /**
     * Show the form for editing the specified member.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        $trainers = Trainer::all();
        $memberships = Membership::all();
        return view('members.edit', compact('member','trainers','memberships'));
    }

    /**
     * Update the specified member in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $member = Member::find($id);
    $member->name = $request->name;
    $member->email = $request->email;
    $member->trainer_id = $request->trainer_id;
    $member->membership()->associate($request->membership_id);
    $member->membership->type = $request->membership_type;
    $member->membership->expiration = $request->membership_expiration;
    $member->save();
    return redirect()->route('members.index');
}


    /**
     * Remove the specified member from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('members');
    }
}







// class MemberController extends Controller
// {
//     public function index()
//     {
//         $members = Member::all();
//         return view('members.index', compact('members'));
//     }

//     public function create()
//     {
//         return view('members.create');
//     }

//     public function store(Request $request)
//     {
//         // Validate and store the new member
//         $member = new Member();
//         $member->name = $request->input('name');
//         $member->email = $request->input('email');
//         $member->membership_type = $request->input('membership_type');
//         $member->membership_expiration = $request->input('membership_expiration');
//         $member->save();

//         return redirect()->route('members.index');
//     }

//     public function show($id)
//     {
//         $member = Member::find($id);
//         return view('members.show', compact('member'));
//     }

//     public function edit($id)
//     {
//         $member = Member::find($id);
//         return view('members.edit', compact('member'));
//     }

//     public function update(Request $request, $id)
//     {
//         // Validate and update the member
//         $member = Member::find($id);
//         $member->name = $request->input('name');
//         $member->email = $request->input('email');
//         $member->membership_type = $request->input('membership_type');
//         $member->membership_expiration = $request->input('membership_expiration');
//         $member->save();

//         return redirect()->route('members.index');
//     }

//     public function destroy($id)
//     {
//         $member = Member::find($id);
//         $member->delete();

//         return redirect()->route('members.index');
//     }
// }