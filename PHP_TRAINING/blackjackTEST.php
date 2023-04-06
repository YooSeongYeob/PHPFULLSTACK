<?php

class Card {
  public $suit; // 무늬
  public $rank; // 숫자, K/Q/J는 10으로 표기

  public function __construct($suit, $rank) {
    $this->suit = $suit;
    $this->rank = $rank;
  }

  public function get_value() {
    if (is_numeric($this->rank)) { // 2~10 숫자 카드
      return intval($this->rank);
    } elseif (in_array($this->rank, ['K', 'Q', 'J', '10'])) { // K/Q/J/10 카드
      return 10;
    } else { // A 카드
      return 11;
    }
  }
}

class Deck {
  public $cards; // 카드 배열

  public function __construct() {
    $this->cards = array();
    $suits = array('hearts', 'diamonds', 'clubs', 'spades');
    $ranks = array('2','3','4','5','6','7','8','9','10','J','Q','K','A');

    foreach ($suits as $suit) {
      foreach ($ranks as $rank) {
        $this->cards[] = new Card($suit, $rank);
      }
    }
    shuffle($this->cards); // 카드 섞기
  }

  public function draw_card() {
    return array_pop($this->cards); // 맨 뒤 카드를 뽑아서 반환
  }
}

class Player {
  public $cards; // 카드 배열

  public function __construct() {
    $this->cards = array();
  }

  public function add_card($card) {
    $this->cards[] = $card;
  }

  public function get_hand_value() {
    $hand_value = 0;
    $ace_count = 0;

    foreach ($this->cards as $card) {
      $card_value = $card->get_value();
      $hand_value += $card_value;
      if ($card_value == 11) {
        $ace_count++;
      }
    }

    // ACE 카드를 11점으로 계산하다가 21점을 초과하면 1점으로 계산
    while ($hand_value > 21 && $ace_count > 0) {
      $hand_value -= 10;
      $ace_count--;
    }

    return $hand_value;
  }

  public function has_blackjack() {
    return count($this->cards) == 2 && $this->get_hand_value() == 21;
  }
}

class Blackjack {
  public $deck;
  public $player;
  public $dealer;

  public function __construct() {
    $this->deck = new Deck();
    $this->player = new Player();
    $this->dealer = new Player();

    // 카드 두 장씩 뽑기
    for ($i = 0; $i < 2; $i++) {
      $this->player->add_card($this->deck->draw_card());
      $this->dealer->add_card($this->deck->draw_card());
    }
  }

  public function play() {
    // 유저가 카드를 받을 때까지 반복
    while (true) {
      $player_hand_value = $this->player->get_hand_value();
    }
}
};


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
// 
?>
