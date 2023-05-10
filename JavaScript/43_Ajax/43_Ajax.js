// 와우 드디어 api 통신 ㄷㄷ

// 웹페이지가 동기 방식으로 보통 움직임
// 요즘 웹개발 현장에서는 서버에 요청을 하고 
// 화면에 일부분만 변경하는 비동기 방식도 사용하는 데
// 웹페이지 전체를 로딩하지 않아도 일부분만 변경하는 것이
// 유행인데 그것을 위해 Ajax api 통신을 사용하는 이유이다.
// 굉장히 귀찮은 작업이라고 함
// 화면을 리로드 하는 게 아니라
// 이 틀을 하나하나 만들어야 함 
// 쇼핑몰에서 많이 씀 예를 들어 쿠팡
// api로 서버에 요청해서 서버에 갱신을 하고
// 서버는 갱신했다는 신호를 다시 보내고 DOM 기능을 이용해서
// 화면을 바꾸는 것 // 데이터베이스 갱신했다는 딱 하나의
// 신호만 받으면 된다
// 동시접속자가 많을 수록 데이터를 최소화 해야하기 때문에
// api를 필수로 사용해야 한다
// Fetch Api 방식이 있는데 얘도 프로미스 기반이고 패치를
// 기반으로 많이 사용함 

// 제이슨이라는 형태로 주고 받는다 (자바스크립트 오브젝트
// 노테이션) 자바스크립트 객체처럼 표현하는 방식이다
// 키와 밸류 값이 정해져 있다 항상 짝으로 구성됨

// 주고 받을 때는 객체로 주고 받을 수 없기 때문에
// 스트링으로 주고 받게 된다
// "{
//     key1: 'aa'
//     ,key2: 1
// }" 이런 형태가 스트링으로 돼서 넘어온다 (문자열로 넘어옴)
// xml은 가독성, 가시성이 떨어져서 사용하지 않는다고 함
// 제이슨은 데이터를 주고 받을 때 가장 간단한 파일 포맷
// 가벼운 텍스트 기반, 가독성 좋다 
// 데이터를 서버와 주고 받을 때 직렬화하기 위해 사용
// 직렬화란 간편한 변환 같은 의미
// 언어 플랫폼 상관 없이 사용 가능
// xml은 오래된 사이트(정부 사이트)에서만 사용
// 요즘은 개선 돼서 제이슨 xml 둘 다 쓴다고 함

//-----------------------------------------------------
// JSON.stringify - Object 객체를 string으로
// 변환 직렬화 해주는 것 시리얼라이링(스트링 형태로 
// 보내주는 것)

// JSON.parse -제이슨 포맷을 object로 
// 변환 역 직렬화라고 함 디시리얼라이징으로 객체나 배열로 
// 바꿔 줌 서버에 제이슨 형태로 요청 서버는 그 요청을 제이슨 형태로 처리해서
// 다시 그 형태를 제이슨으로 보내주는 것 그게 끝이라고 함
// 대부분 Api라고 하면 인가된 사람만 접속 가능한데
// 네이버 카카오톡 기상데이터, 교통정보데이터 오픈 Api로
// 접근을 하는데 접근 권한이 있는 키를 받아야 한다
// 그 키 받는 건 사용할 때 각 사이트마다 달라서
// 필요할 때 사이트 메뉴얼을 받아서 사용하면 됨
// 지금은 키가 필요 없는 사이트로 접속한다고 함
//          https://picsum.photos

// const url = "https://picsum.photos/v2/list?page=1&limit=5";
// // open Api에서 해당 Api를 다 가져올 수 있다
// fetch(url)     // 패치로 url을 찍고
// .then(res => {return(res.json())}) // 댄으로 처리
// .then(data => makeList(data)) // 댄으로 처리 
// .catch(console.log); // 오류 처리 다 완료되면 밑에 연산

// function makeList(data) {           // 연산하는 과정 
//     data.forEach(item => {
//         console.log(item);
//         const tagImg = document.createElement('img');
//         tagImg.setAttribute('src', item.download_url);
//         tagImg.style.width ="300px";
//         tagImg.style.height ="150px";
//         document.body.appendChild(tagImg);
//     });
// }
// 객체를 포이치로 돌리면서 한 개씩 한 개씩 가져옴
// 자바스크립트에 객체가 있고 그 객체를 가져오려면
// 어떻게 썼었죠? 아이템.
// res가 프로미스 객체인데 제이슨 형태로 바꾸는 것
// res는 response의 약자이다
// promise 객체 안에 배열로 들어가게 되었고
// 프로미스가 되었기 때문에 루프를 돌려서 만들어야 한다
// 루프를 하나하나 돌려서 화면에 출력해줘야 한다
// return을 해줄 때는 중괄호 사용
// 제이슨이 우리에게 사용하기 쉽게 디시리얼링을 하고
// 루프를 돌리고 객첼르 하나하나 가져온다 
// 추가추가 해서 화면에 출력한다
// 레이아웃 그리드에 짜여져 있고 반응형 화면으로 되어있는
// 쿠팡은 도대체....
// 규모가 큰 회사는 작업량이 많아서 풀스택 개발자라도
// 프론트엔드와 백엔드 둘 중에 하나로 나눈다

// --- 지금 코드의 과정 설명 ---
// 제이슨으로 받을 때 패치를 이용해서 해당 url로 요청을
// 보내고 그 객체가 프로미스로 담긴다 패치를 이용했기 때문에
// 댄을 이용해서 레스폰스에 담고 그 레스폰스를 쉽게 설명하기 
// 위해 제이슨 메소드를 사용 / 배열처럼 사용할 수 있도록 만들
// 었고 그것을 리턴해서 데이터에 담기고 그 데이터를 이용해서 
// 포이치를 돌렸고 이 포이치 안에서 하나하나 한 줄 한 줄 
// 읽어온 것을 이미지 태그 만들고 한 줄 읽어온 것에서 필요한
// 키값을 가져오고 세팅하고 이미지를 추가해서 화면에 출력
// url에서 다른 것을 가져오고 실행하면 사진이 바뀐다 



//-----------------------과제--------------------------
// Api라는 버튼을 추가하고 그 버튼을 클릭하면 Api url 인풋 창 안에 
// url 주소가 나오면서 사진도 같이 출력이 된다
// 이 코드를 이 형식대로 짜주세요
// 스타일은 CSS 파일 따로 작성


const apiUrlInput = document.getElementById('apiUrlInput');                // 1. /apiUrlInput, apiButton, imageContainer 변수들은 
                                                                           // 각각 HTML 요소를 가져오기 위해 getElementById 메서드를 
                                                                           // 사용하여 정의하는 부분입니다.
const apiButton = document.getElementById('apiButton');

const imageContainer = document.getElementById('imageContainer');           // 2. /imagesLoaded 변수는 이미지가 로드되었는지를 나타내는 
let imagesLoaded = false;                                                   // 플래그 변수입니다. 초기 값은 false로 설정되어 있습니다.


apiButton.addEventListener('click', fetchAndDisplayImages);     //3. apiButton에 'click' 이벤트 리스너를 추가하여 클릭 이벤트가 
                                                                // 발생했을 때 fetchAndDisplayImages 함수를 호출하도록 
                                                                // 설정하고 있습니다.


function fetchAndDisplayImages() {                  // 4. fetchAndDisplayImages 함수는 클릭 이벤트 발생 시 
                                                    // 실행되는 함수로, 입력된 API URL을 가져옵니다. 
                                                    // 만약 URL이 입력되지 않았을 경우에는 알림을 띄우고 
                                                    // 함수를 종료합니다.
  const apiUrl = apiUrlInput.value;
    if (!apiUrl) {
        alert('Please enter API URL');
        return;
      }

    if (imagesLoaded) {                               // 5. 이미지가 로드되었을 경우에는 clearImages 함수를 
                                                      // 호출하여 이전에 로드된 이미지를 제거합니다. 그리고 
                                                      // imagesLoaded 변수를 false로 설정합니다./
        clearImages();
        imagesLoaded = false;
      }

    fetch(apiUrl)                                   // 6. fetch 함수를 사용하여 API URL에 GET 요청을 보냅니다. 
                                                    // 응답을 JSON 형식으로 파싱한 후 makeList 함수를 호출하여 
                                                    // 이미지를 생성하고 화면에 추가합니다.
                                                    // 마지막으로 imagesLoaded 변수를 true로 설정합니다.
        .then(res => res.json())
        .then(data => {
          makeList(data);
          imagesLoaded = true;
        })
        .catch(console.log);
    }

function clearImages() {                                  // 7. clearImages 함수는 이미지 컨테이너(imageContainer)의 
                                                          // 자식 요소들을 모두 제거하는 역할을 합니다.
    while (imageContainer.firstChild) {
        imageContainer.firstChild.remove();
      }
    }

function makeList(data) {                                  // 8. /makeList 함수는 API로부터 받은 데이터를 순회하면서 
                                                           // 각 이미지에 대한 <div> 요소와 <img> 요소를 생성하고, 
                                                           // 이미지 컨테이너에 추가합니다.
    data.forEach(item => {
        const imageItem = document.createElement('div');
        imageItem.className = 'imageItem';
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        imageItem.appendChild(tagImg);
        imageContainer.appendChild(imageItem);
      });
    }

// https://picsum.photos/v2/list?page=1&limit=5
// https://picsum.photos/v2/list?page=2&limit=100
// tagImg.style.width = "100px";
// tagImg.style.height = "100px";


