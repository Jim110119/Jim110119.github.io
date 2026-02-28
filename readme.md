<![CDATA[<!DOCTYPE html>

<html lang="zh-CN">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Jim110119 - 应用下载中心</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css
">

<style>

/* 基础样式重置 */

{

margin: 0;

padding: 0;

box-sizing: border-box;

}

body {

font-family: 'Segoe UI', 'Microsoft YaHei', Arial, sans-serif;

line-height: 1.6;

color: #333;

background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);

min-height: 100vh;

padding: 20px;

}

.container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* 头部区域 */
.header {
    background: linear-gradient(90deg, #1e88e5 0%, #0d47a1 100%);
    color: white;
    padding: 30px 25px;
    text-align: center;
    border-bottom: 5px solid #ff9800;
}

.user-info {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
}

.container {
    max-width: 1000px;
    margin: 0 auto;
    background-color: white;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* 头部区域 */
.header {
    background: linear-gradient(90deg, #1e88e5 0%, #0d47a1 100%);
    color: white;
    padding: 30px 25px;
    text-align: center;
    border-bottom: 5px solid #ff9800;
}

.user-info {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 12px;
}

.user-icon {
    background-color: white;
    color: #1e88e5;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    font-size: 22px;
    font-weight: bold;
}

.username {
    font-size: 26px;
    font-weight: 700;
    letter-spacing: 1px;
}

.page-title {
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 8px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

.page-subtitle {
    font-size: 16px;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

/* 版本容器 - 更紧凑 */
.versions-container {
    padding: 30px 25px;
}

/* 单个版本块 - 更紧凑 */
.version-block {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
    overflow: hidden;
    border-left: 5px solid #1e88e5;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.version-block:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.version-block.stable {
    border-left-color: #4caf50;
}

.version-block.beta {
    border-left-color: #ff9800;
}

.version-block.lite {
    border-left-color: #9c27b0;
}

/* 版本头部 - 更紧凑 */
.version-header {
    background: linear-gradient(to right, #f8f9fa, #f1f3f5);
    padding: 15px 25px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #eaeaea;
}

.version-title {
    font-size: 22px;
    font-weight: 700;
    color: #2c3e50;
}

.version-badge {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-left: 12px;
}

.badge-stable {
    background-color: #4caf50;
    color: white;
}

.badge-beta {
    background-color: #ff9800;
    color: white;
}

.badge-lite {
    background-color: #9c27b0;
    color: white;
}

/* 版本内容 - 更紧凑 */
.version-content {
    padding: 20px 25px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

/* 版本信息列 - 简化后更紧凑 */
.version-info-col {
    flex: 1;
    min-width: 250px;
    padding-right: 25px;
}

/* 版本号信息项 */
.version-info {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding: 10px 15px;
    background-color: #f8f9fa;
    border-radius: 8px;
    border-left: 4px solid #1e88e5;
}

.info-label {
    font-size: 15px;
    color: #666;
    font-weight: 600;
    margin-right: 10px;
    min-width: 70px;
}

.info-value {
    font-size: 18px;
    font-weight: 700;
    color: #2c3e50;
}

/* 版本描述 - 更紧凑 */
.version-description {
    background-color: #f1f8ff;
    padding: 15px;
    border-radius: 8px;
    border-left: 4px solid #1e88e5;
    line-height: 1.6;
    color: #444;
    font-size: 15px;
}

.description-title {
    font-size: 15px;
    font-weight: 700;
    color: #1e88e5;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
}

.description-title i {
    margin-right: 6px;
}

/* 下载列 - 更紧凑 */
.download-col {
    flex: 0 0 220px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 8px;
    text-align: center;
}

.download-icon {
    font-size: 40px;
    color: #1e88e5;
    margin-bottom: 15px;
}

.file-size {
    font-size: 18px;
    font-weight: 700;
    color: #333;
    margin-bottom: 8px;
}

.file-size-label {
    font-size: 13px;
    color: #666;
}

/* 下载按钮 */
.download-btn {
    display: inline-block;
    width: 100%;
    padding: 14px 20px;
    background: linear-gradient(90deg, #1e88e5 0%, #0d47a1 100%);
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 700;
    text-align: center;
    margin-top: 15px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(30, 136, 229, 0.3);
}

.download-btn:hover {
    background: linear-gradient(90deg, #0d47a1 0%, #1e88e5 100%);
    box-shadow: 0 6px 15px rgba(30, 136, 229, 0.4);
    transform: translateY(-2px);
}

.download-btn i {
    margin-right: 8px;
}

/* 安装说明 - 更紧凑 */
.installation-section {
    padding: 25px;
    background-color: #f8f9fa;
    margin: 0 25px 25px;
    border-radius: 12px;
}

.section-title {
    font-size: 26px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    text-align: center;
    padding-bottom: 12px;
    border-bottom: 2px solid #eaeaea;
}

.steps-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
}

.step {
    flex: 1;
    min-width: 200px;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    border-top: 4px solid #1e88e5;
}

.step-number {
    display: inline-block;
    width: 35px;
    height: 35px;
    background-color: #1e88e5;
    color: white;
    border-radius: 50%;
    line-height: 35px;
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 12px;
}

.step-title {
    font-size: 17px;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 8px;
}

.step-desc {
    color: #666;
    font-size: 14px;
}

/* 页脚 */
.footer {
    background-color: #2c3e50;
    color: white;
    text-align: center;
    padding: 20px;
    font-size: 14px;
}

.footer p {
    margin-bottom: 8px;
}

.footer a {
    color: #4fc3f7;
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}

/* 响应式设计 */
@media (max-width: 768px) {
    .version-content {
        flex-direction: column;
    }
    
    .version-info-col {
        padding-right: 0;
        margin-bottom: 20px;
    }
    
    .download-col {
        width: 100%;
    }
    
    .header {
        padding: 25px 20px;
    }
    
    .page-title {
        font-size: 28px;
    }
    
    .version-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .version-badge {
        margin-left: 0;
        margin-top: 8px;
    }
    
    .steps-container {
        flex-direction: column;
    }
    
    .step {
        min-width: 100%;
    }
}

@media (max-width: 480px) {
    .container {
        border-radius: 10px;
    }
    
    .header {
        padding: 20px 15px;
    }
    
    .versions-container {
        padding: 20px 15px;
    }
    
    .installation-section {
        margin: 0 15px 20px;
        padding: 20px 15px;
    }
    
    .page-title {
        font-size: 24px;
    }
    
    .username {
        font-size: 22px;
    }
}
</style>
