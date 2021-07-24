<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Potencial Contabilidade</title>

    <link rel="icon" href="{{ asset('/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>

    <div class="h-3 bg-secondary"></div>

    <header class="md:flex">
        <div class="py-12 bg-right-top bg-no-repeat bg-cover md:w-1/2"
            style="background-image: url({{ asset('/img/banner-header.png') }})">

            <div class="flex justify-end w-1/2 px-4 py-2 text-right bg-white">
                <img class="w-20" src="{{ asset('/img/logo.jpeg') }}" alt="Potencial contabilidade">
            </div>
        </div>

        <div class="p-8 text-white md:w-1/2 bg-primary md:p-16">
            <a href="/cliente" target="_blank" rel="noopener noreferrer"
                class="inline-flex items-center px-6 py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                <i class="mr-2 fa fa-user-circle"></i>
                Área do cliente
            </a>

            <h2 class="mt-8 text-2xl font-bold tracking-tighter text-white">
                Temos uma proposta personalizada para você.<br>
                <span class="text-secondary">Deixe seu contato:</span>
            </h2>

            <x-contact-form />
        </div>
    </header>

    <main class="max-w-5xl mx-auto">
        <section class="mt-8">
            <div class="flex flex-col md:items-center md:flex-row">
                <div class="flex items-center justify-start px-8 py-4 md:w-1/2 md:px-4">
                    <div class="relative w-full aspect-w-16 aspect-h-12">
                        <div class="absolute w-full h-full pb-4 pr-4">
                            <div class="w-full h-full bg-secondary"></div>
                        </div>
                        <div class="absolute w-full h-full pt-4 pl-4">
                            <img class="object-cover w-full h-full" src="{{ asset('/img/image1.png') }}"
                                alt="Assessoria contábil para empresas">
                        </div>
                    </div>
                </div>

                <div class="px-8 py-4 md:w-1/2 md:px-4 md">
                    <h2 class="text-2xl font-black tracking-tight text-primary-dark">
                        Assessoria contábil para empresas
                    </h2>

                    <ul class="mt-4 font-light text-gray-400 text-md">
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Abertura, alteração e baixa de empresas;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Escrituração tributária e contábil;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Rotinas e assessoria trabalhista;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Assessoria e planejamento tributário;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Assessoria e gestão financeira empresarial;
                        </li>
                    </ul>
                    <p class="mt-4 font-light text-gray-400 text-md">
                        A contabilidade é essencial para o funcionamento de uma empresa, fornecendo instrumentos que
                        auxiliam a tomada de decisões que refletem no planejamento e nos investimentos.
                    </p>
                    <p class="mt-4 font-light text-gray-400 text-md">
                        Somos responsáveis por mostrar aos gestores todos os valores de seus custos, despesas, receitas
                        e lucratividades, ativos e passivos e assim obter uma organização financeira que reflete no seu
                        caixa.
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-8">
            <div class="flex flex-col-reverse md:items-center md:flex-row">
                <div class="px-8 py-4 md:w-1/2 md:px-4">
                    <h2 class="text-2xl font-black tracking-tight text-primary-dark">
                        Para pessoas físicas e jurídicas
                    </h2>

                    <ul class="mt-4 font-light text-gray-400 text-md">
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Entrega das obrigações acessórias;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Declaração do Imposto de Renda;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Acompanhamento da variação patrimonial;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Análise da vantagem tributária entre pessoa física e jurídica;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Acompanhamento mensal do fluxo de caixa pessoal;
                        </li>
                        <li>
                            <span class="mr-2 text-primary-dark">⁃</span>
                            Atendimento a notificações expedidas pela Receita Federal;
                        </li>
                    </ul>
                    <p class="mt-4 font-light text-gray-400 text-md">
                        Prestamos serviços com competência e agilidade, proporcionando satisfação e confiança aos nossos
                        clientes.
                    </p>
                    <p class="mt-4 font-light text-gray-400 text-md">
                        Atuamos de forma responsável e transparente, sempre com foco no profissionalismo.
                    </p>
                </div>

                <div class="flex items-center justify-start px-8 py-4 md:w-1/2 md:px-4">
                    <div class="relative w-full aspect-w-16 aspect-h-12">
                        <div class="absolute w-full h-full pb-4 pl-4">
                            <div class="w-full h-full bg-secondary"></div>
                        </div>
                        <div class="absolute w-full h-full pt-4 pr-4">
                            <img class="object-cover w-full h-full" src="{{ asset('/img/image2.png') }}"
                                alt="Para pessoas físicas e jurídicas">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8">
            <div class="flex flex-col md:items-center md:flex-row">
                <div class="flex items-center justify-start px-8 py-4 md:w-1/2 md:px-4">
                    <div class="relative w-full aspect-w-16 aspect-h-12">
                        <div class="absolute w-full h-full pb-4 pr-4">
                            <div class="w-full h-full bg-secondary"></div>
                        </div>
                        <div class="absolute w-full h-full pt-4 pl-4">
                            <img class="object-cover w-full h-full" src="{{ asset('/img/image3.png') }}"
                                alt="Sobre nós">
                        </div>
                    </div>
                </div>

                <div class="px-8 py-4 md:w-1/2 md:px-4">
                    <h2 class="text-2xl font-black tracking-tight text-primary-dark">
                        Sobre nós
                    </h2>
                    <p class="mt-4 font-light text-gray-400 text-md">
                        A ideia de constituir um escritório de contabilidade surgiu após uma oportunidade de atender um
                        cliente, desta forma verificou-se que as empresas necessitam do auxílio de um contador para
                        fornecer o suporte necessário em seus negócios.
                    </p>
                    <p class="mt-4 font-light text-gray-400 text-md">
                        Pensando nisso o ESCRITÓRIO CONTÁBIL POTENCIAL LTDA, foi constituído em janeiro de 2014,
                        atendendo empresas como: indústria, comércio e prestadores de serviço.
                    </p>
                    <p class="mt-4 font-light text-gray-400 text-md">
                        Em nosso contexto, o cliente é a figura mais importante, desta forma nos colocamos a inteira
                        disposição para atendê-los da melhor forma possível, disponibilizando soluções seguras para você
                        e sua empresa.
                    </p>
                </div>
            </div>
        </section>

        <section class="mt-16">
            <h2 class="text-2xl font-black tracking-tight text-center text-primary-dark">
                Links Úteis
            </h2>

            <div class="grid grid-cols-2 gap-6 px-8 mt-8 md:grid-cols-4 md:px-4">
                <a href="http://www.receita.fazenda.gov.br/PessoaJuridica/CNPJ/cnpjreva/Cnpjreva_Solicitacao.asp"
                    target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Consulta CNPJ
                </a>
                <a href="http://www.receita.fazenda.gov.br/Aplicacoes/ATCTA/CPF/ConsultaPublica.asp" target="_blank"
                    rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Consulta CPF
                </a>
                <a href="http://www8.receita.fazenda.gov.br/SimplesNacional/Aplicacoes/ATSPO/pgmei.app/Identificacao"
                    target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Impressão DAS-MEI
                </a>
                <a href="http://www.nfe.fazenda.gov.br/portal/consultaRecaptcha.aspx?tipoConsulta=completa&amp;tipoConteudo=XbSeqxE8pl8="
                    target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Consulta NF-e
                </a>
                <a href="http://nfse1.publica.inf.br/chapeco_nfse/index.jsp" target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Acesso NFS-e
                </a>
                <a href="http://sal.receita.fazenda.gov.br/PortalSalInternet/faces/pages/calcContribuicoesEmpresasEOrgaosPublicos/inicio.xhtml"
                    target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Recalculo INSS
                </a>
                <a href="http://consultacadastral.inss.gov.br/Esocial/pages/index.xhtml;jsessionid=T2DxbGnR3PBn5Cq38mGbTcgdPZSYQ0qFrGW0Pc95fhspWp3LGvTJ!268506741"
                    target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Qualificação cadastral
                </a>
                <a href="/admin" target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Acesso restrito
                </a>
            </div>
        </section>

        <section class="mt-16">
            <h2 class="text-2xl font-black tracking-tight text-center text-primary-dark">
                Certidões Negativas
            </h2>

            <div class="grid grid-cols-1 gap-6 px-8 mt-8 md:grid-cols-3 md:px-4">
                <a href="https://servicos.receita.fazenda.gov.br/Servicos/certidao/CNDConjuntaInter/InformaNICertidao.asp?tipo=1"
                    target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Negativa Federal
                </a>
                <a href="https://tributario.sef.sc.gov.br/tax.NET/Sat.CtaCte.Web/SolicitacaoCnd.aspx" target="_blank"
                    rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Negativa estadual SC
                </a>
                <a href="http://cidadao.chapeco.sc.gov.br:8080/sefaz/jsp/cnd/index.jsp" target="_blank"
                    rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Negativa Municipal Chapecó
                </a>
                <a href="https://consulta-crf.caixa.gov.br/consultacrf/pages/consultaEmpregador.jsf" target="_blank"
                    rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Negativa FGTS
                </a>
                <a href="https://www.tst.jus.br/certidao" target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Negativa Débitos Trabalhistas
                </a>
                <a href="http://www.jucesc.sc.gov.br/index.php/servicos/certidoes/solicitar-certidao-simplificada"
                    target="_blank" rel="noopener noreferrer"
                    class="py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    Certidão Simplificada Jucesc
                </a>
            </div>
        </section>
    </main>

    <footer class="mt-12 text-white">
        <div class="md:flex">
            <div class="p-8 text-white md:w-1/2 bg-primary md:p-16">
                <h2 class="mt-8 text-2xl font-bold tracking-tighter text-white">
                    Temos uma proposta personalizada para você.<br>
                    <span class="text-secondary">Deixe seu contato:</span>
                </h2>
                <x-contact-form />
            </div>

            <div class="hidden py-12 bg-right-top bg-no-repeat bg-cover md:block md:w-1/2"
                style="background-image: url({{ asset('/img/banner-footer.png') }})"></div>
        </div>
        <div class="bg-primary-dark">
            <div class="items-center justify-between max-w-5xl px-4 py-8 mx-auto md:flex">
                <a href="/cliente" target="_blank" rel="noopener noreferrer"
                    class="inline-flex items-center px-6 py-3 text-sm font-bold text-center rounded bg-secondary hover:bg-secondary-dark text-primary-dark">
                    <i class="mr-2 fa fa-user-circle"></i>
                    Área do cliente
                </a>

                <div class="flex flex-col mt-8 md:mt-0 md:flex-row">
                    <a href="#" class="md:mx-4">Políticas de privacidade</a>
                    <a href="#" class="md:mx-4">Direitos autorais</a>
                    <a href="#" class="md:mx-4">Termos de uso</a>
                </div>

                <div class="mt-8 md:mt-0">
                    <a href="#"
                        class="inline-flex items-center px-6 py-3 text-sm font-bold text-center rounded-full bg-secondary hover:bg-secondary-dark text-primary-dark">
                        <i class="fab fa-facebook fa-fw fa-lg"></i>
                    </a>
                    <a href=" #"
                        class="inline-flex items-center px-6 py-3 ml-4 text-sm font-bold text-center rounded-full bg-secondary hover:bg-secondary-dark text-primary-dark">
                        <i class="fab fa-instagram fa-fw fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
