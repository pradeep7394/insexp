<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Income & Expense
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    Income & Expense
                                </div>
                                <div class="col-6">
                                    <h6 class="float-end">Total Balance : {{$totalbalance}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class=" card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;

                                    @endphp

                                    @foreach($income as $inexps)
                                    <tr>

                                        <th scope="row">{{$i++}}</th>
                                        @if($inexps->type==1)
                                        <td>Income</td>
                                        @else
                                        <td>Expense</td>
                                        @endif
                                        <td>{{$inexps->amount}}</td>
                                        <td>{{$inexps->details}}</td>
                                        <td>{{ date('d-m-y', strtotime($inexps->date)) }}</td>
                                        <td><a href="{{ url('income/edit/'.$inexps->id)}}" class="btn btn-info">Edit</a>
                                            <a href="{{url('/pdelete/income/'.$inexps->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('store.income') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Income & Expense</label>
                                    <select class="form-select" aria-label="Default select example" name="incomeexpense">
                                        <option value="">Select Income & Expense </option>
                                        <option value="1">Income</option>
                                        <option value="2">Expense</option>
                                    </select>
                                    @error('incomeexpense')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" placeholder="" name="amount">
                                    @error('amount')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                                    <textarea class="form-control" id="details" name="details" rows="3"></textarea>
                                    @error('details')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Date</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date">
                                    @error('date')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary col-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>