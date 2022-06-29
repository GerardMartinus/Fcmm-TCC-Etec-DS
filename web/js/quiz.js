let titulo     = document.querySelector('h1');
let instrucoes = document.querySelector('#instrucoes');
let aviso      = document.querySelector('#aviso');
let progresso  = document.querySelector('#progresso');
let pontos = 0 // pontos para o placar
let placar = 0 // placar

// AUDIO
let somAcerto   = document.querySelector('#somAcerto');
let somErro     = document.querySelector('#somErro');
let somAplausos = document.querySelector('#somAplausos');

// PERGUNTA
let numQuestao = document.querySelector('#numQuestao');
let imgQuestao = document.querySelector('.imagemDaQuestao img');  // ADICIONE
let imgPergunta = document.querySelector('.imagemDaPergunta img');
let pergunta   = document.querySelector('#pergunta');

// ALTERNATIVAS
let a = document.querySelector('#a');
let b = document.querySelector('#b');
let c = document.querySelector('#c');
let d = document.querySelector('#d');

// article com a class questoes
let articleQuestoes = document.querySelector('.questoes');
// ol li com as alternativas
let alternativas = document.querySelector('#alternativas');

const q0 = {
    numQuestao   : 0,
    imagem       : '../img/quiz/0.jpeg',  // Adicionar imagem
    pergunta     : "Pergunta",
    alternativaA : "Alternativa A",
    alternativaB : "Alternativa B",
    alternativaC : "Alternativa C",
    alternativaD : "Alternativa D",
    correta      : "0",
}
const q1 = {
    numQuestao   : 1,
    imagem       : '../../img/quiz/1.png',  // Imagem do alfabeto
    pergunta     : "Esses sinais representam...",
    alternativaA : 'Números',
    alternativaB : "Cores",
    alternativaC : "Animais",
    alternativaD : "Alfabeto",
    correta      : "Alfabeto",
}
const q2 = {
    numQuestao   : 2,
    imagem       : '../../img/quiz/2.png',  // Imagem com um sinal se referindo a um pássaro
    pergunta     : "A que animal se refere?",
    alternativaA : "Pássaro",
    alternativaB : "Leão",
    alternativaC : "Cobra",
    alternativaD : "Macaco",
    correta      : "Pássaro",
}
const q3 = {
    numQuestao   : 3,
    imagem       : '../../img/quiz/3.png',  // Imagem com sinal de Palmas
    pergunta     : "O sinal se refere a...",
    alternativaA : "Palmas",
    alternativaB : "Abraço",
    alternativaC : "Saudação",
    alternativaD : "Despedida",
    correta      : "Palmas",
}
const q4 = {
    numQuestao   : 4,
    imagem       : '../../img/quiz/4.png',  // imagem que faz sinal de apresentação: eu e vc
    pergunta     : "Os sinais acima faz alusão ao que?",
    alternativaA : "Sinais de sol e lua",
    alternativaB : "Sinais de hoje e ontem",
    alternativaC : "Sinais de agora e depois",
    alternativaD : "Sinais de eu e você",
    correta      : "Sinais de eu e você",
}
const q5 = {
    numQuestao   : 5,
    imagem       : '../../img/quiz/5.png',  // Imagem com sinais de pronomes masculino e feminino
    pergunta     : "As imagens acima se referem a quais pronomes?",
    alternativaA : "Ele/Dele",
    alternativaB : "Ele/Dele e Ela/Dela",
    alternativaC : "Ela/Dela e Ele/Dele",
    alternativaD : "Ela/Dela",
    correta      : "Ele/Dele e Ela/Dela",
}
const q6 = {
    numQuestao   : 6,
    imagem       : '../../img/quiz/6.png',  // Imagem com saudação de oi e boa noite
    pergunta     : "Ao que os sinais acima se referem?",
    alternativaA : "Oi, Boa noite",
    alternativaB : "Oi, Bom dia",
    alternativaC : "Olá, Boa tarde",
    alternativaD : "Olá, Boa noite",
    correta      : "Oi, Boa noite",
}
const q7 = {
    numQuestao   : 7,
    imagem       : '../../img/quiz/7.png',  // Imagem perguntando qual o seu nome
    pergunta     : "A qual pergunta se refere a imagem acima?",
    alternativaA : "Qual sua idade?",
    alternativaB : "Qual seu signo?",
    alternativaC : "Qual seu apelido?",
    alternativaD : "Qual seu nome?",
    correta      : "Qual seu nome?",
}
const q8 = {
    numQuestao   : 8,
    imagem       : '../../img/quiz/8.png',  // Imagens com números: 1,3,5,7 e 9
    pergunta     : "Quais os números descritos acima?",
    alternativaA : "1, 2, 3, 4 e 5",
    alternativaB : "2, 4, 6, 8 e 10",
    alternativaC : "1, 3, 5, 7 e 9",
    alternativaD : "9, 6, 7, 3 e 1",
    correta      : "1, 3, 5, 7 e 9",
}
const q9 = {
    numQuestao   : 9,
    imagem       : '../../img/quiz/9.png',  // Imagem com numerais formando 2002
    pergunta     : "A qual ano se refere a imagem acima?",
    alternativaA : "2004",
    alternativaB : "2002",
    alternativaC : "2020",
    alternativaD : "2022",
    correta      : "2002",
}
const q10 = {
    numQuestao   : 10,
    imagem       : '../../img/quiz/10.png',  // Imagem com os números de 1 a 10
    pergunta     : "Esses sinais representam...",
    alternativaA : "Cores",
    alternativaB : "Alfabeto",
    alternativaC : "Números",
    alternativaD : "Animais",
    correta      : "Números",
}

