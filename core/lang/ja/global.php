<?php
/**
 * EVO Manager language file
 *
 * @version 3.1.x
 * @date 2023/11/28
 * @author The EVO Project Team
 *
 * @language English
 * @package modx
 * @subpackage manager
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
//$modx_textdir = 'rtl'; // uncomment this line for RTL languages
$modx_lang_attribute = 'ja'; // Manager HTML/XML Language Attribute see http://en.wikipedia.org/wiki/ISO_639-1
$modx_manager_charset = 'UTF-8';

$_lang["about_msg"] = 'Evolution CMS is a <a href="https://evo-cms.com/" target="_blank">PHP Application Framework and Content Management System</a> licensed under the <a href="https://www.gnu.org/licenses/gpl-3.0.html">GNU GPL</a>.';
$_lang["about_title"] = 'Evolution について';

// days
$_lang["monday"] = '月';
$_lang["tuesday"] = '火';
$_lang["wednesday"] = '水';
$_lang["thursday"] = '木';
$_lang["friday"] = '金';
$_lang["saturday"] = '土';
$_lang["sunday"] = '日';

// templates
$_lang["template"] = 'テンプレート';
$_lang["templates"] = 'テンプレート';
$_lang['templatecontroller'] = 'Template Controller';
$_lang["template_assignedtv_tab"] = '定義されているテンプレート変数';
$_lang["template_code"] = 'テンプレート コード (html)';
$_lang["template_desc"] = '説明';
$_lang["template_edit_tab"] = 'テンプレートの編集';
$_lang["template_inuse"] = 'This template is in use. Please set the documents using the template to another template. Documents using this template:';
$_lang["template_management_msg"] = '<h3 style="font-weight:bold;">テンプレートデザインの管理</h3><p>テンプレートはいくつでも作成でき、各ページ(リソース)ごとに自由に割り当てることができます。カッコ内の数字はテンプレートIDです。</p>';
$_lang["template_msg"] = 'テンプレートを作成/編集します。[*リソース変数*] [*テンプレート変数*] [(コンフィグ変数)] [~リンクタグ~] [[スニペット]] {{チャンク}} [^ベンチマークタグ^] などを記述できます。';
$_lang["template_name"] = 'テンプレート名';
$_lang["template_no_tv"] = 'テンプレート変数は定義されていません。';
$_lang["template_notassigned_tv"] = '次のテンプレート変数が関連付けできます。';
$_lang["template_reset_all"] = '全てのリソースに適用する';
$_lang["template_reset_specific"] = '「%s」テンプレートを使用しているリソースに適用する';
$_lang["template_assigned_blade_file"] = '対応するBLADEファイル';
$_lang["template_create_blade_file"] = '保存時にテンプレートファイルを作成する';
$_lang["template_selectable"] = 'リソースを作成または編集するときにこのテンプレートを選択可能にする。';
$_lang["template_title"] = 'テンプレートの作成/編集';
$_lang["template_tv_edit"] = 'テンプレート変数の順序を書き換える';
$_lang["template_tv_edit_message"] = '投稿画面上の入力フィールド(テンプレート変数)の順序を並べ替えることができます。マウス操作で上下にドラッグし、最後に「更新」をクリックしてください。';
$_lang["template_tv_edit_title"] = 'テンプレート変数のソート順';
$_lang["template_tv_msg"] = 'このテンプレートに関連付けられているテンプレート変数(カスタムフィールド)';

// tmplvars
$_lang["tv"] = 'テンプレート変数';
$_lang["tmplvar"] = 'テンプレート変数';
$_lang["tmplvars"] = 'テンプレート変数';
$_lang["tmplvar_access_msg"] = 'この変数に対して内容や値の変更を許可するリソースグループを選択してください。';
$_lang["tmplvar_change_template_msg"] = 'このテンプレートを変更すると、このページのテンプレート変数をリロードします。保存していない変更は失われます。';
$_lang["tmplvar_inuse"] = 'このテンプレート変数は下記のリソースで値が入力されています。この値が不要であれば「削除」ボタンをクリックしてください。';
$_lang["tmplvar_tmpl_access"] = 'テンプレートとの関連付け';
$_lang["tmplvar_tmpl_access_msg"] = 'このテンプレート変数を関連付けるテンプレートを選択してください。';
$_lang["tmplvars_binding_msg"] = 'このフィールドはアットバインド(@CHUNK, @DOCUMENT, @EVAL, @SELECT, @FILE, @INHERIT, @DIRECTORY, @NONE)を使って各種のデータソースから値を代入できます。';
$_lang["tmplvars_caption"] = '見出し(入力フィールド名)';
$_lang["tmplvars_default"] = '既定値';
$_lang["tmplvars_description"] = '説明';
$_lang["tmplvars_elements"] = 'オプション';
$_lang["tmplvars_inherited"] = '継承された値';
$_lang["tmplvars_management_msg"] = '<h3 style="font-weight:bold;">テンプレート変数の管理</h3><p>投稿画面上に入力フィールドを追加できます。テンプレート内の任意の場所に <strong>[*テンプレート変数名*]</strong> と記述して値を出力します。</p>';
$_lang["tmplvars_msg"] = 'テンプレート変数及び入力フィールドを設定します。テンプレート変数名には日本語を用いることができます。このテンプレート変数を使用するテンプレートを「テンプレートとの関連付け」で関連付けないと使用できないためご注意ください。<br />入力タイプ「Listbox」や「CheckBox」は「入力時のオプション」を設定できます。';
$_lang["tmplvars_name"] = '変数名';
$_lang["tmplvars_novars"] = 'テンプレート変数はありません。';
$_lang["tmplvars_rank"] = '並べ替え順';
$_lang["tmplvars_rank_edit_message"] = 'ドラッグすることでテンプレート変数の順序を入れ替えます。';
$_lang["tmplvars_reset_params"] = 'パラメータのリセット';
$_lang["tmplvars_title"] = 'テンプレート変数を編集';
$_lang["tmplvars_type"] = '入力タイプ';
$_lang["tmplvars_widget"] = 'ウィジェット(出力フィルタ)';
$_lang["tmplvars_widget_prop"] = 'ウィジェットのプロパティ';
$_lang["role_no_tv"] = 'このロールにはテンプレート変数がまだ割り当てられていません。';
$_lang["role_notassigned_tv"] = '割り当て可能なテンプレート変数です。';
$_lang["role_tv_msg"] = '以下のテンプレート変数にこのロールが割り当てられました。';
$_lang["tmplvar_roles_access_msg"] = 'このテンプレート変数へアクセス/処理を許可されているロールを選択';

// snippets
$_lang["snippet"] = 'スニペット';
$_lang["snippets"] = 'スニペット';
$_lang["snippet_code"] = 'スニペット コード (php)';
$_lang["snippet_desc"] = '説明';
$_lang["snippet_execonsave"] = '更新後にスニペットを実行';
$_lang["snippet_management_msg"] = '<h3 style="font-weight:bold;">スニペットの管理</h3>スニペットは主にリソースやテンプレートから呼び出すことを想定した簡易の機能拡張です。リソースまたはテンプレート内の任意の場所に <strong>[[スニペット名]]</strong> または <strong>[!スニペット名!]</strong> (キャッシュ無効)と記述するだけで手軽に呼び出せます。</p>';
$_lang["snippet_msg"] = '<p>スニペット名には日本語を用いることができます。先頭と末尾の「&lt;?php」「?&gt;」は必須です。省略した場合は自動的に追加されます。</p>';
$_lang["snippet_name"] = 'スニペット名';
$_lang["snippet_properties"] = '既定のプロパティ';
$_lang["snippet_title"] = 'スニペットの作成/編集';

// chunks
$_lang["htmlsnippet"] = 'チャンク';
$_lang["htmlsnippets"] = 'チャンク';
$_lang["htmlsnippet_desc"] = 'チャンクの説明';
$_lang["htmlsnippet_management_msg"] = '<h3 style="font-weight:bold;">チャンクの管理</h3><p>チャンクはテキストのパーツです。テンプレートやリソース(投稿画面)に<strong>{{チャンク名}}</strong>と記述すると、そのチャンクの内容を出力します。</p>';
$_lang["htmlsnippet_msg"] = '<p>チャンクはテキストのパーツです。テンプレートやリソース(投稿画面)に<strong>{{チャンク名}}</strong>と記述すると、そのチャンクの内容を出力します。</p>';
$_lang["htmlsnippet_name"] = 'チャンク名';
$_lang["htmlsnippet_title"] = 'チャンクの作成/編集';
$_lang["chunk"] = 'チャンク';
$_lang["chunk_code"] = 'チャンク コード (html)';
$_lang["chunk_multiple_id"] = 'エラー: 複数のチャンクが一つのユニークIDを利用しています。';
$_lang["chunk_no_exist"] = 'チャンクが存在しません。';

// plugins
$_lang["plugin"] = 'プラグイン';
$_lang["plugins"] = 'プラグイン';
$_lang["plugin_code"] = 'プラグイン コード (php)';
$_lang["plugin_config"] = 'プラグイン設定';
$_lang["plugin_desc"] = '説明';
$_lang["plugin_disabled"] = 'プラグインを停止';
$_lang["plugin_event_msg"] = 'このプラグインが使用するイベントを選択してください。(※カッコ内の番号はイベントIDです)';
$_lang["plugin_management_msg"] = '<h3 style="font-weight:bold;">プラグインの管理</h3><p>プラグインはシステム寄りの拡張機能で、実行するためには任意のシステムイベントに関連付ける必要があります。スニペットほど直感的ではありませんが、管理画面のカスタマイズもできるなど応用幅が広いです。</p>';
$_lang["plugin_msg"] = 'プラグイン名には日本語を用いることができます。先頭と末尾の「&lt;?php」「?&gt;」は不要です。プラグインを実行するためには、必ず任意のシステムイベントと関連付けてください。';
$_lang["plugin_name"] = 'プラグイン名';
$_lang["plugin_priority"] = 'プラグインの実行順を編集';
$_lang["plugin_priority_instructions"] = 'プラグインの実行順を変更するには、各イベント名の下にあるプラグインをドラッグしてください。最初に実行するプラグインは最上位にしてください。';
$_lang["plugin_priority_title"] = 'プラグインの実行順';
$_lang["purge_plugin"] = '陳腐化したプラグインを排除する';
$_lang["purge_plugin_confirm"] = '本当に陳腐化したプラグインを排除しますか?';
$_lang["plugin_title"] = 'プラグインの作成/編集';

// categories
$_lang["category"] = 'Category';
$_lang["categories"] = 'Categories';
$_lang["category_heading"] = 'カテゴリー';
$_lang["category_manager"] = 'カテゴリーマネージャー';
$_lang["category_management"] = 'カテゴリーの管理';
$_lang["category_msg"] = '<h3 style="font-weight:bold;">全エレメントの一覧</h3>カテゴリーでグループ化したエレメントを一覧・編集できます。不要なカテゴリーの削除もこちらで。削除されるのはカテゴリー名だけで、エレメントは「カテゴリーなし」に移動します。';

// file
$_lang["file_delete_file"] = 'ファイルを削除';
$_lang["file_delete_folder"] = 'ディレクトリを削除';
$_lang["file_deleted"] = '成功';
$_lang["file_download_file"] = 'ファイルをダウンロード';
$_lang["file_download_unzip"] = 'ファイルを解凍';
$_lang["file_folder_chmod_error"] = 'アクセス権を変更できません。EVO以外の方法でアクセス権を変更してください。';
$_lang["file_folder_created"] = 'ディレクトリを作成しました。';
$_lang["file_folder_deleted"] = 'ディレクトリを削除しました。';
$_lang["file_folder_not_created"] = 'ディレクトリを作成できません';
$_lang["file_folder_not_deleted"] = 'ディレクトリを削除できません。ディレクトリを削除する前に中身が空であることを確認してください。';
$_lang["file_not_deleted"] = '失敗';
$_lang["file_not_saved"] = 'ファイルを更新できません、ターゲットディレクトリが書き込み可能か確認してください。';
$_lang["file_saved"] = 'ファイルを更新しました。';
$_lang["file_unzip"] = '解凍しました。';
$_lang["file_unzip_fail"] = '解凍できません。';

// files
$_lang["files"] = 'Files';
$_lang["files_files"] = 'ファイル';
$_lang["files_access_denied"] = 'このアカウントは休止中です。';
$_lang["files_data"] = 'データ';
$_lang["files_dir_listing"] = 'ディレクトリ一覧';
$_lang["files_directories"] = 'ディレクトリ';
$_lang["files_directory_is_empty"] = 'このディレクトリは空です。';
$_lang["files_dirwritable"] = 'ディレクトリ書き込み可？';
$_lang["files_editfile"] = 'ファイルを編集';
$_lang["files_file_type"] = 'ファイルタイプ:';
$_lang["files_filename"] = 'ファイル名';
$_lang["files_fileoptions"] = 'オプション';
$_lang["files_filesize"] = 'ファイルサイズ';
$_lang["files_filetype_notok"] = 'この種類のファイルはアップロードできません。';
$_lang["files_management"] = 'ファイルを管理';
$_lang["files_management_no_permission"] = 'これらのファイルを閲覧または編集するのに十分な権限がありません。<b>%s</b>のアクセス権を手に入れるために管理者に連絡してください。';
$_lang["files_modified"] = '更新日時';
$_lang["files_top_level"] = 'トップレベルへ移動';
$_lang["files_up_level"] = '1レベル上へ移動';
$_lang["files_upload_copyfailed"] = 'アップロード失敗 - コピー先ディレクトリへのファイルコピーが失敗しました';
$_lang["files_upload_error"] = 'エラー';
$_lang["files_upload_error0"] = 'アップロードに問題が発生しました。';
$_lang["files_upload_error1"] = 'アップロードしようとしたファイルは大きすぎます。';
$_lang["files_upload_error2"] = 'アップロードしようとしたファイルは大きすぎます。';
$_lang["files_upload_error3"] = 'アップロードしようとしたファイルは一部分のみアップロードされました。';
$_lang["files_upload_error4"] = 'アップロードするファイルを選択';
$_lang["files_upload_error5"] = 'アップロード中に問題が発生しました。';
$_lang["files_upload_inhibited_msg"] = '<strong>アップロード機能が使用できません。</strong> - アップロードがサポートされているか、PHPがディレクトリに書込パーミッションを持っているかを確認してください。<br />';
$_lang["files_upload_ok"] = 'ファイルのアップロードが完了しました。';
$_lang["files_upload_permissions_error"] = 'パーミッションエラー - ファイルをアップロードするディレクトリを書き込み可能にしてください。';
$_lang["files_uploadfile"] = 'アップロードを実行';
$_lang["files_uploadfile_msg"] = 'アップロードするファイルを選択';
$_lang["files_uploading"] = '<strong>%s</strong>を<strong>%s/</strong>にアップロードしました。<br />';
$_lang["files_viewfile"] = 'ファイルの表示';

// modules
$_lang["module"] = 'Module';
$_lang["modules"] = 'モジュール';
$_lang["module_code"] = 'モジュール コード(php)';
$_lang["module_config"] = 'モジュール設定';
$_lang["module_desc"] = '説明';
$_lang["module_disabled"] = 'モジュールを停止';
$_lang["module_edit_click_title"] = 'このモジュールを編集';
$_lang["module_group_access_msg"] = '管理画面内でこのモジュールを実行できるユーザーグループを選択してください。';
$_lang["module_management"] = 'モジュール管理';
$_lang["module_management_msg"] = 'アイコンをクリックして操作を選択してください。モジュールは管理画面を拡張する形で機能を追加できます。追加する機能自体はプラグインやスニペットで作り、これをモジュール側のフォームでコントロールする実装を推奨します。';
$_lang["module_msg"] = 'モジュール名には日本語を用いることができます。先頭と末尾の「&lt;?php」「?&gt;」は不要です。';
$_lang["module_name"] = 'モジュール名';
$_lang["module_resource_msg"] = 'このモジュールに関連付けるエレメントを追加・削除します。新しいエレメントを追加するには下のボタンのひとつをクリックします。';
$_lang["module_resource_title"] = 'モジュール関連付け';
$_lang["module_title"] = 'モジュールの作成/編集';
$_lang["module_viewdepend_msg"] = 'このモジュールが管理するエレメントの状況を見ることができます。関連付けを変更するには「関連付けの管理」ボタンをクリックします';

// elements
$_lang["element"] = '外部ファイル';
$_lang["elements"] = 'エレメント';
$_lang["element_categories"] = 'エレメント一覧';
$_lang["element_filter_msg"] = '絞り込む場合はここに文字を入力';
$_lang["element_management"] = 'エレメント管理';
$_lang["element_name"] = 'エレメント名';
$_lang["element_selector_msg"] = '下のリストからエレメントを選択して「挿入」ボタンをクリックします。';
$_lang["element_selector_title"] = 'エレメントセレクタ';

// resource
$_lang["resource"] = 'リソース';
$_lang["resource_alias"] = 'エイリアス';
$_lang["resource_alias_help"] = 'このリソースのエイリアスを指定することができます。フレンドリーURL機能が有効な場合、次のようにリソースにアクセスできます:

http://yourserver/エイリアス

リソース変数：[*alias*]';
$_lang["resource_content"] = '本文';
$_lang["resource_description"] = '説明(description)';
$_lang["resource_description_help"] = 'リソースに関する任意の説明をここに入力することができます。リソース変数：[*description*]';
$_lang["resource_duplicate"] = '複製を作る';
$_lang["resource_long_title_help"] = 'ページのタイトルです。titleタグなどで利用します。リソース変数：[*longtitle*]';
$_lang["resource_metatag_help"] = 'このリソースに付加したいMETAタグやキーワードを選択してください。CTRLキーを押しながらクリックすると複数のタグやキーワードを選択できます。選択元とするMETAタグ・キーワードの作成・管理は「エレメント」→<a href="index.php?a=81" target="_self">「METAタグとキーワードの管理」</a>で行ないます。';
$_lang["resource_opt_contentdispo"] = 'リソースの出力';
$_lang["resource_opt_contentdispo_help"] = 'ウェブブラウザがこのリソースをどう扱うかを指定できます。「ファイルとしてダウンロード」を選択するとリソースをダウンロードファイルとみなします。';
$_lang["resource_opt_emptycache"] = '更新時にキャッシュを<br />削除(記憶されません)';
$_lang["resource_opt_emptycache_help"] = 'このオプションのチェックを外すと、キャッシュを削除しません。設定の戻し忘れなどの事故を防ぐために、この設定は記憶されませんので、ご注意ください。';
$_lang["resource_opt_folder"] = 'コンテナとして扱う';
$_lang["resource_opt_folder_help"] = 'このリソースをコンテナとして明示的に扱いたい場合にチェックしてください。通常はサブリソースの有無により自動的に判定されます';
$_lang["resource_opt_menu_index"] = 'メニューオーダー';
$_lang["resource_opt_menu_index_help"] = 'メニューオーダーは、メニュースニペット内でリソースの配置順を指定するために用います。もちろん、スニペット次第で他の目的に使用することもできます。';
$_lang["resource_opt_menu_title"] = 'メニュータイトル';
$_lang["resource_opt_menu_title_help"] = 'メニュータイトルは、スニペットやモジュールで使用できる短いタイトルです。リソース変数：[*menutitle*]';
$_lang["resource_opt_published"] = '公開ステータス';
$_lang["resource_opt_published_help"] = 'このページを公開する場合はチェックしてください。<br />※「公開開始日時」及び「公開終了日時」がセットされている場合は、このチェックによる指定は無効になります。';
$_lang["resource_opt_richtext"] = 'リッチテキストで編集';
$_lang["resource_opt_richtext_help"] = '通常の記事を書く場合はここにチェックを入れたままとし、リッチテキストエディターでリソースを編集することをおすすめします。リソースがJavaScriptやフォームを含む場合は、チェックを外してプレーンテキストによる編集を行ってください。';
$_lang["resource_opt_show_menu"] = 'メニューに表示';
$_lang["resource_opt_show_menu_help"] = 'メニューにこのリソースを表示するにはこのオプションをチェックしてください。メニュー作成スニペットにはこのオプションを無視するものもありますのでご注意ください。';
$_lang["resource_opt_trackvisit_help"] = 'ドキュメントツリーに子リソースを表示します。';
$_lang["resource_overview"] = '詳細情報を表示';
$_lang["resource_parent"] = '親リソース';
$_lang["resource_parent_help"] = 'コンテナアイコンをクリックすると、このリソースの親(コンテナ)を変更できる状態になります。アイコンが変化している状態で、親にしたいリソースをリソースツリー上でクリックしてください。もう一度クリックすると元に戻ります。';
$_lang["resource_permissions_error"] = 'このリソースを、少なくともアクセス可能な一つ以上のリソースグループへ割り当ててください。';
$_lang["resource_setting"] = 'リソース設定';
$_lang["resource_summary"] = '要約(序説)';
$_lang["resource_summary_help"] = 'リソースの要約を入力します。リソース変数：[*introtext*]';
$_lang["resource_title"] = 'リソース名';
$_lang["resource_title_help"] = 'リソースの名称/タイトルを入力してください。バックスラッシュは使用できません。管理画面のリソースツリーで表示されるため短めにするといいでしょう(リソース変数：[*pagetitle*])';
$_lang["resource_to_be_moved"] = '移動するリソース';
$_lang["resource_type"] = 'リソースタイプ';
$_lang["resource_type_message"] = '「ウェブリンク」は、ネット上のリソース(ウェブページや画像・各種ファイルなど)をEVOのリソースとして扱うものです。これにより、他システムで作った掲示板などをEVO管理下にまとめることができます。コンテントタイプは「text/html」、「リソースの出力」は「ブラウザ内に通常表示」としてください。';
$_lang["resource_type_weblink"] = 'ウェブリンク';
$_lang["resource_type_webpage"] = 'ウェブページ';
$_lang["resource_weblink_help"] = 'ウェブリンクで参照したい対象のURLを入力してください。';
$_lang["resources_in_container"] = '個のサブリソースがあります。';
$_lang["resources_in_container_no"] = 'サブリソースはありません。';

// role
$_lang["role"] = 'ロール';
$_lang["role_about"] = '「EVOについて」ページの表示';
$_lang["role_actionok"] = '処理完了ページの表示';
$_lang["role_assets_images"] = 'assets/imagesの管理';
$_lang["role_assets_files"] = 'assets/filesの管理';
$_lang["role_bk_manager"] = 'バックアップ・リストア機能の使用';
$_lang["role_cache_refresh"] = 'サイトをリフレッシュ';
$_lang["role_category_manager"] = 'カテゴリーマネージャーの使用';
$_lang["role_change_password"] = 'パスワード変更';
$_lang["role_change_resourcetype"] = '変更リソースタイプ';
$_lang["role_chunk_management"] = 'チャンクの管理';
$_lang["role_config_management"] = '設定管理';
$_lang["role_content_management"] = 'コンテンツ管理';
$_lang["role_create_chunk"] = 'チャンクを作成';
$_lang["role_create_doc"] = 'リソースを作成';
$_lang["role_create_plugin"] = 'プラグインを作成';
$_lang["role_create_snippet"] = 'スニペットを作成';
$_lang["role_create_template"] = 'テンプレートを作成';
$_lang["role_credits"] = '著作権表示/謝辞を表示';
$_lang["role_delete_chunk"] = 'チャンクを削除';
$_lang["role_delete_doc"] = 'リソースを削除';
$_lang["role_delete_eventlog"] = 'イベントログを削除';
$_lang["role_delete_module"] = 'モジュールを削除';
$_lang["role_delete_plugin"] = 'プラグインを削除';
$_lang["role_delete_role"] = 'ロールを削除';
$_lang["role_delete_snippet"] = 'スニペットを削除';
$_lang["role_delete_template"] = 'テンプレートを削除';
$_lang["role_delete_user"] = 'ユーザーを削除';
$_lang["role_delete_web_user"] = 'ウェブユーザーを削除';
$_lang["role_edit_chunk"] = 'チャンクを編集';
$_lang["role_edit_doc"] = 'リソース編集画面を開く';
$_lang["role_edit_doc_metatags"] = 'METAタグとキーワード編集画面を開く';
$_lang["role_edit_module"] = 'モジュール編集画面を開く';
$_lang["role_edit_plugin"] = 'プラグイン編集画面を開く';
$_lang["role_edit_role"] = 'ロール編集画面を開く';
$_lang["role_edit_settings"] = 'グローバル設定を変更';
$_lang["role_edit_snippet"] = 'スニペット編集画面を開く';
$_lang["role_edit_template"] = 'テンプレート編集画面を開く';
$_lang["role_edit_user"] = 'ユーザー編集画面を開く';
$_lang["role_edit_web_user"] = 'ウェブユーザー編集画面を開く';
$_lang["role_empty_trash"] = '全ての削除済みリソースを完全に消去する';
$_lang["role_errors"] = 'エラーダイアログを表示';
$_lang["role_eventlog_management"] = 'イベントログ管理';
$_lang["role_export_static"] = '静的HTMLファイルとして書き出す';
$_lang["role_file_management"] = 'ファイルの管理';
$_lang["role_file_manager"] = 'ファイル管理機能を使用';
$_lang["role_frames"] = '管理画面へのアクセス(全域)';
$_lang["role_help"] = 'ヘルプページを表示';
$_lang["role_home"] = '管理画面ホームへのアクセス';
$_lang["role_import_static"] = '静的HTMLファイルをインポート';
$_lang["role_logout"] = '管理画面をログアウト';
$_lang["role_list_module"] = 'モジュール一覧';
$_lang["role_manage_metatags"] = 'サイト全体METAタグとキーワードの管理';
$_lang["role_management_msg"] = 'ロール(役割)ごとに、利用可能な機能を選択・設定します。ロールは役割・役職のようなもので、たとえば、部長・一般社員・アルバイトの3者の異なる権限をシステム的に表現しています。EVOでは、管理画面にアクセスする全てのユーザが何らかのロール(役割)を持ちます。';
$_lang["role_management_title"] = 'ロール管理';
$_lang["role_messages"] = 'メッセージの表示および送信';
$_lang["role_module_management"] = 'モジュール管理';
$_lang["role_name"] = 'ロール名';
$_lang["role_new_module"] = 'モジュールを作成';
$_lang["role_new_role"] = 'ロールを作成';
$_lang["role_new_user"] = 'ユーザーを作成';
$_lang["role_new_web_user"] = 'ウェブユーザーを作成';
$_lang["role_plugin_management"] = 'プラグイン管理';
$_lang["role_publish_doc"] = 'リソースの公開';
$_lang["role_remove_locks"] = 'ロックの解除';
$_lang["role_role_management"] = 'ロール管理';
$_lang["role_run_module"] = 'モジュールの実行';
$_lang["role_save_chunk"] = 'チャンクを更新';
$_lang["role_save_doc"] = 'リソースを更新';
$_lang["role_save_module"] = 'モジュールを更新';
$_lang["role_save_password"] = 'パスワードを更新';
$_lang["role_save_plugin"] = 'プラグインを更新';
$_lang["role_save_role"] = 'ロールを更新';
$_lang["role_save_snippet"] = 'スニペットを更新';
$_lang["role_save_template"] = 'テンプレートを更新';
$_lang["role_save_user"] = 'ユーザーを更新';
$_lang["role_save_web_user"] = 'ウェブユーザーを更新';
$_lang["role_snippet_management"] = 'スニペット管理';
$_lang["role_template_management"] = 'テンプレート管理';
$_lang["role_title"] = 'ロールの作成/編集';
$_lang["role_udperms"] = 'アクセス許可管理';
$_lang["role_user_management"] = 'ユーザー管理';
$_lang["role_view_docdata"] = 'リソースデータの表示';
$_lang["role_view_eventlog"] = 'イベントログを見る';
$_lang["role_view_logs"] = '管理操作ログの閲覧';
$_lang["role_view_unpublished"] = '未公開のリソースの閲覧';
$_lang["role_web_access_persmissions"] = 'ウェブアクセス許可';
$_lang["role_web_user_management"] = 'ウェブユーザー管理';

// user
$_lang["user"] = 'ユーザー';
$_lang["users"] = '権限管理';
$_lang["user_block"] = '休止中';
$_lang["user_blockedafter"] = 'この日から休止';
$_lang["user_blockeduntil"] = 'この日まで休止';
$_lang["user_changeddata"] = 'ユーザー情報が変更されました。もう一度ログインし直してください。';
$_lang["user_country"] = '国';
$_lang["user_dob"] = '誕生日';
$_lang["user_doesnt_exist"] = 'ユーザー登録がありません';
$_lang["user_edit_self_msg"] = '<b>自分自身のユーザー情報を変更した場合は、変更を管理画面に反映させるためにいったんログアウトしてください。</b>';
$_lang["user_email"] = 'メールアドレス';
$_lang["user_failedlogincount"] = 'ログイン失敗';
$_lang["user_fax"] = 'Fax';
$_lang["user_female"] = '女性';
$_lang["user_full_name"] = 'フルネーム';
$_lang["user_first_name"] = 'ファーストネーム（名）';
$_lang["user_last_name"] = 'ラストネーム（氏）';
$_lang["user_middle_name"] = 'ミドルネーム';
$_lang["user_gender"] = '性別';
$_lang["user_is_blocked"] = 'このアカウントは休止状態になっています。';
$_lang["user_logincount"] = 'ログイン回数';
$_lang["user_male"] = '男性';
$_lang["user_management_msg"] = '管理画面の操作を行なうユーザをここで作成・管理します。ロール管理とグループ管理を併用し、アクセス権限を細かく管理できます。';
$_lang["user_management_title"] = 'ユーザー管理';
$_lang["user_mobile"] = '携帯電話';
$_lang["user_phone"] = '電話番号';
$_lang["user_photo"] = 'ユーザーの写真';
$_lang["user_photo_message"] = 'このユーザーのイメージ画像のURLを入力してください。または、挿入ボタンをクリックしファイルマネージャーでファイルを選択してください。';
$_lang["user_prevlogin"] = '今回のログイン日時';
$_lang["user_role"] = 'ロール(役割)';
$_lang["no_user_role"] = '未設定';
$_lang["user_state"] = '都道府県';
$_lang["user_title"] = 'ユーザーの作成/編集';
$_lang["user_upload_message"] = ' このユーザーに対してこのカテゴリーに含まれるファイルタイプのアップロードを禁じたい場合、「グローバル設定を使用」をチェックせず、このフィールドを空白にしておいてください。';
$_lang["user_use_config"] = 'グローバル設定を使用';
$_lang["user_verification"] = '認証済みのユーザー';
$_lang["user_zip"] = '郵便番号';
$_lang["username"] = 'ログイン名';
$_lang["username_unique"] = 'User name is already in use!';
$_lang["user_street"] = '番地';
$_lang["user_city"] = '市区町村';
$_lang["user_other"] = 'その他';

// add
$_lang["add"] = '追加';
$_lang["add_chunk"] = 'チャンクを追加';
$_lang["add_doc"] = 'リソースを追加';
$_lang["add_folder"] = 'ディレクトリを作成';
$_lang["add_plugin"] = 'プラグインを追加';
$_lang["add_resource"] = 'リソースを投稿';
$_lang["add_snippet"] = 'スニペットを追加';
$_lang["add_tag"] = 'タグ追加';
$_lang["add_template"] = 'テンプレートを追加';
$_lang["add_tv"] = 'テンプレート変数を追加';
$_lang["add_weblink"] = 'ウェブリンクを作成';

// new
$_lang["new_category"] = 'カテゴリー作成';
$_lang["new_file_permissions_message"] = '管理画面を通じて新しいファイルをアップロードしたとき、ここで設定したパーミッションに変更します。この機能はIIS上など一部の環境では動作しません。';
$_lang["new_file_permissions_title"] = '新規ファイルのパーミッション';
$_lang["new_folder_permissions_message"] = '管理画面を通じて新しいディレクトリを作成したとき、ここで設定したパーミッションに変更します。この機能はIIS上など一部の環境では動作しません。';
$_lang["new_folder_permissions_title"] = '新規ディレクトリのパーミッション';
$_lang["new_permission"] = 'パーミッションを追加';
$_lang["new_htmlsnippet"] = 'チャンクを作成';
$_lang["new_keyword"] = 'キーワードを追加';
$_lang["new_module"] = 'モジュールを作成';
$_lang["new_parent"] = '移動先の親リソース';
$_lang["new_plugin"] = 'プラグインを作成';
$_lang["new_role"] = '新規ロール';
$_lang["new_snippet"] = 'スニペットを作成';
$_lang["new_template"] = 'テンプレートを作成';
$_lang["new_tmplvars"] = 'テンプレート変数を作成';
$_lang["new_user"] = 'ユーザーを作成';
$_lang["new_web_user"] = 'ユーザーを作成';
$_lang["new_resource"] = '新規リソース';

// manage
$_lang["manage_categories"] = 'カテゴリー管理';
$_lang["manage_depends"] = '関連付けの管理';
$_lang["manage_files"] = 'ファイル管理';
$_lang["manage_htmlsnippets"] = 'Manage Chunks';
$_lang["manage_metatags"] = 'METAタグとキーワードの管理';
$_lang["manage_modules"] = 'モジュールの管理';
$_lang["manage_plugins"] = 'Manage Plugins';
$_lang["manage_snippets"] = 'Manage Snippets';
$_lang["manage_templates"] = 'Manage Templates';
$_lang["manage_documents"] = 'Manage Documents';
$_lang["manage_permission"] = 'Manage Permissions';

// move
$_lang["move"] = '移動';
$_lang["move_resource"] = '移動する';
$_lang["move_resource_message"] = 'コンテナではないリソースを移動先リソースとして選択した場合、そのリソースは自動的にコンテナに変更されます。';
$_lang["move_resource_new_parent"] = '移動先の親リソースを左のリソースツリーから選択してください';
$_lang["move_resource_title"] = 'リソースの移動';

$_lang["access_permissions"] = '所属グループ';
$_lang["access_permission_denied"] = 'このリソースにアクセスする権限がありません。';
$_lang["access_permission_parent_denied"] = 'ここにリソースを作成する権限がありません。';
$_lang["access_permissions_add_resource_group"] = 'リソースグループを作成';
$_lang["access_permissions_add_user_group"] = 'ユーザーグループを作成';
$_lang["access_permissions_docs_message"] = 'このリソースを所属させたい<a href="index.php?a=40">リソースグループ</a>を選択してください。グループで制限する必要がなければ「グループ制限なし」にチェックを入れます。または<a href="index.php?a=17">「グローバル設定」</a>の「セキュリティ」で「グループ管理機能を使用する」を「いいえ」にします。';
$_lang["access_permissions_group_link"] = 'グループリンクを新規作成';
$_lang["access_permissions_introtext"] = 'ここでユーザーグループまたはリソースグループを作ると、ユーザ編集画面またはリソース編集画面で所属グループを選択できるようになります。グループ機能を利用するためには、ユーザーグループとリソースグループを必ず関連付ける必要があります。また、個別のユーザー及びリソースをそれぞれ直接関連付けることはできません。※グローバル設定の「グループ管理機能を使用する(セキュリティタブ)」を「いいえ」にすると、この画面の設定は無効になります。';
$_lang["access_permissions_link_to_group"] = 'リソースグループ';
$_lang["access_permissions_context"] = 'in context';
$_lang["access_permissions_link_user_group"] = 'ユーザーグループ';
$_lang["access_permissions_links"] = 'グループリンク';
$_lang["access_permissions_links_tab"] = 'リソースグループとユーザーグループを関連付けます(※グループ管理機能を使う場合は必須です)。';
$_lang["access_permissions_no_resources_in_group"] = 'なし';
$_lang["access_permissions_no_users_in_group"] = 'なし';
$_lang["access_permissions_off"] = '<span class="warning">グループ管理機能(グローバル設定 &gt; セキュリティ)が無効になっています。</span>';
$_lang["access_permissions_resource_groups"] = 'リソースグループ';
$_lang["access_permissions_resources_in_group"] = '<strong>グループ内リソース:</strong>';
$_lang["access_permissions_resources_tab"] = 'IDの上にマウスポインタを重ねるとリソース名を確認できます。リソースをグループに加えるには、リソース編集画面を個別に開いて「所属グループ」タブで設定してください。管理画面とウェブページを区別して扱わないため、両方のグループを作る場合はグループ名を工夫するとよいでしょう。';
$_lang["access_permissions_user_toggle"] = 'Toggle access permissions';
$_lang["access_permissions_user_groups"] = 'ユーザーグループ';
$_lang["access_permissions_user_message"] = 'このユーザーを所属させたいユーザーグループを選択してください。ユーザは所属しているグループに割り当てられたリソースのみを編集できます。';
$_lang["access_permissions_users_in_group"] = 'グループ内ユーザー: ';
$_lang["access_permissions_users_tab"] = '管理画面を扱うユーザのグループと、ウェブページにアクセスする権限を持つユーザのグループは区別されます。ユーザーをグループに参加させるには、個々のユーザー設定で編集する必要があります。※Administrator(ID=1のロールを持つユーザ)は常に全てのリソースにアクセスすることができるため、Administratorをグループに追加する必要はありません。';

$_lang["users_list"] = 'Users list';
$_lang["documents_list"] = 'Resources list';

$_lang["account_email"] = 'メールアドレス';
$_lang["actioncomplete"] = '<strong>処理が正常に完了しました。</strong><br /> - クリーンアップ処理中です。お待ちください。';
$_lang["activity_message"] = '自分が編集したリソースの一覧(最新順に10件まで)';
$_lang["activity_title"] = '最近編集したリソース';

$_lang["administrator_role_message"] = '全ての権限を持つ特権ロール。いくつかの特殊な管理機能が備わっています。通常のコンテンツ管理には向かないためご注意ください。';
$_lang["administrators"] = '管理者のみ(Administrator)';
$_lang["after_saving"] = '更新後は';
$_lang["alert_delete_self"] = '自分自身を削除することはできません。';
$_lang["alias"] = 'エイリアス';
$_lang["all_doc_groups"] = 'グループ制限なし(Public)';
$_lang["all_events"] = '全てのイベント';
$_lang["all_usr_groups"] = '全ユーザーグループ(Public)';
$_lang["allow_mgr_access"] = '管理画面へのアクセス(全域)';
$_lang["allow_mgr_access_message"] = 'このオプションは管理画面へのアクセスをユーザーに許可するかしないかを選択するものです。<br />※このオプションを「いいえ」に設定すると、ユーザーは上記の「ログイン時のリダイレクト先」か、それが空白ならサイトスタートのページへリダイレクトされます。';
$_lang["already_deleted"] = 'はすでに削除されています';
$_lang["attachment"] = 'ファイルとしてダウンロード';
$_lang["author_infos"] = '作成者の情報';
$_lang["automatic_alias_message"] = '「はい」の場合、リソース保存時に自動的にリソース名がエイリアスになります。<br>リソース名が日本語の場合、リソースIDが割り当てられます。';
$_lang["automatic_alias_title"] = 'エイリアス自動生成';
$_lang["backup"] = 'バックアップ';
$_lang["bk_manager"] = 'バックアップ・リストア';
$_lang["block_message"] = '更新後、このユーザーのアカウントは休止状態になります。';
$_lang["blocked_minutes_message"] = '上記の「ログイン失敗を許容する回数」で指定した回数ログインに失敗したユーザーのアカウントをロックする時間を分単位で指定します。必ず数字のみを入力してください。カンマやスペースも使えません。';
$_lang["blocked_minutes_title"] = 'アカウントロックの時間';
$_lang["cache_files_deleted"] = '次のファイルが削除されました';
$_lang["cancel"] = 'キャンセル';
$_lang["captcha_code"] = 'セキュリティコード';
$_lang["captcha_message"] = 'ランダムな文字列を画像で表示し、ユーザーに目視させて入力を求めます。';
$_lang["captcha_title"] = 'CAPTCHAコードを使用';
$_lang["captcha_words_default"] = 'maguro,toro,tako,ika,hotate,awabi,kazunoko,ebi,kani,uni,iwashi,aji,saba,tamago,negitoro,tekka,hamachi,sanma,sake,tai,buri,hirame,unagi,anago,amaebi,ikura,kanpachi,syako';
$_lang["captcha_words_message"] = '「CAPTCHAコードの使用」を「はい」にした場合に使用されるCAPTCHAワードリストを入力してください。CAPTCHAワードはカンマで区切って入力します。このフィールドには、255文字まで入力することができます。';
$_lang["captcha_words_title"] = 'CAPTCHA用ワード';

$_lang["cfg_base_path"] = 'MODX_BASE_PATH';
$_lang["cfg_base_url"] = 'MODX_BASE_URL';
$_lang["cfg_manager_path"] = 'MODX_MANAGER_PATH';
$_lang["cfg_manager_url"] = 'MODX_MANAGER_URL';
$_lang["cfg_site_url"] = 'MODX_SITE_URL';

$_lang["change_name"] = 'ログイン名を変更';
$_lang["change_password"] = 'パスワード変更';
$_lang["change_password_confirm"] = 'パスワードをもう一度';
$_lang["change_password_message"] = 'パスワードの文字数は6～32文字です。';
$_lang["change_password_new"] = '新しいパスワード';
$_lang["charset_message"] = '管理画面で使用したいエンコードを選択できます。設定変更後にconfig.inc.php内のエンコード指定も変更する必要があります。<br />※標準ではUTF-8固定です。選択肢を増やしたい場合はcharsets.phpを編集してください。';
$_lang["charset_title"] = 'システムエンコード';

$_lang["cleaningup"] = 'クリーンアップ処理中';
$_lang["clean_uploaded_filename"] = 'アップロードファイルの名前の扱い';
$_lang["clean_uploaded_filename_message"] = 'アップロードするファイルのファイル名を、transaliasルールを用いて正規化します。';
$_lang["clear_log"] = 'ログをクリア';
$_lang["click_to_context"] = 'クリックするとコンテキストメニュー';
$_lang["click_to_edit_title"] = '編集はここをクリック';
$_lang["click_to_view_details"] = '詳細情報';
$_lang["close"] = '閉じる';
$_lang["code"] = 'コード';
$_lang["collapse_tree"] = 'リソースツリーを縮小';
$_lang["comment"] = '備考';

$_lang["configcheck_admin"] = 'このメッセージをシステム管理者に報告してください。';
$_lang["configcheck_cache"] = 'cache directory is not writable';
$_lang["configcheck_cache_msg"] = 'Evolution CMS cannot write to the cache directory. Evolution CMS will still function as expected, but no caching will take place. To solve this, make the \'cache\' directory writable.';
$_lang["configcheck_configinc"] = '設定ファイルがまだ書き込み可能になっています';
$_lang["configcheck_configinc_msg"] = '設定ファイルが書き込み可能になっているため、悪意の第三者による操作がしやすい状態になっています。 /[+MGR_DIR+]/includes/config.inc.php のパーミッションを404などに設定し、書込み不可にしてください。';
$_lang["configcheck_default_msg"] = '原因不明のエラーが存在します。';
$_lang["configcheck_errorpage_unavailable"] = '設定した「エラーページ」は利用できません';
$_lang["configcheck_errorpage_unavailable_msg"] = '設定した「エラーページ」が一般的なエンドユーザーからアクセスできないページ（private）かあるいは存在しないことを意味しています。この場合、システムがループ状態に陥り、多くのエラーメッセージをエラーログに記録してしまいます。「エラーページ」には存在するページでかつ、公開ページ、かつ「public」なページを指定してください。';
$_lang["configcheck_errorpage_unpublished"] = 'グローバル設定で設定されたエラーページは公開されていません。';
$_lang["configcheck_errorpage_unpublished_msg"] = '設定したエラーページが誰でも見られるようにはなっていないことを意味します。エラーページは全ての人(Public)に公開するようにしてください。';
$_lang["configcheck_filemanager_path"] = '現在設定されている <a href="/[+MGR_DIR+]/?a=17&amp;tab=4">ファイルマネージャーのパス</a>は不完全なようです。';
$_lang["configcheck_filemanager_path_msg"] = '例えば、この問題は異なるディレクトリやサーバーに移動されたことで生じています。Evoのグローバル設定を確認し、更新してください。';
$_lang["configcheck_hide_warning"] = '<a href="javascript:hideConfigCheckWarning(\'%s\');"><em>次からこの警告を表示しない</em></a>';
$_lang["configcheck_images"] = 'images/ディレクトリに書き込みできません';
$_lang["configcheck_images_msg"] = 'images/ディレクトリが書き込み可能でないか、ディレクトリ自体が存在していません。エディターの画像管理機能が動作しません。';
$_lang["configcheck_installer"] = 'インストーラーが残されています';
$_lang["configcheck_installer_msg"] = 'インストーラ(/install/ ディレクトリ)が存在します。アップデートの必要がある場合は<a href="http://modx.jp/docs/update.html" target="_blank">アップデート作業</a>を行なってください。新規インストール後、またはすでにアップデート作業を行なっている場合は、第三者にアップデートを再実行され、不要な機能のインストールなどを行なわれてしまう可能性がありますので、すぐに<a href="index.php?a=31">ディレクトリごと削除</a>してください。';
$_lang["configcheck_lang_difference"] = '言語ファイルのエントリー数が異なります';
$_lang["configcheck_lang_difference_msg"] = '現在選択されている言語ファイルのエントリー数がデフォルト言語ファイル(英語)のエントリー数と異なるため、一部が英語で表示されます。日本語で表示したい場合は、最新の言語ファイルを入手しアップデートする必要があります。';
$_lang["configcheck_notok"] = '動作環境に問題があります。';
$_lang["configcheck_ok"] = '問題なし - 警告はありません。';
$_lang["configcheck_php_gdzip"] = 'GDライブラリが読み込まれてません。';
$_lang["configcheck_php_gdzip_msg"] = 'このサーバでは<a href="http://www.google.com/search?q=gd+%22php.ini%22&lr=lang_ja" target="_blank">GDライブラリ</a>が読み込まれてません。<a href="http://www.google.com/cse?cx=007286147079563201032%3Aigbcdgg0jyo&ie=UTF-8&q=CAPTCHA&sa.x=26&sa.y=8&siteurl=http:%2F%2Fforum.modx.jp%2F" target="_blank">ログイン時の画像認証機能(CAPTCHA)</a>など画像まわりの処理に制限があります。';
$_lang["configcheck_rb_base_dir"] = '現在の設定している <a href="/[+MGR_DIR+]/#?a=17&amp;tab=5">ファイルのベースパス</a> は不完全のようです。';
$_lang["configcheck_rb_base_dir_msg"] = '例えば、この問題は異なるディレクトリやサーバーに移動されたことで生じています。グローバル設定を確認し、更新してください。';
$_lang["configcheck_register_globals"] = '「register_globals」が「ON」に設定されており、セキュリティ上問題があります。';
$_lang["configcheck_register_globals_msg"] = 'register_globals がonになっているため、この環境は非常に脆弱です。.htaccessまたはphp.iniによって off にすることを強くおすすめします。';
$_lang["configcheck_title"] = '設定チェック';
$_lang["configcheck_templateswitcher_present"] = 'テンプレートスウィッチャーが見つかりました';
$_lang["configcheck_templateswitcher_present_delete"] = '<a href="javascript:deleteTemplateSwitcher();">テンプレートスウィッチャーを削除</a>';
$_lang["configcheck_templateswitcher_present_disable"] = '<a href="javascript:disableTemplateSwitcher();">テンプレートスウィッチャーを無効にする</a>';
$_lang["configcheck_templateswitcher_present_msg"] = 'The TemplateSwitcher plugin has been found to cause caching and performance problems, and should be used only the functionality is required in your site.';
$_lang["configcheck_unauthorizedpage_unavailable"] = '「権限外告知のページ」が公開されていないか、存在しません';
$_lang["configcheck_unauthorizedpage_unavailable_msg"] = '設定した「権限外告知のページ」が一般的なエンドユーザーからアクセスできないページ（private）かあるいは存在しないことを意味しています。システムがループ状態に陥り、多数のエラーをエラーログに蓄積します。権限フリーの公開ページを「権限外告知のページ」に指定してください。';
$_lang["configcheck_unauthorizedpage_unpublished"] = 'グローバル設定で設定された権限外告知のページは公開されていません。';
$_lang["configcheck_unauthorizedpage_unpublished_msg"] = '設定した権限外告知のページが誰でも見られるようにはなっていないことを意味します。権限外告知ページは全ての人「Public」に公開するようにしてください。';
$_lang["configcheck_validate_referer"] = 'セキュリティ警告: 参照元チェックの設定';
$_lang["configcheck_validate_referer_msg"] = '<a href="index.php?a=17">グローバル設定</a>の<strong>「管理画面のリファラチェック」</strong>がオフになっています。セキュリティ強化のためオンにすることをおすすめします。<br /><a href="javascript:hideHeaderVerificationWarning();"><em>今後この警告を表示しない</em></a>';
$_lang["configcheck_warning"] = '警告';
$_lang["configcheck_what"] = 'どういう意味ですか?';

$_lang["safe_mode_warning"] = 'Safe mode is enabled. Manager functionality is limited.';

$_lang["confirm_block"] = 'このアカウントを休止してもよろしいですか?';
$_lang["confirm_delete_category"] = 'このカテゴリーを削除してもよろしいですか?';
$_lang["confirm_delete_eventlog"] = 'このログエントリーを削除してもよろしいですか?';
$_lang["confirm_delete_file"] = 'このファイルを削除してもよろしいですか?';
$_lang["confirm_delete_group"] = 'このグループを削除してもよろしいですか?';
$_lang["confirm_delete_htmlsnippet"] = 'このチャンクを削除してもよろしいですか?';
$_lang["confirm_delete_keywords"] = 'これらのキーワードを削除してもよろしいですか?';
$_lang["confirm_delete_module"] = 'このモジュールを削除してもよろしいですか?';
$_lang["confirm_delete_plugin"] = 'このプラグインを削除してもよろしいですか?';
$_lang["confirm_delete_record"] = 'このレコードを削除してもよろしいですか?';
$_lang["confirm_delete_resource"] = 'このリソースを削除してもよろしいですか?\n同時にサブリソースも全て削除されます。';
$_lang["confirm_delete_role"] = 'このロールを削除してもよろしいですか?';
$_lang["confirm_delete_snippet"] = 'このスニペットを削除してもよろしいですか?';
$_lang["confirm_delete_tags"] = 'このMETAタグを削除してもよろしいですか?';
$_lang["confirm_delete_template"] = 'このテンプレートを削除してもよろしいですか?';
$_lang["confirm_delete_tmplvars"] = 'このテンプレート変数と記録されている値を全て削除してもよろしいですか?';
$_lang["confirm_delete_user"] = 'このユーザーを削除してもよろしいですか?';

$_lang["delete_yourself"] = '自分自身を削除できません。';
$_lang["delete_last_admin"] = '最後の権限ユーザーは削除できません。';

$_lang["confirm_delete_permission"] = 'このパーミッションを削除してもよろしいですか?';
$_lang["confirm_duplicate_record"] = 'このレコードを複製してもよろしいですか?';
$_lang["confirm_empty_trash"] = '全ての削除済みリソースを完全に消去します。';
$_lang["confirm_load_depends"] = '変更を更新せずに「関連付けの管理」画面をロードしてもよろしいですか?';
$_lang["confirm_name_change"] = 'ログイン名を変更すると、ログイン名にリンクする他のプログラム(スニペット・モジュールなど)に影響が及ぶ場合があります。 \n\n 本当にログイン名を変更してよろしいですか?';
$_lang["confirm_publish"] = '\n\n「公開開始日時」「公開終了日時」の設定を無視して公開します。それぞれの値は消去されます。';
$_lang["confirm_remove_locks"] = '他ユーザーが編集操作を正常に終了しなかったため残されたロックを全て解除します。\n\n続けますか?';
$_lang["confirm_reset_sort_order"] = '本当に全ての一覧にあるエレメントの順序を0にリセットしてもよろしいですか?';
$_lang["confirm_resource_duplicate"] = 'このリソースを複製してもよろしいですか？配下のリソースも複製されます。';
$_lang["confirm_setting_language_change"] = '変更を破棄し、システムの既定値に戻します。';
$_lang["confirm_unblock"] = 'このアカウントの休止を解除します。';
$_lang["confirm_undelete"] = '\n\n削除したリソースを復活します。連動して削除されたサブリソースがある場合は、それらもまとめて復活します。\n個別に削除したサブリソースは復旧しません。';
$_lang["confirm_unpublish"] = '\n\n「公開開始日時」「公開終了日時」の設定を無視して非公開にします。それぞれの値は消去されます。';
$_lang["confirm_unzip_file"] = 'このファイルを解凍してよろしいですか?\n\nすでにあるファイルは上書きされます。';

$_lang["could_not_find_user"] = 'ユーザーが見つかりません';

$_lang["create_folder_here"] = 'コンテナの作成';
$_lang["create_resource_here"] = 'サブリソースを追加';
$_lang["create_resource_title"] = 'リソースを投稿';
$_lang["create_weblink_here"] = 'ウェブリンクを作成';
$_lang["createdon"] = '作成日時';
$_lang["create_new"] = '新しく作成';

$_lang["credits"] = '著作権表示/謝辞';
$_lang["credits_shouts_msg"] = '<p>EVOは<a href="http://evo.im/" target="_blank">evo.im</a>で管理とメンテナンスがされています。</p>';
$_lang["custom_contenttype_message"] = 'リソースが使用するコンテントタイプに独自のタイプを追加できます。新しいタイプを追加するにはテキストボックスに入力して「追加」ボタンをクリックします。';
$_lang["custom_contenttype_title"] = 'カスタムコンテントタイプ';

$_lang["database_charset"] = 'データベース文字コード';
$_lang["database_collation"] = '照合順序';
$_lang["database_name"] = 'データベース名';
$_lang["database_overhead"] = '<strong style="color:#990033">注:</strong>オーバーヘッドは、更新処理の際に発生する不要な領域です。オーバーヘッドの数字をクリックすると、この領域を消去します';
$_lang["database_server"] = 'データベースサーバー';
$_lang["database_table_clickbackup"] = '選択したテーブルをバックアップ・ダウンロード';
$_lang["database_table_clickhere"] = 'ここをクリック';
$_lang["database_table_datasize"] = 'データサイズ';
$_lang["database_table_droptablestatements"] = 'DROP文を生成(※推奨)';
$_lang["database_table_effectivesize"] = '有効サイズ';
$_lang["database_table_indexsize"] = 'インデックス';
$_lang["database_table_overhead"] = 'オーバーヘッド';
$_lang["database_table_records"] = '件数';
$_lang["database_table_tablename"] = 'テーブル名';
$_lang["database_table_totals"] = '総計';
$_lang["database_table_totalsize"] = '合計サイズ';
$_lang["database_tables"] = 'テーブル一覧';
$_lang["database_version"] = 'データベースのバージョン';

$_lang["date"] = '日付';
$_lang["datechanged"] = '更新日時';
$_lang["datepicker_offset"] = 'デートピッカーオフセット:';
$_lang["datepicker_offset_message"] = 'デートピッカー(カレンダー)で参照・選択できる過去年数(※日付情報は手入力で書き換えることもできます)';
$_lang["datetime_format"] = '日時の書式';
$_lang["datetime_format_message"] = '管理画面内で使用する日時の書式を選択してください。';

$_lang["default"] = '既定値';
$_lang["defaultcache_message"] = 'リソース新規作成時のキャッシュ設定をデフォルトで有効にする場合は「はい」を選択してください。';
$_lang["defaultcache_title"] = 'デフォルトでキャッシュを有効';
$_lang["defaultmenuindex_message"] = '「はい」を選択すると、リソースを新規に作成する時にメニューオーダーの値が自動的に増分します。';
$_lang["defaultmenuindex_title"] = 'メニューオーダー<br />自動増分';
$_lang["defaultpublish_message"] = '新しく作成するリソースをデフォルトで公開に設定する場合は「はい」を選択してください。';
$_lang["defaultpublish_title"] = '公開デフォルト';
$_lang["defaultsearch_message"] = '新しく作成するリソースをデフォルトで検索対象とする場合は「はい」を選択してください。';
$_lang["defaultsearch_title"] = '検索可能デフォルト';
$_lang["defaulttemplate_message"] = '新規に作成するリソースのデフォルトテンプレートを指定します。テンプレートはリソース単位で自由に選択できます。';
$_lang["defaulttemplate_title"] = 'デフォルトテンプレート';
$_lang["defaulttemplate_logic_title"] = 'デフォルトテンプレート';
$_lang["defaulttemplate_logic_general_message"] = 'リソース新規作成時のテンプレートの初期設定。';
$_lang["defaulttemplate_logic_system_message"] = '<strong>グローバル</strong>: ここで設定したテンプレートを無条件に初期設定として選択します。';
$_lang["defaulttemplate_logic_parent_message"] = '<strong>ペアレント</strong>: 親リソースのテンプレートを継承します。';
$_lang["defaulttemplate_logic_sibling_message"] = '<strong>シブリング</strong>: 同じ階層内の他のリソースの設定に合わせます。混在する場合はメニューオーダー順が若いリソースの設定を適用します。';

$_lang["delete"] = '削除';
$_lang["delete_resource"] = '削除する';
$_lang["delete_tags"] = 'タグを削除';
$_lang["deleting_file"] = '「 %s 」の削除:';
$_lang["description"] = '説明';
$_lang["deselect_keywords"] = 'キーワードの選択解除';
$_lang["deselect_metatags"] = 'METAタグをクリア';
$_lang["disabled"] = '停止';
$_lang["doc_data_title"] = 'リソースの詳細情報';
$_lang["documentation"] = '参考ドキュメント';

$_lang["duplicate"] = '複製';
$_lang["duplicate_alias_found"] = 'リソース「%s」が「%s」というエイリアスをすでに使用しています。エイリアスを変更してください。';
$_lang["duplicate_template_alias_found"] = 'テンプレート「%s」が 「%s」というエイリアスをすでに使用しています。エイリアスを変更してください。';
$_lang["duplicate_alias_message"] = '同じ階層内でエイリアス名の重複を許可します。この場合、エイリアス名をURL表現に用いると問題が発生する可能性があるため、ご注意ください。';
$_lang["duplicate_alias_title"] = '重複エイリアスを許可';
$_lang["duplicate_name_found_general"] = '%sにはすでに「%s」という名前が存在します。重複しない名前を指定してください。';
$_lang["duplicate_name_found_module"] = 'すでに「%s」という名前が存在します。重複しない名前を指定してください。';
$_lang["duplicated_el_suffix"] = '複製';

$_lang["edit"] = '編集';
$_lang["edit_resource"] = 'リソースを編集';
$_lang["edit_resource_title"] = 'リソースの作成・編集';
$_lang["edit_settings"] = 'グローバル設定';
$_lang["editedon"] = '更新日時';
$_lang["editing_file"] = 'ファイルを編集:';
$_lang["editor_css_path_message"] = 'RTE(リッチテキストエディター)で使用するCSSファイルのパスを入力します。例えば「/template/style.css」とします。もしRTEデフォルトの状態でよければ、このフィールドは空白にしておきます。';
$_lang["editor_css_path_title"] = 'CSSファイルへのパス';

$_lang["email"] = 'メールアドレス';
$_lang["email_sent"] = 'パスワード再発行メールを送信しました。';
$_lang["email_unique"] = 'このメールアドレスはすでに使用されています!';
$_lang["emailsender_message"] = 'このサイトからメールを送信する場合の「送信元メールアドレス」を指定してください。<br />コンフィグ変数：[(emailsender)]';
$_lang["emailsender_title"] = '送信者メールアドレス';
$_lang["emailsubject_default"] = 'サイトからのお知らせ';
$_lang["emailsubject_message"] = 'サインアップメールの件名を指定してください。';
$_lang["emailsubject_title"] = 'メール件名';

$_lang["empty_folder"] = 'このコンテナは空です';
$_lang["empty_recycle_bin"] = '削除済みリソースを消去';
$_lang["empty_recycle_bin_empty"] = '消去するための削除済みリソースがありません。';
$_lang["enable_resource"] = '外部ファイルを有効に';
$_lang["enable_sharedparams"] = 'パラメータを共有';
$_lang["enable_sharedparams_msg"] = '<strong>注意:</strong>GUID(globally unique id)はこのモジュールとその共有パラメータを一意に識別するために用いられます。GUIDは、モジュールと、共有パラメータにアクセスするプラグインやスニペットとの間のリンクにも用いられます。';
$_lang["enabled"] = '有効';
$_lang["error"] = 'エラー';
$_lang["error_sending_email"] = 'メール送信中にエラー';
$_lang["errorpage_message"] = 'リソースが存在しない場合のエラーページ(404 ページ)として表示する、リソースのIDを入力してください。<br /><strong>※非公開またはウェブユーザ限定のリソースは指定できません。</strong>';
$_lang["errorpage_title"] = 'エラーページ';
$_lang["event_id"] = 'イベントID';
$_lang["eventlog"] = 'イベントログ';
$_lang["eventlog_msg"] = 'イベントログはEVOのシステムが出力する告知・警告・エラーの各メッセージを記録するものです。';
$_lang["eventlog_viewer"] = 'イベントログ';
$_lang["everybody"] = '全メンバー';
$_lang["existing_category"] = '既存のカテゴリー';
$_lang["expand_tree"] = 'リソースツリーを展開';
$_lang["failed_login_message"] = 'ログイン失敗を許容する回数を設定します。ここで設定した回数を超えると一定時間ロックされログインできなくなります。';
$_lang["failed_login_title"] = 'ログイン失敗を許容する回数';
$_lang["fe_editor_lang_message"] = 'フロントエンドエディターで用いるリッチテキストエディターの言語を選んでください。';
$_lang["fe_editor_lang_title"] = 'フロントエンドエディターの言語';

$_lang["filemanager_path_message"] = '<a href="index.php?a=31">「ファイル管理」</a>で扱える範囲を決定します。コンテンツ編集に利用するファイルブラウザと違い、同じサーバ内で権限を持つ領域であればどのディレクトリでも管理できます。ドキュメントルート外の指定も可能です。';
$_lang["filemanager_path_title"] = 'ファイル管理機能の<br />管理対象ディレクトリ';

$_lang["folder"] = 'コンテナ';
$_lang["forgot_password_email_fine_print"] = '注意：上記のURLは、パスワード変更後または日付が変わると無効になります。';
$_lang["forgot_password_email_instructions"] = 'そのページの「パスワード変更」メニューからパスワードを変更することができます。';
$_lang["forgot_password_email_intro"] = 'アカウントへのパスワード変更リクエストを受け付けました。';
$_lang["forgot_password_email_link"] = '処理を完了するためここをクリックしてください。';
$_lang["forgot_your_password"] = 'パスワードを忘れた場合はこちら';
$_lang["friendly_alias_message"] = 'フレンドリーURLを使用して、かつリソースがエイリアスを持つ場合、URL表現にエイリアスを用います。このオプションを「はい」に設定することで、フレンドリーURLのプレフィックスとサフィックスもエイリアスに適用されます。例えば、リソースのIDが1、エイリアスが「introduction」、プレフィックスが「」(空白)、サフィックスが「.html」の場合、このオプションを「はい」にすると、URLは「introduction.html」となります。 エイリアスを設定していない場合は、EVOが「1.html」というリンクを生成します。';
$_lang["friendly_alias_title"] = 'エイリアスを使用';
$_lang["friendlyurls_message"] = 'EVO設置ディレクトリのsample.htaccessを.htaccessとしてリネームしてください。フレンドリーURL機能が動作しない場合は.htaccessをテキストエディタで開いて、コメントアウトされている「Options +FollowSymlinks」の記述を有効にしてみてください。';
$_lang["friendlyurls_title"] = 'フレンドリーURLを使用';
$_lang["friendlyurlsprefix_message"] = 'フレンドリーURLのプレフィックスを指定してください。例えばプレフィックスを「page」に設定した場合、URLの /index.php?id=2 は、 /page2.htmlというフレンドリーURLに変換されます(サフィックスが .htmlに設定されていると仮定)。';
$_lang["friendlyurlsprefix_title"] = 'プレフィックス';
$_lang["friendlyurlsuffix_message"] = 'フレンドリーURLのサフィックスを指定してください。例えば「.html」と指定すると、全てのフレンドリーURLの末尾に .htmlを追加します。';
$_lang["friendlyurlsuffix_title"] = 'サフィックス';
$_lang["functionnotimpl"] = 'まだ実装されていない機能';
$_lang["functionnotimpl_message"] = 'この機能は、まだ実装されていません';
$_lang["further_info"] = 'さらなる詳細は';
$_lang["global_tabs"] = 'グローバルタブ';
$_lang["go"] = '実行';
$_lang["group_access_permissions"] = 'ユーザーグループのアクセス';
$_lang['group_tvs'] = 'テンプレート変数をグループ化';
$_lang["guid"] = 'GUID';
$_lang["help"] = 'ヘルプ';
$_lang["help_msg"] = '<p><a href="http://forum.modx.jp/" target="_blank">EVO日本公式フォーラム</a>でサポートを得ることができます。 また、逐次執筆が進められている<a href="http://www.evolution-docs.com/documentation/" target="_blank">EVOドキュメントとガイド（英語）</a>があり、EVO のほぼすべてに関して記されています。</p>';
$_lang["help_title"] = 'サポート';
$_lang["hide_tree"] = 'リソースツリーを非表示';
$_lang["home"] = 'ダッシュボード';

$_lang["icon"] = 'アイコン';
$_lang["icon_description"] = 'CSSのclassの値（例：fa&nbsp;fa-star）';
$_lang["id"] = 'ID';
$_lang["illegal_parent_child"] = '親リソースの指定:\n\nリソースは選択リソースのサブリソースです。';
$_lang["illegal_parent_self"] = '親リソースの指定:\n\n自分自身を親に割り当てることはできません。';
$_lang["images_management"] = '画像の管理';
$_lang["import_files_found"] = '<b>インポート対象のリソースが %s個あります。</b>';
$_lang["import_params"] = 'パラメータの関連付け';
$_lang["import_params_msg"] = 'ドロップダウンメニューからモジュール名を選択することにより、モジュール側から設定値を与えることができます。<br />※対象モジュール側で共有パラメータの設定と関連付けをしておく必要があります。';
$_lang["import_parent_resource"] = '親リソース';
$_lang["update_tree"] = 'ツリーの再構築';
$_lang["update_tree_description"] = '<ul>
<li>Closure table database design pattern that makes working with the document tree more convenient and fast </li>
<li>If the data in the tree is updated not through models, then there is a possibility of an incorrect linking of documents in the database </li>
<li>This operation fixes the problem when site_content is not updated through the model (save, create) and the links (Closure table) are not updated </li>
<li>It is also possible to perform this operation in CLI mode via the \'php artisan closuretable: rebuild\' command </li>
</ul>';
$_lang["update_tree_danger"] = '1000以上のリソースがある場合、CLIモード（\'php artisan closuretable: rebuild command\'）による操作で実行する方が良いです。';
$_lang["update_tree_time"] = 'ツリーの再構築が終了しました。ドキュメント処理: <b>%s</b><br>インポートに <b>%s</b> 秒かかりました。';
$_lang["info"] = '情報';
$_lang["information"] = '情報';
$_lang["inline"] = 'ブラウザ内に通常表示';
$_lang["insert"] = '挿入';
$_lang["maxImageWidth"] = '最大の画像幅';
$_lang["maxImageHeight"] = '最大の画像高さ';
$_lang["clientResize"] = 'クライアント側で画像をリサイズします';
$_lang["clientResize_message"] = '「はい」の場合、画像はサーバーにアップロードする前にブラウザーによってリサイズされます。';
$_lang["noThumbnailsRecreation"] = 'アップロード時にサムネイルを作成する';
$_lang["noThumbnailsRecreation_message"] = 'ファイルブラウザーはアップロード時にサムネイルを作成します。画像のサムネイルがない場合は作成されません。';
$_lang["thumbWidth"] = '最大のサムネイル画像幅';
$_lang["thumbHeight"] = '最大のサムネイル画像高さ';
$_lang["thumbsDir"] = 'サムネイルディレクトリの場所';
$_lang["jpegQuality"] = 'JPEG 圧縮';
$_lang["denyZipDownload"] = 'zip アーカイブでのダウンロードを無効にする';
$_lang["denyExtensionRename"] = 'ファイル拡張子の変更を禁止する';
$_lang["maxImageWidth_message"] = 'アップロードされた画像が設定している値を超えた場合、自動的にリサイズされます。0に設定すると回避されます。';
$_lang["maxImageHeight_message"] = 'アップロードされた画像が設定している値を超えた場合、自動的にリサイズされます。0に設定すると回避されます。';
$_lang["thumbWidth_message"] = 'サムネイル画像の最大幅です。';
$_lang["thumbHeight_message"] = 'サムネイル画像の最大高さです。';
$_lang["thumbsDir_message"] = 'サムネイルを保管するディレクトリ名です。';
$_lang["jpegQuality_message"] = 'JPEG 圧縮をしたサムネイルとリサイズした画像の画質です。';
$_lang["showHiddenFiles"] = '隠しファイルを表示';
$_lang["keyword"] = 'キーワード';
$_lang["keywords"] = 'キーワード';
$_lang["keywords_intro"] = 'キーワードを編集するには変更したいキーワードの隣のテキストエリアに新しいキーワードを入力するだけです。キーワードを削除するにはキーワードの削除チェックボックスをチェックします。';
$_lang["language_message"] = '管理画面の使用言語を選択します。必ず「サイト→エンコード」の設定と合わせてください。';
$_lang["language_title"] = '管理画面の言語';
$_lang["last_update"] = '最終更新';
$_lang["launch_site"] = 'サイトを表示';
$_lang["license"] = 'ライセンス';
$_lang["link_attributes"] = 'リンク属性';
$_lang["link_attributes_help"] = 'このページ内の任意のリンクの属性を管理します。

例：target=&quot;_blank&quot; ・rel=&quot;lightbox&quot;
リソース変数：[*link_attributes*]

※この変数はリンクの属性を管理するための特別な機能を持っていないので、他の用途に流用することもできます。';
$_lang["list_mode"] = 'リストモードのON/OFF - グリッドに全てのレコードをリストするために使われます。';
$_lang["loading_doc_tree"] = 'リソースツリーのローディング中';
$_lang["loading_menu"] = 'メニューをローディング中';
$_lang["loading_page"] = 'ページを読み込み中';
$_lang["localtime"] = 'ローカル時刻';

$_lang["lock_htmlsnippet"] = 'チャンクの編集をロック';
$_lang["lock_htmlsnippet_msg"] = 'ロール設定権限を持つメンバーのみ編集可能とします。';
$_lang["lock_module"] = 'モジュールをロック';
$_lang["lock_module_msg"] = 'ロール設定権限を持つメンバーのみ編集可能とします。';
$_lang["lock_msg"] = '%s さんが %s を編集中です。作業が終わるまで待つか、ロックを解除してください。';
$_lang["lock_plugin"] = 'プラグインをロック';
$_lang["lock_plugin_msg"] = 'ロール設定権限を持つメンバーのみ編集可能とします。';
$_lang["lock_settings_msg"] = '%s が設定を編集中です。他のユーザーが終了するまでしばらくお待ちください。';
$_lang["lock_snippet"] = 'スニペットをロック';
$_lang["lock_snippet_msg"] = 'ロール設定権限を持つメンバーのみ編集可能とします。';
$_lang["lock_template"] = 'テンプレートの編集をロック';
$_lang["lock_template_msg"] = 'ロール設定権限を持つメンバーのみ編集可能とします。';
$_lang["lock_tmplvars"] = '変数をロック';
$_lang["lock_tmplvars_msg"] = 'ロール設定権限を持つメンバーのみ編集可能とします。';
$_lang["locked"] = 'ロック中';

$_lang["login_allowed_days"] = '曜日制限';
$_lang["login_allowed_days_message"] = 'このユーザーがログインできる曜日を選択してください(※何も選択しない場合は制限なし)';
$_lang["login_allowed_ip"] = 'IPアドレス制限';
$_lang["login_allowed_ip_message"] = 'このユーザーがログインできるIPアドレスを入力してください。<br /><strong>注意: 複数のIPアドレスの場合はカンマ(,)で区切ってください</strong>';
$_lang["login_button"] = 'ログイン';
$_lang["login_cancelled_install_in_progress"] = 'このサイトは、現在アップデートまたはインストール作業中です。<br />しばらく経ってからもう一度ログインしてください。<br />※アップデートの失敗が原因の場合は5分後にロックが解除されます。';
$_lang["login_cancelled_site_was_updated"] = 'このサイトはアップデートが実行されました。ログインし直してください。<br />';
$_lang["login_captcha_message"] = '画像で表示されるセキュリティコードを入力してください。セキュリティコードが読めない場合は画像をクリックすると画像は再生成されます。もしくはサイト管理者に連絡をお願います。';
$_lang["login_homepage"] = 'ログイン後に表示するページ';
$_lang["login_homepage_message"] = 'ログインしたウェブユーザーに対して表示するリソースのIDを入力してください。<br /><strong>※非公開のリソースは指定できません。また該当ユーザーがアクセス権限をもつリソースに限ります。</strong>';
$_lang["login_message"] = 'ログイン名とパスワードは大文字・小文字を区別します。';
$_lang["logo_slogan"] = 'EVO Content Manager - \nCreate and do more with less';
$_lang["logout"] = 'ログアウト';
$_lang["long_title"] = 'タイトル';

$_lang["manager"] = '管理画面';
$_lang["manager_lockout_message"] = '管理画面にログインしています。セッションを閉じたいときは「ログアウト」ボタンをクリックしてください。<br />管理画面のホームあるいはスタート画面に行きたいときは「ホーム」ボタンをクリックします。';
$_lang["manager_permissions"] = 'グループ管理';
$_lang["manager_theme"] = '管理画面のテーマ';
$_lang["manager_theme_message"] = '管理画面で使用するデザインテーマを選択してください。';
$_lang["manager_theme_mode"] = '管理画面のカラースキーム';
$_lang["manager_theme_mode1"] = '全て明るくする';
$_lang["manager_theme_mode2"] = 'ヘッダーを暗くする';
$_lang["manager_theme_mode3"] = 'ヘッダーとサイドバーを暗くする';
$_lang["manager_theme_mode4"] = '全て暗くする';
$_lang['manager_theme_mode_message'] = 'この設定は「デフォルト」として使用されます。また、リソースツリーにあるテーマのカラーモード変更ボタンを使うことで上書き可能です。: <i class="fa fa-lg fa-adjust"></i>';
$_lang['manager_theme_mode_title'] = 'テーマカラーモードのスイッチ';

$_lang["meta_keywords"] = 'METAタグ';
$_lang["metatag_intro"] = 'METAタグの作成や削除、編集を行います。リソースとMETAタグをリンクするにはリソースの編集中にMETA キーワードタブをクリックします。そして目的とするMETAタグとキーワードを選択します。新しいタグを追加するには、その名前と値を入力して「タグ追加」ボタンをクリックします。タグを編集するにはデータグリッド中のタグ名をクリックします。';
$_lang["metatag_notice"] = 'METAタグに関しての詳細は<a href="http://www.google.com/search?q=%22META%E3%82%BF%E3%82%B0%22" target="_blank">こちら</a>を参照してください。';
$_lang["metatags"] = 'METAタグ';
$_lang["mgr_access_permissions"] = 'グループ管理(管理操作グループ)';
$_lang["mgr_login_start"] = 'ログイン時のリダイレクト先';
$_lang["mgr_login_start_message"] = 'ユーザーが管理画面にログインしたとき、リダイレクトしたいリソースのIDを入力します。<br /><strong>※非公開のリソースは指定できません。また該当ユーザーがアクセス権限をもつリソースに限ります。</strong>';

$_lang["mgrlog_action"] = 'アクション';
$_lang["mgrlog_actionid"] = 'アクションID';
$_lang["mgrlog_anyall"] = '全て';
$_lang["mgrlog_datecheckfalse"] = 'checkdate() で誤りを検出しました。';
$_lang["mgrlog_datefr"] = 'この日付から';
$_lang["mgrlog_dateinvalid"] = '日付の形式が正しくありません。';
$_lang["mgrlog_dateto"] = 'この日付まで';
$_lang["mgrlog_emptysrch"] = 'この問合せの結果は空でした。（マッチするログエントリーが無かったということです）';
$_lang["mgrlog_field"] = '分類';
$_lang["mgrlog_itemid"] = '操作対象のID';
$_lang["mgrlog_itemname"] = '操作対象名';
$_lang["mgrlog_msg"] = 'アクション(文字列)';
$_lang["mgrlog_noquery"] = '検索されていません。';
$_lang["mgrlog_qresults"] = '結果';
$_lang["mgrlog_query"] = 'ログの検索';
$_lang["mgrlog_query_msg"] = '管理画面の操作履歴に対する検索条件を指定します。日付の条件指定は、「以上」「未満」です。';
$_lang["mgrlog_results"] = 'ページあたりの表示件数';
$_lang["mgrlog_searchlogs"] = '検索の履歴';
$_lang["mgrlog_sortinst"] = '各列のヘッダをクリックすると表示順を変更できます。ログが溜まってきたときには、<a href="index.php?a=55">empty</a> をクリックすることでログを全部消去できます。 この操作は即実行され元に戻せません。';
$_lang["mgrlog_time"] = '時刻';
$_lang["mgrlog_user"] = 'ユーザー';
$_lang["mgrlog_username"] = 'ユーザー名';
$_lang["mgrlog_value"] = '値';
$_lang["mgrlog_view"] = '管理操作ログを見る';

$_lang["modx_news"] = 'EVOの最新情報';
$_lang["modx_news_tab"] = 'EVOの最新情報';
$_lang["modx_news_title"] = 'EVOの最新情報';
$_lang["modx_security_notices"] = 'EVO セキュリティ情報';
$_lang["modx_version"] = 'EVOバージョン';

$_lang["name"] = '名前';

$_lang["no"] = 'いいえ';
$_lang["no_active_users_found"] = '管理画面にログインしているメンバーはいません。';
$_lang["no_activity_message"] = 'まだリソースを作成または編集していません。';
$_lang["no_category"] = 'カテゴリーなし';
$_lang["no_docs_pending_publishing"] = '公開を予定しているリソースはありません。';
$_lang["no_docs_pending_pubunpub"] = 'イベントはありません';
$_lang["no_docs_pending_unpublishing"] = '公開取り消しを予定しているリソースはありません。';
$_lang["no_edits_creates"] = '最近作成または編集したリソースはありません。';
$_lang["no_groups_found"] = 'グループが存在しません。';
$_lang["no_keywords_found"] = 'キーワードはありません';
$_lang["no_records_found"] = 'レコードはありません。';
$_lang["no_results"] = '何もありません';
$_lang["nologentries_message"] = '<a href="index.php?a=13">管理操作ログ</a>閲覧時、1ページあたりに表示されるログエントリー数を入力してください。';
$_lang["nologentries_title"] = 'ログエントリー数';
$_lang["none"] = 'なし';
$_lang["noresults_message"] = '管理画面内の各機能の検索結果の一覧で、ページあたり何件表示するかを指定してください。';
$_lang["noresults_title"] = '結果の件数';
$_lang["not_deleted"] = 'は削除されていません';
$_lang["not_set"] = '設定なし';

$_lang["offline"] = 'メンテナンスモード';

$_lang["online"] = 'オンライン';
$_lang["onlineusers_action"] = 'アクション';
$_lang["onlineusers_actionid"] = 'ID';
$_lang["onlineusers_ipaddress"] = 'IPアドレス';
$_lang["onlineusers_lasthit"] = '最終アクセス';
$_lang["onlineusers_message"] = '現在(直近20分以内)管理画面にログインしているユーザーの一覧です。(現在時刻';
$_lang["onlineusers_title"] = 'オンラインユーザー';
$_lang["onlineusers_user"] = 'ユーザー';
$_lang["onlineusers_userid"] = 'ユーザーID';

$_lang["optimize_table"] = 'このテーブルを最適化するにはここをクリック';

$_lang["page_data_alias"] = 'エイリアス';
$_lang["page_data_cacheable"] = 'キャッシュ制御を行なう';
$_lang["page_data_cacheable_help"] = 'このページ全体をキャッシュ制御の対象とします。ただしリソース中のスニペットコールの記述が[!xxxxx!]形式になっている場合は、その部分はキャッシュを通さず常に動的に処理・出力します。';
$_lang["page_data_cached"] = '<strong>ソース(ページキャッシュの中身です)</strong>';
$_lang["page_data_changes"] = '編集履歴';
$_lang["page_data_contentType"] = 'コンテントタイプ';
$_lang["page_data_contentType_help"] = 'このリソースのコンテントタイプを選択してください。コンテントタイプが分からない場合は、通常のWebページを意味するtext/htmlのままにしてください。';
$_lang["page_data_created"] = '作成日時';
$_lang["page_data_edited"] = '更新日時';
$_lang["page_data_editor"] = 'リッチテキストエディターを使用';
$_lang["page_data_folder"] = 'コンテナ';
$_lang["page_data_general"] = '概要';
$_lang["page_data_markup"] = 'マークアップ/構造';
$_lang["page_data_mgr_access"] = '管理画面からアクセス';
$_lang["page_data_notcached"] = 'このリソースは、まだキャッシュされていません。';
$_lang["page_data_publishdate"] = '公開開始日時';
$_lang["page_data_publishdate_help"] = '公開日時を設定した場合、リソースは公開日時の到来と共に公開されます。この設定は「公開ステータス」よりも優先されます。';
$_lang["page_data_published"] = '公開';
$_lang["page_data_searchable"] = '検索対象に含める';
$_lang["page_data_searchable_help"] = 'このフィールドをチェックすることにより、リソースを検索対象にします。このフィールドをスニペット内で別の目的に使用することもできます。';
$_lang["page_data_source"] = 'ソース';
$_lang["page_data_status"] = 'ステータス';
$_lang["page_data_template"] = '使用テンプレート';
$_lang["page_data_template_help"] = 'このリソースが使用するテンプレートを選択してください。';
$_lang["page_data_title"] = 'ページデータ';
$_lang["page_data_unpublishdate"] = '公開終了日時';
$_lang["page_data_unpublishdate_help"] = '公開終了日時を設定すると、公開終了日時を迎えた時点でリソースが非公開状態に戻ります。この設定は「公開ステータス」よりも優先されます。';
$_lang["page_data_unpublished"] = '非公開';
$_lang["page_data_web_access"] = 'ウェブからアクセス';

$_lang["pagetitle"] = 'リソース名';
$_lang["pagination_table_first"] = '先頭';
$_lang["pagination_table_gotopage"] = 'ページ';
$_lang["pagination_table_last"] = '最後';
$_lang["paging_first"] = '先頭';
$_lang["paging_last"] = '最後';
$_lang["paging_next"] = '次へ';
$_lang["paging_prev"] = '前へ';
$_lang["paging_showing"] = '表示対象：';
$_lang["paging_to"] = 'から';
$_lang["paging_total"] = '(トータル)';
$_lang["parameter"] = 'パラメータ';
$_lang["parse_docblock"] = 'DocBlock パーサー';
$_lang["parse_docblock_msg"] = '注意 (!): ソースコードをパースすることでプラグイン名、設定、説明、カテゴリーをインストール時のデフォルトに<b>リセット</b>します。';

$_lang["password"] = 'パスワード';
$_lang["password_change_request"] = 'パスワード変更リクエスト';
$_lang["password_confirmed"] = 'Passwords doesn\'t match';
$_lang["password_gen_gen"] = 'パスワードを自動生成する(おすすめ)';
$_lang["password_gen_length"] = 'パスワードは6文字以上の長さにしてください。';
$_lang["password_gen_method"] = 'どのようにパスワードを作成しますか?';
$_lang["password_gen_specify"] = 'パスワードを指定する';
$_lang["password_method"] = 'どのようにパスワードを通知しますか?';
$_lang["password_method_email"] = '対象ユーザにメールで通知する';
$_lang["password_method_screen"] = '生成したパスワードを次の画面で表示する';
$_lang["password_msg"] = '<strong>:username</strong>のパスワードは<strong>:password</strong>です。';

$_lang["php_version_check"] = 'EvolutionはPHPバージョン7.4またはそれ以上で動作します。インストールされているPHPをアップグレードしてください。';

$_lang["preview"] = 'プレビュー';
$_lang["preview_msg"] = 'ここには最後に更新した内容をプレビューしています。<a href="javascript:;" onclick="saveRefreshPreview();"><i class="fa fa-floppy-o"></i> 更新と再描画</a>を行うにはここをクリックしてください。';
$_lang["preview_resource"] = 'プレビュー(別窓)';

$_lang["private"] = 'グループ設定';
$_lang["public"] = 'グループ制限なし';
$_lang["publish_date"] = '公開日時';
$_lang["publish_events"] = '公開を予定しているリソースの一覧';
$_lang["publish_resource"] = '公開する';

$_lang["rb_base_dir_message"] = 'ファイルブラウザディレクトリの物理パスです。images・files・flash・mediaの4つのディレクトリの参照先をここで設定します。';
$_lang["rb_base_dir_title"] = 'ファイルブラウザディレクトリの<br />物理パス';
$_lang["rb_base_url_message"] = 'ファイルブラウザディレクトリ(通常はassetsディレクトリ)のパスです。「ファイルブラウザディレクトリの物理パス」が参照する場所と同じですが、ここではEVO設置ディレクトリを基準とした相対パスを記述します。';
$_lang["rb_base_url_title"] = 'ファイルブラウザディレクトリの<br />相対パス';
$_lang["rb_message"] = '「はい」を選択するとファイルブラウザを使用できます。ファイルブラウザは投稿画面から呼び出します。サーバー上に画像などをアップロードし、投稿画面に貼り付けることができます。この設定はimages・files・flash・mediaの4つのディレクトリを参照します。参照範囲が広い<a href="index.php?a=31">「ファイル管理」</a>と違い、ファイルブラウザは投稿画面との連動を前提としており、主にコンテンツに紐付くファイルのみを扱います。';
$_lang["rb_title"] = 'ファイルブラウザを使用';
$_lang["rb_webuser_message"] = '<a href="index.php?a=99">ウェブユーザー</a>にファイルブラウザの利用を許可するかどうかを選択します。';
$_lang["rb_webuser_title"] = 'ウェブユーザーの<br />ファイルブラウザ利用';
$_lang["recent_docs"] = '最近のリソース';
$_lang["recommend_setting_change_title"] = '設定を確認してください。';
$_lang["recommend_setting_change_description"] = 'リファラチェック設定が無効になっているため、意図しない管理画面操作による<a href="http://www.google.com/search?hl=ja&q=csrf" target="_blank">CSRF攻撃 (Cross Site Request Forgery attack)</a>を受ける恐れがあります。グローバル設定をご確認ください。ただしこの設定により管理画面にアクセスできなくなる可能性があります。その場合はパソコン側のセキュリティソフトの設定をチェックするか、他のパソコンからのアクセスを試してみてください。';
$_lang["references"] = '参照';
$_lang["refresh_cache"] = 'キャッシュディレクトリに <strong>%s</strong>個のページキャッシュが見つかりました。<strong>%d</strong>個のページキャッシュが削除されました。<p>ページがリクエストされた時点で、新しいページキャッシュが生成されます。';
$_lang["refresh_published"] = '<strong>%s</strong>件のリソースが公開されました。';
$_lang["refresh_site"] = 'サイトをリフレッシュ';
$_lang["refresh_title"] = 'サイトをリフレッシュ';
$_lang["refresh_tree"] = 'リソースツリーの再描画';
$_lang["refresh_unpublished"] = '<strong>%s</strong>件のリソースが非公開に戻りました。';
$_lang["release_date"] = 'リリース日';
$_lang["remember_last_tab"] = 'アクティブなタブを記憶する';
$_lang["remember_last_tab_message"] = 'タブ構成のページ(投稿画面・エレメント編集画面・グローバル設定など)において、最後に開いたタブを記憶します。「Stay mode」を選択すると「更新」を実行した時と一部の管理画面でタブ選択を記憶します。';
$_lang["remember_username"] = 'ログイン名を記憶する';
$_lang["remove"] = '削除';
$_lang["remove_date"] = '日付を削除';
$_lang["remove_locks"] = 'ロックを解除';
$_lang["rename"] = 'リネーム';
$_lang["reports"] = 'レポート';
$_lang["report_issues"] = '問題の報告';
$_lang["required_field"] = 'Field :field is required';
$_lang["require_tagname"] = 'タグ名が必要です。';
$_lang["require_tagvalue"] = 'タグの値が必要です';
$_lang["reserved_name_warning"] = '「%s」はシステムで予約されているため変数名として使えません。';
$_lang["reset"] = 'リセット';
$_lang["reset_failedlogins"] = 'リセット';
$_lang["reset_sort_order"] = '並べ替えのリセット';

$_lang["manager_access_permissions"] = 'Manager access permission';
$_lang["manage_groups"] = 'Manage document and user groups';
$_lang["manage_document_permissions"] = 'Manage document permissions';
$_lang["manage_module_permissions"] = 'Manage module permissions';
$_lang["manage_tv_permissions"] = 'Manage TV permissions';

$_lang["rss_url_news_default"] = 'https://github.com/evocms-community/evolution/releases.atom';
$_lang["rss_url_news_message"] = '管理画面トップの「EVO News」のフィードURL';
$_lang["rss_url_news_title"] = 'RSS ニュースフィード';
$_lang["rss_url_security_default"] = 'https://github.com/extras-evolution/security-fix/releases.atom';
$_lang["rss_url_security_message"] = '管理画面トップの「セキュリティ情報」のフィードURL';
$_lang["rss_url_security_title"] = 'RSS セキュリティ情報フィード';

$_lang["run_module"] = 'モジュールの実行';
$_lang["save"] = '保存';
$_lang["save_all_changes"] = '全ての変更を更新';
$_lang["save_tag"] = 'タグ更新';
$_lang["saving"] = '更新中です。お待ちください';

$_lang["search"] = '検索';
$_lang["search_criteria"] = '検索 条件';
$_lang["search_criteria_content"] = '本文で検索';
$_lang["search_criteria_content_msg"] = '入力したテキストを「本文」に含む全てのリソースを探します。';
$_lang["search_criteria_id"] = 'IDで検索';
$_lang["search_criteria_id_msg"] = 'リソースをすぐに特定するためにリソースIDを入力してください。';
$_lang["search_criteria_top"] = 'メインフィールド内を検索';
$_lang["search_criteria_top_msg"] = 'リソース名、タイトル、エイリアス、リソースID';
$_lang["search_criteria_template_id"] = 'テンプレートIDで検索';
$_lang["search_criteria_template_id_msg"] = '特定のテンプレートを使用している全てのリソースを探します。';
$_lang["search_criteria_url_msg"] = '厳密なURLでリソースを探します。';
$_lang["search_criteria_longtitle"] = 'タイトルで検索';
$_lang["search_criteria_longtitle_msg"] = '入力したテキストを「タイトル」に含む全てのリソースを探します。';
$_lang["search_criteria_title"] = 'リソース名で検索';
$_lang["search_criteria_title_msg"] = '入力したテキストを「リソース名」に含む全てのリソースを探します。';
$_lang["search_empty"] = '指定したデータが見つかりませんでした。検索範囲を広げて再度検索してください。';
$_lang["search_item_deleted"] = 'このアイテムは削除されています';
$_lang["search_results"] = '検索結果';
$_lang["search_results_returned_desc"] = '説明';
$_lang["search_results_returned_id"] = 'ID';
$_lang["search_results_returned_msg"] = 'Your search criteria returned <b>%s</b> Resources. If a lot of results are being returned, try to enter a more specific search.';
$_lang["search_results_returned_title"] = 'タイトル';
$_lang["search_view_docdata"] = 'このアイテムを表示';

$_lang["security"] = 'ユーザー管理';
$_lang["security_notices_tab"] = 'セキュリティ情報';
$_lang["security_notices_title"] = 'セキュリティ情報';

$_lang["select_date"] = '日付を選択';
$_lang["send"] = '送信';
$_lang["server_protocol_http"] = 'http';
$_lang["server_protocol_https"] = 'https';
$_lang["server_protocol_message"] = 'このサイトがSSL接続を使用している場合は、httpsを選択してください。';
$_lang["server_protocol_title"] = 'サーバータイプ';
$_lang["serveroffset"] = 'サーバーオフセット';
$_lang["serveroffset_message"] = 'サーバー設置場所とあなたの居場所の時差を選択してください。サーバーの現在時刻は<strong>[%s]</strong>です。オフセットを使用したサーバーの現在時刻は<strong>[%s]</strong>です。';
$_lang["serveroffset_title"] = 'サーバーオフセットタイム';
$_lang["servertime"] = 'サーバー時刻';
$_lang["set_automatic"] = '自動に設定';
$_lang["set_default"] = 'デフォルトに設定';
$_lang["set_default_all"] = 'デフォルトに設定';

$_lang["settings_after_install"] = '<p><strong style="color:red;">アップデートまたは新規インストール直後のため、各種設定を確認し更新する必要があります。設定を確認した後、データベースを更新するために「更新」ボタンをクリックしてください。</strong></p><p>※この設定は後で自由に変更できます(ツール→グローバル設定)。今の時点では公開ステータス(公開・メンテナンス中など)の設定のみ確認しておくといいでしょう。</p>';
$_lang["settings_config"] = '設定';
$_lang["settings_dependencies"] = '関連付け';
$_lang["settings_events"] = 'システムイベント';
$_lang["settings_furls"] = 'フレンドリーURL';
$_lang["settings_general"] = 'メイン';
$_lang["settings_group_tv_message"] = 'テンプレート変数をセクション内でグループ化する、またはリソース編集画面内で（テンプレート変数のカテゴリー名で名付けられた）セクションかタブでグループ化するなら、選択してください。';
$_lang["settings_group_tv_options"] = 'いいえ,「メイン」タブ内のセクション,「メイン」タブ内のタブ,新しいタブのセクション,新しいタブのタブ,新しいタブ';
$_lang["settings_misc"] = 'ファイル管理の設定';
$_lang["settings_security"] = 'セキュリティ';
$_lang["settings_KC"] = 'ファイルブラウザ';
$_lang["settings_page_settings"] = 'ページ設定';
$_lang["settings_photo"] = '写真';
$_lang["settings_properties"] = 'プロパティ';
$_lang["settings_site"] = 'サイト';
$_lang["settings_strip_image_paths_message"] = 'ファイルブラウザで選択したファイルのsrc属性を相対パスで投稿画面に渡します。この設定を「いいえ」にした場合は、httpから始まるフルURLになります。投稿画面で利用するRTEによっては、受け取った値をさらに処理することがあるため、ここでの設定は確実ではありません。<br />また、相対パスで運用する場合はフレンドリーURL設定を有効にすると画像やサイト内リンクなどを正しく参照できないことがあります。そのような場合は<a href="http://www.google.com/search?hl=ja&q=html+base+href" target="_blank">baseタグ</a>を利用してください。';
$_lang["settings_strip_image_paths_title"] = '相対パスを渡す';
$_lang["settings_templvars"] = 'カスタムフィールド(テンプレート変数)';
$_lang["settings_title"] = 'グローバル設定';
$_lang["settings_ui"] = '管理画面の設定';
$_lang["settings_users"] = 'ユーザー';
$_lang["settings_email_templates"] = 'Eメールとテンプレート';

$_lang["show_fullscreen_btn_message"] = '「フルスクリーン切り替え」ボタンをメニューに表示';
$_lang["show_newresource_btn_message"] = '「リソースを投稿」ボタンをメニューに表示';
$_lang["settings_show_picker_message"] = '管理テーマをカスタマイズしてローカルストレージに保存します。';
$_lang["show_fullscreen_btn"] = '「フルスクリーン切り替え」ボタン';
$_lang["show_newresource_btn"] = '「リソースを投稿」ボタン';

$_lang["show_meta"] = 'METAタグ管理機能の有効<br />(※非推奨)';
$_lang["show_meta_message"] = 'リソース編集画面にMETA Keywordsタブを表示します。(※この機能は将来廃止される可能性があります)';
$_lang["show_tree"] = 'リソースツリーの表示';
$_lang["show_picker"] = 'カラースイッチャーの表示';
$_lang["showing"] = '表示中';
$_lang["signupemail_message"] = 'ユーザ管理画面でユーザーアカウントを作成した時に、ログイン名とパスワードを記載したメールを送信することができます。このメールの内容は変更できます<br /><strong>参考:</strong> 下記の差し込み文字列は送信時に自動的に置き換えられます。<br /><br />[+sname+] - サイトの名前<br />[+saddr+] - サイト管理者のメールアドレス<br />[+surl+] - サイトのURL<br />[+uid+] - ログイン名<br />[+pwd+] - パスワード<br />[+ufn+] - フルネーム';
$_lang["signupemail_title"] = 'サインアップメール';
$_lang["site"] = 'メイン';
$_lang["site_schedule"] = '公開状態の一覧';
$_lang["sitename_message"] = 'サイト名を入力してください。title要素などで [*pagetitle*] などと組み合わせて用います。<br />コンフィグ変数： [(site_name)]';
$_lang["sitename_title"] = 'サイト名';
$_lang["sitestart_message"] = 'トップページとして使用するリソースのIDを入力してください。<br /><strong>※非公開のリソースは指定できません。</strong>';
$_lang["sitestart_title"] = 'サイトスタート';
$_lang["sitestatus_message"] = 'このサイトをウェブ上に公開するには「オンライン」を選択してください。「メンテナンスモード」を選択すると、訪問者には「メンテナンス中ページ」または「メンテナンス中メッセージ」が表示されます。';
$_lang["sitestatus_title"] = '公開ステータス';
$_lang["siteunavailable_message"] = 'サイトがメンテナンスモード中、またはエラー発生時に表示するメッセージです。<br />コンフィグ変数：[(site_unavailable_message)]<br /><strong>※このメッセージはメンテナンス中ページが設定されていないときのみ表示されます。</strong>';
$_lang["siteunavailable_message_default"] = 'ただいま調整中です。しばらくお待ちください。';
$_lang["siteunavailable_page_message"] = 'メンテナンスモード設定時に表示するリソースのIDをここに入力してください。<br /><strong>※非公開またはウェブユーザー限定のリソースは指定できません。</strong>';
$_lang["siteunavailable_page_title"] = 'メンテナンス中ページ';
$_lang["siteunavailable_title"] = 'メンテナンス中メッセージ';
$_lang["controller_namespace"] = 'コントローラーネームスペース';
$_lang["controller_namespace_message"] = 'コントローラーを取得できる完全なネームスペースを指定してください。 例： <b>EvolutionCMS\\Main\\Controllers\\</b>';
$_lang["update_repository"] = 'Git Hub パス';
$_lang["update_repository_message"] = 'Git Hub リポジトリのパスを入力してください。例： <b>evolution-cms/evolution</b>';

$_lang["sort_alphabetically"] = 'アルファベット順';
$_lang["sort_asc"] = '昇順';
$_lang["sort_desc"] = '降順';
$_lang["sort_menuindex"] = 'メニューインデックス順';
$_lang["sort_tree"] = 'ツリーの並べ替え';
$_lang['sort_updating'] = '更新中';
$_lang['sort_updated'] = '更新されました。';
$_lang['sort_nochildren'] = 'このリソースに子リソースはありません。';
$_lang["sort_elements_msg"] = 'ドラッグすることで一覧のエレメントの順序を入れ替えます。';

$_lang["source"] = 'ソース';
$_lang["stay"] = 'この画面';
$_lang["stay_new"] = '次の作成';
$_lang["submit"] = '実行';
$_lang["sys_alert"] = 'システム警告';
$_lang["sysinfo_activity_message"] = '最近編集されたリソースの一覧';
$_lang["sysinfo_userid"] = 'ユーザー';
$_lang["system"] = 'システム';
$_lang["system_email_signup"] = 'Hello [+uid+]

Here are your login details for [+sname+] Content Manager:

Username: [+uid+]
Password: [+pwd+]

Once you log into the Content Manager ([+surl+]), you can change your password.

Regards,
Site Administrator';
$_lang["system_email_webreminder"] = 'こんにちは [+uid+] さん

パスワードを有効にするためには、下記のリンクをクリックしてください。

[+surl+]

処理完了後、下記のパスワードをログインに使用できるようになります。

パスワード:[+pwd+]

このメールに覚えが無いときは無視して下さい。

以上、よろしくお願いします。
サイト管理者より';
$_lang["system_email_websignup"] = 'こんにちは [+uid+] さん

「[+sname+] ( [+surl+] )」へのログイン情報について下記のとおりお知らせします。

ログイン名: [+uid+]
パスワード: [+pwd+]

 [+sname+]へログインすれば、自分のパスワードは自由に変更できます。

以上、よろしくお願いします。
サイト管理者より';
$_lang["table_hoverinfo"] = 'ここで取得したSQLファイルを用いて、サイトをリストアできます。「DROP文を生成」にチェックを入れておくと、インポート時にテーブルを作り直すため、より確実にサイトを再現できます。<br /><strong style="color:red;">【注意1】</strong>SQLファイルのサイズが大き過ぎるとリストア(インポート)に失敗しやすくなるためご注意ください。特に_event_logテーブルと_manager_logテーブルが肥大の原因になっていることが多いです。「データサイズ」のリンクをクリックしてログをリセットするか、これら2つのテーブルをバックアップ対象から外すとよいでしょう。それでもまだ大きい場合は<a href="http://www.google.com/search?hl=ja&q=BigDump" target="_blank">BigDump</a>などのツールを試してみてください。<br /><strong style="color:red;">【注意2】</strong> データをリストアする時、リストア元とリストア先のEVOのバージョンが違う場合は注意が必要です。リストアすると、拡張機能のバージョンも元の状態に戻ります。問題を回避するには、EVOのバージョンを揃えてリストアするか、リストア後にもう一度EVOをインストーラを用いて最新状態にアップデートするとよいでしょう。';
$_lang["table_prefix"] = 'テーブルプレフィックス';
$_lang["tag"] = 'タグ';

$_lang["to"] = '-';
$_lang["toggle_fullscreen"] = 'フルスクリーンに切り替え';
$_lang["tools"] = 'ツール';
$_lang["top_howmany_message"] = '訪問レポートの「トップ ...」に何件表示するか指定します。(※訪問レポートの機能は現在のEVOには実装されていません)';
$_lang["top_howmany_title"] = 'トップ 表示件数';
$_lang["total"] = '合計';
$_lang["track_visitors_message"] = 'ドキュメントツリーに子リソースを表示します。（現在のEVOには切り替える機能は実装されていません）';
$_lang["track_visitors_title"] = '子リソースを表示';
$_lang["tree_page_click"] = 'リソースツリークリック時の動作';
$_lang["tree_page_click_message"] = 'リソースツリーをクリックした時の既定の動作を設定します。「自動」を選ぶとリソースがコンテナかどうかで判定します。';
$_lang["use_breadcrumbs"] = 'ナビゲーション（パンくずリスト）を表示';
$_lang["use_breadcrumbs_message"] = '管理画面でリソースを作成または編集しているときにナビゲーションを表示';
$_lang["tree_show_protected"] = '権限のないリソースの表示';
$_lang["tree_show_protected_message"] = 'ログインしているユーザーが操作権限を持たないリソースも全てリソースツリーに表示します。Windowsフォルダオプションの「全てのファイルとフォルダを表示する」に似ています。権限の設定は<a href="index.php?a=40">「グループ管理」</a>で行ないます。';
$_lang["truncate_table"] = 'このテーブルの内容を全削除するにはここをクリック';
$_lang["type"] = 'タイプ';
$_lang["udperms_allowroot_message"] = 'リソースツリーのルート直下にユーザーがリソースを作成できるようにしますか?';
$_lang["udperms_allowroot_title"] = 'ルートの使用許可';
$_lang["udperms_message"] = '会員制サイトを運用する場合や、編集権限を持つページをグループ単位で制限したい場合に必要となる設定です。グループ管理機能を有効にすると、ユーザーの編集権限をユーザーグループごと・リソースグループごとに割り当てることができます。まず当設定を有効にしたうえで<a href="index.php?a=40" target="_self">グループ管理</a>を開き、ユーザーグループとリソースグループを作ってください。次に、それぞれのユーザーグループとリソースグループを関連付けてください。最後に、個別のユーザーをユーザーグループに、個別のリソースをリソースグループに割り当ててください。この設定を「はい」にした場合、全てのリソースを編集する権限を持つのは初期状態ではAdministrator(のロールが割り当てられているユーザ)のみとなります。';
$_lang["udperms_title"] = 'グループ管理機能を使用';
$_lang["unable_set_link"] = 'リンクを設定できません。';
$_lang["unable_set_parent"] = '新しい親リソースを設定できません。';
$_lang["unauthorizedpage_message"] = 'ユーザーがアクセスを許可されていないリソースを要求したとき表示するリソースのIDを入力してください。<br /><strong>※非公開またはウェブユーザー限定のリソースは指定できません。</strong>';
$_lang["unauthorizedpage_title"] = '権限外告知のページ';
$_lang["unblock_message"] = 'ユーザーデータを更新した後、このアカウントの休止設定は解除されます。';
$_lang["undelete_resource"] = '削除から復活';
$_lang["unpublish_date"] = '公開終了日時';
$_lang["unpublish_events"] = '公開取り消しを予定しているリソースの一覧';
$_lang["unpublish_resource"] = '非公開にする';
$_lang["untitled_resource"] = 'タイトルがありません';
$_lang["untitled_weblink"] = 'タイトルがありません';
$_lang["update_params"] = 'パラメータ表示を更新';
$_lang["update_settings_from_language"] = '置き換え';

$_lang["upload_maxsize_message"] = '管理画面を通じてアップロード可能なファイルの最大サイズ。このサーバでは上限%sまで設定できます。<br />※ブラウザ側で制限をかけるための設定です。サーバ側の調整が必要な場合は.htaccessやphp.iniでupload_max_filesizeの設定を変更してください。';
$_lang["upload_maxsize_title"] = 'アップロードサイズの上限';
$_lang["uploadable_files_message"] = 'アップロードできる文書ファイルの拡張子を入力してください。カンマで区切って複数指定できます。';
$_lang["uploadable_files_title"] = 'アップロード可能な文書ファイル';
$_lang["uploadable_flash_message"] = 'アップロードできるフラッシュファイルの拡張子を入力してください。カンマで区切って複数指定できます。';
$_lang["uploadable_flash_title"] = 'アップロード可能なフラッシュ';
$_lang["uploadable_images_message"] = 'アップロードできる画像ファイルの拡張子を入力してください。カンマで区切って複数指定できます。';
$_lang["uploadable_images_title"] = 'アップロード可能な画像ファイル';
$_lang["uploadable_media_message"] = 'アップロードできるメディアファイルの拡張子を入力してください。カンマで区切って複数指定できます。';
$_lang["uploadable_media_title"] = 'アップロード可能なメディア';
$_lang["use_alias_path_message"] = 'このオプションを「はい」に設定すると、リソースのエイリアスがパスとして表示されます。例えば、「child」というエイリアスを持ったリソース「parent」というエイリアスのリソースの下に配置されていると、エイリアスパスは「/parent/child.html」になります。<br /><strong>注意: このオプションを「はい」にしてエイリアスパスを使用するときは、リソースから参照するものは（画像・CSS・JavaScriptなど）絶対パスで指定する必要があります。例えば、assets/imagesに対しては/assets/imagesと指定します。または、<a href="http://www.google.com/search?hl=ja&q=html+base+href" target="_blank">baseタグ</a>を利用すると、相対パス記述でも正しく参照できます。</strong>';
$_lang["use_alias_path_title"] = 'エイリアスパスを使用';
$_lang["use_editor_message"] = 'リッチテキストエディター(RTE)の使用を設定します。「いいえ」を選択するとRTEを利用できなくなります。この設定は全てのリソース・全てのユーザーに影響します。';
$_lang["use_editor_title"] = 'リッチテキストエディターの使用';
$_lang["use_global_tabs"] = 'グローバルタブの使用';

$_lang["valid_hostnames_message"] = 'このインストールに有効なホストネームの一覧をコンマ（,）区切りで書いておくことで、「site_url」の設定を誤って使用することによるXSS exploitの予防を助けます。共有ホストの形式やIPアドレスを経由して直接アクセス可能なホストに重要です。HTTP_HOSTが有効なホストネームにマッチしない場合、リストにある最初のホストネームが使用されます。';
$_lang["valid_hostnames_title"] = '有効なホストネーム';
$_lang["validate_referer_message"] = 'リファラチェック(参照元チェック)を行い、<a href="http://www.google.com/search?hl=ja&q=csrf" target="_blank">(CSRF=Cross Site Request Forgery)</a>をある程度回避できます。万全ではありませんので、管理画面にログイン中は不用意に外部サイトを閲覧しない・こまめにログアウトするなどを習慣づけてください。';
$_lang["validate_referer_title"] = '管理画面操作のリファラチェック';
$_lang["value"] = '値';
$_lang["version"] = 'ヴァージョン';
$_lang["view"] = 'ここをクリック';
$_lang["view_child_resources_in_container"] = 'リソース一覧';
$_lang["view_log"] = 'ログを見る';
$_lang["view_logging"] = '管理操作ログ';
$_lang["view_sysinfo"] = 'システム情報';
$_lang["warning"] = '警告';
$_lang["warning_not_saved"] = '変更が更新されていません。変更を更新するためには「キャンセル」をクリックし現在のページに戻ってください。また、「OK」をクリックして全ての変更を破棄することもできます。';
$_lang["warning_visibility"] = 'ダッシュボードの警告表示';
$_lang["warning_visibility_message"] = 'ダッシュボードの警告を表示する<a href="index.php?a=86">対象ロール</a>を設定します。';
$_lang["web_access_permissions"] = 'グループ管理';
$_lang["web_access_permissions_user_groups"] = 'ウェブユーザーグループ';
$_lang["web_permissions"] = 'グループ管理';
$_lang["web_user_management_msg"] = '会員制サイトを運用する場合、ここでユーザを作成・管理します。グループ管理(ウェブ)の設定を併用し、アクセス対象を設定してください。グループ管理機能を用いずログイン状態のみ提供するシンプルな運用も可能です。<br />※ここで管理するアカウントは管理画面にアクセスする権限は持ちません。';
$_lang["web_user_management_title"] = 'ユーザー管理';
$_lang["web_user_management_select_role"] = 'All roles';
$_lang["web_user_title"] = 'ウェブユーザーの作成･編集';
$_lang["web_users"] = 'ユーザー管理';
$_lang["weblink"] = 'ウェブリンク';
$_lang["webpwdreminder_message"] = 'ウェブユーザーからパスワード変更の要求があった時に、EVOは新パスワードとアクティベーション方法を記載したメールを送信することができます。このメールの内容は変更できます。<br /><strong>参考:</strong> 下記の差し込み文字列は送信時に自動的に置き換えられます。<br /><br />[+sname+] - サイトの名前<br />[+saddr+] - サイト管理者のメールアドレス<br />[+surl+] - サイトのURL<br />[+uid+] - ログイン名<br />[+pwd+] - パスワード<br />[+ufn+] - フルネーム';
$_lang["webpwdreminder_title"] = 'パスワード変更<br />リクエストメール';
$_lang["websignupemail_message"] = 'ユーザー自らがウェブユーザーアカウントを作成した時に、EVOはログイン名とパスワードを記載したメールを送信することができます。このメールの内容は変更できます。<br /><strong>参考:</strong> 下記の差し込み文字列は送信時に自動的に置き換えられます。<br /><br />[+sname+] - サイトの名前<br />[+saddr+] - サイト管理者のメールアドレス<br />[+surl+] - サイトのURL<br />[+uid+] - ログイン名<br />[+pwd+] - パスワード<br />[+ufn+] - フルネーム';
$_lang["websignupemail_title"] = 'ウェブサインアップメール';
$_lang["allow_multiple_emails_title"] = 'ウェブユーザーのメールアドレスの重複を許可する。';
$_lang["allow_multiple_emails_message"] = 'メンバーが自分のメールアドレスを持たない場合や家族のメールアドレスがひとつしかない場合にウェブユーザーに同じメールアドレスを共有する許可を与えます。<br/>※ 「はい」にした場合、パスワードの記憶と登録はこのオプションを考慮する必要があります。';
$_lang["welcome_title"] = 'ダッシュボード';
$_lang["which_editor_message"] = 'デフォルトで使用するリッチテキストエディターを選択してください(※<a href="http://www.modx.com/extras/category/richtexteditors?product=evolution" target="_blank">EVOのダウンロードページ</a>には追加でインストールできるリッチテキストエディターがあります)。';
$_lang["which_editor_title"] = '使用エディター';
$_lang["working"] = '処理中';
$_lang["wrap_lines"] = '行の折り返し';
$_lang["xhtml_urls_message"] = '「はい」を設定すると、URLに含まれるアンパーサンド (&amp;) を自動的に文字実態参照 (&amp;<!-- -->amp;) に置き換えます。';
$_lang["xhtml_urls_title"] = 'XHTML形式のURL';
$_lang["yes"] = 'はい';
$_lang["you_got_mail"] = 'メッセージが届いています。';

$_lang["yourinfo_message"] = '自分自身に関する情報を表示しています';
$_lang["yourinfo_previous_login"] = '今回のログイン日時';
$_lang["yourinfo_role"] = '所属ロール(役割)';
$_lang["yourinfo_title"] = 'あなたの情報';
$_lang["yourinfo_total_logins"] = '合計ログイン回数';
$_lang["yourinfo_username"] = 'ログイン名';

$_lang["a17_error_reporting_title"] = 'PHPエラーの検出レベル';
$_lang["a17_error_reporting_msg"] = 'PHPエラーの検出レベルを設定します。';
$_lang["a17_error_reporting_opt0"] = '全て無視する';
$_lang["a17_error_reporting_opt1"] = '通知レベルの軽度の警告を無視する(<a href="https://www.google.com/search?hl=ja&q=E_DEPRECATED+E_STRICT" target="_blank">E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT</a>)';
$_lang["a17_error_reporting_opt2"] = '~E_NOTICE 以外の全てのエラーを検出';
$_lang["a17_error_reporting_opt99"] = '~E_NOTICE & ~E_USER_DEPRECATED 以外の全てのエラーを検出';
$_lang["a17_error_reporting_opt199"] = '全て検出する';

$_lang["pwd_hash_algo_title"] = 'ハッシュ生成アルゴリズム';
$_lang["pwd_hash_algo_message"] = 'パスワード文字列はここで設定したアルゴリズムによって解読困難な文字列に変換され、DBに保存されます。これにより、悪意の第三者がDBデータからパスワードを取得することを防ぐことができます。上から順にセキュアなアルゴリズムです。UNCRYPT以外はサーバによっては利用できないことがあるため、サーバ移管の際は注意してください。';

$_lang["enable_bindings_title"] = '@Bindingsを有効にする';
$_lang["enable_bindings_message"] = '<a href="http://www.google.com/cse?cx=007286147079563201032%3Aigbcdgg0jyo&q=Bindings" target="_blank">@Bindings機能</a>を有効にします。この機能は、投稿画面上の入力フィールド(テンプレート変数)に任意のコマンドを記述し、実行するものです。PHP文の実行などが可能なため、複数メンバーでサイトを運用する場合、当機能の運用には注意が必要です。';
$_lang["enable_filter_title"] = 'フィルタを有効にする';
$_lang["enable_filter_message"] = 'フィルタを使用するとタグ内で出力される、あるいは出力したデータを操作できます。テンプレートの中から値を変更できます。 PHxに似ています。 <a href="https://github.com/modxcms/evolution/issues/623" target="ext_help">詳細</a>'; // todo: change link to documentation
$_lang["enable_filter_phx_warning"] = 'PHxのプラグインが有効になっている場合、内蔵のフィルタはデフォルトで無効になっています';

$_lang["enable_at_syntax_title"] = '&lt;@SYNTAX&gt;を有効にする';
$_lang["enable_at_syntax_message"] = '&lt;@SYNTAX&gt;(atmark syntax) は単純で軽いテンプレートシンタックスです。これはHTMLタグとコンテンツの文字列の共存を考慮して設計されました。';

$_lang["bkmgr_alert_mkdir"] = 'ディレクトリにファイルを作成できません。[+snapshot_path+]のパーミッションを確認してください。';
$_lang["bkmgr_restore_msg"] = '<p>「バックアップ」で取得したSQLファイルを用いて、サイトをリストアできます。<br />※SQL文を実行するだけなので、他の用途にも使えます(拡張機能のインストールなど)。</p>';
$_lang["bkmgr_restore_title"] = 'リストア';
$_lang["bkmgr_import_ok"] = 'リストアは正常に実行されました。';
$_lang["bkmgr_snapshot_ok"] = 'スナップショットは正常に保存されました。';
$_lang["bkmgr_run_sql_file_label"] = 'ファイルから実行';
$_lang["bkmgr_run_sql_direct_label"] = 'SQL文を直接実行';
$_lang["bkmgr_run_sql_submit"] = 'リストア実行';
$_lang["bkmgr_run_sql_result"] = '結果一覧';
$_lang["bkmgr_snapshot_title"] = 'スナップショット';
$_lang["bkmgr_snapshot_msg"] = '<p>データベースの内容をサーバに保存します。<br />保存先 : [+snapshot_path+] ($modx->config[\'snapshot_path\'])</p>';
$_lang["bkmgr_snapshot_submit"] = 'スナップショットを追加する';
$_lang["bkmgr_snapshot_list_title"] = 'スナップショットの一覧';
$_lang["bkmgr_restore_submit"] = 'このデータに戻す';
$_lang["bkmgr_restore_confirm"] = '本当に次のスナップショットに戻しますか?\n[+filename+]';
$_lang["bkmgr_snapshot_nothing"] = 'スナップショットはありません。';

$_lang["files.dynamic.php1"] = 'テキストファイルを新規作成';
$_lang["files.dynamic.php2"] = 'このディレクトリは参照できません';
$_lang["files.dynamic.php3"] = 'ファイル名が不正です。';
$_lang["files.dynamic.php4"] = 'テキストファイルを作成しました。';
$_lang["files.dynamic.php5"] = 'ファイルは複製できませんでした。';
$_lang["files.dynamic.php6"] = 'ファイルまたはディレクトリはリネームできませんでした。';
$_lang["files_dynamic_new_folder_name"] = 'ディレクトリ名';
$_lang["files_dynamic_new_file_name"] = 'ファイル名';
$_lang["not_readable_dir"] = 'ディレクトリが存在しないか、PHPスクリプトがこのディレクトリにアクセスする権限がありません。';
$_lang["confirm_delete_dir"] = 'このディレクトリを削除してもよろしいですか?';
$_lang["confirm_delete_dir_recursive"] = 'ディレクトリ内にファイルが存在します。\nこのディレクトリを削除してもよろしいですか?';

$_lang["make_folders_title"] = 'ディレクトリ表現';
$_lang["make_folders_message"] = 'コンテナ属性のリソースのサフィックスをスラッシュ( / )にします。';

$_lang["check_files_onlogin_title"] = 'ログイン時にコアファイルを確認';
$_lang["check_files_onlogin_message"] = 'この設定を有効にすることで、重要なシステムファイルがスクリプト化されたWebサイトの攻撃に対して典型的な変更を確認します。確実な保証ではありませんが、侵入したEVOのシステムファイルとウェブサイトに警告することがあります。';

$_lang["configcheck_sysfiles_mod"] = '重要なシステムファイルが変更されました。';
$_lang["configcheck_sysfiles_mod_msg"] = 'EVOを設定して、Webサイトのスクリプト攻撃をされた可能性のある重要なシステムファイルを確認してください。これはあなたのサイトが侵害されたことを必ずしも意味するわけではありませんが、インストール時の監視ファイルを確認する必要があります（「システム設定」 - >「ユーザー」 - >「ログイン時にコアファイルを確認」に設定してください）。ファイルが変更されていないか、サイト管理者が変更を加えた場合は、「グローバル設定」に移動し、このメッセージを閉じるために設定を再保存してください。';

$_lang['email_method_title'] = 'Sendmail による方法';
$_lang['email_method_mail'] = 'PHP mail() による機能';
$_lang['email_method_smtp'] = 'SMTP サーバ';
$_lang['smtp_auth_title'] = 'SMTP-AUTH';
$_lang['smtp_autotls_title'] = 'SMTPAutoTLS';
$_lang['smtp_host_title'] = 'SMTP ホスト';
$_lang['smtp_secure_title'] = 'Encrypted SMTP';
$_lang['smtp_username_title'] = 'SMTP ユーザ名';
$_lang['smtp_password_title'] = 'SMTP パスワード';
$_lang['smtp_port_title'] = 'SMTP ポート';

$_lang["setting_resource_tree_node_name"] = 'リソースツリーのノード名';
$_lang["setting_resource_tree_node_name_desc"] = 'リソースツリー内にあるリソース名として表示するリソースフィールドを選んでください。デフォルトはページタイトルです。';
$_lang["setting_resource_tree_node_name_desc_add"] = '注：EVO 1.1以降、この表示名はリソースツリーのソートオプション内で変更できます。この設定は「リソースツリーの表示名」が「デフォルト」に設定されている場合に使用されます。';

$_lang["resource_opt_alvisibled"] = 'エイリアスパス内で現在のエイリアスを使う';
$_lang["resource_opt_alvisibled_help"] = 'このリソースのエイリアスはフレンドリーURKのエイリアスパスで挿入されます';
$_lang['resource_opt_is_published'] = '発行完了';

$_lang["enable_cache_title"] = 'リソースのキャッシュ';
$_lang["disable_chunk_cache_title"] = 'チャンクのキャッシュを無効';
$_lang["disable_snippet_cache_title"] = 'スニペットのキャッシュを無効';
$_lang["disable_plugins_cache_title"] = 'プラグインのキャッシュを無効';
$_lang["disabled_at_login"] = 'ログイン中は無効';

$_lang["cache_type_title"] = 'キャッシュのタイプ';
$_lang["cache_type_1"] = 'リソースIDのみを元にしたキャッシュ（標準）';
$_lang["cache_type_2"] = 'リソースIDと$_GETパラメータを元にしたキャッシュ';
$_lang["seostrict_title"] = '厳密なURL（SEO Strict URLs）を使う';
$_lang["seostrict_message"] = 'コンテンツの重複を防ぐために厳密なURLの使用を強制する（必要な場合）';

$_lang["alias_listing_title"] = 'Use AliasListing cache';
$_lang["alias_listing_message"] = 'Caching page aliases, have to be disabled if a site have huge amount of resources. "Disabled" reduces memory consumption when site have large number of resources.';
$_lang["alias_listing_disabled"] = 'Disabled';
$_lang["alias_listing_folders"] = 'Only for folders';
$_lang["alias_listing_enabled"] = 'Enabled';

$_lang["settings_friendlyurls_alert"] = 'フレンドリーURL機能を利用するにはEVO設置ディレクトリの\nsample.htaccessファイルを.htaccessにリネームする必要があります。\nサブディレクトリに設置している場合はファイル内の\nRewriteBaseの値を変更してください。';
$_lang["settings_friendlyurls_alert2"] = 'EVOはサブディレクトリにインストールされました。.htaccessの内容を変更する必要があります。(参考 : install/tpl/htaccess.tpl)';

$_lang["mutate_settings.dynamic.php6"] = 'EVOのエラーをメールで通知する';
$_lang["mutate_settings.dynamic.php7"] = '通知しない';
$_lang["mutate_settings.dynamic.php8"] = 'エラー発生時に[(emailsender)]([+emailsender+])に通知します。エラーの内容の詳細は<a href="index.php?a=114">イベントログ</a>を確認してください。';

$_lang["error_no_privileges"] = "この操作を行なう権限がありません。";
$_lang["error_no_optimise_tablename"] = "最適化するテーブルがリクエストに見つかりません。";
$_lang["error_no_truncate_tablename"] = "削除するテーブルがリクエストに見つかりません。";
$_lang["error_double_action"] = "二重のアクション（GET と POST）が送信されました。";
$_lang["error_no_id"] = "IDがリクエストにわたされませんでした。";
$_lang["error_id_nan"] = "リクエストでわたされたIDはNaNです。";
$_lang["error_parent_deleted"] = "Failed because resource parent is deleted!";
$_lang["error_no_parent"] = "親のリソース名を見つけられませんでした。";
$_lang["error_many_results"] = "データベースからの返り値が多過ぎます。内部処理に問題があります。";
$_lang["error_no_results"] = "データベースからの結果が足りない/ありません。";
$_lang["error_no_user_selected"] = "このメッセージの受信者として選択されているユーザーはいません。";
$_lang["error_no_group_selected"] = "このメッセージの受信者として選択されたグループはありません。";
$_lang["error_movedocument1"] = "自分自身を親として指定することはできません。";
$_lang["error_movedocument2"] = "リソースのIDがリクエストにわたされませんでした。";
$_lang["error_movedocument3"] = "新しい親リソースがリクエストに設定されていません。";
$_lang["error_internet_connection"] = "サーバーが利用不可能です。インターネットが繋がっているか確認してください。";

$_lang["login_processor_unknown_user"] = "ログイン名またはパスワードが間違っています。";
$_lang["login_processor_wrong_password"] = "ログイン名またはパスワードが間違っています。";
$_lang["login_processor_many_failed_logins"] = "ログインを数回失敗したため、一時的にアクセスが制限されています。";
$_lang["login_processor_verified"] = "User verification required!";
$_lang["login_processor_blocked1"] = "ログインをブロックされています。";
$_lang["login_processor_blocked2"] = "ログインをブロックされています。しばらくたってから再び試してください。";
$_lang["login_processor_blocked3"] = "指定された日以降は自動的にブロックされ、ログインできなくなります。";
$_lang["login_processor_bad_code"] = "入力されたセキュリティコードが間違っています。";
$_lang["login_processor_remotehost_ip"] = "あなたのホスト名はあなたのIPアドレスを示していません。";
$_lang["login_processor_remote_ip"] = "この場所からログインすることは許可されていません。";
$_lang["login_processor_date"] = "現時点であなたはログインすることを許可されていません。後でもう一度やり直してください。";
$_lang["login_processor_captcha_config"] = "キャプチャが正しく設定されていません";

$_lang["dp_dayNames"] = "['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日']";
$_lang["dp_monthNames"] = "['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']";
$_lang["dp_startDay"] = "1";

$_lang["check_all"] = "すべて選択";
$_lang["check_none"] = "すべて解除";
$_lang["check_toggle"] = "選択を入れ替える";

$_lang["version_notices"] = "バージョン通知";

$_lang["em_button_shift"] = " (Shift +マウスクリックで複数のウィンドウを開く)";

$_lang["reset_sysfiles_checksum_button"] = "チェックサムを再構築する";
$_lang["reset_sysfiles_checksum_alert"] = "システムファイルのチェックサムをリセットしてよろしいですか？";

$_lang["file_browser_disabled_msg"] = "ファイルブラウザ機能が有効になっていません。";
$_lang["which_browser_default_title"] = "デフォルトのファイルブラウザ";
$_lang["which_browser_default_msg"] = "デフォルトとして使用するファイルブラウザを選択してください。ユーザー設定では、ユーザーごとにカスタムブラウザを選択するか、「デフォルト」のままにします。";
$_lang["which_browser_title"] = "ファイルブラウザ";
$_lang["which_browser_msg"] = "このユーザー用のカスタムファイルブラウザを選択できます。システムのデフォルトのブラウザを使用する場合は、「デフォルト」のままにします。";
$_lang["option_default"] = "デフォルト";
$_lang["position"] = "ポジション";
$_lang["are_you_sure"] = "本当に実行しますか？";

$_lang['evo_downloads_title'] = "Evolution CMSのダウンロード";
$_lang['help_translating_title'] = "Evolution CMSの翻訳を助ける";
$_lang['download'] = "ダウンロード";
$_lang['downloads'] = "ダウンロード";
$_lang["previous_releases"] = "以前のリリース";
$_lang["extras"] = "エクストラ";

$_lang["display_locks"] = "表示をロックする";
$_lang["role_display_locks"] = "表示をロックする";
$_lang["session_timeout"] = "セッション・タイムアウト";
$_lang["session_timeout_msg"] = "Evolution CMS will ping the server, if the last ping exceeds this setting, the associated session will be considered invalid and all related locks will be removed automatically. Set value in minutes (>2min, default 15min).";
$_lang["unlock_element_id_warning"] = "この [+element_type+] （ID [+id+]）のロックを解除してもよろしいですか？";
$_lang["lock_element_type_1"] = "テンプレート";
$_lang["lock_element_type_2"] = "テンプレート変数";
$_lang["lock_element_type_3"] = "チャンク";
$_lang["lock_element_type_4"] = "スニペット";
$_lang["lock_element_type_5"] = "プラグイン";
$_lang["lock_element_type_6"] = "モジュール";
$_lang["lock_element_type_7"] = "リソース";
$_lang["lock_element_type_8"] = "ルール";
$_lang["lock_element_editing"] = "[+lasthit_df+]から、あなたはこの[+element_type+]を編集しています";
$_lang["lock_element_locked_by"] = "この [+element_type+] は[+lasthit_df+]からuser\n[+username+] によってロックされました";

$_lang["minifyphp_incache_title"] = 'サイトキャッシュ内のPHPコードを圧縮';
$_lang["minifyphp_incache_message"] = 'PHPコード（スニペットとプラグイン）を圧縮し、このサイトのキャッシュファイルを保存する、参考：<a href="https://github.com/modxcms/evolution/issues/938" target="_blank">#938</a>';

$_lang["logout_reminder_msg"] = "注意：[+date+]にログアウトを忘れています。あなたの仕事を終えた後は、ログアウトすることに注意を払ってください。";

$_lang["allow_eval_title"] = "スニペットコール内でPHPコードの実行を許可";
$_lang["allow_eval_msg"] = "デベロッパーへ： \$modx-&gt;safeEval()を使用してください。";
$_lang["allow_eval_with_scan"] = "許可された関数のみを実行する";
$_lang["allow_eval_with_scan_at_post"] = "すべての実行を許可する。ただし、POSTでは許可された関数のみ。";
$_lang["allow_eval_everytime_eval"] = "無制限（デバッグにのみ使用）";
$_lang["allow_eval_dont_eval"] = "すべての機能を許可しない";

$_lang["safe_functions_at_eval_title"] = "evalを可能にする関数";
$_lang["safe_functions_at_eval_msg"] = "コンマで区切られたリスト";

$_lang["multiple_sessions_msg"] = "情報：ユーザー <b>[+username+]</b> に複数のアクティブユーザーセッション（合計 [+total+]）が見つかりました。";
$_lang["iconv_not_available"] = "拡張機能iconvをインストール/有効にすることが重要です。有効にする方法がわからない場合は、ホストに話してください。";

$_lang["cm_create_new_category"] = "新しいカテゴリー";
$_lang["cm_category_name"] = "カテゴリー名";
$_lang["cm_category_position"] = "カテゴリーの位置";
$_lang["cm_no_x_assigned"] = "%s が割り当てられていません";
$_lang["cm_save_categorization"] = "分類を保存";
$_lang["cm_update_categories"] = "カテゴリーを更新";
$_lang["cm_assigned_elements"] = "エレメントを割り当てる";
$_lang["cm_edit_name"] = "カテゴリー名を編集";
$_lang["cm_mark_for_deletion"] = "削除にマーク";
$_lang["cm_delete_now"] = "すぐに削除";
$_lang["cm_delete_element_x_now"] = "すぐに「%s」を削除してください";
$_lang["cm_select_element_group"] = "エレメントのグループを選択";
$_lang["cm_global_messages"] = "グローバルメッセージ";
$_lang["cm_add_new_category"] = "新しいカテゴリーを追加";
$_lang["cm_edit_categories"] = "カテゴリーを編集";
$_lang["cm_sort_categories"] = "カテゴリーのソート";
$_lang["cm_categorize_elements"] = "エレメントを分類";
$_lang["cm_translation"] = "Translation";
$_lang["cm_translations"] = "Translations";
$_lang["cm_categorize_x"] = "<span class=\"highlight\">%s</span を分類>";
$_lang["cm_unknown_error"] = "何らかの問題が発生しました。";
$_lang["cm_x_assigned_to_category_y"] = "<span class=\"highlight\">%s(%s)</span> はカテゴリー <span class=\"highlight\">%s(%s)</span> に割り当てられました。";
$_lang["cm_no_categorization"] = "分類はありません。";
$_lang["cm_no_changes"] = "変更がないため、変更されていません。";
$_lang["cm_x_changes_made"] = "<span class=\"highlight\">%s</span> が変更されます";
$_lang["cm_enter_name_for_category"] = "新しいカテゴリーに対する名前を入力してください。";
$_lang["cm_category_x_exists"] = "カテゴリー <span class=\"highlight\">%s</span> はすでに存在します。";
$_lang["cm_category_x_saved_at_position_y"] = "新しいカテゴリー <span class=\"highlight\">%s</span> が <span class=\"highlight\">%s</span> で保存されました。";
$_lang["cm_category_x_moved_to_position_y"] = "カテゴリー <span class=\"highlight\">%s</span> がポジション <span class=\"highlight\">%s</span> に移動しました。";
$_lang["cm_category_x_deleted"] = "カテゴリー <span class=\"highlight\">%s</span> が削除されました。";
$_lang["cm_category_x_renamed_to_y"] = "カテゴリー <span class=\"highlight\">%s</span> が <span class=\"highlight\">%s</span> にリネームされました。";
$_lang["cm_translation_for_x_empty"] = "Translation for <span class=\"highlight\">%s</span> was empty";
$_lang["cm_translation_for_x_to_y_success"] = "Translation for <span class=\"highlight\">%s</span> to <span class=\"highlight\">%s</span> successfully saved";
$_lang["cm_save_new_sorting"] = "新しい順番を保存する";
$_lang["cm_translate_phrases"] = "Translate phrases";
$_lang["cm_translate_module_phrases"] = "Translate module-phrases";
$_lang["cm_native_phrase"] = "Native phrase";

$_lang["btn_view_options"] = '設定を表示';
$_lang["view_options_msg"] = 'エレメントの表示と一覧表示は「表示オプション」ボタンでカスタマイズできます。設定はHTML5のローカルストレージを使用してブラウザごとに保存および復元されます。';
$_lang["viewopts_title"] = '設定を表示';
$_lang["viewopts_cb_buttons"] = 'ボタン';
$_lang["viewopts_cb_descriptions"] = '説明';
$_lang["viewopts_cb_icons"] = 'アイコン';
$_lang["viewopts_radio_list"] = 'リスト';
$_lang["viewopts_radio_inline"] = 'インライン';
$_lang["viewopts_radio_flex"] = 'フレックス';
$_lang["viewopts_fontsize"] = 'フォントサイズ';
$_lang["viewopts_cb_alltabs"] = 'すべてのタブ';

$_lang['email_sender_method'] = 'メッセージの送り主';
$_lang['auto'] = '自動検出';
$_lang['use_emailsender'] = ' [(emailsender)] の値を使う';
$_lang['email_sender_method_message'] = 'メッセージの送り主。これは通常、受信者によってReturn-Pathヘッダーに変換され、またこのアドレスはバウンスの送信先となります。ほとんどの場合、自動検出が機能します。';

$_lang['login_form_position_title'] = 'ログインフォームのポジション';
$_lang['login_form_position_left'] = '左部';
$_lang['login_form_position_center'] = '中央';
$_lang['login_form_position_right'] = '右部';
$_lang["login_form_style"] = 'ログインフォームのスタイル：';
$_lang["login_form_style_dark"] = '暗い（dark）';
$_lang["login_form_style_light"] = '明るい（light）';
$_lang['login_logo_title'] = 'ログインページのロゴ画像';
$_lang['login_logo_message'] = 'ログインページのロゴ画像の推奨幅：360px、形式：PNG（.png）';
$_lang['login_bg_title'] = 'ログインページの背景画像';
$_lang['login_bg_message'] = 'ログインページの背景画像の推奨幅：1920px  ';

$_lang['manager_menu_position_title'] = 'メインメニューの位置';
$_lang['manager_menu_position_top'] = '上部';
$_lang['manager_menu_position_left'] = '左部';

$_lang['invalid_event_response'] = 'この %s の出力は無効です';

$_lang['chunk_processor'] = 'チャンクを処理するクラス';

$_lang["permission_title"] = 'パーミッションの作成 / 編集';
$_lang["groups_permission_title"] = 'カテゴリーの作成 / 編集';
$_lang["lang_key_desc"] = '配列$_langから言語のキーを設定';
$_lang["key_desc"] = 'チェックしたパーミッションに対するキー';

$_lang["setting_from_file"] = '<strong class="text-danger">Parameter value is defined in core/custom/config/cms/settings</strong>';
$_lang['disable'] = 'Disable';
$_lang['enable'] = 'Enable';

return $_lang;
