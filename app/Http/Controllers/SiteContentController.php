<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContent;
use App\Projet;
use App\Services;
use App\Carousel;
use App\User;
use App\Testimonial;
class SiteContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site = SiteContent::first();
        $projet=Projet::all();
        $service = Services::paginate(9);
        $carousel=Carousel::all();
        $user=User::all()->take(3);
        $testimonial=Testimonial::all();  
        
        return view('index', compact('site','projet','service','carousel','user','testimonial'));
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
     * @param  \App\SiteContent  $siteContent
     * @return \Illuminate\Http\Response
     */
    public function show(SiteContent $siteContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteContent  $siteContent
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteContent $siteContent)
    {
        $site=SiteContent::first();
        return view ('Sitecontent.sitecontent-edit',compact('site'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteContent  $siteContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteContent $siteContent)
    {
        $newsite = SiteContent::first();
        $newsite->titrecarousel = $request->titrecarousel;
        $newsite->titrevideo = $request->titrevideo;
        $newsite->textupvideo = $request->textupvideo;
        $newsite->textupvideo2 = $request->textupvideo2;
        $newsite->lienvideo = $request->lienvideo;
        $newsite->titretestimonial = $request->titretestimonial;
        $newsite->titreservice = $request->titreservice;
        $newsite->titreteam = $request->titreteam;
        $newsite->titrepromotion= $request->titrepromotion;
        $newsite->stpromotion = $request->stpromotion;
        $newsite->titrecontact = $request->titrecontact;
        $newsite->stcontact = $request->stcontact;
        $newsite->titreadresse = $request->titreadresse;
        $newsite->stadresse = $request->stadresse;
        $newsite->stville = $request->stville;
        $newsite->stnumero = $request->stnumero;
        $newsite->stemail = $request->stemail;
        $newsite->save();
        return view ('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteContent  $siteContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteContent $siteContent)
    {
        //
    }
}
