<?php

namespace App\Http\Controllers;
use App\Models\{User, Task, Timesheet, Attendance, Leave_application, Assessment, Staff_performance, Payslip, Performance_type, Performance};
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    function index(){

        if(auth()->user()->role == 'admin'){
            $page_data['users'] = User::where('status', 'active')->orderBy('sort')->get();
        }else{
            $page_data['users'] = User::where('id', auth()->user()->id)->get();
        }
        $page_data['performance_types'] = Performance_type::get();
        return view(auth()->user()->role.'.performance.index', $page_data);
    }

    function store(Request $request){
        $this->validate($request,[
            'user_id'=>'required'
        ]);


        $data['user_id'] = $request->user_id;
        $data['remarks'] = $request->remarks;
        $data['ratings'] = json_encode($request->ratings);
        $data['created_at'] = $request->created_at;

        Performance::insertGetId($data);

        return redirect(route('admin.performance'))->with('success_message', __('Performance successfully reviewed'));
    }

    function update($id, Request $request){
        $this->validate($request,[
            'user_id'=>'required'
        ]);


        $data['remarks'] = $request->remarks;
        $data['ratings'] = json_encode($request->ratings);
        $data['created_at'] = $request->created_at;

        Performance::where('id', $id)->update($data);
        return redirect(route('admin.performance'))->with('success_message', __('Reviewed successfully updated'));
    }

    function delete(Request $request){
        Performance::where('id', $request->id)->delete();
        return redirect(route('admin.performance'))->with('success_message', get_phrase('Review deleted successfully'));
    }

}
