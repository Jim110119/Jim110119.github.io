<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

// 定义统计文件路径
$statsFile = __DIR__ . '/../data/stats.json';

// 确保data目录存在
if (!file_exists(dirname($statsFile))) {
    mkdir(dirname($statsFile), 0755, true);
}

// 初始化统计文件（如果不存在）
if (!file_exists($statsFile)) {
    $initialData = [
        'visits' => 0,
        'downloads' => [
            'v1.2.0' => 0,
            'v1.1.0' => 0,
            'v1.0.0' => 0
        ],
        'last_updated' => date('c')
    ];
    file_put_contents($statsFile, json_encode($initialData, JSON_PRETTY_PRINT));
}

// 获取当前统计
$stats = json_decode(file_get_contents($statsFile), true);

// 处理不同的操作类型
$action = $_GET['action'] ?? $_POST['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // 获取统计
    echo json_encode([
        'success' => true,
        'data' => $stats
    ]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 更新统计
    $type = $_POST['type'] ?? '';
    $version = $_POST['version'] ?? '';
    
    if ($type === 'visit') {
        // 增加访问次数
        $stats['visits']++;
        $stats['last_updated'] = date('c');
        
        file_put_contents($statsFile, json_encode($stats, JSON_PRETTY_PRINT));
        
        echo json_encode([
            'success' => true,
            'visits' => $stats['visits']
        ]);
    } elseif ($type === 'download' && $version) {
        // 增加下载次数
        if (isset($stats['downloads'][$version])) {
            $stats['downloads'][$version]++;
            $stats['last_updated'] = date('c');
            
            file_put_contents($statsFile, json_encode($stats, JSON_PRETTY_PRINT));
            
            echo json_encode([
                'success' => true,
                'version' => $version,
                'downloads' => $stats['downloads'][$version]
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'error' => '无效的版本号'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'error' => '无效的请求参数'
        ]);
    }
}
?>
