@php $current_route = Route::currentRouteName(); @endphp

<div class="sidebar">
    <div class="logo-details mt-4">
        <div class="img_wrapper">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="" style="width: 37px;" />
        </div>
        <span class="logo_name">WorkPlace</span>
    </div>
    <div class="closeIcon">
        <span><i class="bi bi-x-circle"></i></span>
    </div>
    <ul class="nav-links">
        <!-- menu starts here -->

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
                        Timesheet
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
                        Task Manager
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
                        Attendance
                    </span>
                </a>
            </div>
        </li>

        <!-- menu starts here -->
        <li class="nav-links-li @if ($current_route == 'staff.leave.report') showMenu @endif">
            <div class="iocn-link">
                <a class="w-100" href="{{ route('staff.leave.report') }}">
                    <div class="sidebar_icon">
                        <svg width="48" height="48" version="1.1" id="fi_198141" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-100 0 550 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M501.084,295.982h-17.462c0-8.398,0-13.914,0-22.126c0-5.57-4.515-10.086-10.086-10.086h-5.964
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
                                         M463.453,295.982h-0.001h-31.599v-12.041h31.6V295.982z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M315.805,325.767l-8.188,28.028v86.777h-37.929l-12.685,24.113h52.405c-0.579-5.552,0.081-11.207,2.005-16.624
                                        l20.318-57.222v-40.06L315.805,325.767z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M416.914,50.634c-20.845-7.959-44.195,2.487-52.154,23.332c-8.029,21.025,2.701,44.277,23.332,52.154
                                        c20.656,7.888,44.136-2.332,52.154-23.332C448.204,81.943,437.759,58.593,416.914,50.634z"></path>
                                </g>
                            </svg>
                    </div>
                    <span class="link_name">
                        Leave Report
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
                        Assessment
                    </span>
                </a>
            </div>
        </li>



    </ul>
</div>
