# Sistema de Controle de Documentos

## Sistema desenvolvido em:

* [Laravel](https://laravel.com/)
* [Sqlite](https://www.sqlite.org/)
* [Filament](https://filamentphp.com/)

> As versões dos pacotes usados pelo sistema estão nos arquivos [composer.json](composer.json)  e [package.json](package.json)

## Instalação

A instalação local desse sistema é bem simples, bastando apenas seguir os passos abaixo:

1. Faça o clone desse projeto em seu computador

    ```sh
    git clone git@github.com:LucasRibeiro1024b/ControleDeDocumentos.git
    ```

2. Acesse o diretório do projeto

    ```sh
    cd ControleDeDocumentos/
    ```

3. Instale os pacotes usados pelo o projeto:

    ```sh
    composer install
    ```

    > Verifique se as extenções pdo_sqlite e zip estão ativadas nas configurações do seu PHP.

4. Gere a chave de segurança
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5. Instale as bibliotecas javascript
    ```sh
    npm install && npm run build
    ```

6. Povoe o bando de dados
    ```sh
    php artisan migrate:fresh --seed
    ```

7. Inicie o servidor local
    ```sh
    php artisan serve
    ```

8. Acesse o sistema em http://127.0.0.1:8000

## Documentação

Para mais informações sobre o sistema acesse a [wiki](https://github.com/LucasRibeiro1024b/ControleDeDocumentos/wiki)

## Licença

Este sistema é de código aberto e está licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).
