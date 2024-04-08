/*
ifelse server para validação de dados

()-> local se declaram os parametros ou expressao a ser validada
{}-> bloco de codigo que sera executado
(condiçao) ? algo ira acontecer : outro algo ira acontecer 


operadores logicos: |
                    |
                    V

=== compara se é igual a outra
!=  compara se o valor é diferente
>   compara se é maior que a outra
<   compara se é menor que a outra
>=  compara se é maior que a outra
<=  compara se é menor que a outra

se "falso": adicionar o ponto de exclamação no inicio da declaraçao de parametros/expressao, por exemplo:
if (!variavel == variavel2) {codigo} aqui significa que:q se a comparaçao da variavel com a variavel2 retornar
falso, os codigos que estiverem dentro do bloco de codigo serao executados, nao havendo a necessidade do uso da clausula "else"

criar um validador onde voce ira declarar duas vairaveis, cada uma com
um valor diferendente da outra, entao havera uma resposta diferente pra cada situaçao

vamos criar dois inputs, onde cada input ira para cada uma das duas
variaveis, ou seja:
    <input type="text" id="txtVar1" />
    <input type="text" id="txtVar2" />

    txtVar1.value que tem que ser comparado com o txtVar2.value

    enviar os dados via console.log()
*/
function check(){
var txtLogin = document.getElementById("txtLogin");
var txtSenha = document.getElementById("txtSenha");

if(txtLogin.value == txtSenha.value){
    console.log("true");
}
else{
    console.log("false");
}

};
