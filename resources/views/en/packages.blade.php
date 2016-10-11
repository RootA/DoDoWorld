@extends('enmain')
@section ('title','Packages')
@section('breadcrumb')
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Safari Packages</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                        <li class="active">Safari Packages</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop

@section('maininfo')
  <section id="" style="background-color: #fff; color: #000;">
  <div class="container">
      <div class="panel panel-default">
          <div class="panel-heading">
              <div class="panel-title"><h3 class="center">Safari Packages</h3></div>
          </div>
              <div class="panel-body">
                  <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a data-toggle="tab" href="#paca">Package A</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#pacb">Package B</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#pacc">Package C</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#pacd">Package D</a></li>
                  </ul>
                  <div class="tab-content">
                      <div id="paca"class="tab-pane fade in active">
                          <h3>7 Days/ 6 Nights Kenya Family Safari</h3>
                          <p>This safari combines the best family friendly hotels in Kenya, the hotels offer spacious or interconnecting rooms, children’s activity clubs in some hotels where the children can mix with other children and play games,
                            different activities like swimming etc…. </p>
                          <div class="panel panel-default">
                              <div class="panel-body">
                                  <!-- <p>訪問地：アンボセリ⇒ナクル湖⇒ナイバシャ湖⇒マサイマラ。ケニアを代表とする3大国立公園を7日間、陸路で駆け抜けるツアー日程表。</p> -->
                              </div>
                              <table class="table table-condensed table-bordered table-hover">
                                  <thead>
                                      <th>Day</th>
                                      <th>Activity</th>
                                      <!-- <th>泊</th> -->
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Day 1</td>
                                          <td>Arrival airport transfer and transfer to Sarova Panafric hotel or similar. (BB)</td>
                                          <!-- <td>アンボセリ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 2</td>
                                          <td>Drive to Naivasha sopa or similar.  Lunch followed by optional boat ride or visit to Crescent Island to view wildlife on foot (FB)</td>
                                          <!-- <td>アンボセリ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 3</td>
                                          <td>Proceed after breakfast to Lake Nakuru lunch and afternoon game viewing drive in the

park.  Overnight at Sarova lion hill lodge or similar (FB)</td>
                                          <!-- <td>ナクル泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 4</td>
                                          <td> Proceed after breakfast to Masai mara.  Lunch and afternoon game drive Overnight at

Mara Serena Lodge or similar (FB)</td>
                                          <!-- <td>ナイバシャ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 5</td>
                                          <td> Masai Mara Game Reserve.  Full day game drive Overnight at Mara Serena Lodge or

similar (FB)</td>
                                          <!-- <td>マサイマラ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 6</td>
                                          <td>Masai Mara – Fly back to Nairobi and lunch at Carnivore restaurant or similar.  Evening

catch the domestic flight to Mombasa</td>
                                          <!-- <td>マサイマラ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 7 - 9</td>
                                          <td>Voyager beach resort or similar (AI)</td>
                                      </tr>
                                      <tr>
                                        <td>Day 10</td>
                                          <td>
                                            Depart back to Nairobi by domestic air and catch onto the International flight back

home.

                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                              <!-- <p>＊ナイロビ発着のお時間によっては、上記の内容より変更となる可能性がございます。</p>
                              <p>ご利用予定・宿泊ロッジ</p>
                              <table class="table table-condensed table-bordered table-hover">
                              <thead>
                                  <th></th>
                                  <th></th>
                              </thead>
                                  <tbody>
                                      <tr>
                                          <td>アンボセリ</td>
                                          <td>Kilima Safari Camp, Oltukai Lodge等</td>
                                      </tr>
                                       <tr>
                                          <td>ナクル湖</td>
                                          <td>Flamingo Hill Tented Camp, Sarova Lion Hill等</td>
                                      </tr>
                                       <tr>
                                          <td>ナイバシャ湖</td>
                                          <td>Naivasha Sopa, Naivasha Simba Lodge等</td>
                                      </tr>
                                       <tr>
                                          <td>マサイマラ</td>
                                          <td>Mara Simba Lodge, Fig Tree, Tipilikwani Camp等</td>
                                      </tr>
                                  </tbody>
                              </table> -->
                              <div class="row-fluid">
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_a/01_b.jpg" alt="">
                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_a/02_b.jpg" alt="">
                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_a/03_b.jpg" alt="">
                                  </a>
                                </div>
                              </div>
                          </div>
                      </div>
                      <!--/End of PacA-->
                       <div id="pacb"class="tab-pane fade">
                              <h3>4 Days- 3 Nights Masai Mara Game Reserve Safari</h3>
                              <!-- <p>（目次）移動に軽飛行機を利用した、マサイマラ国立保護区へ向かうサファリツアーです。マサイマラはケニアを代表する国立保護区で、見渡す限りの美しい大草原に、たくさんの野生動物が生息しています。</p> -->
                                  <div class="panel panel-default">
                              <div class="panel-body">
                                  <!-- <p>訪問地：ナイロビ⇒マサイマラ。ケニアでもっとも人気なマサイマラ国立保護区。
                                  片道約1時間のフライトで移動するので時間を有効に使える欲張りツアー。他、アンボセリ国立公園やサンブル国立保護区なども軽飛行機で行けます。日程表</p>
                              -->
                            </div>
                              <table class="table table-condensed table-bordered table-hover">
                                  <thead>
                                      <th>Day</th>
                                      <th>Activity</th>
                                      <!-- <th>泊</th> -->
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Day 1</td>
                                          <td>Break-fast in your Nairobi Hotel followed by check out. Depart by road via the Great Rift Valley view point and onto Masai Mara Game Reserve.

