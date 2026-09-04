PAINEL VIP — LOGIN ONLINE

1. Hospede server/validate.php em um servidor HTTPS.
2. Abra res/values/strings.xml.
3. Altere:
   https://SEU-DOMINIO.example/validate.php
   para a URL HTTPS real do seu endpoint.
4. A única chave aceita pelo exemplo é:
   DEUS-VIP-2026-ULTRA
5. Se alterar a chave no servidor, não é necessário colocar a nova chave dentro do APK.
6. Recompile com Apktool e assine o APK novamente.

O painel original continua sendo a Activity URL e só é iniciado depois que o servidor responde exatamente "OK".

Observação: a licença online não é realmente validável até que o endpoint HTTPS seja hospedado. Não existe servidor externo embutido neste ZIP.
