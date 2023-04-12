<?php

// 1.카드덱 만들기 (카드 52장 배열)
// 2.카드덱에서 카드 한 장 뽑기
// 3.카드덱에서 2장 뽑아서 유저한테 주기
// 4.카드덱에서 2장 뽑아서 딜러한테 주기
// 5.유저와 딜러 카드 비교해서 승리

//-------------------함수 안 쓰고 카드 2장 뽑기-----------------//

// $deck = array(
//     "Ace of Hearts", "2 of Hearts", "3 of Hearts", "4 of Hearts", "5 of Hearts", "6 of Hearts", "7 of Hearts",
//     "8 of Hearts", "9 of Hearts", "10 of Hearts", "Jack of Hearts", "Queen of Hearts", "King of Hearts",
//     "Ace of Diamonds", "2 of Diamonds", "3 of Diamonds", "4 of Diamonds", "5 of Diamonds", "6 of Diamonds", 
//     "7 of Diamonds", "8 of Diamonds", "9 of Diamonds", "10 of Diamonds", "Jack of Diamonds", "Queen of Diamonds", 
//     "King of Diamonds", "Ace of Clubs", "2 of Clubs", "3 of Clubs", "4 of Clubs", "5 of Clubs", "6 of Clubs", 
//     "7 of Clubs", "8 of Clubs", "9 of Clubs", "10 of Clubs", "Jack of Clubs", "Queen of Clubs", "King of Clubs", 
//     "Ace of Spades", "2 of Spades", "3 of Spades", "4 of Spades", "5 of Spades", "6 of Spades", "7 of Spades", 
//     "8 of Spades", "9 of Spades", "10 of Spades", "Jack of Spades", "Queen of Spades", "King of Spades"
// );

// $card1_index = rand(0, 51);
// $card1 = $deck[$card1_index];

// // $card2_index가 $card1_index와 중복되지 않도록 하기 위해 while 루프를 사용합니다.
// do {
//     $card2_index = rand(0, 51);
// } while ($card2_index == $card1_index);

// $card2 = $deck[$card2_index];


// echo "첫 번째 카드: " . $card1 . "<br>";
// echo "두 번째 카드: " . $card2 . "<br>";

//--------class 사용------------//


class blackjack
{
    private $arr_num;
    private $arr_shape;
    private $arr_deck;
    private $user_cards;
    private $dealer_cards;
    private $used_cards;

    // construct
public function __construct()
{
    $this->arr_num = array("A","2","3","4","5","6","7","8","9","10","J","Q","K");
    $this->arr_shape = array("♠","♣","◆","♥");
    $this->set_deck();
}   

    // set
    private function set_deck()
 {
    // 카드 52장 덱에 세팅
    foreach($this->arr_shape as $shape)
    {
        foreach($this->arr_num as $num);
        {
            $this->arr_deck[] = $num.$shape;
        }
    }
    // 덱 셔플
    shuffle($this->arr_deck);
  }

    // 카드 뽑기
  private function draw_card()
  {
    $card = array_shift($this->arr_deck);
    $this->used_cards[] = $card;
    return $card;
  }

   // 카드 합 계산
    private function calculate_score($cards)
    {
        $score = 0;
        $num_of_ace = 0;

        foreach($cards as $card)
        {
            $num = substr($card,0,-3);
            if($num == 'A')
            {
                $num_of_ace++;
                $score += 11;
            }
        else if ( $num == 'K' || $num == 'Q' || $num == 'J' || $num =='10')
        {
            $score +=10;
        }
        else 
        {
            $socre += intval($num);
        }
        }
        
        while($score>21 && $num_of_ace>0)
        {
            $score-=10;
            $num_of_ace--;
        }
        
        return $score;
    }

    // 게임시작 
    public function start_game()
    {
        echo"Welcome to BlackJack!\n\n";

        // 카드 2장씩 받기
        $this->user_cards[]=$this->draw_card();
        $this->dealer_cards[]=$this->draw_card();
        $this->user_cards[]=$this->draw_card();
        $this->dealer_cards[]=$this->draw_card();

        $user_score=$this->calculate_score($this->user_cards);
        $dealer_score=$this->calculate_score($this->dealer_cards);
        
        // 유저 블랙잭
        if($user_score ==21)
        {
            echo "user has BlackJack!\nUser Cards::".implode(",",$this->user_cards)."\n\nUser Wins!";
            exit;
        }
        
        // 딜러 블랙잭
        if($dealer_score == 21)
        {
            echo "Dealer has BlackJack!\nUser Cards:".implode(",",$this->user_cards)."\n\nDealer
            Wins!";
                exit;
        }

        // 유저가 버스트인 경우
        if($user_score>21)
        {
            echo"user is busted!\nUer Cards:".implode(",",$this->user_cards)."\n\nUser Wins!";
            exit;
        }

        //딜러가 버스트인 경우
        if($dealer_score>21)
        {
            echo"Dealer is busted!\nUser Cards:".implode(",",$this->user_cards)."\n\nUser Wins!";
            exit;
        }

        // 카드합 비교
        if($user_score>$dealer_score)
        {
            echo "User score>Dealer score!\nUser Cards:".implode(",",$this->user_cards)."\n\nUser Wins!"; 
        }
        else if($user_score<$dealer_score)
        {
            echo"User score<Dealer score!\nUser Cards:".implode(",",$this>user_cards)."\n\nDealer Wins!";
        }
        else
        {
            echo "it's a tie!\n";
        }
        exit;
        }
    };

    $obj_bj = new BlackJack();
    $obj_bj->start_game();
    

// class blakjack {
//     public $deck;
//     public $player;
//     public $dealer;

//     public function __construct() {
//         $this->deck   = new deck();
//         $this->player = new player();
//         $this->dealer = new player();
    
//     // 카드 두 장씩 뽑기
//     for ($i = 0; $i < 2; $i++)
//         {
//             $this->player->add_card($this->deck->draw_card());
//             $this->dealer->add_card($this->deck->draw_card());
//         }
//     }
    



    
//     public function play() // 유저가 카드를 받을 때까지 반복합니다.
//     {
//         $player_hand_value = $this->player->get_hand_value();
//         echo "당신의 카드: ";
//         foreach ($this->player->cards as $card)
//         {
//             echo $card->rank . $card->suit;
//         }
//         echo "\n";
//         echo "딜러의 카드: ";
//         foreach ($this->dealer->cards as $card)
//         {
//             echo $card->rank . $card->suit;
//         }
//     }
// }

// $obj_bj = new blakjack();
// $obj_bj->play();


?>