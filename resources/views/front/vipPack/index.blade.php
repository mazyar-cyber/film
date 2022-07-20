@extends('admin.layouts.master')
@section('context')
    <div class="row row-sm mt-5">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card custom-card">
                <div class="card-header border-bottom-0 pb-0">
                    <div class="d-flex justify-content-between">
                        <h3>لیست طرح ها</h3>
                    </div>
                </div>
                <div class="mr-auto float-right">
                    <a href="http://127.0.0.1:8000/admin/vippack/create" class="btn btn-info"> <i
                            class="fa fa-arrow-right mx-2"></i>برگشت به
                        ایجاد</a>
                </div>


                @error('payment_error')
                    <div class="col-sm-12 text-center alert alert-danger"> {{ $message }}</div>
                @enderror

                @if (\Illuminate\Support\Facades\Session::has('record-delete'))
                    <div class="alert alert-info text-center col-sm-12">
                        {{ session('record-delete') }}
                    </div>
                @endif
                @error('checkBoxArray')
                    <div class="alert alert-warning text-center">{{ $message }}</div>
                @enderror
                <div class="card-body">
                    <div class="table-responsive border userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-8p"><span> ردیف</span></th>
                                    <th class="wd-lg-8p"><span>نام </span></th>
                                    <th class="wd-lg-20p"><span>مدت زمان اعتبار</span></th>
                                    <th class="wd-lg-20p"><span>قیمت به ریال</span></th>
                                    <th></th>
                                    {{-- <th class="wd-lg-20p">عملیات</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $d)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>
                                            {{ $d->time }}
                                        </td>
                                        <td>
                                            {{ $d->price }}
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('checkFor.pay') }}">
                                                @csrf
                                                <input type="hidden" name="api_key" value="{{ env('VANDARVIPKEY') }}">
                                                <input type="hidden" name="amount" value="{{ $d->price }}">
                                                <input type="hidden" name="callback_url"
                                                    value="{{ env('VANDAR_CALLBACK_URL') }}">
                                                <button class="btn btn-success">خرید</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- COL END -->
    </div>
@endsection
