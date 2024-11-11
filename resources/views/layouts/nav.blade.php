
<nav class="sidebar-menu"data-closable class="NavBar fixed top-0 left-0 bg-white md:h-36 h-auto p-4  flex md:gap-0 gap-4 justify-between items-center px-7 md:w-[80%] w-full">
 <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fa fa-bars" style="color:rgb(0, 0, 0) ; font-size:20px;"></i>
    </label> 
    
<ul class="menu-items" data-closable >
    <div>
    <label for="check" class="checkbtn ">
        <i class="fa fa-close menu-item" style="color:rgb(0, 0, 0) ;  padding-right:60%;"></i>
    </label> 
        <li class="menu-item" >
            <a href="#" class="menu-text" class="active">
            <button class="btn-primary btn">
                
                <span>
                   لوحة التحكم 
                </span>
                <img src="{{ asset('image/ControlPanel.svg') }}" alt="Dashboard icon" class="menu-icon" />
            </button>    
            
            </a>
            
        </li>
        <li class="menu-item">
            <a href="#"class="menu-text">
                <button class="btn">
                    <span>
                        المسارات
                    </span>
                    <img src="{{ asset('image/Tracks.svg') }}" alt="Paths icon" class="menu-icon" />

                </button>



            </a>
           
        </li>
        <li class="menu-item">
            <a href="#"class="menu-text">
                <button class="btn">
               
                    <span>
                        الخطط
                    </span>
                    <img src="{{ asset('image/plans.svg') }}" alt="Plans icon" class="menu-icon" />
                </button>
            </a>
           
           
        </li>
        <li class="menu-item">
            
            <a href="#" class="menu-text">
<button  class="btn">
<span>
    الجلسات
</span>
    <img src="{{ asset('image/Sessions.svg') }}" alt="Sessions icon" class="menu-icon" />
</button>

                </a> 
           
        </li>
        <li class="menu-item">
            
            <a href="#" class="menu-text">
<button class="btn">
<span>
    المعلمون
</span>
    <img src="{{ asset('image/teachers.svg') }}" alt="Sessions icon" class="menu-icon" />
</button>

                </a> 
           
        </li>
   
        <li class="menu-item">
            <a href="#" class="menu-text">
                <button  class="btn">
                    <span>
                        التقويم
                    </span>

                    <img src="{{ asset('image/Calendar.svg') }}" alt="Calendar icon" class="menu-icon" />
                </button>
                
                
                </a>
            
        </li>
        <li class="menu-item">
            <a href="#" class="menu-text">
                <button  class="btn">
                    <span>
                        الباقات
                    </span>
                    <img src="{{ asset('image/packges.svg') }}" alt="Packages icon" class="menu-icon" />
                </button>
                
                
                </a>
           
        </li>
        <li class="menu-item">
            <a href="#" class="menu-text">
                <button  class="btn">
                    <span>
                        سجل الدفع  
                    </span>
                    <img src="{{ asset('image/packges.svg') }}"alt="Payment history icon" class="menu-icon" />
                </button>
                
                
                 </a>
           
        </li>
        <li class="menu-item">
            <a href="#" class="menu-text">
                <button  class="btn">
                    <span>
                        عن صناعة القارئ
                    </span>
                    <img src="{{ asset('image/industry.svg') }}" alt="About icon" class="menu-icon" />
                </button>
                
                
                </a>
            
        </li>
        <li class="menu-item">
            <a href="#" class="menu-text">
                <button  class="btn">
                    <span>
                        تواصل معنا
                    </span>
                    <img src="{{ asset('image/contactus.svg') }}" alt="Contact us icon" class="menu-icon" />
                </button>
                
                </a>
          
        </li>
        <li class="menu-item">
            <a href="#" class="menu-text">
                <button  class="btn">
                    <span>
                        تسجيل الخروج
                    </span>
                    <img src="{{ asset('image/logout.svg') }}" alt="Logout icon" class="menu-icon" />
                  
                   
                </button>
                
                </a>
          
        </li>
    </div>
    </ul>
</nav>
