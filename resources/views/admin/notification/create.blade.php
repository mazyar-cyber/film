@extends('admin.layouts.master')
@section('context')
    <div class="row row-sm mt-5 ">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card custom-card">
                <div class="card-header border-bottom-0 pb-0">
                    <div class="d-flex justify-content-between">
                        <h3>ایجاد اطلاعیه</h3>
                        <div class="mr-auto float-right">
                            <a href="{{ route('notification.index') }}" class="btn btn-info"> <i
                                    class="fa fa-arrow-right mx-2"></i>برگشت به
                                لیست</a>
                        </div>
                    </div>
                    {{-- <p class="tx-12 tx-gray-500 mt-0 mb-2">api / درج فیلم و سریال </p> --}}
                    <div class="col-sm-12">
                        @if (\Illuminate\Support\Facades\Session::has('notification-save'))
                            <div class="alert alert-success text-center">
                                {{ session('notification-save') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                        @endif
                    </div>
                    <form action="{{ route('notification.store') }}" method="POST" class="my-5"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex row ">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">متن اطلاعیه </label>
                                    <textarea name="NotificationText" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">نمایش اطلاعیه برای
                                        کاربران</label>
                                    <select name="forUser" class="form-control">
                                        <option value="allUser">همه ی کاربران</option>
                                        <option value="VIP">کاربران ویژه</option>
                                        <option value="freeUser">کاربران رایگان</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">وضعیت درگاه</label>
                                    <select name="paymentStatus" class="form-control">
                                        <option value="directAll">مستقیم برای همه</option>
                                        <option value="NotDirect">غیر مستقیم</option>
                                        <option value="directForExtend">مستقیم برای تمدید</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="addres-article" class="addres-article my-2">درگاه بانکی</label>
                                    <select name="bankPayment" class="form-control">
                                        <option value="vanDar">ون دار</option>
                                        <option value="tizPay">تیز پی</option>
                                    </select>
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
