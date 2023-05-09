let now = new Date();
document.getElementById("currentTime").innerText = "현재: " + now;

let timer = {
    id: null, // setInterval 식별자
    start: null, // 시작 시간
    remain: null, // 남은 시간
};

// 일시정지
const pause = () => {
    clearInterval(timer.id);
    timer.remain -= Date.now() - timer.start;
};

// 재개
const resume = () => {
    clearInterval(timer.id);
    timer.start = Date.now();
    timer.id = setInterval(printCurrentTime, 1000); // 1초마다 실행하여 현재 시간을 출력
};

// 현재 시간 출력
const printCurrentTime = () => {
    now = new Date();
    document.getElementById("currentTime").innerText = "현재: " + now;
};

// 정지 버튼 클릭 시
document.getElementById("pauseButton").addEventListener("click", () => {
    pause();
});

// 재개 버튼 클릭 시
document.getElementById("resumeButton").addEventListener("click", () => {
    resume();
});

// 시작
timer.start = Date.now();
timer.remain = 0; // 초기에는 remain을 0으로 설정하여 재개할 때 정상적으로 동작하도록 함
timer.id = setInterval(printCurrentTime, 1000); // 1초마다 실행하여 현재 시간을 출력



// const showTime = document.querySelector('/time_now');
// function clockTime() {
//    const nowTime = new Date();
//    const hours = nowTime.getHours;
//    const min = nowTime.getMinutes;
//    const sec = nowTime.getSeconds;

//    showTime.innerHTML = (hours<10? '0'+hours : hours) + ":" + (min<10? '0' + min : min) + ":" + (sec<10? '0' + sec : sec);
// }

// const setTime = setInterval(clockTime, 1000);
// const stopBtn = document.querySelector('.stop_btn');
// stopBtn.addEventListener('click', function(){
// clearInterval(setTime);
// }) 
//

