<?php


function dd($value)
{
    echo "<pre style='background-color:#222; font-size:16px; color:#fff'>";
    var_dump($value);
    echo "</pre>";
    die();
}

function uri($path)
{
    if ($_SERVER['REQUEST_URI'] == $path)
        return "md:text-blue-400";
}




function getDirectorySize($directory)
{
    $totalSize = 0;

    // Abre o diretório
    $dir = opendir($directory);

    // Percorre todos os arquivos no diretório
    while (($file = readdir($dir)) !== false) {
        $filePath = $directory . '/' . $file;

        // Verifica se é um arquivo regular
        if (is_file($filePath)) {
            // Adiciona o tamanho do arquivo ao total
            $totalSize += filesize($filePath);
        }
    }

    // Fecha o diretório
    closedir($dir);

    // Converte bytes para megabytes
    $totalSizeMB = round($totalSize / (1024 * 1024), 2);

    return $totalSizeMB;
}
