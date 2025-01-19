<!DOCTYPE html>
<html lang="fa" dir="rtl" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Dashboard</title>
  <link rel="icon" type="image/png" href="assets/images/logo/logo-c.jpg">
  <!-- BEGIN: Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- END: Google Font -->
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/ُSimpleBar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <!-- END: Theme CSS-->
  <script src="{{ asset('assets/js/settings.js') }}" sync></script>
</head>
<style>
  @font-face {
            font-family: 'IranSans';
            src: url('fonts/IranSans.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        .overflow-x-auto {
            overflow-x: auto;
        }
  
  .table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #3b5998;
            color: white;
            font-size: 1.5em;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        .table th {
            padding-top: 16px;
            padding-bottom: 16px;
            background-color: #4e6ec4;
            color: white;
        }
        .table td {
            background-color: white;
            color: #333;
            transition: background-color 0.3s;
        }

        body.dark-mode .table td {
            background-color: #444;
            color: #f9f9f9;
        }
        body.dark-mode .table th {
            background-color: #555;
        }
        .status-reserved {
            background-color: green;
            color: white;
            font-weight: bold;
        }
        .status-not-reserved {
            background-color: red;
            color: white;
            font-weight: bold;
        }
        .reserve-button {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            font-size: 1.5em;
            transition: background-color 0.3s;
        }
        .reserve-button:hover {
            background-color: #45a049;
        }
        .modal-box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 10px;
            font-size: 1.5em;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .dark-mode-toggle {
            margin: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            font-size: 1.5em;
        }
        .dark-mode-toggle:hover {
            background-color: #45a049;
        }
</style>



<body class=" font-inter dashcode-app" id="body_class">
  <main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <!-- BEGIN: Sidebar -->
    <div class="sidebar-wrapper group">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
      <div class="logo-segment">
        <a class="flex items-center" href="index.html">
          <img src="assets/images/logo/logo-c.jpg" class="black_logo" alt="logo">
          <img src="assets/images/logo/logo-d.png" class="white_logo" alt="logo">
          <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">دانشگاه خوارزمی</span>
        </a>
        <!-- Sidebar Type Button -->

        <button class="sidebarCloseIcon text-2xl">
          <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
      </div>
      <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
          <li class="sidebar-menu-title">MENU</li>
          <li class="">
            <a href="{{ url('/index 2') }}" id="show" class="navItem active mb-2">
              <span class="flex items-center">
                <iconify-icon icon="line-md:text-box-multiple" width="24" height="24"></iconify-icon>
            <span>مشاهده نمرات  </span>
              </span>
            </a>
          </li>
          <li class="">
            <a href="{{ url('/index') }}" class="navItem active">
              <span class="flex items-center">
                <iconify-icon icon="line-md:pizza" width="24" height="24"></iconify-icon>
            <span>رزرو غذا   </span>
              </span>
            </a>
          </li>
        </ul>

      </div>
    </div>
    <!-- End: Sidebar -->
    <!-- End: Sidebar -->

    <div class="flex flex-col justify-between min-h-screen">
      <div>
        <!-- BEGIN: Header -->
        <!-- BEGIN: Header -->
        <div class="z-[9]" id="app_header">
          <div class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
            <div class="flex justify-between items-center h-full">
              <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
                <a href="index.html" class="mobile-logo xl:hidden inline-block">
                  <img src="assets/images/logo/logo-c.jpg" class="black_logo" alt="logo">
                  <img src="assets/images/logo/logo-d.png" class="white_logo" alt="logo">
                </a>


                <!-- BEGIN: Profile Dropdown -->
                <!-- Profile DropDown Area -->
                <div class="md:block hidden w-full">
                  <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
      inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                      <img src="assets/images/users/user-1.jpg" alt="user" class="block w-full h-full object-cover rounded-full">
                    </div>
                    <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">مریم کمالی</span>

                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  
                </div>
              </div>
              <!-- end vertcial -->
              <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                <a href="index.html">
                  <span class="xl:inline-block hidden">
        <img src="assets/images/logo/logo-c.jpg" class="black_logo " alt="logo">
        <img src="assets/images/logo/logo-d.png" class="white_logo" alt="logo">
    </span>
                  <span class="xl:hidden inline-block">
        <img src="assets/images/logo/logo-c.jpg" class="black_logo " alt="logo">
        <img src="assets/images/logo/logo-d.png" class="white_logo " alt="logo">
    </span>
                </a>
                <button class="smallDeviceMenuController  open-sdiebar-controller xl:hidden inline-block">
                  <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>

              </div>
              <!-- end horizental -->

              <!-- end top menu -->
              <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

<!-- BEGIN: Toggle Theme -->
<div>
  <button id="themeMood" onclick="executeBothFunctions()" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
  </button>
</div>
<!-- END: Toggle Theme -->
                
                <!-- END: Header -->
                <button class="smallDeviceMenuController md:hidden block leading-0">
                  <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <!-- end mobile menu -->
              </div>
              <!-- end nav tools -->
            </div>
          </div>
        </div>
        <!-- END: Header -->
        <!-- END: Header -->
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">

                <div class="mb-3" style="text-align: center;">
                  <h4>سامانه رزرو غذا</h4>
                </div>    
    <form id="reservationForm">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> گزینه1</th>
                        <th>گزینه 2</th>
                        <th>وضعیت رزرو </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>شنبه</th>
                        <td><input type="radio" name="saturday" value="کباب" onclick="updateStatus('statusSaturday')"> کباب</td>
                        <td><input type="radio" name="saturday" value="ماهی" onclick="updateStatus('statusSaturday')"> ماهی</td>
                        <td id="statusSaturday" class="status-not-reserved">رزرو نشده</td>
                    </tr>
                    <tr>
                        <th>یکشنبه</th>
                        <td><input type="radio" name="sunday" value="مرغ" onclick="updateStatus('statusSunday')"> مرغ</td>
                        <td><input type="radio" name="sunday" value="عدس پلو" onclick="updateStatus('statusSunday')"> عدس پلو</td>
                        <td id="statusSunday" class="status-not-reserved">رزرو نشده</td>
                    </tr>
                    <tr>
                        <th>دوشنبه</th>
                        <td><input type="radio" name="monday" value="جوجه کباب" onclick="updateStatus('statusMonday')"> جوجه کباب</td>
                        <td><input type="radio" name="monday" value="فسنجون" onclick="updateStatus('statusMonday')"> فسنجون</td>
                        <td id="statusMonday" class="status-not-reserved">رزرو نشده</td>
                    </tr>
                    <tr>
                        <th>سه شنبه</th>
                        <td><input type="radio" name="tuesday" value="کتلت" onclick="updateStatus('statusTuesday')"> کتلت</td>
                        <td><input type="radio" name="tuesday" value="قیمه" onclick="updateStatus('statusTuesday')"> قیمه</td>
                        <td id="statusTuesday" class="status-not-reserved">رزرو نشده</td>
                    </tr>
                    <tr>
                        <th>چهارشنبه</th>
                        <td><input type="radio" name="wednesday" value="ماکارونی" onclick="updateStatus('statusWednesday')"> ماکارونی</td>
                        <td><input type="radio" name="wednesday" value="لوبیاپلو" onclick="updateStatus('statusWednesday')"> لوبیاپلو</td>
                        <td id="statusWednesday" class="status-not-reserved">رزرو نشده</td>
                    </tr>
                    <tr>
                        <th>پنجشنبه</th>
                        <td><input type="radio" name="thursday" value="آبگوشت" onclick="updateStatus('statusThursday')"> آبگوشت</td>
                        <td><input type="radio" name="thursday" value="قرمه سبزی" onclick="updateStatus('statusThursday')"> قرمه سبزی</td>
                        <td id="statusThursday" class="status-not-reserved">رزرو نشده</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align: center;">

          <input type="submit" class="reserve-button" value="ثبت رزرو" onclick="submitForm(event); my_modal_5.showModal();">
        </div>
        
    </form>

    <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
      <div class="modal-box">
        <h3 class="text-lg font-bold">رزرو انجام شد!</h3>
        <p class="py-4">رزرو شما با موفقیت ثبت شد. برای بستن، دکمه زیر را فشار دهید.</p>
        <div class="modal-action">
          <form method="dialog">
            <button class="btn">بستن</button>
          </form>
        </div>
      </div>
    </dialog>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">

        <a href="profile.html" class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
          <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
            <img src="assets/images/users/user-1.jpg" alt="" class="w-full h-full rounded-full border-2 border-slate-100">
          </div>
        </a>

          </div>
        </a>
      </div>
    </div>
  </main>

  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/tw-elements-1.0.0-alpha13.min.js') }}"></script>
  <script src="{{ asset('assets/js/SimpleBar.js') }}"></script>
  <script src="{{ asset('assets/js/iconify.js') }}"></script>

  <script>
   

   function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
    }

    function updateStatus(statusId) {
        let statusElement = document.getElementById(statusId);
        statusElement.innerText = "رزرو شده";
        statusElement.classList.remove('status-not-reserved');
        statusElement.classList.add('status-reserved');
        statusElement.style.backgroundColor = "green";
        statusElement.style.color = "white";
    }

    function submitForm(event) {
        event.preventDefault();
        let days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'];
        days.forEach(day => {
            let radios = document.getElementsByName(day.toLowerCase());
            let reserved = false;
            radios.forEach(radio => {
                if (radio.checked) {
                    reserved = true;
                }
            });
            let statusElement = document.getElementById('status' + day);
            if (!reserved) {
                statusElement.innerText = "رزرو نشده";
                statusElement.classList.remove('status-reserved');
                statusElement.classList.add('status-not-reserved');
            }
        });
    }

function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    let button = document.querySelector('.dark-mode-toggle');
    if (document.body.classList.contains('dark-mode')) {
        button.innerText = 'حالت روز';
    } else {
        button.innerText = 'حالت شب';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    let button = document.querySelector('.dark-mode-toggle');
    if (document.body.classList.contains('dark-mode')) {
        button.innerText = 'حالت روز';
    } else {
        button.innerText = 'حالت شب';
    }
});
</script>

<script> document.getElementById('show').addEventListener('click', function() { document.getElementById('reservationForm').style.display = 'none'; 
 document.getElementById('section2').style.display = 'block'; }); </script>

  <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>