<?php

namespace App\Http\Controllers;

use App\Models\Incomeexpenses;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeexpenseController extends Controller
{
    public function Allincome()
    {
        $income = Incomeexpenses::latest()->get();
        $incomeamount = 0;
        $expenseamount = 0;
        $totalbalance = 0;
        foreach ($income as $value) {
            if ($value->type == 1) {
                $incomeamount = $incomeamount + $value->amount;
            } else {
                $expenseamount = $expenseamount + $value->amount;
            }
        }

        $totalbalance = $incomeamount - $expenseamount;

        return view('incomeexpense.index')->with(array('income' => $income, 'totalbalance' => $totalbalance));
    }

    public function Add(Request $request)
    {
        $validated = $request->validate([
            'incomeexpense' => 'required',
            'amount' => 'required',
            'details' => 'required',
            'date' => 'required',
        ]);

        Incomeexpenses::insert([
            'type' => $request->incomeexpense,
            'amount' => $request->amount,
            'details' => $request->details,
            'date' => date('Y-m-d', strtotime($request->date)),
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()

        ]);
        return Redirect()->back()->with('success', "Income & Expense save successfully");
    }

    public function Edit($id)
    {

        $income = Incomeexpenses::find($id);
        return view('incomeexpense.edit', compact('income'));
    }

    public function Update(Request $request, $id)
    {
        $update = Incomeexpenses::find($id)->update([
            'type' => $request->incomeexpense,
            'amount' => $request->amount,
            'details' => $request->details,
            'date' => date('Y-m-d', strtotime($request->date)),
            'user_id' => Auth::user()->id,
            'updated_at' => Carbon::now()

        ]);
        return Redirect()->route('all.income')->with('success', "Income & Expense updated successfully");
    }

    public function Pdelete($id)
    {

        $delete = Incomeexpenses::where('id', $id)->delete();
        return Redirect()->back()->with('success', "Deleted successfully");
    }
}
