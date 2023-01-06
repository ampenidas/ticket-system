<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Inventory;
use App\Models\InventoryStatuses;
use App\Models\InventoryTypes;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        foreach ($inventories as $inventory) {
            $inventory->installation_date = date('Y-m-d');
        }
        return view('inventories.list', compact('inventories'));
    }

    public function create()
    {
        $customers = Customer::all();
        $types = InventoryTypes::all();
        $statuses = InventoryStatuses::all();
        return view('inventories.create', compact('customers', 'types', 'statuses'));
    }

    public function store(Request $request)
    {
        Inventory::create($request->all());
        return redirect()->route('inventory.index');
    }

    public function edit(Inventory $inventory)
    {
        $types = InventoryTypes::all();
        $statuses = InventoryStatuses::all();
        $inventory->installation_date = date('Y-m-d');
        return view('inventories.edit', compact('inventory', 'types', 'statuses'));
    }

    public function update(Request $request, int $id)
    {
        $inventory = Inventory::find($id);
        $inventory->serial_number = $request->get('serial_number');
        $inventory->definition = $request->get('definition');
        $inventory->assigned_customer = $request->get('assigned_customer');
        $inventory->type = $request->get('type');
        $inventory->status = $request->get('status');
        $inventory->installation_date = $request->get('installation_date');
        $inventory->description = $request->get('description');
        $inventory->save();
        return redirect()->route('inventory.index');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventory.index');
    }
}
