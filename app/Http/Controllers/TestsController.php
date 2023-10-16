<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreTestRequest;
use App\Option;
use App\Measurement;

class TestsController extends Controller
{
    public function select_Measurement( )
    {
        return view('client.select_Measurement');
        
    }
    public function index($Measurement_id)
    {
       $Measurement= Measurement::where('id',$Measurement_id)->first();
        $categories = Category::with(['categoryQuestions' => function ($query) {
                $query->inRandomOrder()
                    ->with(['questionOptions' => function ($query) {
                        $query->inRandomOrder();
                    }]);
            }])
            ->whereHas('categoryQuestions')
            ->get();

        return view('client.test', compact('categories','Measurement'));
    }

    public function store(StoreTestRequest $request,$Measurement_id)
    {
        $options = Option::find(array_values($request->input('questions')));

        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points')
        ]);

         $result->Measurement_id=$Measurement_id;
         $result->save();

         $questions = $options->mapWithKeys(function ($option) 
        {
            return [$option->question_id => [
                        'option_id' => $option->id,
                        'points' => $option->points
                    ]
                ];
        }
    )->toArray();

        $result->questions()->sync($questions);

        return redirect()->route('client.results.show', $result->id);
    }
}
