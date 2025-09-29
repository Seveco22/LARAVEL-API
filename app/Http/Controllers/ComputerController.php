<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $computers = Computer::all();
        
        return response()->json($computers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComputerRequest $request): JsonResponse
    {
        $computer = Computer::create($request->validated());
        
        return response()->json($computer, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $computer = Computer::find($id);
        
        if (!$computer) {
            return response()->json(['error' => 'Computer not found'], 404);
        }
        
        return response()->json($computer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComputerRequest $request, string $id): JsonResponse
    {
        $computer = Computer::find($id);
        
        if (!$computer) {
            return response()->json(['error' => 'Computer not found'], 404);
        }
        
        $computer->update($request->validated());
        
        return response()->json($computer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $computer = Computer::find($id);
        
        if (!$computer) {
            return response()->json(['error' => 'Computer not found'], 404);
        }
        
        $computer->delete();
        
        return response()->json(['message' => 'Computer deleted successfully']);
    }
}