Arrive at the camp or lodge in time for lunch. Proceed for a mid afternoon game drive in the park which is home to the annual seasonal migration of millions of wilderbeest, Giraffes, Zebras and if your lucky you will be able to view the BIG FIVE Lion, Leopard, Rhino, Elephant and Buffalo.

Dinner and overnight at Sarova Tented Camp or Similar

Meal Plan {Lunch & Dinner}</td>
                                          <!-- <td>ナイロビ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 2 & 3</td>
                                          <td>These two full days will be spent in the Masai mara game reserve looking for game during the early morning and mid afternoon game viewing drive.

The reserve is also regarded as the most spectacular wildlife viewing area in Kenya with over 95 species of mammals and over 400 species of birds. Game viewing is never dull in the Mara and patience is rewarded with unique sightings, such as a pride of lion stalking prey.

Dinner and overnight at Sarova Tented Camp or Similar</td>
                                          <!-- <td>マサイマラ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 4</td>
                                          <td>Breakfast will be served at the camp, after breakfast check out and drive back to Nairobi.

Lunch own arrangements

Drop off at Jomo Kenyatta International Airport for your International flight back home.</td>
                                          <!-- <td>マサイマラ泊</td> -->
                                      </tr>
                                      <!-- <tr>
                                          <td>4日目</td>
                                          <td>早朝サファリドライブロッジの車が滑走路へご送迎。軽飛行機にてウィルソン空港へ。弊社専用車にて国際線空港へご送迎。ナイロビご出発</td>
                                      </tr> -->
                                  </tbody>
                              </table>
                              <!-- <p>ナイロビ発着のお時間によっては</p>
                              <p>上記の内容より変更となる可能性がございます</p>
                              <table class="table table-condensed table-bordered table-hover">
                              <thead>
                                  <th>ご利用予定</th>
                                  <th>宿泊ロッジ</th>
                              </thead>
                                  <tbody>
                                      <tr>
                                          <td>ナイロビ</td>
                                          <td>Sarova panafric Hotel, Intercontinental Hotel等</td>
                                      </tr>
                                       <tr>
                                          <td>マサイマラ</td>
                                          <td>Mara Simba Lodge, Fig Tree, Tipilikwani Camp等</td>
                                      </tr>
                                  </tbody>
                              </table>
                              <div class="row-fluid">
                                  <p>＜ご利用車両について＞  </p>
<p>ナイロビ－マサイマラ間を軽飛行機にてご移動の際は、滑走路－ロッジ間のご送迎、またゲームドライブ等の移動はロッジの車のご利用となりますので、他のお客様と混載となります。
車両のプライベート利用、また弊社専用車をご希望の際は、ご相談下さい。 </p>

