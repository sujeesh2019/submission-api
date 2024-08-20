<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SaveSubmissionJob;

class SubmissionController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        // Dispatch the job to save the submission
        SaveSubmissionJob::dispatch($validated);

        return response()->json(['message' => 'Submission received, processing...'], 202);
    }
}
