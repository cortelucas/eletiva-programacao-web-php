#Pesquisa Criptografia com PHP

___

A importância da criptografia na atualidade é tamanha, que, virou uma boa prática. Pois com o aumento exponencial de invasões de sistema temos que usar de todas as artimanhas possíveis para que tenhamos um código seguro e protegido para os nossos usuários.

A linguagem PHP tem métodos nativos para a criptografia de dados, aqui irei listar e explanar um pouco alguns métodos de criptografia que temos. Eles são:

- ##MD5
  A função MD5 calcula o “hash MD5” de str usando RSA Data Security, Inc. MD5 Message-Digest Algorithm e devolve esse hash. O hash é um número hexadecimal 32-character. Se o opcional raw_output está definido para TRUE, então o md5 compreende que ao invés disso retorna um “raw binary format” com comprimento 16.

  O método MD5 não oferece a possibilidade de se desfazer a criptografia.

    Exemplo:
    ```php
    <?php
        // PARA ENCRIPTAR
        $palavra = “palavra, valor ou texto a ser encriptado.”;
        echo md5($texto);
    
        // RESULTADO: baaa1364d9c44fc768e91fc26134808f
    
        // NÃO HÁ COMO DESFAZER A OPERAÇÃO
    ?>
    ```


- ##Crypt
  A função crypt() retornará uma string criptografada usando o algoritmo de encriptação Unix Standard DES-based ou ou algoritmos alternativos disponíveis no sistema. Os argumentos são uma string para ser criptografada e uma string opcional para basear em qual encriptação está.
    
  O método crypt oferece a possibilidade das duas maneiras, podendo ou não haver método de descriptografia.

  Exemplo:
  ```php
    <?php
        // PARA ENCRIPTAR
        $palavra = “palavra, valor ou texto a ser encriptado.”;
        echo crypt($palavra);
        
        // RESULTADO: $1$bR5.IY4.$krFUZ01yg2uOVZ3SYt4Tx/
        
        // NO MÉTODO CRYPT EXISTE A POSSIBILIDADE DE TORNAR POSSIVEL OU NÃO O
        // O RETORNO PARA O CÓDIGO ORIGINAL. ESSA POSSIBILIDADE SE FIXA NO
        // FATO DE QUE PODEMOS CONFIGURAR UM “ARGUMENTO” PARA SER A CHAVE DA
        // ENCRIPTAÇÃO, NÃO COLOCANDO O MESMO TEREMOS UMA CHAVE ALEATÓRIA O
        // QUE LEVA A TERMOS UMA ENCRIPTAÇÃO SEM POSSIBILIDADE DE RETORNO.
    ?>
  ```

- ##Base64

    A função base64_encode() retorna um dado condificado com base64. Esta codificação é designada para que dados binários durem no transporte sobre camadas de transorte que não são 8-bit clean, como mensagens de e-mail.

    O método Base64 oferece maneira de descriptografar o código e torná-lo igual ao o que era antes da ação.

    Exemplo:
    ```php
        <?php
            // PARA ENCRIPTAR
            $palavra = “palavra, valor ou texto a ser encriptado.”;
            echo base64_encode($palavra);
            
            // RESULTADO: cGFsYXZyYSwgdmFsb3Igb3UgdGV4dG8gYSBzZXIgZW5jcmlwdGFkby4=
            
            // PARA DESFAZER A OPERAÇÃO:
            $palavra = “cGFsYXZyYSwgdmFsb3Igb3UgdGV4dG8gYSBzZXIgZW5jcmlwdGFkby4=”;
            echo base64_decode($palavra);
            
            // RESULTADO: palavra, valor ou texto a ser encriptado.
        ?>
    ```

- ##Password Hash
    A função password_hash() cria uma senha hash usando o algorítimo padrão bcrypt.

    Exemplo:
    ```php
        <?php
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            // CASO A SENHA ESTEJA CORRETA
            if (password_verify($password, $hash)) {
            echo ‘Senha correta.’;
            }
            
            // CASO A SENHA ESTEJA INCORRETA
            else {
            echo ‘Senha incorreta.’;
            }
        ?>
    ```
