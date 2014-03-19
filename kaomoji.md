ubuntu日文输入法anthy顔文字字典设置
===================================

### 参考:
<http://ar156.dip.jp/tiempo/publish/104>

### 需要软件： 
ruby、nkf

### 步骤： 
1.  #### 备份原字典

    `anthy-dic-tool --utf8 --dump > backup.txt`

2.  #### 下载顔文字字典

    <http://www.facemark.jp/download.htm>

    > 一括登録&単語登録用
    >      
    > 一覧テキストファイル
    >      
    > 顔文字一覧　テキスト辞書インターネット対応

3.  #### 新建kao.rb

    > \# encoding: utf-8
    >     
    > \# original
    >     
    > \# orange kaomoji list -> anthy dictionary converter
    >     
    > \# 2005/12/07 S.Okano
    >     
    >     
    > while line = gets
    >     
    > > line = line.gsub(/\r\n/, "\n")
    > > 
    > > str = line.split(/\t/)
    > > 
    > > next unless str[2]
    > > 
    > > next unless str[2].chop == "顔文字"
    > > 
    > > print str[0]
    > > 
    > > \# 単語の出現頻度は 1
    > > 
    > > print " 1 "
    > > 
    > > puts str[1].gsub(/ /, "\\ ")
    > > 
    > > \# 名詞でいいかな?
    > > 
    > > puts "品詞\t=\t人名"
    > > 
    > > puts ""
    >     
    > end

4.  #### 生成字典

    `nkf -u list.txt | ruby kao.rb | anthy-dic-tool --utf8 --append`

5.  #### 导入

    `nkf -u list.txt | ruby kao.rb | anthy-dic-tool --utf8 --load`

6.  #### 更新字典

    `sudo update-anthy-dics`  
