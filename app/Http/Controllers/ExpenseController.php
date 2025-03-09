<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Category;  
use Illuminate\Support\Facades\Auth;



class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all(); // Fetch all expenses
        return view('expenses.index', ['expenses' => $expenses]); // Pass data to the view
    }

    public function create(){
        $categories = Category::all();
        return view('expenses.create', compact('categories')); // ✅ CORRECT
        
    }
    function store(Request $request)
{
    // Debug user authentication
   

    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'amount' => 'required|numeric',
        'date' => 'required|date',
        'description' => 'nullable|string',
    ]);

    Expense::create([
        'user_id' => 1, // Assign a default user ID manually
        'category_id' => $request->category_id,
        'amount' => $request->amount,
        'date' => $request->date,
        'description' => $request->description,
    ]);

    return redirect()->route('expenses.index')->with('success', 'Expense added');
}
function  destroy(Expense $expense){
    $expense->delete();
    return redirect()->route('expenses.index')->with('success', 'Expense Deleted');
}
public function edit($id)
{
    $expense = Expense::findOrFail($id);
    $categories = Category::all(); 
    return view('expenses.edit', compact('expense', 'categories'));
}


public function update(Request $request,Expense $expense){
    $request->validate([
      
            'category_id' => 'required|exists:categories,id',  
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',  
            'description' => 'nullable|string|max:255', 
    ]);

    $expense->update([
        
        'category_id' => $request->category_id, 
        'amount' => $request->amount,  
        'date' => $request->date,  
        'description' => $request->description,  
    ]);
    return redirect()->route('expenses.index')->with('success','Expense Updated Successfully');
}
    
}


