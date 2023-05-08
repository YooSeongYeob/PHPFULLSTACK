// 1. 버튼을 클릭 시 아래 내용의 알러트가 나옵니다.
    // 안녕하세요. 
    // 숨어 있는 div를 찾아보세요.

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다.
    // "두근두근"

// 3. 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타납니다.
    // "들켰다!"

// 4. 3번의 상태에서 다시 한 번 더 클릭하면 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안 보이게 됩니다.
    // "다시 숨는다."

    const btn11 = document.querySelector('.btn11');
    const targetArea = document.querySelector('.target-area');
    const message = document.querySelector('#message');
    let hehe = false;   

    btn11.addEventListener('click', () => {
      alert('안녕하세요.\n숨어 있는 div를 찾아보세요.');
    });

    targetArea.addEventListener('mouseenter', () => {
      alert('두근두근');
    });
    
    targetArea.addEventListener('click', () => {
      if (!hehe) {
        targetArea.style.backgroundColor = 'beige';
        message.textContent = '들켰다!';
      } else {
        targetArea.style.backgroundColor = 'white';
        message.textContent = '다시 숨는다.';
      }

      hehe = !hehe;
    });

    // 위치를 랜덤으로 지정하는 함수
    // function setRandomPosition() {
    //   const windowWidth = window.innerWidth;
    //   const windowHeight = window.innerHeight;
    //   const targetWidth = targetArea.offsetWidth;
    //   const targetHeight = targetArea.offsetHeight;

    //   const maxLeft = windowWidth - targetWidth;
    //   const maxTop = windowHeight - targetHeight;

    //   const randomLeft = Math.floor(Math.random() * maxLeft);
    //   const randomTop = Math.floor(Math.random() * maxTop);

    //   targetArea.style.left = randomLeft + 'px';
    //   targetArea.style.top = randomTop + 'px';
    // }

    // 초기 위치 설정
    // setRandomPosition();

    // 윈도우 크기 변경 시 위치 재설정
    // window.addEventListener('resize', setRandomPosition);