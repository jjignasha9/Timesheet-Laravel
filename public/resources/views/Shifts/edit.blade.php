@extends('layouts.master')

@section('content')
<div class="p-10 mt-5 bg-white rounded-lg">
	<form action="{{ route('shifts.update',$shift->id) }}" method="POST">
    	@csrf
	    <div class="font-bold">
	    	<label class="ml-5 text-gray-600">Shifts</label>
	    	<select name="name" value="{{ $shift->name }}" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 rounded-full pl-5">
	    		<option>regular</option>
	    		<option>1st shift</option>
	    		<option>2nd shift</option>
	    		<option>3rd shift</option>
	    		<option>we shift</option>
	    	</select>
	    	@error('name')
	    	   <div class="text-red-700 ml-5 mb-1 font-medium">{{ $message }}</div>
	    	@enderror
	    </div>
    
	    <div class="mt-10 ml-2">
    	    <a href="{{ route('shifts') }}" class="bg-white border-2 border-black py-2 px-8 text-black font-semibold font-medium rounded-full hover:bg-black hover:text-white mr-5">Cancel</a> 
    
           	<button class="bg-blue-400 py-2 px-8 text-white font-semibold font-medium rounded-full hover:bg-blue-700">update</button>
        </div>
    </form>
  </div>
@endsection