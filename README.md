# JpnLibrary

use Jpnlibrary\JpnLibrary;<br />
//use文<br /><br />

JpnLibrary::getInstance()->getJpnName($ID);<br />
//指定したIDのアイテム名を日本語で返します<br /><br />

$ID = "17:0";
JpnLibrary::getInstance()->getJpnName($ID);<br />
//例　17:0のアイテム名を日本語で返す<br /><br /><br />


※このプラグインはライブラリです<br />
このプラグインを単体で導入しても意味がありません<br /><br />

※すべてのアイテムには対応していません<br />
アイテム名を追加、変更したい場合は当プラグインのConfig.ymlを編集してください<br />
（クリエイティブモードのインベントリのアイテム順に記入されてます）<br />
（未登録に記入されたメッセージが未対応のアイテムIDが指定された際に返されます）<br /><br />

※PocketMine-MP 3.11.6 クリエイティブモードのインベントリで確認できるアイテムに対応しています<br />
なお、下記のアイテムは未対応です<br />
・階段ブロック各種<br />
・モブ出現の卵各種<br />
・防具各種<br />
・効果のある矢各種<br />
・ポーション各種
