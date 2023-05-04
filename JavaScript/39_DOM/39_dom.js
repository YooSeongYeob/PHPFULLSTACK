// 1. 요소를 선택하는 방법

// 1-1. ID로 선택하는 방법
//      document.getElementById("");
const TITLE = document.getElementById('title');
TITLE.style.color = 'blue'; // id가 title인 요소의 글자를 파란색으로 변경함

// 1-2. 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');
// li[0].style.color = 'brown'
// 'brown'
// li[1].style.color = 'yellow'
// 'yellow'
// li[2].style.color = 'red'
// 'red'
// 탕수육은 노란색, 짬뽕은 빨간색으로 변경

// 탕수육, 볶음밥, 깐풍기는 배경색상을 오렌지색
// 짜장면, 짬뽕, 라조기는 배경색상을 베이지색


/* 
const menuColors = {
    '탕수육': 'orange',
    '볶음밥': 'orange',
    '깐풍기': 'orange',
    '짜장면': 'beige',
    '짬뽕': 'beige',
    '라조기': 'beige',
  };
  
  const menuList = document.querySelector('ul');
  const menuItems = menuList.querySelectorAll('.none-li');
  
  menuItems.forEach((menuItem) => {
    const menu = menuItem.textContent;
    const color = menuColors[menu];
  
    menuItem.style.backgroundColor = color;
  }); 
*/

for (let i = 0; i < li.length; i++) {
  if( i % 2 === 0 ) {
      li[i].style.backgroundColor = 'orange';
  }
  else {
      li[i].style.backgroundColor = 'beige';
  }
}

// for...in 은 잘 안 씀 성능 안 좋고 필요 없는 데이터를 가져오기도 함

// 3. 클래스명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName( 'none-li' );


// 4. CSS 선택자로 요소를 선택하는 방법
// querySelector() : 복수의 요소가 있다면 가장 첫 번째 것만 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none-li');

// querySelectorAll() : 복수의 요소를 전부 선택
const li3 = document.querySelectorAll('.none-li');

// 이 내용들은 특정 요소를 선택하는 방법을 배웠음



// 2. 요소 조작하기

// 2-1. 콘텐츠를 조작하는 방법 
// textContent : 순수한 텍스트 데이터를 전달, 이전의 태그들은 모두 제거
// TITLE.textContent(); // title.textContent = '<span>바꿨지롱~</span>';

// innerHtml : 태그는 태그로 인식해서 전달, 이전의 태그들은 모두 제거
// TITLE.innerHtml(); // title.innerHtml = '<span>바꿨지롱~</span>';

// 원본데이터가 날아가기 때문에 주의해서 써야 함
// div1.innerHTML = '이너로 넣었어요';
// div1.textContent = '안녕';
// 이렇게 쓰면 html에 있는 <h2> 원본데이터가 날아감
// 선택 방법
// document.querySelector('#div1');
// <div id=​"div1">​…​</div>​ // 출력 결과
// const div1 = document.querySelector('#div1'); // 변수에 넣기



// 요소에 속성을 추가
// const it = document.querySelector('#it');
const it = document.getElementById('it');
it.setAttribute('placeholder', '셋어트리뷰트로 삽입');

const aa = document.getElementById('aa');
aa.setAttribute('href', 'http://www.naver.com');

// 요소의 속성을 제거
// it.removeAttribute('placeholder');
// aa.removeAttribute('href');
// it.addEventListener('mouseover',function(e) {
//     it.setAttribute('placeholder', '셋어트리뷰트로 삽입');
// });

// it.addEventListener('mouseleave', function() {
   
// });

// 요소의 스타일링
// 인라인 스타일로 css 스타일 적용
// aa.style.textDecoration = 'none';
// aa.style.color = 'skyblue';


// 클래스로 스타일 적용
aa.classList.add('aa', 'aa1', 'aa2', 'aa3'); // 한 번에 여러개의 클래스에 css 스타일 적용 가능 


// 새로운 요소 만들기 
// 요소 만들기 
const cli = document.createElement('li');
cli.innerHTML = '야끼우동';


// 요소를 자식요소의 가장 마지막에 삽입
// 부모를 먼저 선택을 해야 함 부모 - ul임
const ul = document.getElementsByTagName('ul');
// 엘리멘탈 태그 네임으로 가져왔으니까 ul[0]으로 접근
// ul[0].appendChild(cli);


// 요소를 특정 위치에 삽입하는 방법
// document.querySelector('li:nth-child(3)'); // 이걸로 3번을 특정

const zzam = document.querySelector('li:nth-child(3)');
ul[0].insertBefore( cli, zzam );


// 해당 요소를 지우는 방법
// cli.remove(); 
// () 얘를 메소드라고 함
// remove는 html에 작성되어 있는 애만 삭제 
// 본체는 삭제되어 있지 않음


// 라조기와 깐풍기 사이에 "잡채밥", "동파육"을 순서대로 넣고, 
// 배경색깔 나오도록 수정

const ggan = document.querySelector('li:nth-child(7)');
const zab = document.createElement('li');
zab.innerHTML = '잡채밥';
const dong = document.createElement('li');
dong.innerHTML = '동파육';
ul[0].insertBefore( zab, ggan);
ul[0].insertBefore( dong, ggan);

for (let i = 0; i < li.length; i++) {
  if( i % 2 === 0 ) {
      li[i].style.backgroundColor = 'orange';
  }
  else {
      li[i].style.backgroundColor = 'beige';
  }
}