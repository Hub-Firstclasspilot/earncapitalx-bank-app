<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = "Welcome | Home Page";

        return view('pages.index', compact('title'));
    }

    public function showCryptoPage()
    {
        $title ='Cryptocurrencies';

        return view('pages.crytopcurrencies', compact('title'));
    }


    public function showExpertsPage()
    {
        $title = 'Experts';

        return view('pages.experts', compact('title'));
    }

    public function showEventsPage()
    {
        $title = 'Events';

        return view('pages.events', compact('title'));
    }

    public function showEventDetailsPage()
    {
        $title = 'Event Details';

        return view('pages.event_details', compact('title'));
    }

    public function showTabsPage()
    {
        $title = 'Tabs';

        return view('pages.tabs', compact('title'));
    }

    public function showContactsPage()
    {
        $title = 'Contacts';

        return view('pages.contacts', compact('title'));
    }
}
