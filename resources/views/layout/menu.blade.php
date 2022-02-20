 <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->

                <ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true"
                    data-slide-speed="200">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <li class="sidebar-toggler-wrapper">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler">
                        </div>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                    </li>
                    @if (auth::user()->level==1)
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li style="margin-top:5px " class="  ">
                            <a href="javascript:;">
                                <i class="icon-home"></i>
                                <span class="title">الاطباء </span>
                                <span class=""></span>
                                <span class="arrow "></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('doctors.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الاطباء
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{route('doctors.create')}}">
                                            <i class="icon-bulb"></i>
                                            إضافة طبيب جديد
                                        </a>
                                    </li>
                                </ul>

                        </li>

                        <li style="margin-top:5px " class="  ">
                            <a href="javascript:;">
                                <i class="icon-home"></i>
                                <span class="title">المعامل </span>
                                <span class=""></span>
                                <span class="arrow "></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('labs.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض المعامل
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{route('labs.create')}}">
                                            <i class="icon-bulb"></i>
                                            إضافة معمل جديد
                                        </a>
                                    </li>
                                </ul>

                        </li>

                        <li style="margin-top:5px " class="  ">
                            <a href="javascript:;">
                                <i class="icon-home"></i>
                                <span class="title">الصيدليات </span>
                                <span class=""></span>
                                <span class="arrow "></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('pharmacy.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الصيدليات
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{route('pharmacy.create')}}">
                                            <i class="icon-bulb"></i>
                                            إضافة صيدلية جديد
                                        </a>
                                    </li>
                                </ul>

                        </li>
                    @endif


                    @if (auth::user()->level==2)
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li style="margin-top:5px " class="  ">
                            <a href="">
                                <i class="icon-home"></i>
                                <span class="title">الحجوزات  </span>
                                <span class=""></span>
                                <span class=""></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('reserves.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الحجوزات الجديدة
                                            </a>
                                    </li>

                                     <li class="">
                                        <a href="{{route('finish')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الحجوزات المنتهية
                                            </a>
                                    </li>

                                </ul>



                        </li>

                        <li style="margin-top:5px " class="  ">
                            <a href="">
                                <i class="icon-users"></i>
                                <span class="title">الاستشارات</span>
                                <span class=""></span>
                                <span class=""></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('consult.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الاستشارات الجديدة
                                            </a>
                                    </li>

                                     <li class="">
                                        <a href="{{route('consult.finish')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الاستشارات التي تم الرد عليها
                                            </a>
                                    </li>

                                </ul>



                        </li>
                    @endif

                    @if (auth::user()->level==3)
                        <li style="margin-top:5px " class="  ">
                            <a href="">
                                <i class="icon-home"></i>
                                <span class="title">الفحوصات </span>
                                <span class=""></span>
                                <span class=""></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('checkups.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الفحوصات الجديدة
                                            </a>
                                    </li>

                                     <li class="">
                                        <a href="{{route('checkups-finish')}}">
                                            <i class="icon-bar-chart"></i>
                                              الفحوصات المنتهية
                                            </a>
                                    </li>

                                </ul>

                        </li>
                    @endif


                      @if (auth::user()->level==4)
                        <li style="margin-top:5px " class="  ">
                            <a href="">
                                <i class="icon-home"></i>
                                <span class="title">الادوية</span>
                                <span class=""></span>
                                <span class=""></span>
                            </a>

                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="{{route('Pharmacists.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            عرض الروشتات الجديدة
                                            </a>
                                    </li>

                                     <li class="">
                                        <a href="{{route('Pharmacists-finish')}}">
                                            <i class="icon-bar-chart"></i>
                                              الروشتات المنتهية
                                            </a>
                                    </li>

                                </ul>

                        </li>
                    @endif


                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
