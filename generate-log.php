<?php
$arrayLogs = [
    "INFO PROC 'Execução iniciada da procedure SP_SyncCHeckoutProds'",
    "WARNING FAT 'Valor do conteúdo = 0'",
    "INFO CNT 'Conteúdo 11234 entregue com sucesso'",
    "INFO CNT 'Conteúdo 6525 com sucesso'",
    "INFO FAT 'Fatura 1234 alterada. Dt Venc: 12/03/2018 para 15/03/2018'",
    "ERROR FAT 'Erro no processamento da fatura 443245'",
    "ALERT FAT 'Tempo de carregamento Checkout Sun superior a 2s. Total: 5.66s",
    "ERROR PROC 'Procedure SP_SyncCHeckoutProds retornou erro: conteudo inexistente",
];

while (true){

    $log = [date("Y-m-d H:i:s.u"), $arrayLogs[array_rand($arrayLogs, 1)]];
    
    file_put_contents("logzz.log", implode(" ",$log) . PHP_EOL, FILE_APPEND);
    echo "Log gerado" . PHP_EOL;
    sleep(2);
}




