<!DOCTYPE html>
<html lang="fa" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn/SignUp-Form</title>

    <script src="https://kit.fontawesome.com/9a5cfa66e1.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&family=Rubik:ital,wght@0,300..900;1,300..900&family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
  body {
    background-color: white;
    color: black;
}

body.dark {
    background-color: #1a202c; 
    color: white;
}

/* New styles for input labels in dark mode */
body.dark .label-text {
    color: #ffffff;
}

/* New styles for input fields in dark mode */
body.dark .input {
    background-color: #333333;
    color: #ffffff;
}

</style>

<body class="font-IBM bg-white dark:bg-gray-900 transition-colors duration-300">

    <!-- Main -->
     <main class="container mx-auto h">
        <!-- Main Content -->
        <section class="grid lg:grid-cols-2">
          <div class="hidden lg:flex">
                <img src="https://iranmavaa.ir/wp-content/uploads/2019/02/%D8%A2%D9%BE%D8%A7%D8%B1%D8%AA%D9%85%D8%A7%D9%86-%D9%85%D8%A8%D9%84%D9%87-%D8%AF%D8%B1-%D8%AA%D9%87%D8%B1%D8%A7%D9%86-1.jpg" alt="bg" class="h-screen ml-auto">
          </div>    
          <div class="h-screen flex justify-center items-center bg-[url(../assets/bg.png)] bg-no-repeat bg-cover bg-center lg:bg-none">
            <div class="w-full h-screen lg:w-3/4 lg:h-5/6 bg-[#f5f5f582] lg:bg-transparent py-0 px-5 xl:px-20 dark:bg-[#333333]">
            <!-- BEGIN: Toggle Theme -->
              <div class="relative">
               <button id="toggle-dark-mode" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] bg-[#F9F6F2] dark:bg-[#1a1a1a] rounded-full text-white dark:text-gray-200 cursor-pointer flex flex-col items-center justify-center fixed top-4 right-4">
                <i id="toggle-icon" class="fa-regular text-black fa-moon dark:fa-sun"></i>
               </button>
              </div>                            
            <!-- END: Toggle Theme -->
                  <div class="flex justify-center">
                    <img src="https://armangar.com/images/school/023b390f.png" class="w-1/3 pb-2 mt-5 lg:mt-0">
                  </div>
                    <!-- Title -->
                    <div class="pb-3 md:pb-[20px] space-x-1 md:space-y-2">
                        <p class="text-center  font-medium text-2xl">دانشگاه خوارزمی <i class="fa-solid fa-right-to-bracket"></i></p>
                        <p class="text-center  font-medium text-base">به سیستم جامع دانشگاهی گلستان خوش آمدید</p>
                    </div>

                    <!-- Input Field -->
                    <div class="space-y-1">
                        <!-- code Input -->
                         <div class="flex">
                            <label class="form-control w-full me-2">
                                <div class="label flex justify-end">
                                  <span class="label-text font-medium text-[14px] dark:text-white"> نام خانوادگی</span>
                                </div>
                                <input type="email" placeholder="نام خانوادگی" class="input text-right input-bordered w-full dark:bg-[#333333] dark:text-white" />
                            </label>
                            <label class="form-control w-full ms-2">
                                <div class="label flex justify-end">
                                  <span class="label-text font-medium text-[14px] dark:text-white">نام</span>
                                </div>
                                <input type="email" placeholder="نام" class="input text-right input-bordered w-full dark:bg-[#333333] dark:text-white" />
                            </label>
                         </div>
                        <label class="form-control w-full">
                            <div class="label flex justify-end">
                              <span class="label-text font-medium text-[14px] text-gray-800 dark:text-white">شماره دانشجویی</span>
                            </div>
                            <input type="email" placeholder="اینجا شماره دانشجویی را وارد کنید" class="input text-right input-bordered w-full dark:bg-[#333333] dark:text-white" />
                        </label>

                        <!-- Password Input -->
                        <label class="form-control w-full">
                            <div class="label flex justify-end">
                              <span class="label-text font-medium text-[14px] dark:text-white">رشته</span>
                            </div>
                            <input type="email" placeholder="اینجا رشته را وارد کنید" class="input text-right input-bordered w-full dark:bg-[#333333] dark:text-white" />
                        </label>

                        <label class="form-control w-full">
                            <div class="label flex justify-end">
                              <span class="label-text font-medium text-[14px] dark:text-white">کد امنیتی</span>
                            </div>
                            <div class="flex">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQHySKlKSkMhMTArI4JMXewqZo7BE1Omj_IbRKJ5z8ZxydsB_H" class="w-36 h-18">
                            <input type="text" placeholder="اینجا کد امنیتی را وارد کنید" class="input lg:ms-1 text-right input-bordered w-full dark:bg-[#333333] dark:text-white" />
                            </div>
                        </label>
                    </div>

                    <!-- Remember -->
                    <div class="flex gap-1 font-medium text-[12px] py-5 dark:text-white">
                      <a href="#" class="ms-1">رمز خود را فراموش کردید؟</a>
                      <div class="flex items-center ml-auto">
                         <span class="mx-1">مرا به خاطر بسپار</span>
                         <input type="checkbox" name="" id="">
                       </div>
                    </div>

                    <!-- Button -->
                    <div>
                      <a href="{{ url('/index') }}">
                          <button class="btn bg-[#3A5B22] w-full text-white mb-2">ثبت نام</button>
                      </a>
                  </div>
                  <div>
                    <a href="{{ url('/employee-login') }}">
                        <button class="btn bg-[#3A5B22] w-full text-white mb-2">ورود کارمند</button>
                    </a>
                </div>
                  <div>
                    <a href="{{ url('/stu-login') }}">
                        <button class="btn bg-[#3A5B22] w-full text-white">ورود دانشجو</button>
                    </a>
                </div>
            </div>
          </div>
        </section>
     </main>
    
<!-- Tailwind -->
<script>
  const toggleButton = document.getElementById('toggle-dark-mode');
  const toggleIcon = document.getElementById('toggle-icon');

  toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    if (document.body.classList.contains('dark')) {
        toggleIcon.classList.remove('fa-moon');
        toggleIcon.classList.add('fa-sun');
    } else {
        toggleIcon.classList.remove('fa-sun');
        toggleIcon.classList.add('fa-moon');
    }
  });
</script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          },
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
</body>
</html>