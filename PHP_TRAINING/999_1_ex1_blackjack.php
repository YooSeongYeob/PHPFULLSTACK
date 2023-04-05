<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드 수가 적은 쪽이 승리
// 5-2. 카드 수가 같을 경우 비긴다
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
//8. 한 번 사용한 카드는 다시 쓸 수 없다.

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";

// class Blackjack
// {
// 	private $deck;
// 	private $player_hand;
// 	private $dealer_hand;


// public function __construct()
// 	{
// 	$this->deck = array();
// 	$suits = array('Spades','Hearts','Clubs','Diamonds');
// 	$values = array('2','3','4','5','6','7','8',"9","10");
// 	foreach($suits as $suit) 
// 		{
// 			foreach($values as $value)
// 			{
// 			array_push($this->deck, "$value of $suit");
// 			}
// 		}	
// 	}

	
// 	public function shuffle_deck() 
// 	{
// 	shuffle($this->deck);
// 	}
// 	public function deal_hands(); 
// 	{
// 	$this->player_hand = array();
// 	$this->dealer_hand = array();
// 	array_push($this->player_hand, array_pop($this->deck));
// 	array_push($this->dealyer_hand, array_pop($this->deck));
// 	array_push($this->player_hand, array_pop($this->deck));
// 	array_push($this->dealer_hand, array_pop($this->deck));
// 	}

// 	public function player_turn()
// 	{
// 		while
// 	}

// }

