# JpnLibrary

use Jpnlibrary\JpnLibrary;
//use文

JpnLibrary::getInstance()->getJpnName(ID,META);
//指定したIDのアイテム名を日本語で返します

JpnLibrary::getInstance()->getJpnName(17,0);
//例　17:0のアイテム名を日本語で返す







※このプラグインはライブラリです
このプラグインを単体で導入しても意味がありません

※すべてのアイテムには対応していません
アイテム名を追加、変更したい場合は当プラグインのConfig.ymlを編集してください
（クリエイティブモードのインベントリのアイテム順に記入されてます)

※PocketMine-MP 3.11.6 クリエイティブモードのインベントリで確認できるアイテムに対応しています
なお、下記のアイテムは未対応です
・階段ブロック各種
・モブ出現の卵各種
・防具各種
・効果のある矢各種
・ポーション各種
