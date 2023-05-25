# Small message board

## 简介

一个简单的留言板，用于sql注入漏洞 xss漏洞 任意删除漏洞的教学，使用远古的前后端混合技术开发，请不要部署在公网服务器上

## 环境

mysql >=5 & php >= 5

## 部署

1将demo.sql导入数据库

2修改config.php配置

## 目录描述

│  config.php //数据库连接配置
│  delete_gbook.php
│  demo1.sql
│  index.php //留言板首页
│
│      
└─ueditor //编辑器插件
    │  index.html
    │  ueditor.all.js
    │  ueditor.all.min.js
    │  ueditor.config.js
    │  ueditor.parse.js
    │  ueditor.parse.min.js
    │  
    ├─dialogs
    │  │  internal.js
    │  │  
    │  ├─anchor
    │  │      anchor.html
    │  │      
    │  ├─attachment
    │  │  │  attachment.css
    │  │  │  attachment.html
    │  │  │  attachment.js
    │  │  │  
    │  │  ├─fileTypeImages
    │  │  │      icon_chm.gif
    │  │  │      icon_default.png
    │  │  │      icon_doc.gif
    │  │  │      icon_exe.gif
    │  │  │      icon_jpg.gif
    │  │  │      icon_mp3.gif
    │  │  │      icon_mv.gif
    │  │  │      icon_pdf.gif
    │  │  │      icon_ppt.gif
    │  │  │      icon_psd.gif
    │  │  │      icon_rar.gif
    │  │  │      icon_txt.gif
    │  │  │      icon_xls.gif
    │  │  │      
    │  │  └─images
    │  │          alignicon.gif
    │  │          alignicon.png
    │  │          bg.png
    │  │          file-icons.gif
    │  │          file-icons.png
    │  │          icons.gif
    │  │          icons.png
    │  │          image.png
    │  │          progress.png
    │  │          success.gif
    │  │          success.png
    │  │          
    │  ├─background
    │  │  │  background.css
    │  │  │  background.html
    │  │  │  background.js
    │  │  │  
    │  │  └─images
    │  │          bg.png
    │  │          success.png
    │  │          
    │  ├─charts
    │  │  │  chart.config.js
    │  │  │  charts.css
    │  │  │  charts.html
    │  │  │  charts.js
    │  │  │  
    │  │  └─images
    │  │          charts0.png
    │  │          charts1.png
    │  │          charts2.png
    │  │          charts3.png
    │  │          charts4.png
    │  │          charts5.png
    │  │          
    │  ├─emotion
    │  │  │  emotion.css
    │  │  │  emotion.html
    │  │  │  emotion.js
    │  │  │  
    │  │  └─images
    │  │          0.gif
    │  │          bface.gif
    │  │          cface.gif
    │  │          fface.gif
    │  │          jxface2.gif
    │  │          neweditor-tab-bg.png
    │  │          tface.gif
    │  │          wface.gif
    │  │          yface.gif
    │  │          
    │  ├─gmap
    │  │      gmap.html
    │  │      
    │  ├─help
    │  │      help.css
    │  │      help.html
    │  │      help.js
    │  │      
    │  ├─image
    │  │  │  image.css
    │  │  │  image.html
    │  │  │  image.js
    │  │  │  
    │  │  └─images
    │  │          alignicon.jpg
    │  │          bg.png
    │  │          icons.gif
    │  │          icons.png
    │  │          image.png
    │  │          progress.png
    │  │          success.gif
    │  │          success.png
    │  │          
    │  ├─insertframe
    │  │      insertframe.html
    │  │      
    │  ├─link
    │  │      link.html
    │  │      
    │  ├─map
    │  │      map.html
    │  │      show.html
    │  │      
    │  ├─music
    │  │      music.css
    │  │      music.html
    │  │      music.js
    │  │      
    │  ├─preview
    │  │      preview.html
    │  │      
    │  ├─scrawl
    │  │  │  scrawl.css
    │  │  │  scrawl.html
    │  │  │  scrawl.js
    │  │  │  
    │  │  └─images
    │  │          addimg.png
    │  │          brush.png
    │  │          delimg.png
    │  │          delimgH.png
    │  │          empty.png
    │  │          emptyH.png
    │  │          eraser.png
    │  │          redo.png
    │  │          redoH.png
    │  │          scale.png
    │  │          scaleH.png
    │  │          size.png
    │  │          undo.png
    │  │          undoH.png
    │  │          
    │  ├─searchreplace
    │  │      searchreplace.html
    │  │      searchreplace.js
    │  │      
    │  ├─snapscreen
    │  │      snapscreen.html
    │  │      
    │  ├─spechars
    │  │      spechars.html
    │  │      spechars.js
    │  │      
    │  ├─table
    │  │      dragicon.png
    │  │      edittable.css
    │  │      edittable.html
    │  │      edittable.js
    │  │      edittd.html
    │  │      edittip.html
    │  │      
    │  ├─template
    │  │  │  config.js
    │  │  │  template.css
    │  │  │  template.html
    │  │  │  template.js
    │  │  │  
    │  │  └─images
    │  │          bg.gif
    │  │          pre0.png
    │  │          pre1.png
    │  │          pre2.png
    │  │          pre3.png
    │  │          pre4.png
    │  │          
    │  ├─video
    │  │  │  video.css
    │  │  │  video.html
    │  │  │  video.js
    │  │  │  
    │  │  └─images
    │  │          bg.png
    │  │          center_focus.jpg
    │  │          file-icons.gif
    │  │          file-icons.png
    │  │          icons.gif
    │  │          icons.png
    │  │          image.png
    │  │          left_focus.jpg
    │  │          none_focus.jpg
    │  │          progress.png
    │  │          right_focus.jpg
    │  │          success.gif
    │  │          success.png
    │  │          
    │  ├─webapp
    │  │      webapp.html
    │  │      
    │  └─wordimage
    │          fClipboard_ueditor.swf
    │          imageUploader.swf
    │          tangram.js
    │          wordimage.html
    │          wordimage.js
    │          
    ├─lang
    │  ├─en
    │  │  │  en.js
    │  │  │  
    │  │  └─images
    │  │          addimage.png
    │  │          alldeletebtnhoverskin.png
    │  │          alldeletebtnupskin.png
    │  │          background.png
    │  │          button.png
    │  │          copy.png
    │  │          deletedisable.png
    │  │          deleteenable.png
    │  │          listbackground.png
    │  │          localimage.png
    │  │          music.png
    │  │          rotateleftdisable.png
    │  │          rotateleftenable.png
    │  │          rotaterightdisable.png
    │  │          rotaterightenable.png
    │  │          upload.png
    │  │          
    │  └─zh-cn
    │      │  zh-cn.js
    │      │  
    │      └─images
    │              copy.png
    │              localimage.png
    │              music.png
    │              upload.png
    │              
    ├─php
    │  │  action_crawler.php
    │  │  action_list.php
    │  │  action_upload.php
    │  │  config.json
    │  │  controller.php
    │  │  Uploader.class.php
    │  │  
    │  └─upload
    │      └─image
    │          └─20230406
    │                  1680716808935760.png
    │                  1680716838128906.jpg
    │                  1680717371113570.jpg
    │                  1680717485678504.jpg
    │                  1680787618248565.jpg
    │                  
    ├─themes
    │  │  iframe.css
    │  │  
    │  └─default
    │      │  dialogbase.css
    │      │  
    │      ├─css
    │      │      ueditor.css
    │      │      ueditor.min.css
    │      │      
    │      └─images
    │              anchor.gif
    │              arrow.png
    │              arrow_down.png
    │              arrow_up.png
    │              button-bg.gif
    │              cancelbutton.gif
    │              charts.png
    │              cursor_h.gif
    │              cursor_h.png
    │              cursor_v.gif
    │              cursor_v.png
    │              dialog-title-bg.png
    │              filescan.png
    │              highlighted.gif
    │              icons-all.gif
    │              icons.gif
    │              icons.png
    │              loaderror.png
    │              loading.gif
    │              lock.gif
    │              neweditor-tab-bg.png
    │              pagebreak.gif
    │              scale.png
    │              sortable.png
    │              spacer.gif
    │              sparator_v.png
    │              table-cell-align.png
    │              tangram-colorpicker.png
    │              toolbar_bg.png
    │              unhighlighted.gif
    │              upload.png
    │              videologo.gif
    │              word.gif
    │              wordpaste.png
    │              
    └─third-party
        │  jquery-1.10.2.js
        │  jquery-1.10.2.min.js
        │  jquery-1.10.2.min.map
        │  xss.min.js
        │  
        ├─codemirror
        │      codemirror.css
        │      codemirror.js
        │      
        ├─highcharts
        │  │  highcharts-more.js
        │  │  highcharts-more.src.js
        │  │  highcharts.js
        │  │  highcharts.src.js
        │  │  
        │  ├─adapters
        │  │      mootools-adapter.js
        │  │      mootools-adapter.src.js
        │  │      prototype-adapter.js
        │  │      prototype-adapter.src.js
        │  │      standalone-framework.js
        │  │      standalone-framework.src.js
        │  │      
        │  ├─modules
        │  │      annotations.js
        │  │      annotations.src.js
        │  │      canvas-tools.js
        │  │      canvas-tools.src.js
        │  │      data.js
        │  │      data.src.js
        │  │      drilldown.js
        │  │      drilldown.src.js
        │  │      exporting.js
        │  │      exporting.src.js
        │  │      funnel.js
        │  │      funnel.src.js
        │  │      heatmap.js
        │  │      heatmap.src.js
        │  │      map.js
        │  │      map.src.js
        │  │      no-data-to-display.js
        │  │      no-data-to-display.src.js
        │  │      
        │  └─themes
        │          dark-blue.js
        │          dark-green.js
        │          gray.js
        │          grid.js
        │          skies.js
        │          
        ├─snapscreen
        │      UEditorSnapscreen.exe
        │      
        ├─SyntaxHighlighter
        │      shCore.js
        │      shCoreDefault.css
        │      
        ├─video-js
        │  │  video-js.css
        │  │  video-js.min.css
        │  │  video-js.swf
        │  │  video.dev.js
        │  │  video.js
        │  │  
        │  └─font
        │          vjs.eot
        │          vjs.svg
        │          vjs.ttf
        │          vjs.woff
        │          
        ├─webuploader
        │      Uploader.swf
        │      webuploader.css
        │      webuploader.custom.js
        │      webuploader.custom.min.js
        │      webuploader.flashonly.js
        │      webuploader.flashonly.min.js
        │      webuploader.html5only.js
        │      webuploader.html5only.min.js
        │      webuploader.js
        │      webuploader.min.js
        │      webuploader.withoutimage.js
        │      webuploader.withoutimage.min.js
        │      
        └─zeroclipboard
                ZeroClipboard.js
                ZeroClipboard.min.js
                ZeroClipboard.swf
                


###关于作者
CSDN   @东京没有下雨天
GitHub @HolaAsuka

###更新日志
暂无