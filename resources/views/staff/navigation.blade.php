@php $current_route = Route::currentRouteName(); @endphp

<div class="sidebar">
    <div class="logo-details mt-4">
        <div class="img_wrapper">
            <img class="logo-lg" src="{{get_image(get_settings('light_logo'))}}" width="175px"/>
            <img class="logo-sm ms-auto me-auto" src="{{get_image(get_settings('favicon'))}}" width="40px"/>
        </div>
    </div>
    <div class="closeIcon">
        <span><i class="bi bi-x-circle"></i></span>
    </div>


    <ul class="nav-links">
        <!-- menu starts here -->
        <li class="nav-links-li @if ($current_route == 'staff.dashboard') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.dashboard') }}">
                    <div class="sidebar_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="48" height="48" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M64.671 146.502C27.711 188.049 3.457 241.62 0 300.62h60.76c3.259-42.488 20.112-81.161 46.32-111.709l-42.409-42.409zM249.305 332.188c-5.113 2.581-8.305 7.726-8.305 13.432.015 12.598 17.783 19.438 26.191 9.99l52.427-58.608-70.313 35.186zM85.882 125.291l42.409 42.409c30.548-26.208 70.221-43.061 112.709-46.32v-60c-59 3.456-113.57 26.951-155.118 63.911zM271 61.38v60c42.488 3.259 82.161 20.112 112.709 46.32l42.409-42.409C384.57 88.331 330 64.836 271 61.38zM447.329 146.502l-42.409 42.409c26.208 30.547 43.061 69.221 46.32 111.709H512c-3.457-59-27.711-112.571-64.671-154.118z" fill="#000000" data-original="#000000" class=""></path><path d="M450.731 330.62c-1.307 17.011-4.142 33.83-9.835 49.98a15.007 15.007 0 0 1-19.131 9.17c-7.822-2.754-11.924-11.323-9.17-19.131a165.1 165.1 0 0 0 9.404-55.02c0-45.487-18.501-86.733-48.375-116.611a.027.027 0 0 0-.007-.004l-.007-.011C343.733 169.12 301.487 150.62 256 150.62s-87.733 18.501-117.611 48.375l-.004.007-.011.007C108.501 228.886 90 270.133 90 315.62a165.1 165.1 0 0 0 9.404 55.02c2.754 7.808-1.348 16.377-9.17 19.131-7.749 2.739-16.362-1.362-19.131-9.17-5.693-16.15-8.527-32.968-9.835-49.98H0c2.146 36.632 11.7 67.637 25.107 95.464 7.178 14.897 22.939 24.536 40.151 24.536h381.468c17.227 0 32.988-9.639 40.181-24.551 13.239-27.556 23.031-60.256 25.093-95.449h-61.269zm-55.333-72.217L289.545 375.62c-27.25 30.48-78.545 11.411-78.545-30 0-17.124 9.525-32.536 24.838-40.23.02-.009.029-.029.049-.038l141.625-70.371c.049-.024.101-.016.15-.04 14.508-7.072 28.789 10.752 17.736 23.462z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Dashboard')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.tasks') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.tasks', ['running']) }}">
                    <div class="sidebar_icon">
                        <svg id="fi_3031267" enable-background="new 0 0 507.926 507.926" height="48" viewBox="0 0 507.926 507.926" width="48"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m161.618 57.722h-138.523c-12.751 0-23.087 10.336-23.087 23.087v138.523c0 12.751 10.336 23.087 23.087 23.087h138.523c12.751 0 23.087-10.336 23.087-23.087v-138.523c0-12.751-10.336-23.087-23.087-23.087zm-23.087 138.523h-92.349v-92.349h92.349z">
                                </path>
                                <path
                                    d="m484.839 126.983h-230.872c-12.751 0-23.087 10.336-23.087 23.087s10.336 23.087 23.087 23.087h230.872c12.751 0 23.087-10.336 23.087-23.087 0-12.75-10.337-23.087-23.087-23.087z">
                                </path>
                                <path
                                    d="m484.839 357.855h-230.872c-12.751 0-23.087 10.337-23.087 23.087s10.336 23.087 23.087 23.087h230.872c12.751 0 23.087-10.337 23.087-23.087s-10.337-23.087-23.087-23.087z">
                                </path>
                                <path
                                    d="m145.457 318.353-76.857 75.934-28.905-30.013c-8.868-9.168-23.489-9.411-32.657-.543-9.168 8.868-9.411 23.489-.543 32.657l45.112 46.89c4.302 4.389 10.177 6.882 16.323 6.926h.277c6.053-.019 11.857-2.415 16.161-6.672l93.411-92.349c9.664-8.317 10.756-22.895 2.439-32.559s-22.895-10.756-32.559-2.439c-.781.673-1.517 1.397-2.202 2.168z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Task Manager')}}
                    </span>
                </a>
            </div>
        </li>

        <!-- menu starts here -->
        <li class="nav-links-li @if ($current_route == 'staff.attendance') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.attendance') }}">
                    <div class="sidebar_icon">
                        <svg id="fi_50044" style="enable-background:new 0 0 612 612;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" width="48" height="48" viewBox="0 0 612 612" xml:space="preserve">
                            <g>
                                <path
                                    d="M257.254,316.536c84.086,0,152.252-68.166,152.252-152.252S341.341,12.031,257.254,12.031
                  c-84.087,0-152.253,68.166-152.253,152.252S173.167,316.536,257.254,316.536z M330.946,224.34
                  c-6.927,22.9-36.596,40.115-72.154,40.115c-35.559,0-65.228-17.215-72.153-40.115H330.946z M608.234,481.521L468.934,597.613
                  c-4.052,3.377-10.418,3.088-14.147-0.642l-69.355-69.364c-4.083-4.084-4.083-10.766,0.001-14.85l14.847-14.847
                  c4.083-4.083,10.766-4.084,14.849-0.001l49.024,49.016L581.35,449.26c4.437-3.696,11.091-3.092,14.788,1.345l13.441,16.127
                  C613.275,471.168,612.671,477.823,608.234,481.521z M369.096,543.941l26.415,26.419c-36.051,5.076-81.493,8.68-138.256,8.68
                  c-146.803,0-218.644-23.987-244.982-35.706C5.477,540.31,0,531.665,0,524.227v-50.188c0-75.205,57.26-137.596,130.325-145.953
                  c2.22-0.254,5.513,0.696,7.322,2.007c33.688,24.389,74.932,38.944,119.607,38.944s85.919-14.556,119.607-38.944
                  c1.81-1.311,5.102-2.261,7.322-2.007c73.065,8.356,130.326,70.747,130.326,145.953v0.849l-48.942,40.782l-34.105-34.094
                  c-6.348-6.348-14.787-9.845-23.759-9.845s-17.411,3.497-23.759,9.845l-14.848,14.848
                  C355.99,509.528,355.99,530.837,369.096,543.941z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Attendance')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.timesheet') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.timesheet') }}">
                    <div class="sidebar_icon">
                        <svg id="fi_7691413" height="48" viewBox="0 0 32 32" width="48" xmlns="http://www.w3.org/2000/svg">
                            <g id="calendar">
                                <path d="m30 6.93v4.07h-28v-4.07a2.9688 2.9688 0 0 1 3-2.93h2v2a3 3 0 0 0 6 0v-2h6v2a3 3 0 0 0 6 0v-2h2a2.9688 2.9688 0 0 1 3 2.93z">
                                </path>
                                <path
                                    d="m2 13v16.07a2.9688 2.9688 0 0 0 3 2.93h22a2.9688 2.9688 0 0 0 3-2.93v-16.07zm9 14a1.0029 1.0029 0 0 1 -1 1h-2a1.0029 1.0029 0 0 1 -1-1v-2a1.0029 1.0029 0 0 1 1-1h2a1.0029 1.0029 0 0 1 1 1zm0-7a1.0029 1.0029 0 0 1 -1 1h-2a1.0029 1.0029 0 0 1 -1-1v-2a1.0029 1.0029 0 0 1 1-1h2a1.0029 1.0029 0 0 1 1 1zm7 7a1.0029 1.0029 0 0 1 -1 1h-2a1.0029 1.0029 0 0 1 -1-1v-2a1.0029 1.0029 0 0 1 1-1h2a1.0029 1.0029 0 0 1 1 1zm0-7a1.0029 1.0029 0 0 1 -1 1h-2a1.0029 1.0029 0 0 1 -1-1v-2a1.0029 1.0029 0 0 1 1-1h2a1.0029 1.0029 0 0 1 1 1zm7 0a1.0029 1.0029 0 0 1 -1 1h-2a1.0029 1.0029 0 0 1 -1-1v-2a1.0029 1.0029 0 0 1 1-1h2a1.0029 1.0029 0 0 1 1 1z">
                                </path>
                                <path d="m11 4v2a1 1 0 0 1 -2 0v-2a1 1 0 0 1 2 0z"></path>
                                <path d="m23 4v2a1 1 0 0 1 -2 0v-2a1 1 0 0 1 2 0z"></path>
                            </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Timesheet')}}
                    </span>
                </a>
            </div>
        </li>

        <!-- menu starts here -->
        <li class="nav-links-li @if ($current_route == 'staff.leave.report') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.leave.report') }}">
                    <div class="sidebar_icon">
                        <svg width="48" height="48" version="1.1" id="fi_198141" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="-100 0 550 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M501.084,295.982h-17.462c0-8.398,0-13.914,0-22.126c0-5.57-4.515-10.086-10.086-10.086h-5.964
                                        c0.709-8.717-4.914-16.938-13.672-19.189c-6.96-1.789-50.851-13.07-57.62-14.81l18.561-48.611
                                        c5.374-14.076-1.673-29.852-15.761-35.231l-42.49-16.44c-8.143-3.151-16.891-3.956-25.479-2.38
                                        c-33.716,6.185-89.129,16.352-95.531,17.522c-4.233,0.774-8.056,3.014-10.802,6.327l-37.719,45.523V59.369
                                        c0-5.358-3.535-10.072-8.678-11.573l-81.14-23.68h210.377v89.025l24.112-3.15V12.06c0-6.658-5.398-12.056-12.056-12.056
                                        c-1.709,0-306.832-0.027-307.764,0.05C5.526,0.58,0.841,5.946,0.841,12.06c0,2.958-0.057,440.79,0.104,442.075
                                        c0.613,4.872,4.095,8.755,8.575,10.064l162.107,47.309c7.723,2.257,15.433-3.561,15.433-11.573V250.25
                                        c2.794-1.093,5.367-2.864,7.416-5.339l54.243-65.467c6.603-1.207,53.019-9.697,60.479-11.061l-40.764,106.762
                                        c0,0,1.453-3.672-25.712,89.318l-31.614,60.093v56.934h0.001c9.305,2.27,19.27-1.977,23.908-10.795l46.438-88.273
                                        c0.663-1.259,1.197-2.582,1.597-3.948l25.689-87.938c1.868,0.713,0.948,0.362,5.789,2.21c6.469,10.16,38.31,60.168,44.751,70.286
                                        l-32.169,90.604c-3.94,11.096,1.861,23.286,12.958,27.226c11.036,3.919,23.279-1.841,27.226-12.958l35.651-100.411
                                        c2.143-6.038,1.503-12.917-2.107-18.585l-31.286-49.137c4.559-11.941,9.003-23.58,13.584-35.578
                                        c17.371,4.465,28.807,7.405,28.807,7.405l-0.263,24.386H394.22c-2.269,0-4.355,0.759-6.039,2.022l26.713,41.955
                                        c6.327,9.937,7.695,22.004,3.754,33.106l-4.437,12.498h86.875c5.569,0,10.083-4.515,10.083-10.083v-69.414
                                        C511.169,300.497,506.654,295.982,501.084,295.982z M152.698,316.97c0,6.658-5.398,12.056-12.056,12.056
                                        c-6.658,0-12.056-5.398-12.056-12.056v-69.596c0-6.658,5.398-12.056,12.056-12.056c6.658,0,12.056,5.398,12.056,12.056V316.97z
                                         M463.453,295.982h-0.001h-31.599v-12.041h31.6V295.982z">
                                    </path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M315.805,325.767l-8.188,28.028v86.777h-37.929l-12.685,24.113h52.405c-0.579-5.552,0.081-11.207,2.005-16.624
                                        l20.318-57.222v-40.06L315.805,325.767z">
                                    </path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M416.914,50.634c-20.845-7.959-44.195,2.487-52.154,23.332c-8.029,21.025,2.701,44.277,23.332,52.154
                                        c20.656,7.888,44.136-2.332,52.154-23.332C448.204,81.943,437.759,58.593,416.914,50.634z">
                                    </path>
                                </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Leave Report')}}
                    </span>
                    @php
                        $total_pending_leave_requests = \App\Models\Leave_application::where('status', 'pending')
                            ->where('user_id', auth()->user()->id)
                            ->count();
                    @endphp
                    @if ($total_pending_leave_requests > 0)
                        <span class="badge bg-danger ms-auto me-4">
                            {{ $total_pending_leave_requests }}
                        </span>
                    @endif
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.performance') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.performance') }}">
                    <div class="sidebar_icon">

                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="48"
                            height="48" x="0" y="0" viewBox="0 0 60 60" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path
                                    d="M31 8.259a2.077 2.077 0 0 1 1.086 1.654l.215 2.254a17.909 17.909 0 0 1 9.692 4.426l4.222-4.223A23.985 23.985 0 0 0 31 6.048ZM27.7 12.167l.215-2.267A2.07 2.07 0 0 1 29 8.259V6.048a23.989 23.989 0 0 0-15.216 6.322l4.223 4.223a17.909 17.909 0 0 1 9.693-4.426ZM6.086 27.935a.953.953 0 0 0 .255.734A1.016 1.016 0 0 0 7.09 29h4.02a1.019 1.019 0 0 0 1-.936A17.9 17.9 0 0 1 16.588 18l-4.215-4.215a23.807 23.807 0 0 0-6.287 14.15ZM37.979 45.916l-4.264-.645a1 1 0 0 1-.754-.56l-1.906-4.017a1.149 1.149 0 0 0-2.11 0l-1.906 4.017a1 1 0 0 1-.754.56l-4.264.644a1.187 1.187 0 0 0-.949.831 1.3 1.3 0 0 0 .3 1.351l3.085 3.127a.994.994 0 0 1 .274.865l-.726 4.411a1.277 1.277 0 0 0 .516 1.281 1.092 1.092 0 0 0 1.186.071l3.814-2.084a.994.994 0 0 1 .958 0l3.814 2.085a1.1 1.1 0 0 0 1.186-.072 1.277 1.277 0 0 0 .516-1.281l-.728-4.415a.994.994 0 0 1 .274-.865l3.085-3.12a1.3 1.3 0 0 0 .3-1.351 1.185 1.185 0 0 0-.947-.833ZM57.447 49.435l-3.2-.485a1 1 0 0 1-.754-.559l-1.43-3.013a.611.611 0 0 0-1.13 0l-1.43 3.013a1 1 0 0 1-.754.559l-3.2.484a.646.646 0 0 0-.513.454.742.742 0 0 0 .167.759l2.313 2.345a1 1 0 0 1 .275.865l-.546 3.312a.716.716 0 0 0 .284.716.568.568 0 0 0 .627.038l2.86-1.563a.994.994 0 0 1 .958 0l2.86 1.564a.569.569 0 0 0 .627-.039.716.716 0 0 0 .284-.716l-.545-3.312a1 1 0 0 1 .275-.865l2.313-2.345a.742.742 0 0 0 .167-.759.644.644 0 0 0-.508-.453ZM48.89 29h4.02a1.016 1.016 0 0 0 .749-.331.953.953 0 0 0 .255-.733 23.807 23.807 0 0 0-6.287-14.149L43.412 18A17.9 17.9 0 0 1 47.9 28.064a1.019 1.019 0 0 0 .99.936Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path
                                    d="M30 2A28.032 28.032 0 0 0 2 30a2.986 2.986 0 0 0 3 3h21.026a4.914 4.914 0 0 1 .29-6.352L27.5 14.206a15.967 15.967 0 0 0-13.41 14.069A3.015 3.015 0 0 1 11.11 31H7.09a3.022 3.022 0 0 1-2.223-.979 2.966 2.966 0 0 1-.773-2.257 26 26 0 0 1 51.812 0 2.965 2.965 0 0 1-.773 2.256 3.022 3.022 0 0 1-2.223.98h-4.02a3.015 3.015 0 0 1-2.984-2.725A15.967 15.967 0 0 0 32.5 14.206l1.188 12.442A4.914 4.914 0 0 1 33.974 33H55a2.967 2.967 0 0 0 3-2.906V30A28.032 28.032 0 0 0 30 2Z"
                                    fill="#000000" data-original="#000000" class=""></path>
                                <path d="m29.906 10.087-1.45 15.182a4.566 4.566 0 0 1 3.088 0L30.1 10.1a.1.1 0 0 0-.194-.013Z" fill="#000000" data-original="#000000"
                                    class=""></path>
                                <circle cx="30" cy="30" r="3" fill="#000000" data-original="#000000" class=""></circle>
                                <path
                                    d="M4.25 57.169a.716.716 0 0 0 .284.716.568.568 0 0 0 .627.038l2.86-1.563a.994.994 0 0 1 .958 0l2.86 1.564a.569.569 0 0 0 .627-.039.716.716 0 0 0 .284-.716l-.55-3.312a1 1 0 0 1 .275-.865l2.313-2.345a.742.742 0 0 0 .167-.759.644.644 0 0 0-.512-.453l-3.2-.485a1 1 0 0 1-.754-.559l-1.43-3.013a.611.611 0 0 0-1.13 0l-1.43 3.013a1 1 0 0 1-.754.559l-3.2.484a.646.646 0 0 0-.513.454.742.742 0 0 0 .167.759l2.313 2.345a1 1 0 0 1 .275.865Z"
                                    fill="#fff" data-original="#fff" class=""></path>
                            </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Performance')}}
                    </span>
                </a>
            </div>
        </li>

        <!-- menu starts here -->
        <li class="nav-links-li @if ($current_route == 'staff.assessment') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.assessment') }}">
                    <div class="sidebar_icon">
                        <svg id="fi_3022239" enable-background="new 0 0 512 512" height="48" viewBox="0 0 512 512" width="48" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="m158 127h196c24.813 0 45-20.187 45-45v-37c0-24.813-20.187-45-45-45h-196c-24.813 0-45 20.187-45 45v37c0 24.813 20.187 45 45 45z">
                                </path>
                                <path
                                    d="m429 67.298v14.702c0 41.355-33.645 75-75 75h-196c-41.355 0-75-33.645-75-75v-14.702c-15.944 13.812-26 34.188-26 56.702v313c0 41.355 33.645 75 75 75h248c41.355 0 75-33.645 75-75v-313c0-22.514-10.056-42.89-26-56.702zm-240.794 315.884c4.815 6.741 3.254 16.109-3.487 20.925-2.643 1.887-5.689 2.795-8.706 2.795-4.68 0-9.291-2.184-12.219-6.282l-7.794-10.912-7.794 10.912c-2.928 4.098-7.539 6.282-12.219 6.282-3.018 0-6.063-.907-8.706-2.795-6.741-4.815-8.302-14.184-3.487-20.925l13.772-19.281-13.772-19.281c-4.815-6.741-3.254-16.109 3.487-20.925 6.741-4.815 16.109-3.254 20.925 3.487l7.794 10.911 7.794-10.912c4.816-6.741 14.183-8.302 20.925-3.487 6.741 4.815 8.302 14.184 3.487 20.925l-13.772 19.281zm15.308-149.567-40 47.9c-2.868 3.434-7.097 5.385-11.512 5.385-.576 0-1.153-.033-1.733-.1-5.023-.583-9.415-3.659-11.68-8.181l-16-31.934c-3.711-7.406-.715-16.419 6.691-20.13 7.407-3.711 16.419-.715 20.13 6.691l5.747 11.47 25.329-30.332c5.311-6.359 14.77-7.208 21.128-1.899 6.359 5.311 7.209 14.771 1.9 21.13zm172.486 146.546h-88c-8.284 0-15-6.716-15-15s6.716-15 15-15h88c8.284 0 15 6.716 15 15s-6.716 15-15 15zm0-117.211h-88c-8.284 0-15-6.716-15-15s6.716-15 15-15h88c8.284 0 15 6.716 15 15s-6.716 15-15 15z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Assessment')}}
                    </span>
                </a>
            </div>
        </li>


        <li class="nav-links-li @if ($current_route == 'staff.payslip') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.payslip') }}">
                    <div class="sidebar_icon">
                        <svg height="48" width="48" version="1.1" id="fi_726182" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <polygon points="320,0 320,128 448,128"></polygon>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M320,160c-17.632,0-32-14.368-32-32V0H96C78.368,0,64,14.368,64,32v448c0,17.664,14.368,32,32,32h320
                                        c17.664,0,32-14.336,32-32V160H320z M176,97.984V80c0-8.832,7.168-16,16-16c8.832,0,16,7.168,16,16v18.016
                                        c10.016,2.272,19.36,6.496,27.072,12.768c6.88,5.568,7.904,15.648,2.304,22.496c-5.6,6.88-15.68,7.872-22.496,2.304
                                        C208.832,130.688,200.704,128,192,128c-17.344,0-32,10.976-32,24s14.656,24,32,24c35.296,0,64,25.12,64,56
                                        c0,26.016-20.48,47.744-48,54.016V304c0,8.832-7.168,16-16,16c-8.832,0-16-7.168-16-16v-18.016
                                        c-10.016-2.272-19.36-6.496-27.072-12.768c-6.88-5.6-7.904-15.68-2.304-22.528c5.6-6.912,15.648-7.872,22.496-2.304
                                        C175.168,253.312,183.296,256,192,256c17.344,0,32-10.976,32-24s-14.656-24-32-24c-35.296,0-64-25.12-64-56
                                        C128,125.984,148.48,104.256,176,97.984z M368,448H144c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h224
                                        c8.832,0,16,7.168,16,16C384,440.832,376.832,448,368,448z M368,384H144c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h224
                                        c8.832,0,16,7.168,16,16C384,376.832,376.832,384,368,384z M368,320h-64c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h64
                                        c8.832,0,16,7.168,16,16C384,312.832,376.832,320,368,320z M368,256h-64c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h64
                                        c8.832,0,16,7.136,16,16C384,248.832,376.832,256,368,256z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Payslip')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.inventory.item') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.inventory.item') }}">
                    <div class="sidebar_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="48"
                            height="48" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g data-name="Layer 2">
                                    <path d="M7 16h3.001v3H7z" fill="#000000" data-original="#000000" class=""></path>
                                    <path d="M13 16h-1v3a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2zM22 16h3.001v3H22z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path d="M28 16h-1v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3h-1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-9a2 2 0 0 0-2-2zM15 2h2.001v3H15z"
                                        fill="#000000" data-original="#000000" class=""></path>
                                    <path d="M11 14h10a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-2v3a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2V2h-2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2z" fill="#000000"
                                        data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Inventory')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.my.profile') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.my.profile') }}">
                    <div class="sidebar_icon">
                        <svg width="48" height="48" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 460.8 460.8" style="enable-background:new 0 0 460.8 460.8;" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M230.432,239.282c65.829,0,119.641-53.812,119.641-119.641C350.073,53.812,296.261,0,230.432,0
				S110.792,53.812,110.792,119.641S164.604,239.282,230.432,239.282z" />
                                        <path
                                            d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784
				c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555
				c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943
				c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167
				c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02
				c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898
				C436.8,341.682,437.322,338.024,435.755,334.89z" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </div>
                    <span class="link_name">
                        {{get_phrase('My Profile')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.holidays') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.holidays') }}">
                    <div class="sidebar_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-suitcase-fill" viewBox="0 0 16 16">
                    <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V3h1.5A1.5 1.5 0 0 1 13 4.5v9a1.5 1.5 0 0 1-1.004 1.416A1 1 0 1 1 10 15H6a1 1 0 1 1-1.997-.084A1.5 1.5 0 0 1 3 13.5v-9A1.5 1.5 0 0 1 4.5 3H6zM9 1H7v2h2zM6 5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0z"/>
                    </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Holidays')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.birthdays') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.birthdays') }}">
                    <div class="sidebar_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-cake2-fill" viewBox="0 0 16 16">
  <path d="m2.899.804.595-.792.598.79A.747.747 0 0 1 4 1.806v4.886q-.532-.09-1-.201V1.813a.747.747 0 0 1-.1-1.01ZM13 1.806v4.685a15 15 0 0 1-1 .201v-4.88a.747.747 0 0 1-.1-1.007l.595-.792.598.79A.746.746 0 0 1 13 1.806m-3 0a.746.746 0 0 0 .092-1.004l-.598-.79-.595.792A.747.747 0 0 0 9 1.813v5.17q.512-.02 1-.055zm-3 0v5.176q-.512-.018-1-.054V1.813a.747.747 0 0 1-.1-1.01l.595-.79.598.789A.747.747 0 0 1 7 1.806"/>
  <path d="M4.5 6.988V4.226a23 23 0 0 1 1-.114V7.16c0 .131.101.24.232.25l.231.017q.498.037 1.02.055l.258.01a.25.25 0 0 0 .26-.25V4.003a29 29 0 0 1 1 0V7.24a.25.25 0 0 0 .258.25l.259-.009q.52-.018 1.019-.055l.231-.017a.25.25 0 0 0 .232-.25V4.112q.518.047 1 .114v2.762a.25.25 0 0 0 .292.246l.291-.049q.547-.091 1.033-.208l.192-.046a.25.25 0 0 0 .192-.243V4.621c.672.184 1.251.409 1.677.678.415.261.823.655.823 1.2V13.5c0 .546-.408.94-.823 1.201-.44.278-1.043.51-1.745.696-1.41.376-3.33.603-5.432.603s-4.022-.227-5.432-.603c-.702-.187-1.305-.418-1.745-.696C.408 14.44 0 14.046 0 13.5v-7c0-.546.408-.94.823-1.201.426-.269 1.005-.494 1.677-.678v2.067c0 .116.08.216.192.243l.192.046q.486.116 1.033.208l.292.05a.25.25 0 0 0 .291-.247M1 8.82v1.659a1.935 1.935 0 0 0 2.298.43.935.935 0 0 1 1.08.175l.348.349a2 2 0 0 0 2.615.185l.059-.044a1 1 0 0 1 1.2 0l.06.044a2 2 0 0 0 2.613-.185l.348-.348a.94.94 0 0 1 1.082-.175c.781.39 1.718.208 2.297-.426V8.833l-.68.907a.94.94 0 0 1-1.17.276 1.94 1.94 0 0 0-2.236.363l-.348.348a1 1 0 0 1-1.307.092l-.06-.044a2 2 0 0 0-2.399 0l-.06.044a1 1 0 0 1-1.306-.092l-.35-.35a1.935 1.935 0 0 0-2.233-.362.935.935 0 0 1-1.168-.277z"/>
</svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Birthdays')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.organisation') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.organisation') }}">
                    <div class="sidebar_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5z"/>
</svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Organisation Chart')}}
                    </span>
                </a>
            </div>
        </li>

        <li class="nav-links-li @if ($current_route == 'staff.separation') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.separation') }}">
                    <div class="sidebar_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person-fill-slash" viewBox="0 0 16 16">
                        <path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                    </svg>
                    </div>
                    <span class="link_name">
                        {{get_phrase('Separation')}}
                    </span>
                </a>
            </div>
        </li>

    </ul>
</div>
