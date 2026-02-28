<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>零听悬浮歌词 - 下载中心</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', 'Microsoft YaHei', Arial, sans-serif;
      line-height: 1.5;
      color: #333;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      min-height: 100vh;
      padding: 10px;
      /* 移除所有 flex 相关属性，回归传统布局 */
      display: block;
    }

    .container {
      max-width: 1000px;
      margin: 0 auto;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      /* 移除 flex 属性 */
      display: block;
      position: relative; /* 添加相对定位 */
      min-height: auto; /* 移除固定高度 */
    }

    .header {
      background: linear-gradient(90deg, #1e88e5 0%, #0d47a1 100%);
      color: white;
      padding: 15px 20px;
      text-align: center;
      border-bottom: 3px solid #ff9800;
    }

    .page-title {
      font-size: 26px;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    .versions-container {
      padding: 15px;
      /* 移除 flex: 1 */
    }

    .version-block {
      background: white;
      border-radius: 8px;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
      margin-bottom: 10px;
      overflow: hidden;
      border-left: 4px solid #1e88e5;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .version-block:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .version-block:nth-child(1) {
      border-left-color: #4caf50;
    }

    .version-block:nth-child(2) {
      border-left-color: #ff9800;
    }

    .version-block:nth-child(3) {
      border-left-color: #9c27b0;
    }

    .version-content {
      padding: 8px 12px;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 10px;
    }

    .version-info-col {
      flex: 1;
      min-width: 220px;
    }

    .version-info {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 6px;
      padding: 4px 8px;
      background-color: #f8f9fa;
      border-radius: 6px;
      border-left: 3px solid #1e88e5;
    }

    .info-label {
      font-size: 13px;
      color: #666;
      font-weight: 600;
      margin-right: 8px;
    }

    .info-value {
      font-size: 15px;
      font-weight: 700;
      color: #2c3e50;
    }

    .file-size-info {
      font-size: 15px;
      font-weight: 700;
      color: #666;
      margin-left: 15px;
    }

    .version-description {
      background-color: #f1f8ff;
      padding: 8px;
      border-radius: 6px;
      border-left: 3px solid #1e88e5;
      color: #444;
      font-size: 13px;
      line-height: 1.4;
    }

    .download-col {
      flex: 0 0 140px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 6px 8px;
      background-color: #f9f9f9;
      border-radius: 6px;
      text-align: center;
    }

    .download-btn {
      display: inline-block;
      width: 100%;
      padding: 10px 10px;
      background: linear-gradient(90deg, #1e88e5 0%, #0d47a1 100%);
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 600;
      text-align: center;
      cursor: pointer;
      transition: all 0.2s ease;
      box-shadow: 0 3px 8px rgba(30, 136, 229, 0.2);
    }

    .download-btn:hover {
      background: linear-gradient(90deg, #0d47a1 0%, #1e88e5 100%);
      box-shadow: 0 5px 12px rgba(30, 136, 229, 0.3);
      transform: translateY(-1px);
    }

    .download-btn i {
      margin-right: 6px;
    }

    .download-count {
      margin-top: 6px;
      font-size: 11px;
      color: #666;
    }

    /* 评论区样式 - 关键修复 */
    .comments-container {
      padding: 20px 15px;
      background-color: #f8f9fa;
      border-top: 2px solid #1e88e5;
      /* 确保评论区有足够的底部间距 */
      margin-bottom: 10px;
      /* 清除之前的 flex 属性 */
      flex-shrink: 0;
      margin-top: 0;
    }

    .comments-title {
      font-size: 18px;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .comments-title i {
      color: #1e88e5;
    }

    .utterances-frame {
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      min-height: 300px;
      /* 确保 iframe 不会溢出 */
      width: 100%;
    }

    /* 页脚样式 - 关键修复 */
    .footer {
      background-color: #2c3e50;
      color: white;
      text-align: center;
      padding: 12px;
      font-size: 12px;
      /* 移除所有 flex 相关属性 */
      margin-top: 0;
      position: relative;
      z-index: 10; /* 提高层级，确保在最上方 */
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      /* 确保页脚在文档流中正常显示 */
      display: block;
      clear: both; /* 清除浮动 */
    }

    .footer p {
      margin-bottom: 4px;
    }

    .footer a {
      color: #4fc3f7;
      text-decoration: none;
      border-bottom: 1px dotted #4fc3f7;
    }

    .footer a:hover {
      text-decoration: underline;
      border-bottom: none;
    }

    .footer-disclaimer {
      margin-top: 6px;
      font-size: 10px;
      opacity: 0.8;
    }

    /* 移动端适配 */
    @media (max-width: 768px) {
      .version-content {
        flex-direction: column;
        gap: 6px;
      }
      
      .version-info-col {
        min-width: 100%;
      }
      
      .download-col {
        width: 100%;
        flex: none;
      }
      
      .page-title {
        font-size: 22px;
      }

      .comments-title {
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 8px;
      }
      
      .container {
        border-radius: 8px;
      }
      
      .versions-container {
        padding: 10px;
      }
      
      .page-title {
        font-size: 20px;
      }

      .comments-container {
        padding: 15px 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1 class="page-title">零听悬浮歌词</h1>
    </div>
    
    <!-- 版本信息区域 -->
    <div class="versions-container">
      <!-- 仪表版 -->
      <div class="version-block" data-version="stable">
        <div class="version-content">
          <div class="version-info-col">
            <div class="version-info">
              <div>
                <span class="info-label">版本号：</span>
                <span class="info-value">v1.2.0</span>
              </div>
              <span class="file-size-info">7.01 MB</span>
            </div>
            
            <div class="version-description">
              1. 新增仪表悬浮歌词投屏功能，可自定义字体大小、行数、位置，颜色与主屏歌词同步；
              2. 主屏歌词增加双行滚动选项。
            </div>
          </div>
          
          <div class="download-col">
            <a href="零听悬浮歌词 v1.2.0.apk" class="download-btn" data-version="stable">
              <i class="fas fa-download"></i> 立即下载
            </a>
            
            <div class="download-count" id="count-stable">
              <i class="fas fa-users"></i> 0 次下载
            </div>
          </div>
        </div>
      </div>
      
      <!-- 穿透版 -->
      <div class="version-block" data-version="beta">
        <div class="version-content">
          <div class="version-info-col">
            <div class="version-info">
              <div>
                <span class="info-label">版本号：</span>
                <span class="info-value">v1.1.0</span>
              </div>
              <span class="file-size-info">7.01 MB</span>
            </div>
            
            <div class="version-description">
              新增通知栏覆盖，可设置单行置于通知栏上方，需开启和保活无障碍权限。若不会保活，请使用上一版本。
            </div>
          </div>
          
          <div class="download-col">
            <a href="零听悬浮歌词 v1.1.0.apk" class="download-btn" data-version="beta">
              <i class="fas fa-download"></i> 立即下载
            </a>
            
            <div class="download-count" id="count-beta">
              <i class="fas fa-users"></i> 0 次下载
            </div>
          </div>
        </div>
      </div>
      
      <!-- 桌面版 -->
      <div class="version-block" data-version="lite">
        <div class="version-content">
          <div class="version-info-col">
            <div class="version-info">
              <div>
                <span class="info-label">版本号：</span>
                <span class="info-value">v1.0.0</span>
              </div>
              <span class="file-size-info">7.00 MB</span>
            </div>
            
            <div class="version-description">
              首版发布，支持桌面单行显示，多行滚动。
            </div>
          </div>
          
          <div class="download-col">
            <a href="app-lite-v1.1.5.exe" class="download-btn" data-version="lite">
              <i class="fas fa-download"></i> 立即下载
            </a>
            
            <div class="download-count" id="count-lite">
              <i class="fas fa-users"></i> 0 次下载
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 评论区 - 现在在版本信息下方，页脚上方 -->
    <div class="comments-container">
      <h3 class="comments-title">
        <i class="fas fa-comments"></i> 评论区
      </h3>
      <div class="utterances-frame">
        <script src="https://utteranc.es/client.js"
            repo="Jim110119/Jim110119.github.io"
            issue-term="pathname"
            theme="github-light"
            crossorigin="anonymous"
            async>
        </script>
      </div>
    </div>

    <!-- 页脚 - 现在在评论区下方 -->
    <div class="footer">
      <p>© 2026 <a href="https://Jim110119.github.io" target="_blank">Jim110119.github.io</a> | 零听悬浮歌词 | 所有版本均为免费下载使用</p>
      <p>如有问题或建议，请留言或联系：<a href="mailto:jiaming022@foxmail.com">jiaming022@foxmail.com</a></p>
      <p class="footer-disclaimer">注意：请从本页面下载，避免使用来路不明的其他版本</p>
    </div>
  </div>

  <script>
    // 初始化下载计数
    let downloadCounts = {
      stable: localStorage.getItem('downloadCount_stable') || 0,
      beta: localStorage.getItem('downloadCount_beta') || 0,
      lite: localStorage.getItem('downloadCount_lite') || 0
    };
    
    // 更新计数显示
    function updateCountDisplay() {
      document.getElementById('count-stable').textContent = `${downloadCounts.stable} 次下载`;
      document.getElementById('count-beta').textContent = `${downloadCounts.beta} 次下载`;
      document.getElementById('count-lite').textContent = `${downloadCounts.lite} 次下载`;
    }
    
    updateCountDisplay();

    // 下载按钮点击计数
    document.querySelectorAll('.download-btn').forEach(button => {
      button.addEventListener('click', function() {
        const version = this.dataset.version;
        downloadCounts[version] = Number(downloadCounts[version]) + 1;
        localStorage.setItem(`downloadCount_${version}`, downloadCounts[version]);
        updateCountDisplay();
      });
    });

    // 版本块悬浮效果
    document.querySelectorAll('.version-block').forEach(block => {
      block.addEventListener('mouseenter', () => block.style.zIndex = 10);
      block.addEventListener('mouseleave', () => block.style.zIndex = 1);
    });
  </script>
</body>
</html>
