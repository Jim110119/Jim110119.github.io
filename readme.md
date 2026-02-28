<!DOCTYPE html>
<html>
<head>
    <title>我的应用下载</title>
    <style>
        /* 全局样式 */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* 标题样式 */
        h1 {
            font-size: 36px;          /* 大字号 */
            font-weight: bold;        /* 加粗 */
            color: #1e88e5;           /* 蓝色 */
            text-align: center;
            margin-bottom: 10px;
        }
        
        /* 版本信息样式 */
        .version-info {
            font-size: 18px;          /* 中字号 */
            font-weight: 600;         /* 半粗体 */
            color: #f57c00;           /* 橙色 */
            text-align: center;
            margin-bottom: 30px;
        }
        
        /* 下载按钮容器 */
        .download-buttons {
            text-align: center;
            margin: 30px 0;
        }
        
        /* 按钮样式 */
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 24px;
            font-size: 16px;          /* 按钮字号 */
            font-weight: bold;        /* 按钮加粗 */
            color: white;             /* 白色文字 */
            background-color: #4caf50; /* 绿色背景 */
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        /* 按钮悬停效果 */
        .btn:hover {
            background-color: #388e3c; /* 深绿色 */
        }
        
        /* 不同系统的按钮颜色 */
        .btn.windows {
            background-color: #0078d7; /* Windows蓝 */
        }
        
        .btn.mac {
            background-color: #555555; /* macOS灰 */
        }
        
        .btn.android {
            background-color: #3ddc84; /* Android绿 */
        }
        
        /* 安装说明标题 */
        h2 {
            font-size: 28px;          /* 大字号 */
            font-weight: bold;        /* 加粗 */
            color: #7b1fa2;           /* 紫色 */
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
            margin-top: 40px;
        }
        
        /* 安装步骤样式 */
        .installation-steps {
            font-size: 18px;          /* 中字号 */
        }
        
        .installation-steps p {
            padding: 8px 0;
            border-left: 4px solid #1e88e5;
            padding-left: 15px;
            margin: 10px 0;
        }
        
        /* 重要提示样式 */
        .important-note {
            font-size: 16px;
            font-weight: bold;
            color: #d32f2f;           /* 红色 */
            background-color: #ffebee; /* 浅红背景 */
            padding: 15px;
            border-radius: 5px;
            border-left: 5px solid #d32f2f;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>欢迎下载我的应用</h1>
    <p class="version-info">版本：<strong>1.0.0</strong> | 大小：<strong>50MB</strong></p>
    
    <div class="download-buttons">
        <a href="app-windows.exe" class="btn windows">Windows版下载</a>
        <a href="app-mac.dmg" class="btn mac">macOS版下载</a>
        <a href="app-android.apk" class="btn android">Android版下载</a>
    </div>
    
    <h2>安装说明</h2>
    <div class="installation-steps">
        <p>1. 点击上方对应系统的下载按钮</p>
        <p>2. 下载完成后运行安装程序</p>
        <p>3. 按照提示完成安装</p>
    </div>
    
    <div class="important-note">
        ⚠️ 重要提示：请确保您的设备满足系统要求，并关闭杀毒软件后再安装。
    </div>
</body>
</html>

## 功能特色：
1.  支持位置拖拽与桌面歌词多行滚动，最多11行；
2.  支持字号大小自定义，最大46号；
3.  支持当前歌词与前后歌词自定义颜色；
4.  支持锁定穿透功能；
5.  支持联网歌词。
6.  支持时间补偿。

## 已知bug：
零听广播使用独家协议，只能获取到歌名信息，获取不到播放进度，所以使用零听播放时，拖进度条歌词会失配，此时按暂停再播放歌词就会跳到播放位置。

## 使用说明：
1.  本应用适配21-23款零跑C01/C11。
2.  老款车机仅限SAF方式访问U盘，本应用仅做U盘适配，请将本地歌词存储至U盘（根目录/子目录），歌词文件请与歌曲同名，命名格式为 `歌手 - 歌名.lrc`。
3.  建议优先使用本地歌词，联网爬取无人维护可能会失效，若本地与联网均检索不到可用歌词，则只悬浮歌名，此时请自行切换可用api。因反爬虫技术更新，未来可能所有url都不可用。
4.  本应用监听各媒体app公共广播，无论你使用网易云、酷狗等音乐播放器，或者哔哩哔哩等媒体播放器，都会监听并悬浮曲目。若你在观看视频，请手动关闭浮窗。

## 开发者声明：
1.  本应用为车主调试开发，旨在解决零跑车机第三方app不能访问U盘、QQ乐不能扫描U盘歌曲，实现本地+桌面悬浮歌词的痛点，一气之下自己开发了USF访问U盘的悬浮歌词插件（穷啊，不想买QQ音乐会员）。作者不保证软件稳定运行，仅提供爱好者免费使用，若出现任何运行异常，不承担任何责任，无后续维护，严禁商用与转售。
2.  关注后续更新，请联系开发者：**【小红书号：4421157220】** **【抖音号：ljm19743】**
