@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="title m-b-md text-center">
                MAGGIE List
            </div>
           <div class="container">
               <table class="table table-striped" style="font-size: 18px;">
                   <thead>
                   <tr>
                       <th>maggie ID</th>
                       <th>maggie Name</th>
                       <th>Price</th>
                       <th>Size</th>
                   </tr>
                   </thead>
                   <tbody>
                   @forelse($maggies as $maggie)
                       <tr>
                           <td>{{$maggie->id}}</td>
                           <td>{{$maggie->name}}</td>
                           <td>{{$maggie->price}}</td>
                       </tr>
                   @empty
                       <tr>
                           <td colspan="3">NO PIZZAS</td>
                       </tr>
                   @endforelse
                   </tbody>
               </table>     
           </div>
        </div>

    </div>
@endsection

