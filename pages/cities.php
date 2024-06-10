<?php
require '../components/header.html';
?>

<div class="container">
    <section class="p-2">
        <h1 class="text-center display-4">Principais Cidades da Austrália</h1>
        <div class="min-vh-90">
            <div class="row">
                <div class="vh-45 p-2 col-sm-12 col-md-6 col-lg-4">
                    <div id="adelaide" class="link-card bg-cover h-100 d-flex rounded-4" data-bs-toggle="modal" data-bs-target="#adelaideModal">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Adelaide</h2>
                        </div>
                    </div>
                </div>
                <div class="vh-45 p-2 col-sm-12 col-md-6 col-lg-4">
                    <div id="brisbane" class="link-card bg-cover h-100 d-flex rounded-4" data-bs-toggle="modal" data-bs-target="#brisbaneModal">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Brisbane</h2>
                        </div>
                    </div>
                </div>
                <div class="vh-45 p-2 col-sm-12 col-md-6 col-lg-4">
                    <div id="gold_coast" class="link-card bg-cover h-100 d-flex rounded-4" data-bs-toggle="modal" data-bs-target="#goldCoastModal">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Gold Coast</h2>
                        </div>
                    </div>
                </div>
                <div class="vh-45 p-2 col-sm-12 col-md-6 col-lg-4">
                    <div id="melbourne" class="link-card bg-cover h-100 d-flex rounded-4" data-bs-toggle="modal" data-bs-target="#melbourneModal">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Melbourne</h2>
                        </div>
                    </div>
                </div>
                <div class="vh-45 p-2 col-sm-12 col-md-6 col-lg-4">
                    <div id="perth" class="link-card bg-cover h-100 d-flex rounded-4" data-bs-toggle="modal" data-bs-target="#perthModal">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Perth</h2>
                        </div>
                    </div>
                </div>
                <div class="vh-45 p-2 col-sm-12 col-md-6 col-lg-4">
                    <div id="sidney" class="link-card bg-cover h-100 d-flex rounded-4" data-bs-toggle="modal" data-bs-target="#sidneyModal">
                        <div class="w-100 bg-dark-blue align-self-end rounded-bottom-4">
                            <h2 class="text-center text-white">Sidney</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ========== MODALS ========== -->

<!-- ADELAIDE -->
<div class="modal modal-lg fade" id="adelaideModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3">Adelaide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Estado: Austrália do Sul</li>
                    <li>População: Aproximadamente 1,3 milhões</li>
                    <li>Tamanho: 870,2 km²</li>
                    <li>Riqueza: Adelaide tem uma economia diversificada, com destaque para os setores de manufatura,
                        saúde,
                        educação e tecnologia.</li>
                    <li>Visitantes por Ano: Cerca de 4,5 milhões.</li>
                </ul>
                <p>Adelaide, a capital da Austrália do Sul, é conhecida por sua arquitetura elegante, parques espaçosos
                    e
                    vinícolas premiadas. A cidade oferece uma mistura de cultura, gastronomia e natureza, com destaque
                    para o
                    Adelaide Botanic Garden, o Adelaide Central Market e o Adelaide Oval, um estádio de renome
                    internacional. Os
                    visitantes também podem explorar as regiões vinícolas próximas, como o Vale Barossa e McLaren Vale,
                    conhecidos
                    por seus vinhos de classe mundial e paisagens deslumbrantes.</p>
                <div class="d-flex flex-column align-items-center">
                    <h5>Ponto Turístico: Vinícula Vale Barrossa</h5>
                    <img src="../images/cities/adelaide_vale_barrossa.webp" class="w-75">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- BRISBANE -->
<div class="modal modal-lg fade" id="brisbaneModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3">Brisbane</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Estado: Queensland</li>
                    <li>População: Aproximadamente 2,5 milhões</li>
                    <li>Tamanho: 15.842 km² km²</li>
                    <li>Riqueza: Brisbane tem uma economia diversificada, com destaque para os setores de mineração,
                        energia,
                        turismo e serviços.</li>
                    <li>Visitantes por Ano: Cerca de 5,8 milhões.</li>
                </ul>
                <p>Brisbane, a capital de Queensland, é conhecida por seu clima ensolarado, estilo de vida descontraído
                    e belos
                    espaços ao ar livre. Situada ao longo do rio Brisbane, a cidade oferece uma mistura de atrações
                    culturais,
                    parques exuberantes e uma cena gastronômica eclética. Destaques incluem South Bank Parklands, uma
                    área
                    recreativa à beira do rio, o Queensland Cultural Centre, que abriga galerias de arte e museus, e o
                    Mercado de
                    Brisbane, onde os visitantes podem saborear uma variedade de produtos locais e pratos
                    internacionais.</p>
                <div class="d-flex flex-column align-items-center">
                    <h5>Ponto Turístico: South Bank Parklands</h5>
                    <img src="../images/cities/brisbane_south_bank_parklands.jpg" class="w-75">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- GOLD COAST -->
