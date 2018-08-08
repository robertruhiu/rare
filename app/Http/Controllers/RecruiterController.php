<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Candidate_stores;
use App\Profile;
use App\Profilecandidate;
use App\Skill;
use App\CandidateStore;
use App\Stack;
use App\Store;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Assessment;
use App\Frontend;
use App\Backend;
use App\Fullstack;
use App\Typeassessment;


class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile()
    {

        $user = Auth::user();
        return view('pagesrecruter/profileuser',compact('user',$user));
    }

    public function contact()
    {

        $skills = Skill::with('candidates')->get();
        $projects = Candidate::with('profilecandidate')->get();

        return view('pagesrecruter/contact', ['projects' => $projects],['skills' => $skills])->with('profilecandidates', Profilecandidate::all() );
    }

    public function mycontact()
    {
        return view('pagesrecruter/mycontact')->with('candidate_recruiter', Candidate_recruiter::all() );
    }

    public function contact_skill($id){
        $projects = Skill::with(['candidates'])->where('id', $id)->get();

        return view('pagesrecruter/contact_skill', ['projects' => $projects]);
    }

    public function getContact($id){
        $projects = Candidate::with(['skills'])->where('id', $id)->first();

        return view('pagesrecruter/profile', ['project' => $projects])->with('candidate_stores');
    }
    

    public function createprojet()
    {
        $projects = Assessment::all();

        return view('pagesrecruter/createproject', ['projects' => $projects]);
    }
    public function fullstack()
    {
        $projects = Fullstack::all();

        return view('projects.fullstack', ['projects' => $projects]);
    }
    public function library()
    {
        $projects = Assessment::all();

        return view('projects.library', ['projects' => $projects]);
    }
    public function frontend()
    {
        $projects = Frontend::all();

        return view('projects.frontend', ['projects' => $projects]);
    }
    public function backend()
    {
        $projects = Backend::all();

        return view('projects.backend', ['projects' => $projects]);
    }

    public function dashboard()
    {

        $dashboards = DB::table('candidate_stores')->get();

        return view('pagesrecruter/dashboard', ['dashboards' => $dashboards]);

    }
    public function payment()
    {

        return view('pagesrecruter/payment');
    }

    public function project($id)
    {
        $store_id= $id;
        $candidates =DB::table('candidate_stores')->where('store_id','=', $store_id)->get();

        return view('pagesrecruter/project', ['candidates' => $candidates]);

    }

    public function listassessment($id){

        $projects = Candidate::with('profilecandidate')->get();


        $dashboards = DB::table('candidate_stores')->where('store_id', $id)->get();


        return view('pagesrecruter/listassessment', ['dashboards' => $dashboards],['projects' => $projects]);
    }


    public function getAssessment($id){
        $assessments = Assessment::find($id);
        return view('pagesrecruter/chooseframelang', ['assessment' => $assessments])->with('skills', Skill::all() );
    }
    public function getFrontend($id){
        $frontends = Frontend::find($id);
        return view('pagesrecruter/chooseframelangfront', ['frontend' => $frontends])->with('skills', Skill::all() );
    }
    public function getBackend($id){
        $backends = Backend::find($id);
        return view('pagesrecruter/chooseframelangback', ['backend' => $backends])->with('skills', Skill::all() );
    }
    public function getFullstack($id){
        $fullstacks = Fullstack::find($id);
        return view('pagesrecruter/chooseframelangfull', ['fullstack' => $fullstacks])->with('skills', Skill::all() );
    }

    public function getStates($id)
    {
        $states = DB::table("typeskills")->where("skills_id",$id)->pluck("name","id");
        return json_encode($states);
    }

    public function createassessment(Request $request){
        $Store = Store::create(array(
            'user_id' => Auth::user()->id,
            'proglanguage' => Input::get('proglanguage'),
            'framelanguage' => Input::get('framelanguage'),
            'framecss' => Input::get('framecss'),
            'framehtml' => Input::get('framehtml'),
            'assessment_id' => Input::get('assessment_id'),
            'level' => Input::get('level'),
            'company' => Input::get('company'),
            'type' => Input::get('type'),
            'timeassessment' => Input::get('timeassessment'),
            'image1' => Input::get('image1'),
            'requirement1' => Input::get('requirement1'),
            'requirement2' => Input::get('requirement2'),
            'requirement3' => Input::get('requirement3'),
            'requirement4' => Input::get('requirement4'),
            'requirement5' => Input::get('requirement5'),
            'requirement6' => Input::get('requirement6'),
            'description' => Input::get('description'),
            'name' => Input::get('name'),
            'dateassessment' => Input::get('dateassessment'),
            'endassessment' => Input::get('endassessment'),
            'numberapplicant' => Input::get('numberapplicant'),


//            'author' => Auth::user()->id
        ));


        return redirect('payment')->with('success', 'Payment new step!');

    }

   


    public function update_avatar(Request $request){

        $request->validate([
            'name' => 'string',
            'last_name' => 'string',
        ]);

        $user = Auth::user();


        $user->name = $request->name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->zip = $request->zip;
        $user->phone = $request->phone;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->linkedin = $request->linkedin;
        $user->facebook = $request->facebook;
        $user->github = $request->github;
        $user->twitter = $request->twitter;

        $user->save();

        return back()
            ->with('success','You have successfully update your profile.');

    }

    public function update_photo(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully udpate your profile.');

    }


    public function index()
    {
        //

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
        //
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
