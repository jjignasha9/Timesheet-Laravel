@extends('layouts.master')

@section('content')

<div class="h-screen mt-5">

    <div class="flex items-center justify-end mb-5">
        <a href="{{ route('clients.create') }}" class="bg-blue-400 py-2 px-8 text-white font-semibold font-medium rounded-full hover:bg-blue-600">Add Client</a>
    </div>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                  <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                
                @foreach($clients as $client)
                
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm font-medium text-gray-900">{{ $client->name }}</div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{{ $client->email }}</div>
                      <div class="text-sm text-gray-500"></div>
                    </td>
                    
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">{{ $client->address }}</div>
                      <div class="text-sm text-gray-500"></div>
                    </td>
                    
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $client->user_role->name }}</td>
    
                     <td class="p-5 flex justify-center gap-2 items-center">
                      <div class="flex gap-2">
                        <div>
                          <a href="{{ route('clients.edit',$client->id) }}" class="bg-blue-400 hover:bg-blue-600 px-4 py-2 text-white font-semibold font-medium gap-1 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>Edit
                          </a>
                        </div>
                        <div>
                          <button type="submit" id="{{ $client->id }}" token="{{ csrf_token() }}" route="/clients/destroy/" class="bg-red-500 hover:bg-red-600 px-4 py-2 text-white font-semibold font-medium gap-1 rounded-full flex items-center delete" >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                               </svg>Delete
                             </button>
                          </div>
                        </div>
                      </td>
                    </tr>

                  @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection