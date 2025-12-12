<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactApiController extends Controller
{
    /**
     * List all contacts
     * GET /api/admin/contacts
     */
    public function index(Request $request)
    {
        $query = Contact::query();
        
        // Pagination
        $perPage = $request->get('per_page', 10);
        $contacts = $query->latest()->paginate($perPage);
        
        return response()->json([
            'success' => true,
            'data' => $contacts->items(),
            'pagination' => [
                'current_page' => $contacts->currentPage(),
                'last_page' => $contacts->lastPage(),
                'per_page' => $contacts->perPage(),
                'total' => $contacts->total(),
            ],
        ], 200);
    }

    /**
     * Show single contact
     * GET /api/admin/contacts/{id}
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        
        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Contact not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $contact,
        ], 200);
    }

    /**
     * Delete contact
     * DELETE /api/admin/contacts/{id}
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        
        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Contact not found',
            ], 404);
        }

        $contact->delete();

        return response()->json([
            'success' => true,
            'message' => 'Contact deleted successfully',
        ], 200);
    }
}