<div class="modal modal-lg fade" id="goldCoastModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3">Gold Coast</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Estado: Queensland</li>
                    <li>População: Aproximadamente 700 mil</li>
                    <li>Tamanho: 414 km²</li>
                    <li>Riqueza: A economia da Gold Coast é impulsionada pelo turismo, comércio varejista e serviços.
                    </li>
                    <li>Visitantes por Ano: Cerca de 13,5 milhões.</li>
                </ul>
                <p>A Gold Coast, localizada ao sul de Brisbane, é famosa por suas praias de areia dourada, vida noturna
                    animada
                    e parques temáticos emocionantes. Com mais de 70 quilômetros de litoral deslumbrante, a cidade
                    oferece uma
                    variedade de atividades ao ar livre, como surfe, natação e observação de baleias. Destaques incluem
                    Surfers
                    Paradise, uma área movimentada com lojas, restaurantes e entretenimento ao vivo, o Parque Temático
                    Dreamworld
                    e o Parque Nacional Lamington, conhecido por suas trilhas para caminhadas e cachoeiras.</p>
                <div class="d-flex flex-column align-items-center">
                    <h5>Ponto Turístico: DreamWorld Park</h5>
                    <img src="../images/cities/gold_coast_dream_world_park.jpg" class="w-75">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- MELBOURNE -->
<div class="modal modal-lg fade" id="melbourneModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3">Melbourne</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Estado: Victoria</li>
                    <li>População: Aproximadamente 5 milhões</li>
                    <li>Tamanho: 9.992,5 km²</li>
                    <li>Riqueza: Melbourne é o principal centro financeiro da Austrália, com uma economia forte em
                        setores como
                        finanças, educação, manufatura e tecnologia.</li>
                    <li>Visitantes por Ano: Cerca de 10 milhões.</li>
                </ul>
                <p>Melbourne, a capital de Victoria, é conhecida por sua elegância arquitetônica, cultura vibrante e
                    cena
                    gastronômica renomada. Com uma atmosfera cosmopolita e diversidade cultural, a cidade oferece uma
                    mistura
                    eclética de bairros, desde os becos artísticos de Fitzroy até as boutiques sofisticadas de South
                    Yarra.
                    Destaques incluem o Melbourne Cricket Ground (MCG), o Royal Botanic Gardens e a rua de compras de
                    Bourke
                    Street. Os visitantes também podem desfrutar de eventos culturais, festivais e uma próspera cena de
                    arte e
                    música ao vivo.</p>
                <div class="d-flex flex-column align-items-center">
                    <h5>Ponto Turístico: Melbourne Cricket Ground</h5>
                    <img src="../images/cities/melbourne_cricket_ground.jpg" class="w-75">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
require '../components/footer.html';
?>

<!-- PERTH -->
<div class="modal modal-lg fade" id="perthModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3">Perth</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Estado: Austrália Ocidental</li>
                    <li>População: Aproximadamente 2,1 milhões</li>
                    <li>Tamanho: 6.417 km² km²</li>
                    <li>Riqueza: Perth possui uma economia forte, impulsionada pela mineração, recursos naturais e
                        setores de
                        energia.</li>
                    <li>Visitantes por Ano: Cerca de 3,3 milhões.</li>
                </ul>
                <p>Perth, a capital da Austrália Ocidental, é conhecida por sua atmosfera descontraída, clima ensolarado
                    e
                    praias deslumbrantes. Localizada nas margens do rio Swan, a cidade oferece uma variedade de
                    atividades ao ar
                    livre, como passeios de barco, mergulho e observação de golfinhos. Destaques incluem Kings Park, um
                    dos
                    maiores parques urbanos do mundo, o bairro histórico de Fremantle, conhecido por sua arquitetura
                    colonial e
                    mercado vibrante, e as praias intocadas de Rottnest Island.</p>
                <div class="d-flex flex-column align-items-center">
                    <h5>Ponto Turístico: Kings Park</h5>
                    <img src="../images/cities/perth_kings_park.jpg" class="w-75">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- SIDNEY -->
<div class="modal modal-lg fade" id="sidneyModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3">Sidney</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Estado: Nova Gales do Sul</li>
                    <li>População: Aproximadamente 5,3 milhões</li>
                    <li>Tamanho: 12.367 km²</li>
                    <li>Riqueza: Sydney é uma das cidades mais ricas da Austrália, com uma economia diversificada,
                        incluindo
                        finanças, turismo e indústrias criativas.</li>
                    <li>Visitantes por Ano: Cerca de 11 milhões.</li>
                </ul>
                <p>Sydney, a capital de Nova Gales do Sul, é uma cidade vibrante e cosmopolita conhecida por sua icônica
                    Sydney
                    Opera House e pela ponte do Porto de Sydney. Situada em torno do majestoso Porto de Sydney, a cidade
                    oferece
                    uma combinação única de atrações urbanas e belezas naturais deslumbrantes. Além dos marcos famosos,
                    como a
                    Sydney Harbour Bridge e a praia de Bondi, os visitantes podem explorar os diversos bairros da
                    cidade, cada um
                    com sua própria personalidade e charme. A gastronomia de classe mundial, a cena artística animada e
                    as opções
                    de compras de alta qualidade completam a experiência em Sydney.</p>
                <div class="d-flex flex-column align-items-center">
                    <h5>Ponto Turístico: Sidney Opera House</h5>
                    <img src="../images/cities/sidney_opera_house.webp" class="w-75">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ========== END MODALS ========== -->