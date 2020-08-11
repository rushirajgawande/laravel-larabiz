<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Listing;
class ListingController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth',['except'=>['index','show']]);
   }
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $listings = Listing::orderby('created_at','desc')->get();
      return view('listings')->with('listings', $listings);
   }
   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      return view('createlisting');
   }
   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      $listing = new Listing;
      $listing->name = $request->input('name');
      $listing->website = $request->input('website');
      $listing->email = $request->input('email');
      $listing->phone = $request->input('phone');
      $listing->address = $request->input('address');
      $listing->bio = $request->input('bio');
      $listing->user_id = auth()->user()->id;
      $listing->save();
      return redirect('/home')->with('success', 'Listing created Successfully!!');
   }
   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show($id)
   {
      $listing = Listing::Find($id);
      return view('showlisting')->with('listing', $listing);
   }
   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit($id)
   {
      $listing = Listing::Find($id);
      return view('editlisting')->with('listing', $listing);
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
      $listing = Listing::Find($id);
      $listing->name = $request->input('name');
      $listing->website = $request->input('website');
      $listing->email = $request->input('email');
      $listing->phone = $request->input('phone');
      $listing->address = $request->input('address');
      $listing->bio = $request->input('bio');
      $listing->user_id = auth()->user()->id;
      $listing->save();
      return redirect('/home')->with('success', 'Listing Updated Successfully!!');
   }
   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
      $listing = Listing::Find($id);
      $listing->delete();
      return redirect('/home')->with('success', 'Listing Removed!!');
   }
}
