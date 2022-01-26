@extends('layouts.user-detail-layout')

@section('user_content')
    <!-- DataTbales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Purchases of <span class="text-info">{{ $user->name }}</span></h5>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="col-12">
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center pr-5">Date</th>
                            <th class="text-center">Customer Name</th>
                            <th class="text-center">Challan No</th>
                            <th class="text-center">Unit Price</th>
                            <th class="text-center pr-5">Total Price</th>
                            <th class="text-right pr-5">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($user->purchases as $purchase)
                        <tr>
                            <td class="text-center">{{ $purchase->date }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $purchase->challan_no }}</td>
                            <td class="text-center">200</td>
                            <td class="text-center">300</td>
                            <td class="text-right pr-4">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info"><i
                                        class="far fa-edit"></i></a>
                                <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    <!-- Modal -->
        <div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="purchaseModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="purchaseModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection