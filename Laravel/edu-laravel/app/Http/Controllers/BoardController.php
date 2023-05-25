<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // 데이터베이스 설정

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //-------------
        // 쿼리 빌더
        //-------------
        // select
    
        $result = DB::select('select * from categories'); // 데이터베이스에서 데이터를 가져온다
        
        $no = '5';

        $result = DB::select(
            'select * from categories where no = :no' // 보안을 신경 써야하기 때문에 no ' $no x 프리페어드 스테이트먼트로 인식을 못함 문자열로만 인식하기 때문에 
            , ['no' => $no] // 키를 지정 항상 프리페어드스테이트먼트로 작성
        );

    //     'select * from categories where no = : ? and no = ?'
    //     , [$no, 7]
    // ); 이렇게 물음표로 작성하는 방식도 있음
        
        // $input = ['4', '7', '8']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리 명을 출력해주세요(게시글 번호로 오름차순 정렬 후 상위 5개만)
        
        // $result = DB::select(
        // 'select b.bno, b.btitle, c.name 
        //     from categories c, boards b 
        //     where c.no = b.category 
        //         and c.no in(?, ?, ?) 
        //     order by b.bno 
        //     limit 5', $input);
        

        // $result = DB::insert();
        

        // in :no1, :no2, :no3 이렇게 작성해도 라라벨에서 알아서 처리를 해주지만 ?로 작성해야 함
        
        // $result = DB::select(
        //    ' select b.bno, b.btitle, c.name 
        //    from categories c
        //    inner join boards b
        //    on c.no = b.category 쿼리 속도 때문에 위에 껄 적어주는 게 좋은 이 쿼리는 신입 개발자 위에 쿼리는 오래된 개발자가 쓰는 방식
        //    where c.no in(?, ?, ?)
        //    order by b.bno
        //    limit 5';  $input); 
            
        
        // in이랑 between이 속도가 느려서 수정해야 된다고 함 

        // $result = DB::insert(
        // 'insert into boards(
        //   category
        // , btitle
        // , bcontent
        // , created_at
        // , updated_at
        // )
        // values(   
        //   :category
        // , :btitle
        // , :bcontent
        // , :created_at
        // , :updated_at)'
        // ,   [
        //     'category' => '5' 
        //     ,'btitle' => '제목'
        //     ,'bcontent' => '내용'
        //     ,'created_at' => now()
        //     ,'updated_at' => now()
        //     ]
        // );
        

        // $result = DB::update('update boards set btitle = ?, bcontent = ? updated_at = now() where bno = ?'
        //     ,['test', 'testtest', 20]
        // );

        // 방금 등록한 게시글의 제목 : test, 내용 : testtest로 변경해주세요
        // UPDATE 쿼리 사용해야 함

        
        // $result = DB::delete('delete from boards where bno in(?, ?)', [19, 20]);

        // 여러개 삭제 하고 싶으면 in 
            
        // 오브젝트 모델 클래스
        // rdbms 관계형 데이터베이스 m 맵핑한다 서로 짝 지어서 연결한다 
        // orm으로 작성 x 쿼리로 작성해야 속도 개선이 된다고 함 기본적으로 쿼리에 대해 집중적으로 공부해야 한다고 함
        
        // 라라벨 체이닝 기법 - orm 라라벨의 모델 지금은 보더 모델 라라벨에서는 엘로퀀트 모델이라고 함
        // 얘를 사용해서 체이닝기법까지 합하면 orm 기법이 됨
        
            
        //-----------------
        // 쿼리 빌더 체이닝
        //-----------------
        // $no = '5';
        //select * from categories where no = :no 얘랑 밑에 애랑 같다
        // $result = DB::table('categories')->where('no', '=', $no)->get(); // TODO: 삭제 예정 TODO를 검색해서 나중에 작업 마무리 때 지워준다 dd를 남겨놓으면 안 된다고 함 
        // select * from categories where no = :no1 or no = no2
        // select * from categories where no = ? or no = ?
         $no1 = '5';
         $no2 = '8';
        // $result = DB::table('categories')->where('no', $no1)->orwhere('no', $no2)->get(); // 부등호는 생략해도 같다라고 인식함 부등호만 가능 =
        // select * from categories where no in (?, ?)
        
        // $result = DB::table('categories')->whereIn('no', [$no1, $no2])->dd();

        
        // dd 체이닝 메소드는 알아서 끝을 내준다 이게 제일 가장 기본적인 체이닝 기법이라고 함
        // 겟을 써서 체이닝을 가져오겠다는 말임
        // " select * from `categories` where `no` = ? " 이렇게 나온다 함 이 물음표가 프리페어드스테이먼트라고 한다 함
        
        // select * from categoires where no NOT IN ('5', '8')
        // $result = DB::table('categories')->whereNotIn('no', [$no1, $no2])->dd();
        

        // select id, no, name, from categories
        // $result = DB::table('categories')
        // ->select('id', 'no', 'name')
        // ->dd();
        

        // now(Asia/Seoul)

        // 가독성을 위해 체이닝 표현 부분을 밑으로 내려준다
        // 필요한 것을 계속 가져와서 체이닝 체이닝 체이닝 계속 연결

        // in이랑 between은 속도 처리 때문에 사용 잘 안 함
        // 부등호(=)를 하나하나 작성해줌

        // orwhere 이렇게 씀
        // whereIn 이렇게 씀
        // whereBetween 이렇게 씀
        
        
        // $result = DB::table('categories')->where('no', '=', $no1)->where('no', '=', $no2)->get();
        
        
        // select id, no, name from categories order by name desc
        // $result = DB::table('categories')->select('id', 'no', 'name')->orderby('name','desc')->get();
        // 처음 메소드 기준이 되는 애 그 뒤에꺼 어떻게 처리할 것인지    
        

        // *** 주의해서 사용(사용 안 하는 걸 추천) *** whereRaw()
        // $result = DB::table('categories')->whereRaw(' no = '.$no1);
            
        
        // dd는 쿼리문이랑 바인딩 된 프리페런트스테이트먼트 값만 출력이 된다
        // get으로 해야 결과 값이 나온다

        // 교재 178 ~ 190까지 내용이 있음
        
        // AND로 연결하는 건 ->where 체이닝 기법으로 하나하나씩 계속 연결해주면 된다
    
    
    // first() : Limit 1과 비슷한 작동, 실패 시 false 리턴
    // $result = DB::table('boards')->orderBy('bno', 'desc')->first();
    
    // firstOrFail() : first() 같은 동작을 하는데, 실패시 결과가 예외 발생  (옐로퀀트 모델 객체에서만 사용 가능)  
    // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOrFail();

    // 집계 메소드
    // $result = DB::table('boards')->count(); // 결과의 레코드 수를 반환
    $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환
    
    // 트랜잭션
    // DB::beginTransaction(); // 트랜잭션 시작
    // DB::rollback(); // 롤백
    // DB::commit(); // 커밋

    // 실습
    // 카테고리가 활성화 되어 있는 게시글의 카테고리 별 개수를 출력해주세요. ()
    // 카테고리 번호, 카테고리명, 개수

    $result = DB::table('categories')
    ->select('categories.no', 'categories.name', DB::raw(['count(*) as cnt']))
    ->join('boards','categories.no','boards.category')
    ->where('categories.active_flg', '1')
    ->groupBy('categories.no', 'categories.name')
    ->get();     

    // mysql, mariadb만 2개 적었을 때 동작
    // 오라클은 하나만 적어도 된다고 함
    
    //raw가 붙으면 해당하는 값을 문자열로 인식하게 해준다   
    // db 파기 라라벨이 알아서 해준다

    return var_dump($result);           
    // now(Asia/Seoul)                        
}
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
