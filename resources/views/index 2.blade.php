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
        body {
            direction: rtl;
            text-align: center;
            font-family: 'IranSans', Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            transition: background-color 0.3s, color 0.3s;
            font-size: 0.9em;
        }

        body.dark-mode {
            background-color: #333;
            color: #f9f9f9;
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
            border-radius: 10px; 
            overflow: hidden; 
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
        .modal-box {
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            width: 400px;
            margin: auto;
            background-color: white;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 10px;
            font-size: 1.3em; 
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .btn.save {
            background-color: #45a049; 
        }
        .btn.cancel {
            background-color: #dc3545;
        }
        .btn.close {
            background-color: #dc3545;
        }
        .btn.complain {
            background-color: #ffc107; 
        }
        .dark-mode-toggle {
            margin: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            font-size: 1.3em;
        }
        .dark-mode-toggle:hover {
            background-color: #45a049;
        }
        .role-button {
            margin: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            font-size: 1.2em;
        }
        .role-button:hover {
            background-color: #45a049;}
</style>

<body class=" font-inter dashcode-app" id="body_class">
 
  <main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <!-- BEGIN: Sidebar -->
    <div class="sidebar-wrapper group">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
      <div class="logo-segment">
        <a class="flex items-center" href="index 2.html">
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
                  <!-- Dropdown menu -->
                </div>

              </div>
              <!-- end vertcial -->
              <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                <a href="index.html">
                  <span class="xl:inline-block hidden">
        <img src="assets/images/logo/logo.svg" class="black_logo " alt="logo">
        <img src="assets/images/logo/logo-white.svg" class="white_logo" alt="logo">
    </span>
                  <span class="xl:hidden inline-block">
        <img src="assets/images/logo/logo-c.svg" class="black_logo " alt="logo">
        <img src="assets/images/logo/logo-c-white.svg" class="white_logo " alt="logo">
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

        <!-- BEGIN: Search Modal -->
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
          <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
              <form>
                <div class="relative">
                  <input type="text" class="form-control !py-3 !pr-12" placeholder="Search">
                  <button class="absolute right-0 top-1/2 -translate-y-1/2 w-9 h-full border-l text-xl border-l-slate-200 dark:border-l-slate-600 dark:text-slate-300 flex items-center justify-center">
                    <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END: Search Modal -->
        <!-- END: Header -->
        <!-- END: Header -->
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">
                <div class="mb-3"><h4>نمرات دانشجو</h4></div>
                
    
    <div id="roleSelection">
        <h6>نقش خود را انتخاب کنید:</h6>
        <button class="role-button" onclick="setRole('دانشجو')">دانشجو</button>
        <button class="role-button" onclick="setRole('کارمند')">کارمند</button>
    </div>
    <form id="reservationForm" style="display: none;">
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>نام درس</th>
                        <th> نمره درس</th>
                        <th>وضعیت قبولی</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>طراحی وب</th>
                        <td><input type="radio" name="saturday" value="8" onclick="showGradePopup('نمره درس طراحی وب: 8', 'statusSaturday')"> مشاهده نمره</td>
                        <td id="statusSaturday" style="color: red;">مردود</td>
                    </tr>
                    <tr>
                        <th>اندیشه اسلامی1</th>
                        <td><input type="radio" name="sunday" value="19" onclick="showGradePopup('نمره درس اندیشه اسلامی: 19', 'statusSunday')"> مشاهده نمره</td>
                        <td id="statusSunday" style="color: green;">قبول شده</td>
                    </tr>
                    <tr>
                        <th>ورزش</th>
                        <td><input type="radio" name="monday" value="20" onclick="showGradePopup('نمره درس ورزش: 20', 'statusMonday')"> مشاهده نمره</td>
                        <td id="statusMonday" style="color: green;">قبول شده</td>
                    </tr>
                    <tr>
                        <th>گرافیک رایانه ای 3</th>
                        <td><input type="radio" name="tuesday" value="18" onclick="showGradePopup('نمره درس گرافیک رایانه ای: 18', 'statusTuesday')"> مشاهده نمره</td>
                        <td id="statusTuesday" style="color: green;">قبول شده</td>
                    </tr>
                    <tr>
                        <th>تصویربرداری</th>
                        <td><input type="radio" name="wednesday" value="20" onclick="showGradePopup('نمره درس تصویربرداری: 20', 'statusWednesday')"> مشاهده نمره</td>
                        <td id="statusWednesday" style="color: green;">قبول شده</td>
                    </tr>
                    <tr>
                        <th>هوش مصنوعی</th>
                        <td><input type="radio" name="thursday" value="9" onclick="showGradePopup('نمره درس هوش مصنوعی: 9', 'statusThursday')"> مشاهده نمره</td>
                        <td id="statusThursday" style="color: red;">مردود</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
    <!-- کد مدال -->
    <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
          <h3 class="text-lg font-bold" id="gradeTitle">نمره درس</h3>
          <p class="py-4" id="gradeMessage">نمره شما: </p>
          <div class="modal-action">
            <button class="btn save" id="saveButton" style="display: none;">تغییر</button>
            <button class="btn cancel" id="cancelButton" style="display: none;">لغو</button>
            <button class="btn close" id="closeButton">بستن</button>

            <button class="btn complain" id="complainButton" style="display: none;">اعتراض</button>
          </div>
        </div>
    </dialog>
    

    <dialog id="complaint_modal" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="text-lg font-bold">اعتراض به نمره</h3>
            <textarea id="complaintText" rows="4" style="width: 100%;" placeholder="متن اعتراض خود را وارد کنید..."></textarea>
            <div class="modal            <textarea id="complaintText" rows="4" style="width: 100%;" placeholder="متن اعتراض خود را وارد کنید..."></textarea>
            <div class="modal-action">
                <button class="btn save" id="submitComplaintButton">تایید</button>
                <button class="btn cancel" id="cancelComplaintButton">لغو</button>
            </div>
            <p id="complaintMessage" style="color: green; display: none;">اعتراض شما با موفقیت ثبت شد</p>
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
  <!-- scripts -->
  <!-- Core Js -->
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.js') }}"></script>
  <script src="{{ asset('assets/js/tw-elements-1.0.0-alpha13.min.js') }}"></script>
  <script src="{{ asset('assets/js/SimpleBar.js') }}"></script>
  <script src="{{ asset('assets/js/iconify.js') }}"></script>

  <script>
        let role;
        let currentStatusId;
        let originalGrade;



        function setRole(selectedRole) {
            role = selectedRole;
            document.getElementById('roleSelection').style.display = 'none';
            document.getElementById('reservationForm').style.display = 'block';
        }

        function showGradePopup(grade, statusId) {
            let gradeValue = parseInt(grade.split(': ')[1]);
            originalGrade = gradeValue; 
            currentStatusId = statusId;
            let statusElement = document.getElementById(statusId);
            let gradeTitle = document.getElementById('gradeTitle');
            let gradeMessage = document.getElementById('gradeMessage');
            let saveButton = document.getElementById('saveButton');
            let cancelButton = document.getElementById('cancelButton');
            let closeButton = document.getElementById('closeButton');
            let complainButton = document.getElementById('complainButton'); 

            if (role === 'کارمند') {
                gradeTitle.innerHTML = `نمره درس <input type="text" id="newGrade" value="${gradeValue}">`;
                gradeMessage.innerText = "قابلیت تغییر نمره برای کارمند فعال است.";
                saveButton.style.display = 'inline-block';
                cancelButton.style.display = 'inline-block';
                closeButton.style.display = 'none';
                complainButton.style.display = 'none';

                saveButton.onclick = function() {
                    let newGradeValue = parseInt(document.getElementById('newGrade').value);
                    updateGrade(currentStatusId, newGradeValue);
                    closeModal();
                };
                cancelButton.onclick = function() {
                    updateGrade(currentStatusId, originalGrade); // Revert to the original grade
                    closeModal();
                };
            } else {
                gradeTitle.innerText = grade;
                if (gradeValue >= 10) {
                    statusElement.innerText = "قبول شده";
                    statusElement.style.color = "green";
                    gradeMessage.innerText = "وضعیت: قبول شده";
                } else {
                    statusElement.innerText = "مردود";
                    statusElement.style.color = "red";
                    gradeMessage.innerText = "وضعیت: مردود";
                }
                saveButton.style.display = 'none';
                cancelButton.style.display = 'none';
                closeButton.style.display = 'inline-block';
                complainButton.style.display = 'inline-block'; 

                complainButton.onclick = function() {
                    showComplaintModal();
                };
            }

            closeButton.onclick = function() {
                closeModal();
            };

            document.getElementById('my_modal_5').showModal();
        }

        function showComplaintModal() {
            let complaintModal = document.getElementById('complaint_modal');
            let submitComplaintButton = document.getElementById('submitComplaintButton');
            let cancelComplaintButton = document.getElementById('cancelComplaintButton');

            submitComplaintButton.onclick = function() {
                let complaintText = document.getElementById('complaintText').value;
                console.log('Complaint submitted:', complaintText);
                document.getElementById('complaintMessage').style.display = 'block'; 
                setTimeout(() => {
                    closeComplaintModal();
                }, 2000);
            };

            cancelComplaintButton.onclick = function() {
                closeComplaintModal();
            };

            complaintModal.showModal();
        }

        function closeComplaintModal() {
            document.getElementById('complaint_modal').close();
        }

        function closeModal() {
            document.getElementById('my_modal_5').close();
        }

        function updateGrade(statusId, newGradeValue) {
            let statusElement = document.getElementById(statusId);
            if (newGradeValue >= 10) {
                statusElement.innerText = "قبول شده";
                statusElement.style.color = "green";
            } else {
                statusElement.innerText = "مردود";
                statusElement.style.color = "red";
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('roleSelection').style.display = 'block';
            document.getElementById('reservationForm').style.display = 'none';
        });
    </script>


<script> document.getElementById('show').addEventListener('click', function() { document.getElementById('reservationForm').style.display = 'none'; 
 document.getElementById('section2').style.display = 'block'; }); </script>



  <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>