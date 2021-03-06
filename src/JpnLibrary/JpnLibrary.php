<?php

namespace JpnLibrary;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;     
use pocketmine\utils\Config;

class JpnLibrary extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->Config = new Config($this->getDataFolder() ."Config.yml", Config::YAML, array(
       "未登録" => "不明",
       "id:meta" => "名前",
       "5:0" => "樫の木材",
       "5:1" => "トウヒの木材",
       "5:2" => "樺の木材",
       "5:3" => "ジャングルの木の木材",
       "5:4" => "アカシアの木材",
       "5:5" => "黒樫の木材",
       "139:0" => "丸石の壁",
       "139:1" => "苔の生えた丸石の壁",
       "139:2" => "花崗岩の壁",
       "139:3" => "閃緑岩の壁",
       "139:4" => "安山岩の壁",
       "139:5" => "砂岩の壁",
       "139:12" => "赤砂岩の壁",
       "139:7" => "石レンガの壁",
       "139:8" => "苔の生えた石レンガの壁",
       "139:6" => "レンガの壁",
       "139:9" => "暗黒レンガの壁",
       "139:13" => "赤い暗黒レンガの壁",
       "139:10" => "エンドストーンレンガの壁",
       "139:11" => "海晶ブロックの壁",
       "85:0" => "樫の木の柵",
       "85:1" => "トウヒの木の柵",
       "85:2" => "樺の木の柵",
       "85:3" => "ジャングルの木の柵",
       "85:4" => "アカシアの木の柵",
       "85:5" => "黒樫の木の柵",
       "113:0" => "暗黒の木の柵",
       "107:0" => "樫の木の柵のゲート",
       "183:0" => "トウヒの木の柵のゲート",
       "184:0" => "樺の木の柵のゲート",
       "185:0" => "ジャングルの木の柵のゲート",
       "187:0" => "アカシアの木の柵のゲート",
       "186:0" => "黒樫の木の柵のゲート",
       //階段ブロック　未登録
       "324:0" => "樫の木のドア",
       "427:0" => "トウヒの木のドア",
       "428:0" => "樺の木のドア",
       "429:0" => "ジャングルの木のドア",
       "430:0" => "アカシアのドア",
       "431:0" => "黒樫の木のドア",
       "330:0" => "鉄のドア",
       "96:0" => "樫の木のトラップドア",
       "167:0" => "鉄のトラップドア",
       "101:0" => "鉄格子",
       "20:0" => "ガラス",
       "241:0" => "白のステンドグラス",
       "241:8" => "薄灰色のステンドグラス",
       "241:7" => "灰色のステンドグラス",
       "241:15" => "黒のステンドグラス",
       "241:12" => "茶色のステンドグラス",
       "241:14" => "赤のステンドグラス",
       "241:1" => "オレンジのステンドグラス",
       "241:4" => "黄色のステンドグラス",
       "241:5" => "黄緑のステンドグラス",
       "241:13" => "緑のステンドグラス",
       "241:9" => "水色の色付きガラス",
       "241:3" => "空色の色付きガラス",
       "241:11" => "青のステンドグラス",
       "241:10" => "紫のステンドグラス",
       "241:2" => "赤紫のステンドグラス",
       "241:6" => "ピンクのステンドグラス",
       "102:0" => "ガラス板",
       "160:0" => "白のステンドグラス窓",
       "160:8" => "薄灰色のステンドグラス窓",
       "160:7" => "灰色のステンドグラス窓",
       "160:15" => "黒のステンドグラス窓",
       "160:12" => "茶色のステンドグラス窓",
       "160:14" => "赤のステンドグラス窓",
       "160:1" => "オレンジのステンドグラス窓",
       "160:4" => "黄色のステンドグラス窓",
       "160:5" => "黄緑のステンドグラス窓",
       "160:13" => "緑のステンドグラス窓",
       "160:9" => "水色のステンドガラス窓",
       "160:3" => "空色の色付きガラス板",
       "160:11" => "青のステンドグラス窓",
       "160:10" => "紫のステンドグラス窓",
       "160:2" => "赤紫のステンドグラス窓",
       "160:6" => "ピンクのステンドグラス窓",
       "65:0" => "はしご",
       "44:0" => "なめらかな石ハーフブロック",
       "44:3" => "丸石ハーフブロック",
       "182:5" => "苔の生えた丸石ハーフブロック",
       "158:0" => "樫のハーフブロック",
       "158:1" => "トウヒのハーフブロック",
       "158:2" => "樺のハーフブロック",
       "158:3" => "ジャングルの木のハーフブロック",
       "158:4" => "アカシアの木のハーフブロック",
       "158:5" => "黒樫の木のハーフブロック",
       "44:5" => "石レンガハーフブロック",
       "44:1" => "砂岩ハーフブロック",
       "182:6" => "なめらかな砂岩ハーフブロック",
       "182:0" => "赤砂岩のハーフブロック",
       "44:4" => "レンガハーフブロック",
       "44:7" => "暗黒レンガのハーフブロック",
       "182:7" => "赤い暗黒レンガ ハーフブロック",
       "44:6" => "クォーツのハーフブロック",
       "182:1" => "プルプァのハーフブロック",
       "182:2" => "海晶ブロックのハーフブロック",
       "182:3" => "暗海晶ブロックのハーフブロック",
       "182:4" => "海晶レンガのハーフブロック",
       "45:0" => "レンガ ブロック",
       "98:0" => "石レンガ",
       "98:1" => "苔の生えた石レンガ",
       "98:2" => "ひび割れた石レンガ",
       "98:3" => "模様入り石レンガ",
       "206:0" => "エンドストーンレンガ",
       "168:2" => "海晶レンガ",
       "4:0" => "丸石",
       "48:0" => "苔の生えた丸石",
       "24:0" => "砂岩",
       "24:1" => "模様入り砂岩",
       "24:2" => "カットされた砂岩",
       "179:0" => "赤砂岩",
       "179:1" => "模様入り赤砂岩",
       "179:2" => "カットされた赤砂岩",
       "173:0" => "石炭のブロック",
       "41:0" => "金のブロック",
       "42:0" => "鉄のブロック",
       "133:0" => "エメラルドのブロック",
       "57:0" => "ダイヤモンドのブロック",
       "22:0" => "ラピスラズリのブロック",
       "155:0" => "クォーツのブロック",
       "155:2" => "柱状のクォーツのブロック",
       "155:1" => "模様入りのクォーツブロック",
       "168:0" => "海晶ブロック",
       "168:1" => "暗海晶ブロック",
       "170:0" => "干し草の俵",
       "216:0" => "骨ブロック",
       "214:0" => "暗黒茸ブロック",
       "112:0" => "暗黒レンガ ブロック",
       "215:0" => "赤い暗黒レンガ",
       "35:0" => "白のウール",
       "35:8" => "薄灰色のウール",
       "35:7" => "灰色のウール",
       "35:15" => "黒のウール",
       "35:12" => "茶色のウール",
       "35:14" => "赤のウール",
       "35:1" => "オレンジのウール",
       "35:4" => "黄色のウール",
       "35:5" => "黄緑のウール",
       "35:13" => "緑のウール",
       "35:9" => "水色のウール",
       "35:3" => "空色のウール",
       "35:11" => "青のウール",
       "35:10" => "紫のウール",
       "35:2" => "赤紫のウール",
       "35:6" => "ピンクのウール",
       "171:0" => "白のカーペット",
       "171:8" => "薄灰色のカーペット",
       "171:7" => "灰色のカーペット",
       "171:15" => "黒のカーペット",
       "171:12" => "茶色のカーペット",
       "171:14" => "赤のカーペット",
       "171:1" => "オレンジのカーペット",
       "171:4" => "黄色のカーペット",
       "171:5" => "黄緑のカーペット",
       "171:13" => "緑のカーペット",
       "171:9" => "水色のカーペット",
       "171:3" => "空色のカーペット",
       "171:11" => "青のカーペット",
       "171:10" => "紫のカーペット",
       "171:2" => "赤紫のカーペット",
       "171:6" => "ピンクのカーペット",
       "237:0" => "白のコンクリート パウダー",
       "237:8" => "薄灰色のコンクリート パウダー",
       "237:7" => "灰色のコンクリート パウダー",
       "237:15" => "黒のコンクリート パウダー",
       "237:12" => "茶色のコンクリート パウダー",
       "237:14" => "赤のコンクリート パウダー",
       "237:1" => "オレンジのコンクリート パウダー",
       "237:4" => "黄色のコンクリート パウダー",
       "237:5" => "黄緑のコンクリート パウダー",
       "237:13" => "緑のコンクリート パウダー",
       "237:9" => "水色のコンクリート パウダー",
       "237:3" => "空色のコンクリート パウダー",
       "237:11" => "青のコンクリート パウダー",
       "237:10" => "紫のコンクリート パウダー",
       "237:2" => "赤紫のコンクリート パウダー",
       "237:6" => "ピンクのコンクリート パウダー",
       "236:0" => "白のコンクリート",
       "236:8" => "薄灰色のコンクリート",
       "236:7" => "灰色のコンクリート",
       "236:15" => "黒のコンクリート",
       "236:12" => "茶色のコンクリート",
       "236:14" => "赤のコンクリート",
       "236:1" => "オレンジのコンクリート",
       "236:4" => "黄色のコンクリート",
       "236:5" => "黄緑のコンクリート",
       "236:13" => "緑のコンクリート",
       "236:9" => "水色のコンクリート",
       "236:3" => "空色のコンクリート",
       "236:11" => "青のコンクリート",
       "236:10" => "紫のコンクリート",
       "236:2" => "赤紫のコンクリート",
       "236:6" => "ピンクのコンクリート",
       "82:0" => "粘土ブロック",
       "172:0" => "テラコッタ",
       "159:0" => "白のテラコッタ",
       "159:8" => "薄灰色のテラコッタ",
       "159:7" => "灰色のテラコッタ",
       "159:15" => "黒のテラコッタ",
       "159:12" => "茶色のテラコッタ",
       "159:14" => "赤のテラコッタ",
       "159:1" => "オレンジのテラコッタ",
       "159:4" => "黄色のテラコッタ",
       "159:5" => "黄緑のテラコッタ",
       "159:13" => "緑のテラコッタ",
       "159:9" => "水色のテラコッタ",
       "159:3" => "空色のテラコッタ",
       "159:11" => "青のテラコッタ",
       "159:10" => "紫のテラコッタ",
       "159:2" => "赤紫のテラコッタ",
       "159:6" => "ピンクのテラコッタ",
       "220:0" => "白の彩釉テラコッタ",
       "228:0" => "薄灰色彩釉テラコッタ",
       "227:0" => "灰色の彩釉テラコッタ",
       "235:0" => "黒の彩釉テラコッタ",
       "232:0" => "茶色の彩釉テラコッタ",
       "234:0" => "赤の彩釉テラコッタ",
       "221:0" => "オレンジの彩釉テラコッタ",
       "224:0" => "黄色の彩釉テラコッタ",
       "225:0" => "黄緑の彩釉テラコッタ",
       "233:0" => "緑の彩釉テラコッタ",
       "229:0" => "水色の彩釉テラコッタ",
       "223:0" => "空色の彩釉テラコッタ",
       "231:0" => "青の彩釉テラコッタ",
       "219:0" => "紫の彩釉テラコッタ",
       "222:0" => "赤紫の彩釉テラコッタ",
       "226:0" => "ピンクの彩釉テラコッタ",
       "201:0" => "プルプァ ブロック",
       "201:2" => "プルプァの柱",
       "3:0" => "土",
       "3:1" => "荒れた土",
       "2:0" => "草ブロック",
       "198:0" => "草の道",
       "243:0" => "ポドゾル",
       "110:0" => "菌糸",
       "1:0" => "石",
       "15:0" => "鉄鉱石",
       "14:0" => "金鉱石",
       "56:0" => "ダイヤモンド鉱石",
       "21:0" => "ラピスラズリ鉱石",
       "73:0" => "レッドストーン鉱石",
       "16:0" => "石炭鉱石",
       "129:0" => "エメラルド鉱石",
       "153:0" => "闇のクォーツ鉱石",
       "13:0" => "砂利",
       "1:1" => "花崗岩",
       "1:3" => "閃緑岩",
       "1:5" => "安山岩",
       "1:2" => "磨かれた花崗岩",
       "1:4" => "磨かれた閃緑岩",
       "1:6" => "磨かれた安山岩",
       "12:0" => "砂",
       "12:1" => "赤砂",
       "81:0" => "サボテン",
       "17:0" => "樫の丸太",
       "17:1" => "トウヒの丸太",
       "17:2" => "樺の丸太",
       "17:3" => "ジャングルの木の丸太",
       "162:0" => "アカシアの丸太",
       "162:1" => "黒樫の丸太",
       "18:0" => "樫の葉",
       "18:1" => "トウヒの葉",
       "18:2" => "樺の葉",
       "18:3" => "ジャングルの木の葉",
       "161:0" => "アカシアの葉",
       "161:1" => "黒樫の葉",
       "6:0" => "樫の苗木",
       "6:1" => "トウヒの苗木",
       "6:2" => "樺の苗木",
       "6:3" => "ジャングルの苗木",
       "6:4" => "アカシアの苗木",
       "6:5" => "黒樫の苗木",
       "295:0" => "種",
       "361:0" => "カボチャの種",
       "362:0" => "スイカの種",
       "458:0" => "ビートルートの種",
       "296:0" => "小麦",
       "457:0" => "ビートルート",
       "392:0" => "ジャガイモ",
       "394:0" => "有毒なジャガイモ",
       "391:0" => "ニンジン",
       "396:0" => "金のニンジン",
       "260:0" => "リンゴ",
       "322:0" => "金のリンゴ",
       "466:0" => "エンチャントされたリンゴ",
       "103:0" => "スイカ",
       "360:0" => "スイカ",
       "382:0" => "輝くスイカ",
       "86:0" => "カボチャ",
       "91:0" => "ジャック・オ・ランタン",
       "31:2" => "シダ",
       "175:3" => "大きなシダ",
       "31:1" => "草",
       "175:2" => "背の高い草",
       "37:0" => "タンポポ",
       "38:0" => "ポピー",
       "38:1" => "ヒスイラン",
       "38:2" => "アリウム",
       "38:3" => "ヒナソウ",
       "38:4" => "赤のチューリップ",
       "38:5" => "オレンジのチューリップ",
       "38:6" => "白のチューリップ",
       "38:7" => "ピンクのチューリップ",
       "38:8" => "フランスギク",
       "175:0" => "ヒマワリ",
       "175:1" => "ライラック",
       "175:4" => "バラの低木",
       "175:5" => "ボタン",
       "351:19" => "白の染料",
       "351:7" => "薄灰色の染料",
       "351:8" => "灰色の染料",
       "351:16" => "黒の染料",
       "351:17" => "茶色の染料",
       "351:1" => "赤の染料",
       "351:14" => "オレンジの染料",
       "351:11" => "黄色の染料",
       "351:10" => "黄緑の染料",
       "351:2" => "緑の染料",
       "351:6" => "水色の染料",
       "351:12" => "空色の染料",
       "351:18" => "青の染料",
       "351:5" => "紫の染料",
       "351:13" => "赤紫の染料",
       "351:9" => "ピンクの染料",
       "351:0" => "墨袋",
       "351:3" => "ココア ビーンズ",
       "351:4" => "ラピスラズリ",
       "351:15" => "骨粉",
       "106:0" => "つた",
       "111:0" => "スイレンの葉",
       "32:0" => "枯れ木",
       "80:0" => "雪",
       "79:0" => "氷",
       "174:0" => "氷塊",
       "78:0" => "積雪",
       "365:0" => "生の鶏肉",
       "319:0" => "生の豚肉",
       "363:0" => "生の牛肉",
       "423:0" => "生の羊肉",
       "411:0" => "生の兎肉",
       "349:0" => "生のタラ",
       "460:0" => "生の鮭",
       "461:0" => "熱帯魚",
       "462:0" => "フグ",
       "39:0" => "きのこ",
       "40:0" => "きのこ",
       "99:14" => "きのこ",
       "100:14" => "きのこ",
       "99:15" => "きのこ",
       "99:0" => "きのこ",
       "344:0" => "タマゴ",
       "338:0" => "サトウキビ",
       "353:0" => "砂糖",
       "367:0" => "腐肉",
       "352:0" => "骨",
       "30:0" => "クモの巣",
       "375:0" => "クモの目",
       "52:0" => "モンスター スポーナー",
       //モブ出現の卵 未登録
       "49:0" => "黒曜石",
       "7:0" => "岩盤",
       "88:0" => "ソウルサンド",
       "87:0" => "暗黒石",
       "213:0" => "マグマ ブロック",
       "372:0" => "ネザーウォート",
       "121:0" => "エンドストーン",
       "432:0" => "コーラス フルーツ",
       "433:0" => "焼いたコーラス フルーツ",
       "19:0" => "スポンジ",
       "19:1" => "ぬれたスポンジ",
       //防具 未登録
       "268:0" => "木の剣",
       "272:0" => "石の剣",
       "267:0" => "鉄の剣",
       "283:0" => "金の剣",
       "276:0" => "ダイヤモンドの剣",
       "271:0" => "木の斧",
       "275:0" => "石の斧",
       "258:0" => "鉄の斧",
       "286:0" => "金の斧",
       "279:0" => "ダイヤモンドの斧",
       "270:0" => "木のツルハシ",
       "274:0" => "石のツルハシ",
       "257:0" => "鉄おツルハシ",
       "285:0" => "金のツルハシ",
       "278:0" => "ダイヤモンドのツルハシ",
       "269:0" => "木のシャベル",
       "273:0" => "石のシャベル",
       "256:0" => "鉄のシャベル",
       "284:0" => "金のシャベル",
       "277:0" => "ダイヤモンドのシャベル",
       "290:0" => "木のくわ",
       "291:0" => "石のくわ",
       "292:0" => "鉄のくわ",
       "294:0" => "金のくわ",
       "293:0" => "ダイヤモンドのくわ",
       "262:0" => "弓",
       "262:0" => "矢",
       //効果のある矢 未登録
       "366:0" => "焼き鳥",
       "320:0" => "調理した豚肉",
       "364:0" => "調理した牛肉",
       "424:0" => "調理した羊肉",
       "412:0" => "調理した兎肉",
       "350:0" => "焼いたタラ",
       "463:0" => "調理した鮭",
       "297:0" => "パン",
       "282:0" => "きのこシチュー",
       "459:0" => "ビートルート スープ",
       "413:0" => "ウサギシチュー",
       "393:0" => "ベイクドポテト",
       "357:0" => "クッキー",
       "400:0" => "パンプキン パイ",
       "354:0" => "ケーキ",
       "464:0" => "乾燥昆布",
       "346:0" => "釣り竿",
       "332:0" => "雪玉",
       "359:0" => "ハサミ",
       "259:0" => "火打ち石と打ち金",
       "347:0" => "時計",
       "345:0" => "コンパス",
       "450:0" => "不死のトーテム",
       "374:0" => "ガラスビン",
       "384:0" => "エンチャントのビン",
       "373:0" => "水のビン",
       //ポーション 未登録,
       "280:0" => "棒",
       "355:0" => "白のベッド",
       "355:8" => "薄灰色のベッド",
       "355:7" => "灰色のベッド",
       "355:15" => "黒のベッド",
       "355:12" => "茶色のベッド",
       "355:14" => "赤のベッド",
       "355:1" => "オレンジのベッド",
       "355:4" => "黄色のベッド",
       "355:5" => "黄緑のベッド",
       "355:13" => "緑のベッド",
       "355:9" => "水色のベッド",
       "355:3" => "空色のベッド",
       "355:11" => "青のベッド",
       "355:10" => "紫のベッド",
       "355:2" => "赤紫のベッド",
       "355:6" => "ピンクのベッド",
       "50:0" => "たいまつ",
       "58:0" => "作業台",
       "61:0" => "かまど",
       "379:0" => "調合台",
       "145:0" => "金床",
       "145:4" => "少し壊れた金床",
       "145:8" => "かなり壊れた金床",
       "116:0" => "エンチャントテーブル",
       "47:0" => "本棚",
       "54:0" => "チェスト",
       "146:0" => "トラップ チェスト",
       "130:0" => "エンダー チェスト",
       "25:0" => "音ブロック",
       "348:0" => "グロウストーンダスト",
       "89:0" => "グロウストーン",
       "123:0" => "レッドストーン ランプ",
       "169:0" => "海のランタン",
       "323:0" => "樫の看板",
       "321:0" => "絵",
       "389:0" => "額縁",
       "390:0" => "植木鉢",
       "281:0" => "おわん",
       "325:0" => "バケツ",
       "325:1" => "ミルク",
       "325:8" => "水バケツ",
       "325:10" => "溶岩バケツ",
       "325:2" => "バケツ１杯のタラ",
       "325:3" => "バケツ１杯の鮭",
       "325:4" => "バケツ１杯の熱帯魚",
       "325:5" => "バケツ１杯のフグ",
       "397:3" => "ヘッド",
       "397:2" => "ゾンビの頭",
       "397:4" => "クリーパー ヘッド",
       "397:5" => "ドラゴンの頭",
       "397:0" => "スケルトンの頭",
       "397:1" => "ウィザー スケルトンの頭",
       "120:0" => "エンドポータル",
       "263:0" => "石炭",
       "263:1" => "木炭",
       "264:0" => "ダイヤモンド",
       "452:0" => "鉄塊",
       "265:0" => "鉄の延べ棒",
       "371:0" => "金の塊",
       "266:0" => "金の延べ棒",
       "388:0" => "エメラルド",
       "406:0" => "闇のクォーツ",
       "337:0" => "粘土",
       "336:0" => "レンガ",
       "405:0" => "暗黒レンガ",
       "409:0" => "暗海晶の破片",
       "422:0" => "海結晶",
       "465:0" => "オウムガイの殻",
       "467:0" => "海の中心",
       "468:0" => "甲羅のかけら",
       "287:0" => "糸",
       "288:0" => "羽根",
       "318:0" => "火打ち石",
       "289:0" => "火薬",
       "334:0" => "皮",
       "415:0" => "ウサギの皮",
       "414:0" => "ウサギの足",
       "369:0" => "ブレイズ ロッド",
       "377:0" => "ブレイズ パウダー",
       "378:-" => "マグマクリーム",
       "376:0" => "発酵したクモの目",
       "437:0" => "ドラゴンの息",
       "445:0" => "シュルカーの殻",
       "370:0" => "ガストの涙",
       "341:0" => "スライムボール",
       "368:0" => "エンダーパール",
       "399:0" => "ネザースター",
       "208:0" => "果てのロッド",
       "339:0" => "紙",
       "340:0" => "本",
       "386:0" => "本と羽ペン",
       "333:0" => "樫の木のボード",
       "333:1" => "トウヒのボード",
       "333:2" => "樺のボード",
       "333:3" => "ジャングルの木のボード",
       "333:4" => "アカシアのボード",
       "333:5" => "黒樫の木のボード",
       "66:0" => "レール",
       "27:0" => "加速レール",
       "28:0" => "感知レール",
       "126:0" => "アクティベータ レール",
       "328:0" => "トロッコ",
       "331:0" => "レッドストーン",
       "152:0" => "レッドストーンのブロック",
       "76:0" => "レッドストーンのたいまつ",
       "69:0" => "レバー",
       "143:0" => "樫の木のボタン",
       "77:0" => "石のボタン",
       "131:0" => "トリップワイヤー フック",
       "72:0" => "樫の木の重量感知板",
       "70:0" => "石の感知板",
       "147:0" => "重量感知板（軽）",
       "148:0" => "重量感知板（重）",
       "151:0" => "日照センサー",
       "46:0" => "TNT 火薬",
       "446:0" => "黒の旗",
       "446:8" => "灰色の旗",
       "446:7" => "薄灰色の旗",
       "446:15" => "白の旗",
       "446:12" => "空色の旗",
       "446:14" => "オレンジの旗",
       "446:1" => "赤の旗",
       "446:4" => "青の旗",
       "446:5" => "紫の旗",
       "446:13" => "赤紫の旗",
       "446:9" => "ピンクの旗",
       "446:3" => "茶色の旗",
       "446:11" => "黄色の旗",
       "446:10" => "黄緑の旗",
       "446:2" => "緑の旗",
       "446:6" => "水色の旗",
       "446:15" => "邪悪な村人の旗"
    ));
  }

  private static $instance = [];

  public static function getInstance(){
    return self::$instance;
  }

  public function onLoad(){
	self::$instance = $this;
  }

  public function getJpnName($id){

    if($this->Config->exists($id)){
      return $this->Config->get($id);
     }else{
      return $this->Config->get("未登録");
	 }

  }
  
}