<div class="row">

    @php
        if (isset($_GET['year'])) {
            $selected_year = $_GET['year'];
        } else {
            $selected_year = date('Y');
        }
    @endphp

    <div class="col-md-12">
        <form action="{{ route('manager.staff.profile', ['tab' => 'payslip', 'user_id' => $user->id]) }}" method="get" id="filterForm">
            <div class="row mb-4">
                <div class="col-md-12">
                    <label class="eForm-label">{{get_phrase('Selected Year')}}</label>
                    <select onchange="$('#filterForm').submit();" name="year" class="form-select eForm-select select2">
                        @for ($year = date('Y'); $year >= 2022; $year--)
                            <option value="{{ $year }}" @if ($selected_year == $year) selected @endif>
                                {{ $year }}
                            </option>
                        @endfor
                    </select>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table eTable">
                <thead>
                    <tr>
                        <th class="">{{ get_phrase('Month of Salary') }}</th>
                        <th class="">{{ get_phrase('Status') }}</th>
                        <th class="text-center">{{ get_phrase('Invoice') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $payslips = \App\Models\Payslip::where('user_id', $user->id)
                            ->whereDate('month_of_salary', '>=', $selected_year . '-1-1 00:00:00')
                            ->whereDate('month_of_salary', '<=', $selected_year . '-12-31 23:59:59')->get();
                    @endphp
                    @foreach ($payslips as $payslip)
                        <tr>
                            <td>
                                @php
                                    $timestamp = strtotime($payslip->month_of_salary);
                                @endphp
                                {{date('d M Y - t M Y', $timestamp)}}
                            </td>
                            <td>
                                @if ($payslip->status == 1)
                                    <span class="badge bg-success">{{ get_phrase('Paid') }}</span>
                                @else
                                    <span class="badge bg-danger">{{ get_phrase('Unpaid') }}</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('manager.payslip.download', ['invoice_id' => $payslip->id, 'user_id' => $user->id]) }}" class="btn btn p-0 px-1"
                                    title="{{ get_phrase('Download Invoice') }}" data-bs-toggle="tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="18" version="1.1" viewBox="-53 1 511 511.99906" width="18" id="fi_1092004">
                                        <g id="surface1">
                                            <path
                                                d="M 276.410156 3.957031 C 274.0625 1.484375 270.84375 0 267.507812 0 L 67.777344 0 C 30.921875 0 0.5 30.300781 0.5 67.152344 L 0.5 444.84375 C 0.5 481.699219 30.921875 512 67.777344 512 L 338.863281 512 C 375.71875 512 406.140625 481.699219 406.140625 444.84375 L 406.140625 144.941406 C 406.140625 141.726562 404.65625 138.636719 402.554688 136.285156 Z M 279.996094 43.65625 L 364.464844 132.328125 L 309.554688 132.328125 C 293.230469 132.328125 279.996094 119.21875 279.996094 102.894531 Z M 338.863281 487.265625 L 67.777344 487.265625 C 44.652344 487.265625 25.234375 468.097656 25.234375 444.84375 L 25.234375 67.152344 C 25.234375 44.027344 44.527344 24.734375 67.777344 24.734375 L 255.261719 24.734375 L 255.261719 102.894531 C 255.261719 132.945312 279.503906 157.0625 309.554688 157.0625 L 381.40625 157.0625 L 381.40625 444.84375 C 381.40625 468.097656 362.113281 487.265625 338.863281 487.265625 Z M 338.863281 487.265625 "
                                                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path>
                                            <path
                                                d="M 305.101562 401.933594 L 101.539062 401.933594 C 94.738281 401.933594 89.171875 407.496094 89.171875 414.300781 C 89.171875 421.101562 94.738281 426.667969 101.539062 426.667969 L 305.226562 426.667969 C 312.027344 426.667969 317.59375 421.101562 317.59375 414.300781 C 317.59375 407.496094 312.027344 401.933594 305.101562 401.933594 Z M 305.101562 401.933594 "
                                                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path>
                                            <path
                                                d="M 194.292969 357.535156 C 196.644531 360.007812 199.859375 361.492188 203.320312 361.492188 C 206.785156 361.492188 210 360.007812 212.347656 357.535156 L 284.820312 279.746094 C 289.519531 274.796875 289.148438 266.882812 284.203125 262.308594 C 279.253906 257.609375 271.339844 257.976562 266.765625 262.925781 L 215.6875 317.710938 L 215.6875 182.664062 C 215.6875 175.859375 210.121094 170.296875 203.320312 170.296875 C 196.519531 170.296875 190.953125 175.859375 190.953125 182.664062 L 190.953125 317.710938 L 140 262.925781 C 135.300781 257.980469 127.507812 257.609375 122.5625 262.308594 C 117.617188 267.007812 117.246094 274.800781 121.945312 279.746094 Z M 194.292969 357.535156 "
                                                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
