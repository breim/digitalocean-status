digitalocean-status
===================

#### Monitoring digital ocean, trafic, memory usage and SSD usage.

Ok ok, tá uma porcaria o arquivo status.php(fiz em 20minutos), se quiser contribuir, dê um fork que agradecemos.


Instale as Bibliotecas necessárias

    $sudo apt-get install vnstat
  
    $sudo vnstat -u -i eth0
  
    $sudo vnstat -i eth0
  


    $sudo apt-get install curl





Crie um banco de dados em Mysql e importe os dados para o banco de arcorco com o arquivo tabela.sql

Não esqueça de editar o arquivo status.php, a sua conexão do banco de dados. 



Agora configure sua crontab

    $crontab -e
  
  
Adicione a seguinte linha babalú

  */5 * * * * curl localhost/status.php
  
Salve o arquvivo !

Ele irá gravar a cada 5 minutos na tabela do seu banco de dados, chamando através do metodo curl o link do seu site em php



Be Happy;
