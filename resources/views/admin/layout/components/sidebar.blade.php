<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">


            <li class="menu">
                <a href="{{URL('/admin/dashboard')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard </span>
                    </div>
                </a>
            </li>

            {{--                <li class="menu">--}}
            {{--                    <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stoplights" viewBox="0 0 16 16" stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                                <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm1.5 2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>--}}
            {{--                                <path d="M4 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1c-1.2-.4-1.833-1.5-2-2h2V8c-1.2-.4-1.833-1.5-2-2h2V4c-1.2-.4-1.833-1.5-2-2h2zm2-1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6z"/>--}}
            {{--                            </svg>--}}
            {{--                            <span>Affliciate</span>--}}
            {{--                        </div>--}}

            {{--                    </a>--}}
            {{--                 --}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16" stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>--}}
            {{--                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>--}}
            {{--                            </svg>--}}
            {{--                            <span>Admin</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}



            <li class="menu">
                <a href="{{route('admin.blog.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg><span>Blog</span>
                    </div>
                </a>
            </li>


            {{--                <li class="menu">--}}
            {{--                    <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>--}}
            {{--                            <span>City</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>--}}
            {{--                            <span>Categories</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>--}}
            {{--                            <span>Customers</span>--}}
            {{--                        </div>--}}

            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>--}}
            {{--                            <span>Customers order</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            <li class="menu">
                <a href="{{route('admin.contact.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                        <span>Contact us</span>
                    </div>
                </a>
            </li>

            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>--}}
            {{--                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>--}}
            {{--                            </svg>--}}
            {{--                            <span>Contact Sign List</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>--}}
            {{--                            <span>Checkout Form</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sunset"><path d="M17 18a5 5 0 0 0-10 0"></path><line x1="12" y1="9" x2="12" y2="2"></line><line x1="4.22" y1="10.22" x2="5.64" y2="11.64"></line><line x1="1" y1="18" x2="3" y2="18"></line><line x1="21" y1="18" x2="23" y2="18"></line><line x1="18.36" y1="11.64" x2="19.78" y2="10.22"></line><line x1="23" y1="22" x2="1" y2="22"></line><polyline points="16 5 12 9 8 5"></polyline></svg>--}}
            {{--                            <span>Event Module</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                    <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">--}}
            {{--                        <li>--}}
            {{--                            <a href="#"> Chat </a>--}}
            {{--                        </li>--}}
            {{--                        <li>--}}
            {{--                            <a href="#"> Mailbox  </a>--}}
            {{--                        </li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>--}}
            {{--                            <span>Gallery</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}


            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line>--}}
            {{--                                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>--}}
            {{--                                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>--}}
            {{--                            </svg>--}}
            {{--                            <span>Gift Card</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-break" viewBox="0 0 16 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                                <path d="M0 10.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zM12 0H4a2 2 0 0 0-2 2v7h1V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v7h1V2a2 2 0 0 0-2-2zm2 12h-1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-2H2v2a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-2z"/>--}}
            {{--                            </svg>--}}
            {{--                            <span>Header Scripts</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>--}}
            {{--                            <span>Menu</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>--}}
            {{--                            </svg>--}}
            {{--                            <span>Marketing Pages</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>--}}
            {{--                            <span>Products</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>--}}
            {{--                            <span>Pages</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                    --}}{{--                    <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">--}}
            {{--                    --}}{{--                        <li>--}}
            {{--                    --}}{{--                            <a href="#"> Chat </a>--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                        <li>--}}
            {{--                    --}}{{--                            <a href="#"> Mailbox  </a>--}}
            {{--                    --}}{{--                        </li>--}}

            {{--                    --}}{{--                    </ul>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>--}}
            {{--                            <span>Packages</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                    --}}{{--                    <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">--}}
            {{--                    --}}{{--                        <li>--}}
            {{--                    --}}{{--                            <a href="#"> Chat </a>--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                        <li>--}}
            {{--                    --}}{{--                            <a href="#"> Mailbox  </a>--}}
            {{--                    --}}{{--                        </li>--}}

            {{--                    --}}{{--                    </ul>--}}
            {{--                </li>--}}
            {{--                <li class="menu">--}}
            {{--                    <a href="#" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-pull-request"><circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><path d="M13 6h3a2 2 0 0 1 2 2v7"></path><line x1="6" y1="9" x2="6" y2="21"></line></svg>--}}
            {{--                            <span>Request Information's</span>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>--}}
            {{--                            <span>Reports</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                    --}}{{--                    <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">--}}
            {{--                    --}}{{--                        <li>--}}
            {{--                    --}}{{--                            <a href="#"> Chat </a>--}}
            {{--                    --}}{{--                        </li>--}}
            {{--                    --}}{{--                        <li>--}}
            {{--                    --}}{{--                            <a href="#"> Mailbox  </a>--}}
            {{--                    --}}{{--                        </li>--}}

            {{--                    --}}{{--                    </ul>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>--}}
            {{--                            <span>Service</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}


            {{--                <li class="menu">--}}
            {{--                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>--}}
            {{--                            <span>Slider</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>--}}
            {{--                            <span>Short Url's</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>--}}
            {{--                            <span>Testimonials</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
            {{--                            </svg>--}}
            {{--                            <span>User</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16" stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round">--}}
            {{--                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>--}}
            {{--                            </svg>--}}
            {{--                            <span>User Group</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}

            {{--                <li class="menu">--}}
            {{--                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">--}}
            {{--                        <div class="">--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>--}}
            {{--                            <span>Settings</span>--}}
            {{--                        </div>--}}
            {{--                        <div>--}}
            {{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                </li>--}}


        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
