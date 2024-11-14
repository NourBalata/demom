
<nav data-closable>
    {{-- <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fa fa-bars" style="color:rgb(0, 0, 0) ; font-size:20px;padding-right:30%;"></i>
    </label> --}}
    
    <input type="checkbox" id="check" class="menu-toggle" style="display: none;">
    <label for="check" class="checkbtn" style="display: none">
        <i class="fa fa-bars" style="color: rgb(0, 0, 0); font-size: 20px;"></i>
        
      </label>
    <ul class="menu-items" data-closable >
        <div>
           
            {{-- <label for="check" class="checkbtn">
                <i class="fa fa-bars" style="color:rgb(0, 0, 0) ; font-size:20px;padding-right:30%;"></i>
            </label> --}}
            <li class="menu-item" id="item1">
                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/ControlPanel.svg') }}" alt="Dashboard icon" class="menu-icon" />
                        <span class="sp">
                            لوحة التحكم
                        </span>
                      
                    </button>

                </a>

            </li>
            <li class="menu-item" id="item2">
                <a href="#"class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/Tracks.svg') }}" alt="Paths icon" class="menu-icon" />

                        <span class="sp">
                            المسارات
                        </span>
                   
                    </button>



                </a>

            </li>
            <li class="menu-item"id="item3">
                <a href="#"class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/plans.svg') }}" alt="Plans icon" class="menu-icon" />
                        <span class="sp">
                            الخطط
                        </span>
                     
                    </button>
                </a>


            </li>
            <li class="menu-item"id="item4">

                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/Sessions.svg') }}" alt="Sessions icon" class="menu-icon" />
                        <span class="sp">
                            الجلسات
                        </span>
                 
                    </button>

                </a>

            </li>
            <li class="menu-item"id="item5">

                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/teachers.svg') }}" alt="Sessions icon" class="menu-icon" />
                        <span class="sp">
                            المعلمون
                        </span>
                     
                    </button>

                </a>

            </li>

            <li class="menu-item"id="item6">
                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/Calendar.svg') }}" alt="Calendar icon" class="menu-icon" />
                        <span class="sp">
                            التقويم
                        </span >

                       
                    </button>


                </a>

            </li>
            <li class="menu-item"id="item7">
                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/packges.svg') }}" alt="Packages icon" class="menu-icon" />
                        <span class="sp">
                            الباقات
                        </span>
                  
                    </button>


                </a>

            </li>
            <li class="menu-item"id="item8">
                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/packges.svg') }}"alt="Payment history icon" class="menu-icon" />
                        <span class="sp">
                            سجل الدفع
                        </span>
                     
                    </button>


                </a>

            </li>
            <li class="menu-item"id="item9">
                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/industry.svg') }}" alt="About icon" class="menu-icon" />
                        <span class="sp">
                            عن صناعة القارئ
                        </span>
                    
                    </button>


                </a>

            </li>
            <li class="menu-item"id="item10">
                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/contactus.svg') }}" alt="Contact us icon" class="menu-icon" />
                        <span class="sp">
                            تواصل معنا
                        </span>
                       
                    </button>

                </a>

            </li>
            <li class="menu-item"id="item11">
                <a href="#" class="menu-text">
                    <button class="btn">
                        <img src="{{ asset('image/logout.svg') }}" alt="Logout icon" class="menu-icon" />
                        <span class="sp">
                            تسجيل الخروج
                        </span>
                     


                    </button>

                </a>

            </li>
        </div>
    </ul>
    
</nav>
