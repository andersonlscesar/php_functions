# Função count_chars()


A função count_chars() do PHP conta o número de ocorrências de cada caractere em uma string. Ela pode ser usada para uma variedade de propósitos, como:

Contar o número de vezes que cada letra aparece em uma palavra ou frase.
Identificar os caracteres mais comuns em uma string.
Remover caracteres indesejados de uma string.
A função count_chars() recebe dois parâmetros:

string: A string que será analisada.
mode: Um valor inteiro que determina como os resultados serão retornados.

O valor de mode pode ser um dos seguintes:

0: Retorna um array associativo com os valores ASCII dos caracteres como chaves e o número de ocorrências como valores.
1: Retorna um array associativo com os valores ASCII dos caracteres como chaves e o número de ocorrências como valores, mas apenas para caracteres que ocorrem mais de uma vez.
2: Retorna um array associativo com os valores ASCII dos caracteres como chaves e o número de ocorrências como valores, mas apenas para caracteres que ocorrem uma vez.
