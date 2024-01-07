<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\TuitionPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // $tuitionposts=TuitionPost::all();

        $tuitionposts = TuitionPost::where('role', '=', 'tutor')->where('status', 'approved')->get();

        $studentposts = TuitionPost::where('role', '=', 'student')->where('status', 'approved')->get();
        //dd( $studentposts->toarray());
        return view('frontend.partial.homeDashboard', compact('studentposts', 'tuitionposts'));
    }

    public function about_page(){
        return view('frontend.pages.aboutPage');
    }


    // search option
    public function search(Request $request)
    {
        // Initialize $relatedposts as an empty collection
        $relatedposts = collect();

        // Determine the user role
        $userRole = optional(auth('member')->user())->role;

        if ($request->search) {
            // When there is a search term
            $query = TuitionPost::where('status', 'approved');

            // Modify the query based on user role
            if ($userRole == 'student') {
                $query->where('role', 'tutor');
            } elseif ($userRole == 'teacher') {
                $query->where('role', 'student');
            }

            // Apply the subject filter
            $relatedposts = $query->where('subject_name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            // When there is no search term
            // Display all approved posts based on user role
            $relatedposts = TuitionPost::where('status', 'approved');

            if ($userRole == 'student') {
                $relatedposts->where('role', 'tutor');
            } elseif ($userRole == 'teacher') {
                $relatedposts->where('role', 'student');
            }

            $relatedposts = $relatedposts->get();
        }

        

        // Return the view with the data
        return view("frontend.pages.search", compact('relatedposts'));
    }
}
