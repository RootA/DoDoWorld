@extends('main')

@section('breadcrumb')
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>撮影</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a> <span class="divider">/</span></li>
                        <li class="active">撮影</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop

@section('maininfo')
<section class="services">
    <div class="container">
    <hr>
        <div class="row-fluid">
            <div class="span3">
                <div class="center">
                    <i style="font-size: 48px" class="icon-bar-chart icon-large"></i>
                    <p> </p>
                 </div>
                    <h4 class="center">Ａ）撮影許可申請に必要な書類</h4>
                    <ul>
                        <li>①日程表（フライト、宿泊ホテル、撮影予定地など））</li>
                        <li>②スタッフリスト（名前、職業、住所、電話）</li>
                        <li>③パスポートコピー（６ヶ月以上の残存期間が必要）</li>
                        <li>④企画書（目的、内容、放映予定日）</li>
                        <li>⑤情報省への撮影許可申請の手紙</li>
                        <li>⑥機材リスト（メーカー、シリアルナンバー、価格入り）</li>
                        <li>⑦スタッフのパスポートサイズカラー写真それぞれ１枚づつ
                        以上①～⑦をメール（データ）で送って頂く</li>
                    </ul>
            </div>

            <div class="span3">
                <div class="center">
                    <i style="font-size: 48px" class="icon-cog icon-large"></i>
                    <p> </p>
                </div>
                    <h4 class="center">Ｂ）手順</h4>
                    <ul>
                        <li>①情報省に上記申請書類①～⑦を提出（発行まで１～２日）</li>
                        <li>②同時にイミグレーションにもスペシャルパス（短期の労働許可証）を申請
                        発行まで２～3週間を要するが申請受領証があれば撮影開始可能</li>
                        <li>③情報省発行の撮影許可及びスペシャルパス申請の手紙をメールで日本へ送る</li>
                        <li>④日本ではこのＢ-③をケニヤ国査証申請時に送付（２日必要）</li>
                        <li>⑤オリジナルの撮影許可及びスペシャルパスはナイロビで渡す</li>
                        <li>⑥機材通関の手続きはナイロビ到着１～２週間前に開始</li>
                        <li>⑦ナイロビ空港到着時は機材通関業者が機材通関の諸手続きを行う。</li>
                    </ul>
            </div>

            <div class="span3">
                <div class="center">
                    <i style="font-size: 48px" class="icon-heart icon-large"></i>
                    <p> </p>
                    <h4 class="center"></h4>
                    <ul>
                   <li> ★上記Ａ）Ｂ）共ケニヤ政府の認可を受けたローカルプロダクション（エージェント）を通して申請。</li>
                     <li>   ★撮影許可発行後の日程変更（申請日程内なら問題なし）及び機材通関手続き開始後のフライト
                        変更は初めからのやり直しとなりエキストラ費用が発生。</li>
                     <li>   ★　 国立公園内での撮影許可はナイロビの国立公園管理本部で、国立保護区内での撮影許可は
                        管轄省又は保護区のゲームワーデンに申請。国立公園、国立保護区内では撮影開始前に必
                        ず公園管理オフィスで撮影許可を提示しゲームワーデンから許可を得なければならない。</li>
                      <li>  ★アンボセリ国立公園では許可費用、入園料の１０％をコンサベーションフィーとして払う　</li>
                    </ul>
                </div>
            </div>

            <div class="span3">
                <div class="center">
                    <i style="font-size: 48px" class="icon-globe icon-large"></i>
                    <p> </p>
                </div>
                    <h4 class="center">費用概算に付いてはお問い合わせ下さい。</h4>
                    <ul>
                        <li>①情報省許可及び申請書類作成など・・・ </li>
                        <li>②機材の税金（総額の２．５％）・・・・・・・・</li>
                        <li>③機材の保険（総額の４％）・・・・・・・・・・・</li>
                        <li>④機材通関費用（書類作成など含む）・・ </li>
                        <li>⑤ローカルプロダクション・・・・・・・・・・・・・</li>
                        <li>⑥スペシャルパス・・・・・・・・・・・・・・・・・・・</li>
                        <p>＊国立公園、国立保護区、その他のロケ地やロケの対象となる人、物、建物などを撮影する場合に
                        も経費が発生。詳しくはお問い合わせ下さい。</p>
                    </ul>
            </div>
        </div>
    </div>
</section>
@stop
