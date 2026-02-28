<!DOCTYPE html>
<html>
<head>
    <title>Jim110119 - 应用下载</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* 全局样式 */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Microsoft YaHei', 'Segoe UI', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            padding: 40px;
            margin-top: 20px;
        }
        
        /* 顶部用户信息 */
        .user-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
        }
        
        .username {
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .page-title {
            font-size: 36px;
            font-weight: bold;
            color: #1e88e5;
            margin-bottom: 15px;
            text-align: center;
        }
        
        /* 版本卡片容器 */
        .versions-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin: 40px 0;
        }
        
        /* 单个版本卡片 */
        .version-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 25px;
            width: 100%;
            max-width: 350px;
            border: 1px solid #eaeaea;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .version-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }
        
        /* 版本标题 */
        .version-title {
            font-size: 22px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e8e8e8;
            text-align: center;
        }
        
        /* 版本信息样式 */
        .version-info {
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 8px 0;
            border-bottom: 1px dashed #f0f0f0;
        }
        
        .info-label {
            font-weight: bold;
            color: #555;
        }
        
        .info-value {
            color: #333;
            font-weight: 600;
        }
        
        /* 版本描述 */
        .version-description {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 15px;
            line-height: 1.5;
            color: #555;
            border-left: 4px solid #4caf50;
        }
        
        /* 下载按钮 */
        .download-btn {
            display: block;
            width: 100%;
            padding: 14px;
            background-color: #4caf50;
            color: white;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-top: 15px;
        }
        
        .download-btn:hover {
            background-color: #388e3c;
        }
        
        .download-btn i {
            margin-right: 8px;
        }
        
        /* 安装说明 */
        .installation-section {
            margin-top: 50px;
            padding: 25px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        
        .section-title {
            font-size: 28px;
            font-weight: bold;
            color: #7b1fa2;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .steps-list {
            list-style-type: none;
            padding: 0;
        }
        
        .step-item {
            font-size: 18px;
            padding: 12px 0;
            padding-left: 40px;
            position: relative;
            margin-bottom: 10px;
        }
        
        .step-item:before {
            content: counter(step);
            counter-increment: step;
            position: absolute;
            left: 0;
            top: 10px;
            background-color: #1e88e5;
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            text-align: center;
            line-height: 28px;
            font-weight: bold;
        }
        
        .steps-list {
            counter-reset: step;
        }
        
        /* 重要提示 */
        .important-note {
            font-size: 16px;
            font-weight: bold;
            color: #d32f2f;
            background-color: #ffebee;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid #d32f2f;
            margin-top: 30px;
            display: flex;
            align-items: center;
        }
        
        .important-note:before {
            content: "⚠️";
            font-size: 20px;
            margin-right: 15px;
        }
        
        /* 响应式设计 */
        @media (max-width: 768px) {
            .versions-container {
                flex-direction: column;
                align-items: center;
            }
            
            .version-card {
                max-width: 100%;
            }
            
            .container {
                padding: 20px;
            }
            
            .page-title {
                font-size: 28px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- 顶部用户信息 -->
        <div class="user-header">
            <div class="username">Jim110119</div>
            <h1 class="page-title">欢迎下载我的应用</h1>
        </div>
        
        <!-- 版本下载区域 -->
        <div class="versions-container">
            <!-- 版本1 -->
            <div class="version-card">
                <h3 class="version-title">稳定版</h3>
                <div class="version-info">
                    <div class="info-item">
                        <span class="info-label">版本：</span>
                        <span class="info-value">1.2.0</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">大小：</span>
                        <span class="info-value">68 MB</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">发布日期：</span>
                        <span class="info-value">2024-03-15</span>
                    </div>
                </div>
                <div class="version-description">
                    此版本为稳定版本，修复了已知的所有Bug，性能优化，建议所有用户下载使用。包含完整功能，支持Windows 10/11系统。
                </div>
                <a href="app-stable-v1.2.0.exe" class="download-btn">
                    <i class="fas fa-download"></i> 下载稳定版
                </a>
            </div>
            
            <!-- 版本2 -->
            <div class="version-card">
                <h3 class="version-title">测试版</h3>
                <div class="version-info">
                    <div class="info-item">
                        <span class="info-label">版本：</span>
                        <span class="info-value">2.0.0-beta</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">大小：</span>
                        <span class="info-value">75 MB</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">发布日期：</span>
                        <span class="info-value">2024-03-20</span>
                    </div>
                </div>
                <div class="version-description">
                    测试版本，包含新功能和实验性特性。适合喜欢尝鲜的用户，可能存在不稳定情况，不建议在生产环境中使用。
                </div>
                <a href="app-beta-v2.0.0.exe" class="download-btn">
                    <i class="fas fa-flask"></i> 下载测试版
                </a>
            </div>
            
            <!-- 版本3 -->
            <div class="version-card">
                <h3 class="version-title">轻量版</h3>
                <div class="version-info">
                    <div class="info-item">
                        <span class="info-label">版本：</span>
                        <span class="info-value">1.1.5-lite</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">大小：</span>
                        <span class="info-value">42 MB</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">发布日期：</span>
                        <span class="info-value">2024-03-10</span>
                    </div>
                </div>
                <div class="version-description">
                    轻量版本，占用资源少，启动速度快。保留了核心功能，适合配置较低的设备或只需基本功能的用户。
                </div>
                <a href="app-lite-v1.1.5.exe" class="download-btn">
                    <i class="fas fa-bolt"></i> 下载轻量版
                </a>
            </div>
        </div>
        
        <!-- 安装说明 -->
        <div class="installation-section">
            <h2 class="section-title">安装说明</h2>
            <ol class="steps-list">
                <li class="step-item">点击上方对应版本的下载按钮，选择适合您需求的版本</li>
                <li class="step-item">下载完成后，运行安装程序，选择安装路径</li>
                <li class="step-item">按照提示完成安装，建议重启计算机以确保所有组件正确加载</li>
            </ol>
        </div>
        
        <!-- 重要提示 -->
        <div class="important-note">
            重要提示：请确保您的设备满足系统要求，并关闭杀毒软件后再安装。如有任何问题，请查看压缩包内的README文件或联系技术支持。
        </div>
    </div>
    
    <script>
        // 简单的点击统计（可选功能）
        document.querySelectorAll('.download-btn').forEach(button => {
            button.addEventListener('click', function() {
                const version = this.textContent.trim();
                console.log(`用户下载了: ${version}`);
                // 这里可以添加统计代码，如Google Analytics事件跟踪
            });
        });
    </script>
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