//------------소스코드리뷰-------------
// 1. /apiUrlInput, apiButton, imageContainer 변수들은 
// 각각 HTML 요소를 가져오기 위해 getElementById 메서드를 
// 사용하여 정의하는 부분입니다./

// 2. /imagesLoaded 변수는 이미지가 로드되었는지를 나타내는 
// 플래그 변수입니다. 초기 값은 false로 설정되어 있습니다./

// 3. apiButton에 'click' 이벤트 리스너를 추가하여 클릭 이벤트가 
// 발생했을 때 fetchAndDisplayImages 함수를 호출하도록 
// 설정하고 있습니다./

// 4. fetchAndDisplayImages 함수는 클릭 이벤트 발생 시 
// 실행되는 함수로, 입력된 API URL을 가져옵니다. 
// 만약 URL이 입력되지 않았을 경우에는 알림을 띄우고 
// 함수를 종료합니다./

// 5. 이미지가 로드되었을 경우에는 clearImages 함수를 
// 호출하여 이전에 로드된 이미지를 제거합니다. 그리고 
// imagesLoaded 변수를 false로 설정합니다./

// 6. fetch 함수를 사용하여 API URL에 GET 요청을 보냅니다. 
// 응답을 JSON 형식으로 파싱한 후 makeList 함수를 호출하여 
// 이미지를 생성하고 화면에 추가합니다.
// 마지막으로 imagesLoaded 변수를 true로 설정합니다./

// 7. clearImages 함수는 이미지 컨테이너(imageContainer)의 
// 자식 요소들을 모두 제거하는 역할을 합니다./

// 8. /makeList 함수는 API로부터 받은 데이터를 순회하면서 
// 각 이미지에 대한 <div> 요소와 <img> 요소를 생성하고, 
// 이미지 컨테이너에 추가합니다./


//----------------------------------------------------------------------------
//----------------------------------------------------------------------------
//----------------------------------------------------------------------------

// const apiUrlInput = document.getElementById('apiUrlInput');          // apiUrlInput: API URL을 입력하는 입력 필드의 DOM 요소를 나타냅니다.
// const apiButton = document.getElementById('apiButton');              // apiButton: 이미지를 로드하기 위해 클릭하는 버튼의 DOM 요소를 나타냅니다.
// const imageContainer = document.getElementById('imageContainer');    // imageContainer: 이미지가 표시될 컨테이너 요소의 DOM 요소를 나타냅니다.
// let imagesLoaded = false;

// apiButton.addEventListener('click', toggleImages);

// function toggleImages() {
//   const apiUrl = apiUrlInput.value;
//   if (!apiUrl) {
//     alert('Please enter API URL');
//     return;
//   }

//   if (imagesLoaded) {
//     clearImages();
//     imagesLoaded = false;
//   } else {
//     fetchImages(apiUrl);
//   }
// }

// function fetchImages(apiUrl) {
//   fetch(apiUrl)
//     .then(res => res.json())
//     .then(data => {
//       makeList(data);
//       imagesLoaded = true;
//     })
//     .catch(console.log);
// }

// function clearImages() {
//   while (imageContainer.firstChild) {
//     imageContainer.firstChild.remove();
//   }
// }

// function makeList(data) {
//   data.forEach(item => {
//     const imageItem = document.createElement('div');
//     imageItem.className = 'imageItem';
//     const tagImg = document.createElement('img');
//     tagImg.setAttribute('src', item.download_url);
//     imageItem.appendChild(tagImg);
//     imageContainer.appendChild(imageItem);
//   });
// }


// apiUrlInput: API URL을 입력하는 입력 필드의 DOM 요소를 나타냅니다.

// apiButton: 이미지를 로드하기 위해 클릭하는 버튼의 DOM 요소를 나타냅니다.

// imageContainer: 이미지가 표시될 컨테이너 요소의 DOM 요소를 나타냅니다.

// imagesLoaded: 이미지가 로드되었는지를 나타내는 상태 변수입니다.

// toggleImages 함수: 이미지 로드/지우기를 토글하는 함수입니다. 버튼 클릭 이벤트 리스너로 등록되어 있습니다.

// apiUrl 변수에 apiUrlInput의 값, 즉 입력된 API URL을 할당합니다.
// API URL이 비어있는지 확인하고, 비어있을 경우 알림을 표시하고 함수를 종료합니다.
// 이미지가 로드된 상태인지 확인합니다. 이미지가 로드된 상태라면 이미지를 지우고 imagesLoaded 상태를 변경합니다.
// 이미지가 로드되지 않은 상태라면 fetchImages 함수를 호출하여 API URL로부터 이미지를 가져옵니다.
// fetchImages 함수: 주어진 API URL로부터 이미지를 가져오는 함수입니다.

