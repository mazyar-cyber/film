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
                        <h3>لیست سریال ها</h3>
                    </div>
                </div>
                <div class="mr-auto float-right">
                    <a href="http://127.0.0.1:8000/admin/serial/create" class="btn btn-info"> <i
                            class="fa fa-arrow-right mx-2"></i>برگشت به
                        ایجاد</a>
                </div>
                <form action="{{ route('serial.selectedDel') }}" method="post">
                    @csrf
                    <input type="hidden" name="checkBoxArray" value="حدف موارد انتخاب شده">
                    <input type="submit" value="حذف موارد انتخاب شده" name="submit" class="btn btn-danger">

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
                                        <th class="wd-lg-8p"><span>عنوان </span></th>
                                        <th class="wd-lg-8p"><span>نوع</span></th>
                                        <th class="wd-lg-8p"><span>عنوان فارسی</span></th>
                                        <th class="wd-lg-20p"><span>آیدی IMDB</span></th>
                                        <th class="wd-lg-20p"><span>عکس</span></th>
                                        <th class="wd-lg-20p"><span>عکس اسلایدر</span></th>
                                        <th class="wd-lg-20p"><span>خلاصه</span></th>
                                        <th class="wd-lg-20p"><span>آخرین آپدیت</span></th>
                                        <th class="wd-lg-20p"><span>وضعیت پخش</span></th>
                                        <th class="wd-lg-20p"><span>کانال</span></th>
                                        <th class="wd-lg-20p">توضیحات</th>
                                        <th class="wd-lg-20p">به زودی</th>
                                        <th class="wd-lg-20p">دوبله</th>
                                        <th class="wd-lg-20p">درخواستی</th>
                                        <th class="wd-lg-20p">زیرنویس چسپیده</th>
                                        <th class="wd-lg-20p">بهترین فیلم های جدید</th>
                                        <th class="wd-lg-20p">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $d)
                                        <tr>
                                            <td><input class="checkBox" type="checkbox" name="checkBoxArray[]"
                                                    value="{{ $d->id }}"></td>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $d->title }}</td>
                                            <td>
                                                @if ($d->type == 'irani')
                                                    <span>ایرانی</span>
                                                @elseif ($d->type == 'korean')
                                                    <span>کره ای</span>
                                                @else
                                                    <span>غیره</span>
                                                @endif

                                            </td>
                                            <td>{{ $d->Fa_title }}</td>
                                            <td>
                                                {{ $d->imdb_id }}
                                            </td>
                                            <td>
                                                <img width="100px" src="{{ $d->photo }}" alt="عکس">
                                            </td>
                                            <td>
                                                <img width="100px" src="{{ $d->slidePhoto }}" alt="عکس اسلایدر">
                                            </td>
                                            <td class="text-start">
                                                <textarea>{{ $d->briefStory }}</textarea>
                                            </td>
                                            <td class="text-start">
                                                {{ $d->lastUpdate }}
                                            </td>
                                            <td class="text-start">
                                                {{ $d->playStatus }}
                                            </td>
                                            <td class="text-start">
                                                {{ $d->channel }}
                                            </td>
                                            <td>
                                                <textarea style="width: 300px" readonly>{{ $d->description }}</textarea>
                                            </td>
                                            <td>
                                                @if ($d->soon != null)
                                                    <button class="btn btn-success">yes</button>
                                                @else
                                                    <button class="btn btn-danger">no</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($d->dubbing != null)
                                                    <button class="btn btn-success">yes</button>
                                                @else
                                                    <button class="btn btn-danger">no</button>
                                                @endif
                                            </td>


                                            <td>
                                                @if ($d->requested != null)
                                                    <button class="btn btn-success">yes</button>
                                                @else
                                                    <button class="btn btn-danger">no</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($d->stickedSubtitle != null)
                                                    <button class="btn btn-success">yes</button>
                                                @else
                                                    <button class="btn btn-danger">no</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($d->bestFilms != null)
                                                    <button class="btn btn-success">yes</button>
                                                @else
                                                    <button class="btn btn-danger">no</button>
                                                @endif
                                            </td>


                                            <td>
                                                {{-- <a href="#" class="btn btn-sm btn-primary">
                                                <i class="fe fe-send"></i>
                                            </a>
                                            <a href="./articleDetails.html" class="btn btn-sm btn-success">
                                                <i class="fe fa fe-eye"></i>
                                            </a> --}}

                                                <a href="{{ route('serial.edit', $d->id) }}" class="btn btn-sm btn-info"
                                                    title="ویرایش">
                                                    <i class="fe fe-edit-2"></i>
                                                </a>
                                                <form method="post" action="{{ route('serial.destroy', $d->id) }}">
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
