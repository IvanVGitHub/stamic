<?php

namespace App\Http\Controllers;

use App\Models\CallRequest;
use Illuminate\Http\Request;

class CallRequestController extends Controller
{
    public function index()
    {
        return CallRequest::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['sometimes|nullable'],
            'lastname' => ['sometimes|nullable'],
            'email' => ['required', 'email', 'max:254'],
            'phone' => ['sometimes|nullable'],
            'data' => ['sometimes|nullable'],
            'comment' => ['sometimes|nullable'],
        ]);

        return CallRequest::create($request->validated());
    }

    public function show(CallRequest $callRequest)
    {
        return $callRequest;
    }

    public function update(Request $request, CallRequest $callRequest)
    {
        $request->validate([
            'name' => ['sometimes|nullable'],
            'lastname' => ['sometimes|nullable'],
            'email' => ['required', 'email', 'max:254'],
            'phone' => ['sometimes|nullable'],
            'data' => ['sometimes|nullable'],
            'comment' => ['sometimes|nullable'],
        ]);

        $callRequest->update($request->validated());

        return $callRequest;
    }

    public function destroy(CallRequest $callRequest)
    {
        $callRequest->delete();

        return response()->json();
    }
}