// fetch 함수를 사용하여 API URL에 HTTP 요청을 보냅니다.
// 응답을 JSON 형식으로 변환한 후, 변환된 데이터를 makeList 함수에 전달하여 이미지 목록을 생성합니다.
// imagesLoaded 상태를 true로 변경하여 이미지가 로드되었음을 표시합니다.
// clearImages 함수: 이미지 컨테이너에서 모든 이미지를 지우는 함수입니다.

// while 루프를 사용하여 imageContainer의 첫 번째 자식 요소를 삭제합니다. 모든 이미지가 삭제될 때까지 반복합니다.
// makeList 함수: 이미지 데이터 배열을 받아서 이미지 목록을 생성하는 함수입니다.

// 데이터 배열을 순회하면서 각 이미지 항목에 대한 요소를 생성합니다.
// imageItem이라는 <div> 요소를 생성하고 imageItem 클래스를 할당합니다.
// tagImg라는 <img> 요소를 생성하고 해당 이미지 항목의 download_url 속성을 src 속성으로 설정합니다.
// tagImg를 imageItem에 추가하고, imageItem을 imageContainer에 추가합니다.



// 위에서 사용한 코드에서 변경된 사항:

// toggleImages 함수를 추가하여 이미지 로드/삭제 기능을 토글하도록 합니다.
// toggleImages 함수에서 이미지가 로드되어 있는지 여부에 따라 로드/삭제 작업을 수행합니다.
// fetchImages 함수를 새로 추가하여 이미지를 로드하는 역할을 합니다.
// toggleImages 함수에서 이미지가 로드되어 있지 않을 때만 fetchImages 함수를 호출하여 이미지를 로드합니다.
// clearImages 함수는 이전에 로드된 이미지를 삭제하는 역할을 합니다.
// 이제 apiButton을 한 번 누르면 이미지가 로드되고, 다시 한 번 누르면 이미지가 삭제됩니다. 다시 한 번 누르면 이미지가 다시 로드됩니다.

//-- 사용된 코드들 의미
// apiUrlInput: API URL을 입력하는 input 요소입니다.
// apiButton: 이미지 로드/삭제 기능을 토글하는 버튼 요소입니다.
// imageContainer: 이미지가 표시될 컨테이너 요소입니다.
// imagesLoaded: 이미지가 로드되었는지 여부를 나타내는 변수입니다.
// toggleImages 함수는 apiButton 클릭 이벤트에 연결됩니다.
// apiUrlInput의 값을 가져와서 API URL을 확인합니다. 만약 값이 비어있다면 경고(alert) 메시지를 표시하고 함수를 종료합니다.
// imagesLoaded 변수를 확인하여 이미지가 로드되었을 경우 이미지를 삭제하고 imagesLoaded 값을 false로 설정합니다.
// 이미지가 로드되지 않았을 경우 fetchImages 함수를 호출하여 API로부터 이미지를 가져옵니다.
// fetchImages 함수는 주어진 API URL로부터 이미지 데이터를 가져옵니다.
// fetch 함수를 사용하여 API에 GET 요청을 보내고 응답을 받아옵니다.
// 응답 데이터를 JSON 형식으로 변환하여 다음 핸들러에 전달합니다.
// makeList 함수를 호출하여 이미지 목록을 생성합니다.
// imagesLoaded 값을 true로 설정하여 이미지가 로드되었음을 나타냅니다.
// makeList 함수는 이미지 데이터를 기반으로 이미지 목록을 생성합니다.


// http 통신을 성공하면 200번대 번호로 넘어온다
// 통신을 하다 에러가 났을 때 fetch가 통신상에서 에러는
// 리젝트 처리를 해주지 않고 다 리졸브 처리를 해버림
// 패치 유알엘을 하고 성공했을 때 한 번 더 체크를 해줘야 함

// async function getApiData(url) {
//     fetch(url)
//     .then(res => {return chkResponse(res);})
//     .then(data => makeList(data.json()))
//     .catch(console.log);
//   
//     fetch(url)
//     .then(res => {})
//     if(res.ok) {
//         res = await res.json();
//         makeList(res);
//     } else {
//         throw new Error('파싱 에러');
//         // console.log('API 에러');
//     }
// }

// function chkResponse(res) {
//   return new Promise((resolve, reject) => {
//     if(res.ok) {
//    resolve(res);
//   }else {
//      reject('API 에러');
//   }
// })
// }

// Api로 클라이언트와 서버 간에 연결하여 정보 교환
// get, post 메소드를 이용해서 정보 통신
// 올 때는 제이슨 보낼 땐 겟


// $arr = [
//     "id => 123123"
//     ,"data" => "park byung"
//     ,"content" => $_GET[content];
// ]



