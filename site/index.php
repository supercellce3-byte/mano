<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player do Blogger</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-width: 1000px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        
        .player-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            background: #000;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .player-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .video-info {
            background: #f7fafc;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }
        
        .info-item {
            background: white;
            padding: 12px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
            margin-bottom: 10px;
            word-break: break-all;
        }
        
        .info-item label {
            display: block;
            color: #667eea;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        
        button {
            background: #667eea;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background 0.3s;
            margin: 10px 0;
        }
        
        button:hover {
            background: #5a67d8;
        }
        
        .direct-link {
            background: #48bb78;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎬 Player do Blogger</h1>
        
        <!-- Player do YouTube direto com o ID do vídeo -->
        <div class="player-container">
            <iframe 
                src="https://www.youtube.com/embed/gIavnMxZbps?autoplay=1&enablejsapi=1" 
                frameborder="0" 
                allowfullscreen 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
            </iframe>
        </div>
        
        <button onclick="abrirVideo()">📺 Abrir no YouTube</button>
        <button onclick="mostrarInfo()">ℹ️ Mostrar Informações</button>
        
        <div class="video-info" id="info" style="display: none;">
            <h2>📋 Informações do Vídeo</h2>
            <div class="info-item">
                <label>ID do Vídeo</label>
                <span>gIavnMxZbps</span>
            </div>
            <div class="info-item">
                <label>Link do Player</label>
                <a href="https://www.youtube.com/embed/gIavnMxZbps" target="_blank">
                    https://www.youtube.com/embed/gIavnMxZbps
                </a>
            </div>
            <div class="info-item">
                <label>Thumbnail</label>
                <a href="https://i9.ytimg.com/vi_blogger/gIavnMxZbps/1.jpg" target="_blank">
                    https://i9.ytimg.com/vi_blogger/gIavnMxZbps/1.jpg
                </a>
            </div>
            <div class="info-item">
                <label>Link Original do Blogger</label>
                <span style="font-size: 12px;">AD6v5dxgAOCVdWiQvVSR1hWjI9I89UtZXRXuFwDnHLsFcxCaD3wTADCL3-lwSvojOBqkorjxLqyojmWpdKXJ6sPgxVFUDsmHW3Q8EtCGioE43V86BeE39RiDcfJmFLhjJanle3618abT</span>
            </div>
        </div>
        
        <a href="https://www.youtube.com/watch?v=gIavnMxZbps" target="_blank" class="direct-link" style="margin-top: 15px;">
            🔗 Link Direto para o YouTube
        </a>
    </div>

    <script>
        function mostrarInfo() {
            const info = document.getElementById('info');
            info.style.display = info.style.display === 'none' ? 'block' : 'none';
        }
        
        function abrirVideo() {
            window.open('https://www.youtube.com/watch?v=gIavnMxZbps', '_blank');
        }
        
        // Tentar extrair mais informações do link original
        console.log('Player carregado com ID: gIavnMxZbps');
    </script>
</body>
</html>