<p>＜軽飛行機のお荷物に関しまして＞</p>
<p>軽飛行機にご搭乗の際の荷物（預け荷物、手荷物）の合計がお一人様あたり15KGとなります。(お２人様でも、１つあたりの重量は１５KGまで)
もし１５KGを超過した場合はUS$3/KG ですが、ご搭乗のお客様が多い場合には超過料金も断られることもございます。
また、軽飛行機はハードケースの場合断られることがございますので、ソフトケース（布製のスーツケース）もしくは、ボストンバックにてご用意下さいませ。お荷物の大きさは24インチ×18インチx13インチです。（61cm x 46cm x 33cm）</p>
                              </div> -->
                              <div class="row-fluid">
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_a/01_b.jpg" alt="">

                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_b/02_b.jpg" alt="">

                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_b/03_b.jpg" alt="">

                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_b/04_b.jpg" alt="">

                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_b/05_b.jpg" alt="">

                                  </a>
                                </div>
                              </div>
                          </div>
                      </div>
                       <!--/End of PacB-->
                         <div id="pacc"class="tab-pane fade">
                          <h3>3 Days- 2 Nights Samburu Game Reserve Lodge Safari</h3>
                          <!-- <p>（目次）赤道直下のケニアを陸路にて北から南へ周遊するサファリツアーです。赤道北部に位置するサンブルでは、南部ケニアとは気候が異なるため、他公園では見られない独特の動物が生息します。北部と南部の違いをお楽しみ頂けます。</p> -->
                              <div class="panel panel-default">
                              <div class="panel-body">
                                  <!-- <p>訪問地：ナニュキ⇒サンブル⇒ナクル⇒マサイマラ。赤道直下のケニア、赤道を跨いで北へ南へと周るツアー。日程表</p> -->
                              </div>
                              <table class="table table-condensed table-bordered table-hover">
                                  <thead>
                                      <th>Day</th>
                                      <th>Activity</th>
                                      <!-- <th>泊</th> -->
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Day 1</td>
                                          <td>Breakfast at your Nairobi hotel.   Depart after breakfast northwards to the semi arid area of Samburu.

Arrive at the camp or lodge in time for lunch, followed by an afternoon game viewing drive in the reserve which is home to rare tyoes of wildlife like the Grevy’s Zebra, The Reticulated giraffe, The beisa oryx and the Somali ostrich.  The park also has many crocodiles and velvet monkeys which can be spotted on the riverbanks.

Dinner and overnight at Samburu lodge or similar.</td>
                                          <!-- <td>ナニュキ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 2</td>
                                          <td>A day will be spent in the Samburu game reserve trying to spot more wildlife.

All meals and overnight at Samburu lodge or similar</td>
                                          <!-- <td>サンブル泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 3</td>
                                          <td>For your final day in Samburu National Reserve, an early morning game viewing drive is planned for you, or instead, you might decide you would like to sleep in. Breakfast will be served at the camp or lodge, after which you will depart by road back to Nairobi.

Upon arrival in Nairobi your driver will take you for lunch at the world-famous Carnivore Restaurant.  After lunch there will be time for shopping in our many shopping malls or buying souvenirs in the masai market depending on the day, or you can spend the afternoon at leisure.

Later on, you will be transferred to Nairobi Jomo Kenyatta International Airport for your international departure flight.</td>
                                          <!-- <td>サンブル泊</td> -->
                                      </tr>
                                      <!-- <tr>
                                          <td>4日目</td>
                                          <td>朝食後、「ナクル湖国立公園」に向けご出発。昼食はニャフルルのトムソン滝にて。ナクル湖国立公園に到着、サファリドライブをしながらロッジへ</td>
                                          <td>ナクル泊</td>
                                      </tr>
                                      <tr>
                                          <td>5日目</td>
                                          <td>朝食後、「マサイマラ国立保護区」へ向けご出発。昼食後、夕刻サファリドライブへ</td>
                                          <td>マサイマラ泊</td>
                                      </tr>
                                      <tr>
                                          <td>6日目</td>
                                          <td>マサイマラ国立保護区にて早朝・夕刻サファリドライブ</td>
                                          <td>マサイマラ泊</td>
                                      </tr>
                                      <tr>
                                          <td>7日目</td>
                                          <td>朝食後、ナイロビへ向けご出発。空港へご送迎。ナイロビご出発</td>
                                      </tr> -->
                                  </tbody>
                              </table>
                              <!-- <p>＊ナイロビ発着のお時間によっては、上記の内容より変更となる可能性がございます。</p>
                              <p>ご利用予定・宿泊ロッジ</p>
                              <table class="table table-condensed table-bordered table-hover">
                              <thead>
                                  <th></th>
                                  <th></th>
                              </thead>
                                  <tbody>
                                      <tr>
                                          <td>ナニュキ</td>
                                          <td>Serena Sweet Waters等</td>
                                      </tr>
                                       <tr>
                                          <td>サンブル</td>
                                          <td>Samburu Game Lodge, Elephant Bedroom Camp等</td>
                                      </tr>
                                       <tr>
                                          <td>ナクル</td>
                                          <td>Flamingo Hill Tented Camp. Sarova Lion Hill等</td>
                                      </tr>
                                       <tr>
                                          <td>マサイマラ</td>
                                          <td>Mara Simba Lodge, Fig Tree, Tipilikwani Camp等</td>
                                      </tr>
                                  </tbody>
                              </table> -->
                              <div class="row-fluid">
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_c/01_b.jpg" alt="">

                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_c/02_b.jpg" alt="">

                                  </a>
                                </div>
                              </div>
                          </div>
                      </div>
                       <!--/End of PacC-->
                         <div id="pacd"class="tab-pane fade">
                          <h3>Tanzania Safaris</h3>
                          <p>We can arrange safaris in Tanzania both road and air and Mountain climbing for MT Kilimanjaro trekking tours.</p>
                          <p>Below are sample itineraries you can choose from.</p>
                          <p>Contact us for a quotation:-</p>
                              <div class="panel panel-default">
                              <div class="panel-body">
                                  <!-- <p>訪問地：アンボセリ⇒ナクル湖⇒ナイバシャ湖⇒マサイマラケニアを代表とする3大国立公園を7日間、陸路で駆け抜けるツアー日程表</p> -->
                              </div>
                              <table class="table table-condensed table-bordered table-hover">
                                  <thead>
                                      <th>Day</th>
                                      <th>Activity</th>
                                      <!-- <th>泊</th> -->
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th>
                                        4 Days/ 3 Nights Tarangire & Ngorongoro Tanzania Safari
                                      </th>
                                    </tr>
                                      <tr>
                                          <td>Day 1</td>
                                          <td>Pick up from Arusha Kilimanjaro airport – Drive to Tarangire National Park. Overnight Tarangire

