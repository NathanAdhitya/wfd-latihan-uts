<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function submit(Request $request){
        $validated = $request->validate([
            'movie_id' => "exists:movies,id",
            'customer_name' => 'required|string|max:100',
            'seat_number' => 'required|string|max:100'
        ]);

        Ticket::create($validated);

        return redirect()->back()->with("success", "Ticket created");
    }

    public function checkin(Ticket $ticket){
        // Can only checked in tickets not checked in yet
        if($ticket->is_checked_in == false){
            $ticket->is_checked_in = true;
            $ticket->checked_in_time = now();
            $ticket->save();

            return redirect()->back()->with("success", "Ticket checked in");
        }

        return redirect()->back()->with("error", "Ticket is already checked in");
    }

    public function delete(Ticket $ticket){
        // Can only deleted tickets not checked in yet
        if($ticket->is_checked_in == false){
            $ticket->delete();

            return redirect()->back()->with("success", "Ticket deleted");
        }

        return redirect()->back()->with("error", "Ticket is already checked in");
    }
}
