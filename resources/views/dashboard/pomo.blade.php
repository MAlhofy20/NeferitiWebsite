@extends('dashboard.layout')
@section('content')
    <x-dashboard.header title="ادارة المهام">
        <div class="text-xl font-bold">ادارة المهام</div>
    </x-dashboard.header>
    <div  class=" rounded-lg shadow p-6 h-full flex  justify-center items-center">
        <div class="promodoro bg-[#0202021f] text-[#506f6a] w-[480px]  pb-7 rounded-md">
            <div class="image  flex justify-center items-center gap-1 py-2">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
                <img class="w-[25px]" src="../frontend/images/pngtree-3d-yellow-toy-duck-png-image_6655129.png" alt="">
            </div>
            <div  class="line bg-black/10 h-[1px] mb-10 relative left-0">
                <div id="progressBar" class="h-[3px] bg-[#506f6a] rounded-full transform -translate-y-[1px] w-0"></div>
            </div>
            <div class="taps">
                <ul class="flex justify-evenly items-center">
                    <li onclick="changeTap(this)" id="tap1" class=" tap  m-0 rounded-md text-base px-3 py-0.5 h-7 cursor-pointer bg-transparent shadow-none font-light">long break</li>
                    <li onclick="changeTap(this)" id="tap2" class=" tap m-0 rounded-md text-base px-3 py-0.5 h-7 cursor-pointer bg-transparent shadow-none font-light">short break</li>
                    <li onclick="changeTap(this)" id="tap3" class=" tap bg-[azure] m-0 rounded-md text-base px-3 py-0.5 h-7 cursor-pointer bg-transparent shadow-none font-light">promodoro</li>
                </ul>
                <div  class="timer text-[120px] font-bold mt-5 text-center">
                    <span id="time"></span>
                </div>
                <div class="relative flex  items-center">
                    <div id="startBtn" class="select-none putn cursor-pointer border-2 text-center flex justify-center items-center mx-auto border-gray-300 mt-5 px-3 py-0 rounded-md shadow-md
                        font-bold text-[22px] h-[55px] w-[200px]
                        text-black bg-white transition-colors duration-500 ease-in-out">start
                    </div>
                    <div id="icon" class=" absolute hidden bottom-0 h-[54px]  items-center justify-center pointer-events-none w-[calc(55%-100px)] right-0">
                        <i class="fa-solid fa-forward-step text-[22px] cursor-pointer  opacity-70 transition duration-200 ease-out pointer-events-auto"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        window.onload = function () {changeTap(document.getElementById('tap3'));}

        let timer;
        let timerDisplay = document.getElementById('time');
        let startBtn = document.getElementById('startBtn');
        let progressBar = document.getElementById('progressBar');
        let totalTime = 0;
        let timeLeft = 0;
        // timerrrr/
        function startTimer(buttonId) {
            clearInterval(timer);
            timer = setInterval(() => {
                if (timeLeft > 0) {
                    timeLeft--;
                    updateTimer();
                } else {
                    clearInterval(timer);
                    alert(buttonId);
                }
            }, 1000);
        }

        function updateTimer() {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            timerDisplay.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

            let progress = ((totalTime - timeLeft) / totalTime) * 100;
            progressBar.style.width = `${progress}%`;
        }

        function changeTimer(element) {
            if (element.id === 'tap3') {
                timerDisplay.textContent = '25:00';
                timeLeft = 25 * 60;
                totalTime = 25 * 60;
            } else if (element.id === 'tap2') {
                timerDisplay.textContent = '5:00';
                timeLeft = 5 * 60;
                totalTime = 5 * 60;
            } else if (element.id === 'tap1') {
                timerDisplay.textContent = '15:00';
                timeLeft = 15 * 60;
                totalTime = 15 * 60;
            }
            progressBar.style.width = '0%'; // Reset progress bar when changing timer
        }
        // timer
        // background
        function changeBackGround(element) {
            document.querySelectorAll('.tap').forEach(el => {
                el.classList.remove('bg-[azure]');
            });
            element.classList.add('bg-[azure]');
        }
        // background
        // Tap
        function changeTap(element) {
            changeTimer(element);
            changeBackGround(element);
            clearInterval(timer);
            startBtn.textContent = "start";
            startBtn.setAttribute("tapId", element.id);
        }
        // Tap

        startBtn.onclick = function () {
            if (startBtn.textContent === 'start') {
                startBtn.textContent = 'pause';
                startBtn.style.transform = "translateY(4px)";
                startBtn.style.boxShadow = "none";
                startTimer(startBtn.getAttribute('tapId'));
            } else {
                startBtn.textContent = 'start';
                startBtn.style.transform = "translateY(0)";
                startBtn.style.boxShadow = "rgb(235, 235, 235) 0px 4px 0px";
                clearInterval(timer);
            }
        };
// bottom
    </script>
@endpush

