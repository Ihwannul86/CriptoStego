<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Document;
use App\Models\ActivityLog;

class DashboardController extends Controller
{
    public function index()
    {
        /*
        Documents milik user
        */
        $documents = Document::where(
                'user_id',
                Auth::id()
            )
            ->latest()
            ->get();

        /*
        Activity logs user (ambil 5 terbaru)
        */
        $activityLogs = ActivityLog::where(
                'user_id',
                Auth::id()
            )
            ->latest()
            ->take(5)
            ->get();

        return view(
            'dashboard',
            compact(
                'documents',
                'activityLogs'
            )
        );
    }
}
