<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderApiController extends Controller
{
    /**
     * List all orders
     * GET /api/admin/orders
     */
    public function index(Request $request)
    {
        $query = Order::with('items');
        
        // Filter by status if provided
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }
        
        // Sort by latest first
        $orders = $query->orderBy('id', 'desc')->get();
        
        return response()->json([
            'success' => true,
            'data' => $orders,
            'count' => $orders->count(),
        ], 200);
    }

    /**
     * Show single order
     * GET /api/admin/orders/{id}
     */
    public function show($id)
    {
        $order = Order::with('items')->find($id);
        
        if (!$order) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $order,
        ], 200);
    }

    /**
     * Update order status
     * PUT /api/admin/orders/{id}
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        
        if (!$order) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found',
            ], 404);
        }

        $data = $request->validate([
            'status' => 'required|string|in:pending,processing,completed,cancelled',
        ]);

        $order->update($data);
        $order->load('items');

        return response()->json([
            'success' => true,
            'message' => 'Order updated successfully',
            'data' => $order,
        ], 200);
    }

    /**
     * Delete order
     * DELETE /api/admin/orders/{id}
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        
        if (!$order) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found',
            ], 404);
        }

        $order->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order deleted successfully',
        ], 200);
    }

    /**
     * Get order statistics
     * GET /api/admin/orders/stats
     */
    public function stats()
    {
        $stats = [
            'total' => Order::count(),
            'pending' => Order::where('status', 'pending')->count(),
            'processing' => Order::where('status', 'processing')->count(),
            'completed' => Order::where('status', 'completed')->count(),
            'cancelled' => Order::where('status', 'cancelled')->count(),
            'total_revenue' => Order::where('status', 'completed')->sum('total'),
        ];

        return response()->json([
            'success' => true,
            'data' => $stats,
        ], 200);
    }
}

