<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Income & Expense
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('income/update/'.$income->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Income & Expense</label>
                                    <select class="form-select" aria-label="Default select example" name="incomeexpense">
                                        <option value="">Select Income & Expense </option>
                                        <option value="1" {{ ($income->type) == '1' ? 'selected' : '' }}>Income</option>
                                        <option value="2" {{ ($income->type) == '2' ? 'selected' : '' }}>Expense</option>
                                    </select>
                                    @error('incomeexpense')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Amount</label>
                                    <input type="number" class="form-control" id="amount" placeholder="" name="amount" value="{{$income->amount}}">
                                    @error('amount')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                                    <textarea class="form-control" id="details" name="details" rows="3">{{$income->details}}</textarea>
                                    @error('details')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Date</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date" value="{{ $income->date }}">
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