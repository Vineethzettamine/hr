@extends('index')
@push('title', get_phrase('Dashboard'))
@push('meta')
@endpush
@push('css')
@endpush

@section('content')
    <div class="mainSection-title">
        <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
            <div class="d-flex flex-column">
                <h4>{{ get_phrase('Dashboard') }}</h4>
                <ul class="d-flex align-items-center eBreadcrumb-2">
                    <li><a href="#">{{ get_phrase('Dashboard') }}</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="dashboard_ShortListItem">
                        <div class="dsHeader d-flex justify-content-between align-items-center">
                            <h5 class="title">{{ get_phrase('On vacation') }}</h5>
                            <a href="{{ route('manager.leave.report') }}" class="ds_link ds_teacher">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.146" height="4.764" viewBox="0 0 10.146 4.764">
                                    <path id="Read_more_icon" data-name="Read more icon" d="M11.337,5.978l-.84.84.941.947H3.573V8.955h7.865L10.5,9.9l.84.846L13.719,8.36Z"
                                        transform="translate(-3.573 -5.978)" fill="#000000"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="dsBody d-flex justify-content-between align-items-center">
                            <div class="ds_item_details">
                                @php
                                    $on_vation = App\Models\Leave_application::where('from_date', '>=', strtotime(date('d M Y 00:00:00')))
                                        ->where('from_date', '<=', strtotime(date('d M Y 23:59:59')))
                                        ->where('status', 'approved');
                                @endphp
                                <h4 class="total_no">{{ $on_vation->count() }}</h4>
                                <p class="total_info">{{ get_phrase('Employees') }}</p>
                            </div>
                            <div class="ds_item_icon success">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="50"
                                    height="50" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M229.657 306.343a8 8 0 0 0-11.314 0l-32 32A8 8 0 0 0 184 344v32a8 8 0 0 0 8 8h64a8 8 0 0 0 8-8v-32a8 8 0 0 0-2.343-5.657ZM248 368h-16v-16a8 8 0 0 0-16 0v16h-16v-20.687l24-24 24 24ZM224 264a32 32 0 1 0-32-32 32.036 32.036 0 0 0 32 32Zm0-48a16 16 0 1 1-16 16 16.019 16.019 0 0 1 16-16ZM128 200a32 32 0 1 0 32 32 32.036 32.036 0 0 0-32-32Zm0 48a16 16 0 1 1 16-16 16.019 16.019 0 0 1-16 16ZM344 224a8 8 0 0 0-8 8 16 16 0 0 1-26.665 11.928 8 8 0 0 0-10.671 11.922A32 32 0 0 0 352 232a8 8 0 0 0-8-8ZM128 320a32 32 0 1 0 32 32 32.036 32.036 0 0 0-32-32Zm0 48a16 16 0 1 1 16-16 16.019 16.019 0 0 1-16 16ZM320 320a32 32 0 1 0 32 32 32.036 32.036 0 0 0-32-32Zm0 48a16 16 0 1 1 16-16 16.019 16.019 0 0 1-16 16Z"
                                            fill="#000000" data-original="#000000" class=""></path>
                                        <path
                                            d="M465.306 114.005a28.1 28.1 0 0 0-27.929-26H392V72a24 24 0 0 0-48 0v16h-48V72a24 24 0 0 0-48 0v16h-48V72a24 24 0 0 0-48 0v16h-48V72a24 24 0 0 0-48 0v16H34a18.021 18.021 0 0 0-18 18v332a18.021 18.021 0 0 0 18 18h380a18.021 18.021 0 0 0 17.882-16H480a8 8 0 0 0 7.979-8.57ZM360 72a8 8 0 0 1 16 0v32a8 8 0 0 1-16 0Zm-96 0a8 8 0 0 1 16 0v32a8 8 0 0 1-16 0Zm-96 0a8 8 0 0 1 16 0v32a8 8 0 0 1-16 0Zm-96 0a8 8 0 0 1 16 0v32a8 8 0 0 1-16 0Zm-38 32h22a24 24 0 0 0 48 0h48a24 24 0 0 0 48 0h48a24 24 0 0 0 48 0h48a24 24 0 0 0 48 0h24v32H32v-30a2 2 0 0 1 2-2Zm382 334a2 2 0 0 1-2 2H34a2 2 0 0 1-2-2V152h384Zm16-14V104h5.377a12.043 12.043 0 0 1 11.97 11.146L471.408 424Z"
                                            fill="#000000" data-original="#000000" class=""></path>
                                        <path
                                            d="M344 408h-40a8 8 0 0 0 0 16h40a8 8 0 0 0 0-16ZM384 408h-8a8 8 0 0 0 0 16h8a8 8 0 0 0 0-16ZM365.122 177.854a8 8 0 0 0-11.268 1.025l-34.392 41.269-9.805-9.805a8 8 0 0 0-11.314 11.314l16 16A8 8 0 0 0 320 240c.121 0 .241 0 .362-.008a8 8 0 0 0 5.784-2.871l40-48a8 8 0 0 0-1.024-11.267Z"
                                            fill="#000000" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="dashboard_ShortListItem">
                        <div class="dsHeader d-flex justify-content-between align-items-center">
                            <h5 class="title">{{ get_phrase('Present today') }}</h5>
                            <a href="{{ route('manager.attendance') }}" class="ds_link ds_sutdent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.146" height="4.764" viewBox="0 0 10.146 4.764">
                                    <path id="Read_more_icon" data-name="Read more icon" d="M11.337,5.978l-.84.84.941.947H3.573V8.955h7.865L10.5,9.9l.84.846L13.719,8.36Z"
                                        transform="translate(-3.573 -5.978)" fill="#000000"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="dsBody d-flex justify-content-between align-items-center">
                            <div class="ds_item_details">
                                @php
                                    $present_tody = App\Models\Attendance::where('checkin', '>=', strtotime(date('d M Y 00:00:00')))->where('checkin', '<=', strtotime(date('d M Y 23:59:59')));
                                @endphp
                                <h4 class="total_no">{{ $present_tody->count() }}</h4>
                                <p class="total_info">{{ get_phrase('Employees') }}</p>
                            </div>
                            <div class="ds_item_icon primary">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="50"
                                    height="50" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M32 62a9 9 0 1 0-9-9 9 9 0 0 0 9 9zm-1-8.54V48h2v6a1 1 0 0 1-.45.83l-3 2-1.1-1.66zM56 49v3H46v4h10v3l6-5zM8 55h10v-4H8v-3l-6 5 6 5zM32 2a11.15 11.15 0 0 0-9.73 16.59L32 36l9.73-17.41A11.15 11.15 0 0 0 32 2zm0 18a7 7 0 1 1 7-7 7 7 0 0 1-7 7z"
                                            fill="#000000" data-original="#000000" class=""></path>
                                        <circle cx="32" cy="10" r="2" fill="#000000" data-original="#000000" class=""></circle>
                                        <path
                                            d="M33 12h-2a2 2 0 0 0-2 2v3a4.92 4.92 0 0 0 6 0v-3a2 2 0 0 0-2-2zM28.41 34.68l-.82-1.83C25.94 33.59 25 34.74 25 36c0 2.28 3 4 7 4s7-1.72 7-4c0-1.26-.94-2.41-2.59-3.15l-.82 1.83c.86.38 1.41.9 1.41 1.32 0 .82-2 2-5 2s-5-1.18-5-2c0-.42.55-.94 1.41-1.32z"
                                            fill="#000000" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        

        <div class="col-md-12">
            <div class="eSection-wrap">
                <p class="column-title mb-2">{{get_phrase('Branches')}}</p>
                <div class="table-responsive">
                    <table class="table eTable">
                        <thead>
                            <tr>
                                <th class="">#</th>
                                <th class="">{{ get_phrase('Branch name') }}</th>
                                <th class="">{{ get_phrase('Description') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Models\Branch::orderBy('title')->get() as $key => $branch)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>
                                    <td>
                                        {{ $branch->title }}
                                    </td>
                                    <td>
                                        {{ $branch->description }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