Sopa Lodge or Similar</td>
                                          <!-- <td>アンボセリ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 2</td>
                                          <td> Tarangire – Drive to Ngorongoro Crater. Overnight at Ngorongoro Sopa Lodge or Similar</td>
                                          <!-- <td>タランギレ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 3</td>
                                          <td>Explore Ngorongoro Crater. Overnight at Ngorongoro Sopa Lodge or Similar</td>
                                          <!-- <td>セレンゲティ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 4</td>
                                          <td>Ngorongoro Crater – Drive to Arusha Town. Depart onto Namanga border or fly from Kilimanjaro airport back to Nairobi.</td>
                                          <!-- <td>セレンゲティ泊</td> -->
                                      </tr>
                                      <tr>
                                          <th>
                                            5 Days / 4 nights Ngorongoro / Serengeti Tanzania safari
                                          </th>
                                      </tr>
                                      <tr>
                                          <td>Day 1</td>
                                          <td>Pick up from Arusha Kilimanjaro airport – Drive to Ngorongoro Crater. Overnight at Ngorongoro

Sopa Lodge</td>
                                          <!-- <td>ンゴロンゴロ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 2</td>
                                          <td>Ngorongoro Crater. Overnight at Ngorongoro Sopa Lodge</td>
                                          <!-- <td>アルーシャ泊</td> -->
                                      </tr>
                                      <tr>
                                          <td>Day 3</td>
                                          <td>Serengeti National Park. Overnight at Serengeti Sopa Lodge</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Day 4
                                        </td>
                                        <td>
                                          Serengeti National Park. Overnight at Serengeti Sopa Lodge
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          Day 5
                                        </td>
                                        <td>
                                          Serengeti – Drive or Fly to Arusha – Departure
                                        </td>
                                      </tr>
                                  </tbody>
                              </table>
                              <!-- <p>＊ナイロビ発着のお時間によっては、上記の内容より変更となる可能性がございます。</p>
                              <p>ご利用予定・宿泊ロッジ</p>
                              <table class="table table-condensed table-bordered table-hover">
                              <thead>
                                  <th></th>
                                  <th></th>
                              </thead>
                                  <tbody>
                                      <tr>
                                          <td>アンボセリ</td>
                                          <td>Kilima Safari Camp, Oltukai Lodge等</td>
                                      </tr>
                                       <tr>
                                          <td>タランギーレ</td>
                                          <td>Tarangire Safari Lodge等</td>
                                      </tr>
                                       <tr>
                                          <td>セレンゲティ</td>
                                          <td>Kati Kati Tented Camp等</td>
                                      </tr>
                                       <tr>
                                          <td>ンゴロンゴロ</td>
                                          <td>Rhino Lodge等</td>
                                      </tr>
                                      <tr>
                                          <td>アルーシャ</td>
                                          <td>Ilboru Safari Lodge等</td>
                                      </tr>
                                  </tbody>
                              </table> -->
                              <div class="row-fluid">
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_d/01_s.jpg" alt="">
                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_d/02_b.jpg" alt="">
                                  </a>
                                </div>
                                <div class="span6 span3">
                                  <a href="#" class="thumbnail">
                                    <img class="img-responsive" src="../img/safari/tour_d/03_b.jpg" alt="">
                                  </a>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div><!--/tabcontent-->
              </div>
      </div>
  </div>

</section>
@stop
