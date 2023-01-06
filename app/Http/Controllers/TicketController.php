<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Ticket;
use App\Models\File;
use App\Models\TicketActivity;
use App\Models\TicketTypes;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        $open = [];
        $waiting = [];
        $closed = [];

        foreach ($tickets as $ticket) {
            switch ($ticket->request_status) {
                case 'open';
                    $open[] = $ticket;
                    break;
                case 'waiting';
                    $waiting[] = $ticket;
                    break;
                case 'closed';
                    $closed[] = $ticket;
                    break;
                default;
                    break;
            }
        }

        return view('tickets.list', compact('open', 'waiting', 'closed'));
    }

    public function show(int $id)
    {
        $ticket = Ticket::find($id);
        $activities = TicketActivity::query()->where('ticket_id', '=', $id)->get();
        $files = File::query()->where('ticket_id', '=', $id)->get();
        return view('tickets.show', compact('ticket', 'activities', 'files'));
    }

    public function create()
    {
        $customers = Customer::all();
        $cities = CustomerController::CITIES;
        $types = TicketTypes::all();
        return view('tickets.create', compact('customers', 'cities', 'types'));
    }

    public function store(Request $request)
    {
        Ticket::create($request->all());
        return redirect()->route('tickets.index');
    }

    public function edit(Ticket $ticket)
    {
        $files = File::query()->where('ticket_id', '=', $ticket->id)->get();
        return view('tickets.edit', compact('ticket', 'files'));
    }

    public function update(Request $request, int $id)
    {
        $ticket = Ticket::find($id);
        $ticket->customer_name = $request->get('customer_name');
        $ticket->subject = $request->get('subject');
        $ticket->authorized_personnel = $request->get('authorized_personnel');
        $ticket->request_type = $request->get('request_type');
        $ticket->request_description = $request->get('request_description');
        $ticket->phone = $request->get('phone');
        $ticket->address = $request->get('address');
        $ticket->request_status = $request->get('request_status');
        $ticket->location = $request->get('location');
        $ticket->partner = $request->get('partner');
        $ticket->save();
        return redirect()->route('tickets.index');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index');
    }
}
