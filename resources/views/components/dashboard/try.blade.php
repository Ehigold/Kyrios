<aside id="sidebar"
    class="fixed top-0 left-0 z-[60] flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">

            <div
                class="flex-1 px-3 mt-5 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">

                    @can('View Dashboard')
                        <li
                            class="@if (Request::segment(2) == 'dashboard') ==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
                            <a href="{{ route('admin.dashboard') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                            </a>
                        </li>
                    @endcan




                    {{-- loans --}}



                    {{-- register Admin --}}

                    @canany(['Admin', 'View Admin', 'Create Admin', 'Delete Admin', 'Edit Admin'])

                        <li
                            class="@if (Request::segment(2) == 'admin') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-admin" data-collapse-toggle="dropdown-admin"
                                aria-expanded="{{ Request::segment(2) == 'admin' ? 'true' : 'false' }}">
                                <svg class="w-6 h-6 font-bold text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 7v10a2 2 0 01-2 2H6a2 2 0 01-2-2V7m16 0a2 2 0 00-2-2H6a2 2 0 00-2 2m16 0v2M4 7v2m4 3h8m-8 3h3" />
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Register
                                    Admin</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>


                            <ul id="dropdown-admin"
                                class="@if (Request::segment(2) != 'admin') hidden @endif py-2 space-y-2 bg-gray-100">

                                @can('Create Admin')
                                    <li>
                                        <a href="{{ route('admin.addadmin.create') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add
                                            Admin </a>
                                    </li>
                                @endcan

                                @can('View Admin')
                                    <li>
                                        <a href="{{ route('admin.addadmin.index') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                            Admins </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcanany


                    {{-- register Admin --}}
                    @canany(['View Roles', 'Create Roles', 'Edit Roles', 'Delete Roles'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'role') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-role" data-collapse-toggle="dropdown-role"
                                aria-expanded="{{ Request::segment(2) == 'admin' ? 'true' : 'false' }}">
                                <svg class="w-6 h-6 font-bold text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 7v10a2 2 0 01-2 2H6a2 2 0 01-2-2V7m16 0a2 2 0 00-2-2H6a2 2 0 00-2 2m16 0v2M4 7v2m4 3h8m-8 3h3" />
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
                                    Roles</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>


                            <ul id="dropdown-role"
                                class="@if (Request::segment(2) != 'role') hidden @endif py-2 space-y-2 bg-gray-100">

                                @can('Create Roles')
                                    <li>
                                        <a href="{{ route('admin.role.create') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add
                                            Role </a>
                                    </li>
                                @endcan

                                @can('View Roles')

                                <li>
                                    <a href="{{ route('admin.role.index') }}"
                                        class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                        Roles </a>
                                </li>
                                @endcan

                            </ul>

                        </li>
                    @endcanany


                    @canany(['View Session', 'Create Session', 'Edit Session', 'Delete Session'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'session') ==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
                            <a href="{{ route('admin.session.index') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M5 7h14M5 12h14M5 17h14" />
                                </svg>

                                <span class="ml-3" sidebar-toggle-item>Sessions</span>
                            </a>
                        </li>
                    @endcanany


                    {{-- Register Student --}}

                    {{-- <li class="@if (Request::segment(2) == 'investment') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-investment" data-collapse-toggle="dropdown-investment"     aria-expanded="{{ Request::segment(2) == 'investment' ? 'true' : 'false' }}">
                    <svg class="w-6 h-6 font-bold text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Register Student</span>
                </button>
              </li> --}}

                    {{-- Resiter student --}}




                    @canany([
                        'View Students','Create Students','Edit Students','Add Result','Edit Results','View Result','Delete Results','Print Result','Upload Document','Add Payment','Edit Payment',
                        'Delete Payment','Print Payment', 'Delete Students','View Payment',
                        ])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'student') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-fixed" data-collapse-toggle="dropdown-fixed"
                                aria-expanded="{{ Request::segment(2) == 'fixed' ? 'true' : 'false' }}">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M16 12h4m-2 2v-4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Register
                                    Student</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>


                            <ul id="dropdown-fixed"
                                class="@if (Request::segment(2) != 'student') hidden @endif py-2 space-y-2 bg-gray-100">

                                @can('Create Students')
                                    <li>
                                        <a href="{{ route('admin.student.create') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add
                                            Student </a>
                                    </li>
                                @endcan

                                @can('View Students')
                                    <li>
                                        <a href="{{ route('admin.student.index') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                            Students </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcanany

                    {{-- faculty  --}}




                    @canany(['View Faculties', 'Create Faculties', 'Edit Faculties', 'Delete Faculties'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'faculty') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-faculty" data-collapse-toggle="dropdown-faculty"
                                aria-expanded="{{ Request::segment(2) == 'faculty' ? 'true' : 'false' }}">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                        d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm16 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2ZM4 13a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6Zm16-2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Z" />
                                </svg>

                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Faculty</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-faculty"
                                class="@if (Request::segment(2) != 'faculty') hidden @endif py-2 space-y-2 bg-gray-100">
                                @can('Create Faculties')
                                    <li>
                                        <a href="{{ route('admin.faculty.create') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add
                                            faculty </a>
                                    </li>
                                @endcan

                                @can('View Faculties')
                                    <li>
                                        <a href="{{ route('admin.faculty.index') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                            Faculties </a>
                                    </li>
                                @endcan

                            </ul>
                        </li>
                    @endcanany

                    {{-- Department --}}



                    @canany(['View Departments', 'Create Departments', 'Edit Departments', 'Delete Departments'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'savings') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-savings" data-collapse-toggle="dropdown-savings"
                                aria-expanded="{{ Request::segment(2) == 'savings' ? 'true' : 'false' }}">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                        d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm16 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2ZM4 13a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6Zm16-2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Z" />
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Department</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-savings"
                                class="@if (Request::segment(2) != 'savings') hidden @endif py-2 space-y-2 bg-gray-100">

                                @can('Create Departments')
                                    <li>
                                        <a href="{{ route('admin.department.create') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add
                                            Department </a>
                                    </li>
                                @endcan

                                @can('View Departments')
                                    <li>
                                        <a href="{{ route('admin.department.index') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                            Departments </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>

                    @endcanany

                    {{--  Course --}}


                    @canany(['View Courses', 'Create Courses', 'Edit Courses', 'Delete Courses'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'Specialsavings') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-Specialsavings" data-collapse-toggle="dropdown-Specialsavings"
                                aria-expanded="{{ Request::segment(2) == 'Specialsavings' ? 'true' : 'false' }}">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                        d="M12.1429 11v9m0-9c-2.50543-.7107-3.19099-1.39543-6.13657-1.34968-.48057.00746-.86348.38718-.86348.84968v7.2884c0 .4824.41455.8682.91584.8617 2.77491-.0362 3.45995.6561 6.08421 1.3499m0-9c2.5053-.7107 3.1067-1.39542 6.0523-1.34968.4806.00746.9477.38718.9477.84968v7.2884c0 .4824-.4988.8682-1 .8617-2.775-.0362-3.3758.6561-6 1.3499m2-14c0 1.10457-.8955 2-2 2-1.1046 0-2-.89543-2-2s.8954-2 2-2c1.1045 0 2 .89543 2 2Z" />
                                </svg> <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
                                    Course</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-Specialsavings"
                                class="@if (Request::segment(2) != 'Specialsavings') hidden @endif py-2 space-y-2 bg-gray-100">

                                @can('Create Courses')
                                    <li>
                                        <a href="{{ route('admin.course.create') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add
                                            Course </a>
                                    </li>
                                @endcan

                                @can('View Courses')
                                    <li>
                                        <a href="{{ route('admin.course.index') }}"
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                            Course </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>

                    @endcanany

                    {{-- Results --}}

                    @canany(['Add Result', 'Edit Result', 'Delete Result', 'View Result', 'Grade View', 'Grade Edit',
                        'Grade Delete', 'Score Criteria Vieww', 'Score Criteria Edit', 'Score Criteria Delete'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'shares') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-shares" data-collapse-toggle="dropdown-shares"
                                aria-expanded="{{ Request::segment(2) == 'shares' ? 'true' : 'false' }}">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z" />
                                </svg> <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                    sidebar-toggle-item>Result</span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-shares"
                                class="@if (Request::segment(2) != 'shares') hidden @endif py-2 space-y-2 bg-gray-100">

                                <li>
                                    <a href="{{ route('admin.result.compute_gpa') }}"
                                        class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                        Add Result </a>
                                </li>
                                <li>
                                    <a href=""
                                        class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                        View/Print Result </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.score.criterial.index') }}"
                                        class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                        View Grade Criterial </a>
                                </li>
                            </ul>
                        </li>
                    @endcanany


                    {{-- plans --}}

                    @can(['Add Payment', 'Edit Payment', 'Delete Payment', 'Print Payment', 'Delete Students'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->
{{--
                        <li
                            class="@if (Request::segment(2) == 'plans') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-plans" data-collapse-toggle="dropdown-plans"
                                aria-expanded="{{ Request::segment(2) == 'plans' ? 'true' : 'false' }}">


                                <svg class="w-6 h-6 font-bold text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>


                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Student
                                    Payment</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>


                            <ul id="dropdown-plans"
                                class="@if (Request::segment(2) != 'plans') hidden @endif py-2 space-y-2 bg-gray-100">

                                @can('View Payment')
                                    <li>
                                        <a href=""
                                            class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                            Student Payments </a>
                                    </li>
                                @endcan

                            </ul>
                        </li> --}}
                    @endcan

                    {{-- Users --}}

                    {{-- <li class="@if (Request::segment(2) == 'users') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-users" data-collapse-toggle="dropdown-users"     aria-expanded="{{ Request::segment(2) == 'users' ? 'true' : 'false' }}">


                            <svg class="w-6 h-6 font-bold text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Users</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-users" class="@if (Request::segment(2) != 'users') hidden @endif py-2 space-y-2 bg-gray-100">
                          <li>
                              <a href="" class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View Users </a>
                            </li>

                        </ul>
                      </li> --}}


                    {{-- Membership Plans --}}
                    @canany(['View Payment Purpose', 'Create Payment Purpose', 'Edit Payment Purpose', 'Delete Payment Purpose'])
                        <!-- Check if the user has either 'manage_students' or 'view_students' -->

                        <li
                            class="@if (Request::segment(2) == 'membership') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="dropdown-membership" data-collapse-toggle="dropdown-membership"
                                aria-expanded="{{ Request::segment(2) == 'membership' ? 'true' : 'false' }}">


                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>

                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Payment Purpose
                                </span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-membership"
                                class="@if (Request::segment(2) != 'membership') hidden @endif py-2 space-y-2 bg-gray-100">

                                   @can('Create Payment Purpose')
                                   <li>
                                    <a href="{{ route('admin.payment.purpose.create') }}"
                                        class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add
                                        Payment Purpose </a>
                                </li>

                                   @endcan

                                  @can('View Payment Purpose')
                                  <li>
                                    <a href="{{ route('admin.payment.purpose.index') }}"
                                        class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View
                                        Payment Purpose </a>
                                </li>

                                  @endcan

                            </ul>
                        </li>
                    @endcanany

                    @can(['View Payment'])


                    <li
                        class="@if (Request::segment(2) == 'payment') ==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">

                        <a href="{{ route('admin.student.payment.all') }}"
                        class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 8h6m-6 4h6m-6 4h6M6 3v18l2-2 2 2 2-2 2 2 2-2 2 2V3l-2 2-2-2-2 2-2-2-2 2-2-2Z" />
                        </svg>

                        <span class="ml-3" sidebar-toggle-item>Student Payment</span>
                    </a>


                    </li>

                    @endcan




                    {{-- Members --}}

                    {{-- <li class="@if (Request::segment(2) == 'members') true @else false @endif   dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-600">
                        <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-members" data-collapse-toggle="dropdown-members"     aria-expanded="{{ Request::segment(2) == 'members' ? 'true' : 'false' }}">


                            <svg class="w-6 h-6 font-bold text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>


                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Members</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>


                        <ul id="dropdown-members" class="@if (Request::segment(2) != 'members') hidden @endif py-2 space-y-2 bg-gray-100">

                            <li>
                                <a href="" class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Add Members </a>
                              </li>

                          <li>
                              <a href="" class="flex items-center p-2 text-base transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">View Members </a>
                            </li>



                        </ul>
                      </li> --}}






                    {{-- settings --}}

                    @can(['Edit Settings'])
                        <li
                            class="@if (Request::segment(2) == 'settings') true @else false @endif  dark:text-gray-200 mb-5 pb-5 dark:hover:bg-gray-700 dark:bg-gray-600">
                            <a href="{{ route('admin.setting.general') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                <svg width="40px" height="40px" viewBox="0 0 76 76"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00"
                                    xml:space="preserve">
                                    <path fill="#000000" fill-opacity="1" stroke-linejoin="round"
                                        d="M 38,23.5C 38.8643,23.5 39.7109,23.5756 40.5337,23.7206L 42.6275,18.5381L 48.1901,20.787L 46.0964,25.9692C 47.6473,27.0149 48.9851,28.3527 50.0308,29.9036L 55.213,27.8099L 57.4619,33.3725L 52.2794,35.4664C 52.4244,36.2891 52.5,37.1357 52.5,38C 52.5,38.8643 52.4244,39.7109 52.2794,40.5337L 57.4619,42.6275L 55.213,48.1901L 50.0308,46.0964C 49.0795,47.5073 47.8865,48.7418 46.5112,49.7405L 48.7844,54.8462L 43.3041,57.2891L 41.0307,52.1828C 40.0533,52.3906 39.0394,52.5 38,52.5C 37.1357,52.5 36.2891,52.4244 35.4664,52.2794L 33.3725,57.462L 27.8099,55.213L 29.9036,50.0309C 28.3527,48.9851 27.0149,47.6473 25.9691,46.0964L 20.787,48.1901L 18.538,42.6275L 23.7206,40.5336C 23.5756,39.7109 23.5,38.8643 23.5,38C 23.5,37.1357 23.5756,36.2891 23.7206,35.4664L 18.538,33.3725L 20.787,27.8099L 25.9691,29.9036C 26.9205,28.4927 28.1135,27.2582 29.4889,26.2594L 27.2157,21.1537L 32.6959,18.7109L 34.9694,23.8172C 35.9468,23.6094 36.9606,23.5 38,23.5 Z M 38,28C 32.4771,28 28,32.4772 28,38C 28,43.5229 32.4771,48 38,48C 43.5228,48 48,43.5229 48,38C 48,32.4772 43.5228,28 38,28 Z " />
                                </svg>
                                <span class="ml-3" sidebar-toggle-item> Settings</span>
                            </a>
                        </li>
                    @endcan
















                    {{-- <li x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Users</span>
                    <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <li>
                            <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Users List</a>
                        </li>

                        <li>
                            <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Users List</a>
                        </li>
                        <!-- Add more dropdown items here -->
                    </ul>
                </div>
            </li> --}}




















                    {{-- <li class="@if (Request::segment(2) == 'settings')==url()->current()) bg-gray-100 dark:text-gray-200  dark:hover:bg-gray-700 dark:bg-gray-700 @endif">
              <a href="" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                  <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                  <span class="ml-3" sidebar-toggle-item>Settings</span>
              </a>
            </li> --}}

                </ul>




            </div>
        </div>
        <div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white lg:flex dark:bg-gray-800 dark:text-gray-100"
            sidebar-bottom-menu>
            Logged in as {{ Auth::user()->first_name }}

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" data-tooltip-target="tooltip-logout"
                    class="block w-full px-4 py-2 text-gray-700 text-start text-md hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                        </path>
                        <path d="M9 12h12l-3 -3"></path>
                        <path d="M18 15l3 -3"></path>
                    </svg>
                </button>
            </form>

            <div id="tooltip-logout" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Logout from you account
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

        </div>
    </div>
</aside>