// CONSTANTE COM UM ARRAY DE OBJETOS COM TODAS AS QUESTOES
const questoes = [q0, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10]

let numero = document.querySelector('#numero');
let total  = document.querySelector('#total');

numero.textContent = q1.numQuestao;

let totalDeQuestoes = (questoes.length)-1;
console.log("Total de questões " + totalDeQuestoes);
total.textContent = totalDeQuestoes;

// MONTAR A 1a QUESTAO COMPLETA, para iniciar o Quiz
numQuestao.textContent = q1.numQuestao;
imgQuestao.setAttribute('src', 'images/'+q1.imagem);  // ADICIONE
pergunta.textContent   = q1.pergunta;
a.textContent = q1.alternativaA;
b.textContent = q1.alternativaB;
c.textContent = q1.alternativaC;
d.textContent = q1.alternativaD;

// CONFIGURAR O VALUE INICIAL DA 1a QUESTAO COMPLETA
a.setAttribute('value', '1A')
b.setAttribute('value', '1B')
c.setAttribute('value', '1C')
d.setAttribute('value', '1D')

// PARA MONTAR AS PROXIMAS QUESTOES
function proximaQuestao(nQuestao) {
    numero.textContent = nQuestao
    numQuestao.textContent = questoes[nQuestao].numQuestao
    imgQuestao.setAttribute('src', 'images/'+questoes[nQuestao].imagem) // ADICIONE
    pergunta.textContent   = questoes[nQuestao].pergunta
    a.textContent = questoes[nQuestao].alternativaA
    b.textContent = questoes[nQuestao].alternativaB
    c.textContent = questoes[nQuestao].alternativaC
    d.textContent = questoes[nQuestao].alternativaD
    a.setAttribute('value', nQuestao+'A')
    b.setAttribute('value', nQuestao+'B')
    c.setAttribute('value', nQuestao+'C')
    d.setAttribute('value', nQuestao+'D')
    progresso.value = parseInt(progresso.value) + 1
    //console.log(progresso.value)
}

// VERIFICAR DUPLO CLICK NAS ALTERNATIVAS
alternativas.addEventListener('dblclick', () => {
    //console.log('Duplo clique')
    pontos -= 10 // tirar 10 pontos em caso de duplo click
    if(numQuestao.value == 10 && pontos == 110) { pontos = 100 }
})

function bloquearAlternativas() {
    alternativas.classList.add('bloqueado')
}

function desbloquearAlternativas() {
    alternativas.classList.remove('bloqueado')
}

function piscarNoAcerto() {
    articleQuestoes.classList.remove('errou')
    articleQuestoes.classList.add('acertou')
}

function piscarNoErro() {
    articleQuestoes.classList.remove('acertou')
    articleQuestoes.classList.add('errou')
}

function tirarPiscar() {
    articleQuestoes.classList.remove('acertou')
    articleQuestoes.classList.remove('errou')
}

function verificarSeAcertou(nQuestao, resposta) {

    let numeroDaQuestao = nQuestao.value
    console.log("Questão " + numeroDaQuestao)

    let respostaEscolhida = resposta.textContent
    //console.log("RespU " + respostaEscolhida)

    let certa = questoes[numeroDaQuestao].correta
    //console.log("RespC " + certa)

    if(respostaEscolhida == certa) {
        //console.log("Acertou")
        //respostaEsta.textContent = "Correta 😊"
        piscarNoAcerto()
        somAcerto.play()
        pontos += 10 // pontos = pontos + 10
        if(nQuestao.value == 1 && pontos == 20) { pontos = 10 }
    } else {
        //console.log("Errou!")
        //respostaEsta.textContent = "Errada 😢"
        piscarNoErro()
        somErro.play()
    }
    setTimeout(() => {
        tirarPiscar()
    }, 150);
    
    // atualizar placar
    placar = pontos
    instrucoes.textContent = "Pontos " + placar

    // bloquear a escolha de opcoes
    bloquearAlternativas()

    setTimeout(function() {

        proxima = numeroDaQuestao+1

        if(proxima > totalDeQuestoes) {
            console.log('Fim do Jogo!')
            fimDoJogo()
        } else {
            proximaQuestao(proxima)
        }
    }, 150)
    desbloquearAlternativas()
}

/* function fimDeJogo(){
    if (pontos >= 70){
        window.location.href = '../ṕhp/dashboard.php';
    } else {
        window.location.reload(true);
    }
}  */

function fimDoJogo() {

    if (pontos >= 70){
        let s = 's'
        pontos == 0 ? s = '' : s = s
        instrucoes.textContent = "Parabens! Você conseguiu " + pontos + " ponto"+ s
        instrucoes.classList.add('placar')
        document.querySelector('.fim').style.display = "block";
        document.getElementById("fimBotao").innerHTML = "Continuar";



    // OCULTAR O ARTICLE DA QUESTAO
        articleQuestoes.style.display = 'none'
    } else {
        let s = 's'
        pontos == 0 ? s = '' : s = s
        instrucoes.textContent = "Que pena! Você conseguiu apenas " + pontos + " ponto"+ s + ", tente novamente."
        instrucoes.classList.add('placar')
        document.querySelector('.fim').style.display = "block";
        document.getElementById("fimBotao").innerHTML = "Repetir";
        
    // OCULTAR O ARTICLE DA QUESTAO
        articleQuestoes.style.display = 'none'
    }

    somAplausos.play()
}

/* function retornar(){
    window.location.href = '../html/unidade1.html';
}  */