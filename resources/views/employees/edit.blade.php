@extends('layouts.master')

@section('content')
<div class="p-10 mt-5 bg-white rounded-lg">
	<form action="{{ route('employees.update',$employee->id) }}" method="POST">
		@csrf  
	  	<div class="font-bold">
	    	<label class="ml-5 text-gray-600">Name</label>
	    	<input type="text" name="name" placeholder="Name" value="{{ $employee->name }}" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 rounded-full pl-5">
	    	@error('name')
	    	   <div class="text-red-700 mb-1 font-medium">{{ $message }}</div>
	    	@enderror
	    </div>

	    <div class="mt-5 font-bold">
	    	<label class="ml-5 text-gray-600">Email</label>
	    	<input type="text" name="email" placeholder="Email" value="{{ $employee->email }}" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 rounded-full pl-5">
	    	@error('email')
	    	   <div class="text-red-700 ml-5 mb-1 font-medium">{{ $message }}</div>
	    	@enderror
	    </div>

	   <div class="mt-5 font-bold">
    		<label class="ml-5 text-gray-600">Address</label>
	    	<input type="text" name="address" placeholder="Address" value="{{ $employee->address }}" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 rounded-full pl-5">
	    	@error('address')
	    	   <div class="text-red-700 ml-5 mb-1 font-medium">{{ $message }}</div>
	    	@enderror
	    </div>

	     <div class="mt-5 font-bold">
	    	<label class="ml-5 text-gray-600">Client Name</label>
	    	<select name="client_id" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 rounded-full pl-5">
	    		<option>Select</option>
	    		@foreach ($clients as $client)
                <option  value="{{ $client->id }}" {{ $client->id == $employee->client_by_employee->client_id ? 'selected' : '' }}>{{ $client->name }}</option>
                @endforeach
	    	</select>
	    	@error('client_id')
	    	   <div class="text-red-700 ml-5 mb-1 font-medium">{{ $message }}</div>
	    	@enderror
	    </div>

    	<div class="mt-5">
			<a href="{{ route('employees') }}" class="bg-white border-2 border-black py-2 px-8 text-black font-semibold font-medium rounded-full hover:bg-black hover:text-white mr-5">Cancel</a> 

			<button class="bg-blue-400 py-2 px-8 text-white font-semibold font-medium rounded-full hover:bg-blue-600">Update</button> 
    	</div>


    </form>
</div>
@endsection