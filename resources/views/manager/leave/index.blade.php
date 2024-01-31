@extends('index')
@push('title', get_phrase('Leave'))
@push('meta')
@endpush
@push('css')
@endpush

@section('content')
    <div class="mainSection-title">
        <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
            <div class="d-flex flex-column">
                <h4>{{ get_phrase('Leave') }}</h4>
                <ul class="d-flex align-items-center eBreadcrumb-2">
                    <li><a href="{{ route('manager.dashboard') }}">{{ get_phrase('Dashboard') }}</a></li>
                    <li><a href="#">{{ get_phrase('Leave') }}</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="eSection-wrap">
                <p class="column-title mb-2">{{get_phrase('Leave Reports')}}</p>
                <div class="row">
                    @php
                        if (isset($_GET['year'])) {
                            $selected_year = $_GET['year'];
                        } else {
                            $selected_year = date('Y');
                        }
                        
                        if (isset($_GET['month'])) {
                            $selected_month = $_GET['month'];
                        } else {
                            $selected_month = date('m');
                        }
                        
                        $timestamp_of_first_date = strtotime($selected_year . '-' . $selected_month . '-1');
                        $total_days_of_this_month = date('t', $timestamp_of_first_date);
                    @endphp
                    <div class="col-md-12">
                        <form action="{{ route('manager.leave.report') }}" method="get" id="filterForm">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="eForm-label">{{get_phrase('Selected Year')}}</label>
                                    <select onchange="$('#filterForm').submit();" name="year" class="form-select eForm-select select2">
                                        @for ($year = date('Y'); $year >= 2022; $year--)
                                            @php
                                                $pending_request = App\Models\Leave_application::where('leave_applications.status', 'pending')
                                                    ->where('from_date', '>=', strtotime($year . '-1-1 00:00:00'))
                                                    ->where('from_date', '<=', strtotime($year . '-12-31 23:59:59'));
                                                $pending_req_counted = $pending_request->count();
                                            @endphp
                                            <option value="{{ $year }}" @if ($selected_year == $year) selected @endif>
                                                {{ $year }} @if ($pending_req_counted > 0)
                                                    <small>({{ $pending_req_counted . ' ' . get_phrase('Pending request') }})</small>
                                                @endif
                                            </option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="eForm-label">{{get_phrase('Selected Month')}}</label>
                                    <select onchange="$('#filterForm').submit();" name="month" class="form-select eForm-select select2">
                                        @for ($month = 1; $month <= 12; $month++)
                                            @php
                                                $timestamp_month_wise = strtotime($selected_year . '-' . $month . '-1 00:00:00');
                                                $pending_request = App\Models\Leave_application::where('leave_applications.status', 'pending')
                                                    ->where('from_date', '>=', strtotime($selected_year . '-' . $month . '-1 00:00:00'))
                                                    ->where('from_date', '<=', strtotime(date('Y-m-t 00:00:00', $timestamp_month_wise)));
                                                $pending_req_counted = $pending_request->count();
                                            @endphp
                                            <option value="{{ $month }}" @if ($selected_month == $month) selected @endif>
                                                {{ date('F', strtotime($year . '-' . $month . '-20')) }}
                                                @if ($pending_req_counted > 0)
                                                    <small>({{ $pending_req_counted . ' ' . get_phrase('Pending request') }})</small>
                                                @endif
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12 pb-4">
                        <div class="accordion custom-accordion" id="accordionExample">
                            @php
                                $counter = 0;
                            @endphp
                            @for ($day = $total_days_of_this_month; $day >= 1; $day--)
                                @php
                                    $start_timestamp = strtotime($selected_year . '-' . $selected_month . '-' . $day . ' 00:00:00');
                                    $end_timestamp = strtotime($selected_year . '-' . $selected_month . '-' . $day . ' 23:59:59');
                                    
                                    $staff_leave_reports = App\Models\Leave_application::join('users', 'users.id', '=', 'leave_applications.user_id')
                                        ->where('from_date', '>=', $start_timestamp)
                                        ->where('from_date', '<=', $end_timestamp)
                                        ->select('leave_applications.user_id', DB::raw('count(*) as user_total_leave'))
                                        ->groupBy('leave_applications.user_id')
                                        ->orderBy('users.sort');
                                    if ($staff_leave_reports->count() == 0) {
                                        continue;
                                    } else {
                                        $counter += 1;
                                    }
                                    
                                    $pending_request = App\Models\Leave_application::where('from_date', '>=', $start_timestamp)
                                        ->where('from_date', '<=', $end_timestamp)
                                        ->where('leave_applications.status', 'pending');
                                    $approved_request = App\Models\Leave_application::where('from_date', '>=', $start_timestamp)
                                        ->where('from_date', '<=', $end_timestamp)
                                        ->where('leave_applications.status', 'approved');
                                    
                                @endphp
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button @if ($counter > 1) collapsed @endif" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseaccordion{{ $day }}" aria-expanded="@if ($counter == 1) true @else false @endif"
                                            aria-controls="collapseaccordion{{ $day }}">

                                            @if ($pending_request->count() > 0)
                                                <span class="badge bg-danger me-3" title="{{ get_phrase('Pending request') }}" data-bs-toggle="tooltip">
                                                    {{ $pending_request->count() }}
                                                </span>
                                            @endif
                                            @if ($approved_request->count() > 0)
                                                <span class="badge bg-success me-3" title="{{ get_phrase('Approved request') }}" data-bs-toggle="tooltip">
                                                    {{ $approved_request->count() }}
                                                </span>
                                            @endif
                                            {{ date('d M - l', $start_timestamp) }}
                                        </button>
                                    </h2>
                                    <div id="collapseaccordion{{ $day }}" class="accordion-collapse collapse @if ($counter == 1) show @endif"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table eTable">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Employee</th>
                                                            <th class="text-center">{{get_phrase('Date')}}</th>
                                                            <th>{{get_phrase('Reason')}}</th>
                                                            <th class="text-center">{{get_phrase('Status')}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($staff_leave_reports->get() as $staff_leave_report)
                                                            @php
                                                                $staff_details = App\Models\User::where('id', $staff_leave_report->user_id);
                                                                if ($staff_details->count() == 0) {
                                                                    continue;
                                                                }
                                                                $staff_details = $staff_details->first();
                                                                $leave_reports = App\Models\Leave_application::where('user_id', $staff_details->id)
                                                                    ->where('from_date', '>=', $start_timestamp)
                                                                    ->where('from_date', '<=', $end_timestamp)
                                                                    ->orderBy('id', 'desc');
                                                            @endphp
                                                            @foreach ($leave_reports->get() as $leave_report)
                                                                <tr>
                                                                    <td class="text-center align-baseline w-160px">
                                                                        <div class="d-flex align-items-center">
                                                                            <img class="rounded-circle" src="{{ get_image('uploads/user-image/' . $staff_details->photo) }}"
                                                                                width="40px">
                                                                            <div class="text-start ps-3">
                                                                                <p class="text-dark text-13px">
                                                                                    {{ $staff_details->name }}
                                                                                </p>
                                                                                <small class="badge bg-secondary">{{ $staff_details->designation }}</small>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center w-255px">
                                                                        @if (date('d M Y', $leave_report->from_date) == date('d M Y', $leave_report->to_date))
                                                                            {{ date('d M Y', $leave_report->from_date) }}
                                                                            <hr class="my-0">
                                                                            {{ date('h:i A', $leave_report->from_date) }} - {{ date('h:i A', $leave_report->to_date) }}
                                                                        @else
                                                                            {{ date('d M Y, h:i A', $leave_report->from_date) }}
                                                                            <hr class="my-0">
                                                                            {{ date('d M Y, h:i A', $leave_report->to_date) }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @php echo script_checker($leave_report->reason); @endphp

                                                                        @if ($leave_report->attachment)
                                                                            <a href="{{ asset($leave_report->attachment) }}" download>
                                                                                <br>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    xmlns:svgjs="http://svgjs.com/svgjs" width="15" height="15" x="0" y="0"
                                                                                    viewBox="0 0 128 128" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                                                                    <g>
                                                                                        <path
                                                                                            d="M128 65c0 15.439-12.563 28-28 28H80c-2.211 0-4-1.791-4-4s1.789-4 4-4h20c11.027 0 20-8.973 20-20s-8.973-20-20-20h-4c-2.211 0-4-1.791-4-4 0-15.439-12.563-28-28-28S36 25.561 36 41c0 2.209-1.789 4-4 4h-4C16.973 45 8 53.973 8 65s8.973 20 20 20h20c2.211 0 4 1.791 4 4s-1.789 4-4 4H28C12.563 93 0 80.439 0 65s12.563-28 28-28h.223C30.219 19.025 45.5 5 64 5s33.781 14.025 35.777 32H100c15.438 0 28 12.561 28 28zm-50.828 37.172L68 111.344V61c0-2.209-1.789-4-4-4s-4 1.791-4 4v50.344l-9.172-9.172c-1.563-1.563-4.094-1.563-5.656 0s-1.563 4.094 0 5.656l16 16c.781.781 1.805 1.172 2.828 1.172s2.047-.391 2.828-1.172l16-16c1.563-1.563 1.563-4.094 0-5.656s-4.094-1.563-5.656 0z"
                                                                                            fill="#000000" data-original="#000000" class=""></path>
                                                                                    </g>
                                                                                </svg>
                                                                                {{ get_phrase('Download') }}
                                                                            </a>
                                                                        @endif
                                                                    </td>
                                                                    <td class="text-center position-relative w-80px">
                                                                        @if ($leave_report->status == 'pending')
                                                                            <span class="badge bg-danger">{{get_phrase('Pending')}}</span>
                                                                        @elseif($leave_report->status == 'rejected')
                                                                            <span class="badge bg-secondary">{{get_phrase('Rejected')}}</span>
                                                                        @else
                                                                            <span class="badge bg-success">{{get_phrase('Approved')}}</span>
                                                                        @endif
                                                                        <div class="contant-overlay">
                                                                            @if ($leave_report->status != 'approved')
                                                                                <a href="#"
                                                                                    onclick="showRightModal('{{ route('right_modal', ['view_path' => 'manager.leave.leave_accept_form', 'id' => $leave_report->id]) }}', '{{ get_phrase('Send message') }}')"
                                                                                    class="btn btn p-0" title="{{ get_phrase('Approve') }}" data-bs-placement="right"
                                                                                    data-bs-toggle="tooltip">
                                                                                    <svg height="15" viewBox="0 0 520 520" width="15" xmlns="http://www.w3.org/2000/svg"
                                                                                        id="fi_5291043">
                                                                                        <g id="_7-Check" data-name="7-Check">
                                                                                            <path
                                                                                                d="m79.423 240.755a47.529 47.529 0 0 0 -36.737 77.522l120.73 147.894a43.136 43.136 0 0 0 36.066 16.009c14.654-.787 27.884-8.626 36.319-21.515l250.787-403.892c.041-.067.084-.134.128-.2 2.353-3.613 1.59-10.773-3.267-15.271a13.321 13.321 0 0 0 -19.362 1.343q-.135.166-.278.327l-252.922 285.764a10.961 10.961 0 0 1 -15.585.843l-83.94-76.386a47.319 47.319 0 0 0 -31.939-12.438z">
                                                                                            </path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </a>
                                                                            @endif

                                                                            @if ($leave_report->status != 'rejected')
                                                                                <a href="#"
                                                                                    onclick="showRightModal('{{ route('right_modal', ['view_path' => 'manager.leave.leave_rejection_form', 'id' => $leave_report->id]) }}', '{{ get_phrase('Send a reason for this rejection') }}')"
                                                                                    class="btn btn p-1" title="{{ get_phrase('Reject') }}" data-bs-placement="right"
                                                                                    data-bs-toggle="tooltip">
                                                                                    <svg id="fi_8867452" enable-background="new 0 0 512 512" height="15" viewBox="0 0 512 512"
                                                                                        width="15" xmlns="http://www.w3.org/2000/svg">
                                                                                        <g>
                                                                                            <path
                                                                                                d="m256 0c-141.163 0-256 114.837-256 256s114.837 256 256 256 256-114.837 256-256-114.837-256-256-256zm111.963 331.762c10 10 10 26.212 0 36.212-5 4.988-11.55 7.487-18.1 7.487s-13.1-2.5-18.1-7.487l-75.763-75.774-75.762 75.775c-5 4.988-11.55 7.487-18.1 7.487s-13.1-2.5-18.1-7.487c-10-10-10-26.212 0-36.212l75.762-75.763-75.762-75.762c-10-10-10-26.213 0-36.213 10-9.988 26.2-9.988 36.2 0l75.762 75.775 75.762-75.775c10-9.988 26.2-9.988 36.2 0 10 10 10 26.213 0 36.213l-75.762 75.762z">
                                                                                            </path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </a>
                                                                            @endif

                                                                            <a href="#" onclick="confirmModal('{{ route('manager.leave.report.delete', $leave_report->id) }}')"
                                                                                class="btn btn p-0" title="{{ get_phrase('Delete') }}" data-bs-placement="right"
                                                                                data-bs-toggle="tooltip">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" id="fi_3405244" data-name="Layer 2" width="15"
                                                                                    height="15" viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M19,7a1,1,0,0,0-1,1V19.191A1.92,1.92,0,0,1,15.99,21H8.01A1.92,1.92,0,0,1,6,19.191V8A1,1,0,0,0,4,8V19.191A3.918,3.918,0,0,0,8.01,23h7.98A3.918,3.918,0,0,0,20,19.191V8A1,1,0,0,0,19,7Z">
                                                                                    </path>
                                                                                    <path d="M20,4H16V2a1,1,0,0,0-1-1H9A1,1,0,0,0,8,2V4H4A1,1,0,0,0,4,6H20a1,1,0,0,0,0-2ZM10,4V3h4V4Z">
                                                                                    </path>
                                                                                    <path d="M11,17V10a1,1,0,0,0-2,0v7a1,1,0,0,0,2,0Z"></path>
                                                                                    <path d="M15,17V10a1,1,0,0,0-2,0v7a1,1,0,0,0,2,0Z"></path>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>





                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="eSection-wrap">
                <div class="row">
                    <div class="col-md-12">


                        <form action="{{ route('manager.leave.report.store') }}" method="post" enctype="multipart/form-data">
                            @Csrf

                            <div class="row">
                                <div class="col-md-12">
                                    @if (auth()->user()->role == 'manager')
                                        <div class="fpb-7">
                                            <label class="eForm-label">{{get_phrase('Select User')}}</label>
                                            <select name="user_id" class="form-select eForm-select select2" required>
                                                <option value="">{{ get_phrase('Select a user') }}</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" @if ($user->id == auth()->user()->id) selected @endif>
                                                        {{ $user->name }}
                                                        @if ($user->id == auth()->user()->id)
                                                            <small>({{get_phrase('Me')}})</small>
                                                        @endif
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="fpb-7">
                                        <label for="eInputTextarea" class="eForm-label">{{get_phrase('From')}}</label>
                                        <input type="datetime-local" name="from_date" value="{{ date('Y-m-d H:i') }}" class="form-control eForm-control" id="eInputDateTime" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fpb-7">
                                        <label for="eInputTextarea" class="eForm-label">{{get_phrase('To')}}</label>
                                        <input type="datetime-local" name="to_date" value="{{ date('Y-m-d H:i') }}" class="form-control eForm-control" id="eInputDateTime" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="fpb-7">
                                        <label for="eInputTextarea" class="eForm-label">{{get_phrase('Reason')}}</label>
                                        <textarea class="form-control" rows="2" name="reason" required>{{ old('reason') }}</textarea>
                                        @if ($errors->has('reason'))
                                            <small class="text-danger">
                                                {{ $errors->first('reason') }}
                                            </small>
                                        @endif
                                    </div>
                                    <div class="fpb-7">
                                        <label for="photo" class="eForm-label">{{ get_phrase('Attachment') }} <small>({{get_phrase('Optional')}} - {{get_phrase('image')}}, {{get_phrase('pdf')}})</small></label>
                                        <input type="file" name="attachment" class="form-control eForm-control-file mb-0" id="photo">
                                    </div>
                                    <button type="submit" class="btn-form mt-2 mb-3">{{ get_phrase('Submit request') }}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
