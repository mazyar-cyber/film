@extends('admin.layouts.master')
@section('context')
    <div class="row row-sm mt-5 ">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card custom-card">
                <div class="card-header border-bottom-0 pb-0">
                    <div class="d-flex justify-content-between">
                        <h3>ایجاد کاربر</h3>
                        <div class="mr-auto float-right">
                            <a href="{{ route('user.index') }}" class="btn btn-info"> <i
                                    class="fa fa-arrow-right mx-2"></i>برگشت به
                                لیست</a>
                        </div>
                    </div>
                    {{-- <p class="tx-12 tx-gray-500 mt-0 mb-2">api / درج فیلم و سریال </p> --}}
                    <div class="col-sm-12">
                        @if (\Illuminate\Support\Facades\Session::has('user-save'))
                            <div class="alert alert-success text-center">
                                {{ session('user-save') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                        @endif
                    </div>
                    <form action="{{ route('user.store') }}" method="POST" class="my-5" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex row ">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">نام کاربری </label>
                                    <input type="text" class="form-control " name="username" required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">نام </label>
                                    <input type="text" class="form-control " placeholder="نام کاربر" name="name"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">شماره تلفن </label>
                                    <input class="form-control" type="number" name="phoneNumber" required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">ایمیل</label>
                                    <input class="form-control" type="email" name="email" required />
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">رمز عبور</label>
                                    <input class="form-control" type="password" name="password" required />
                                </div>
                                <input type="submit" class="btn btn-info col-sm-12" value="ثبت">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- COL END -->
        </div>
        <!-- row closed  -->
    </div>
@endsection
