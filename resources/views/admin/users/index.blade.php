@extends('admin.layouts.master')
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#option3").click(function() {
                if (this.checked) {
                    $(".checkBox").each(function() {
                        this.checked = true
                    })
                } else {
                    $(".checkBox").each(function() {
                        this.checked = false
                    })
                }
            })
        })
    </script>
@endsection
@section('context')
    <div class="row row-sm mt-5">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
            <div class="card custom-card">
                <div class="card-header border-bottom-0 pb-0">
                    <div class="d-flex justify-content-between">
                        <h3>لیست اطلاعات ثبت شده</h3>
                    </div>
                </div>
                <div class="mr-auto float-right">
                    <a href="http://127.0.0.1:8000/admin/user/create" class="btn btn-info"> <i
                            class="fa fa-arrow-right mx-2"></i>برگشت به
                        ایجاد</a>
                </div>
                <form action="{{ route('user.selectedDel') }}" method="post">
                    @csrf
                    <input type="hidden" name="checkBoxArray" value="حدف موارد انتخاب شده">
                    <input type="submit" value="delete" name="submit" class="btn btn-danger">

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
                                        <th><input type="checkbox" name="checkBoxArray" id="option3"></th>
                                        <th class="wd-lg-8p"><span> ردیف</span></th>
                                        <th class="wd-lg-8p"><span>نام </span></th>
                                        <th class="wd-lg-20p"><span>نام کاربری</span></th>
                                        <th class="wd-lg-20p"><span>ایمیل</span></th>
                                        <th class="wd-lg-20p"><span>شماره تلفن</span></th>
                                        <th class="wd-lg-20p"><span>جزئیات</span></th>
                                        <th class="wd-lg-20p">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $d)
                                        <tr>
                                            <td><input class="checkBox" type="checkbox" name="checkBoxArray[]"
                                                    value="{{ $d->id }}"></td>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>
                                                {{ $d->username }}
                                            </td>
                                            <td>
                                                {{ $d->email }}
                                            </td>
                                            <td>
                                                {{ $d->phoneNumber }}
                                            </td>
                                            <td>
                                                <a href="">click here!</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('user.edit', $d->id) }}" class="btn btn-sm btn-info"
                                                    title="ویرایش">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <form method="post" action="{{ route('user.destroy', $d->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger" title="حذف">
                                                        <i class="fe fe-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- COL END -->
    </div>
@endsection
