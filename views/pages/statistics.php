<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/volta-ao-mundo-australia/helpers/full-path.php';
require_once fullPath('backend/session_authentication.php');
require_once fullPath('views/components/header.php');
require_once fullPath('backend/pages_queries.php');

$current_page_id = getPageIdByName('statistics');
?>

<div class="container">
    <section>
        <h1 class="text-center display-4 my-5">Estatísticas da Austrália</h1>
        <div class="d-flex justify-content-center">
            <table class="w-75 table table-striped">
                <thead class="bg-primary">
                    <tr>
                        <th class="w-50 fs-4">Nome</th>
                        <th class="fs-4">Dado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Continente</td>
                        <td>Oceania</td>
                    </tr>
                    <tr>
                        <td>Capital</td>
                        <td>Canberra</td>
                    </tr>
                    <tr>
                        <td>Expectativa de Vida</td>
                        <td>Cerca de 83 anos (dados de 2021)</td>
                    </tr>
                    <tr>
                        <td>Taxa de Analfabetismo</td>
                        <td>Aproximadamente 1% (dados de 2021)</td>
                    </tr>
                    <tr>
                        <td>Principais Setores Econômicos</td>
                        <td>Mineração, agricultura, serviços financeiros, turismo, educação, tecnologia</td>
                    </tr>
                    <tr>
                        <td>Religiões Predominantes</td>
                        <td>Cristianismo (principalmente catolicismo e protestantismo), islamismo, budismo</td>
                    </tr>
                    <tr>
                        <td>Fuso Horário</td>
                        <td>UTC +8 a +11 (dependendo da localização dentro do país)</td>
                    </tr>
                    <tr>
                        <td>Climas</td>
                        <td>Diversos climas, incluindo tropical no norte, subtropical no leste, temperado no sul
                            e desértico no
                            interior</td>
                    </tr>
                    <tr>
                        <td>Idioma</td>
                        <td>Inglês (oficial)</td>
                    </tr>
                    <tr>
                        <td>População</td>
                        <td>Aproximadamente 25,5 milhões (dados de 2021)</td>
                    </tr>
                    <tr>
                        <td>Extensão Territorial</td>
                        <td>Aproximadamente 7.692.024 km²</td>
                    </tr>
                    <tr>
                        <td>Índice de Desenvolvimento Humano (IDH)</td>
                        <td>0,944 (classificado como "muito alto", dados de 2020)</td>
                    </tr>
                    <tr>
                        <td>Produto Interno Bruto (PIB)</td>
                        <td>Aproximadamente US$ 1,3 trilhão (dados de 2020)</td>
                    </tr>
                    <tr>
                        <td>Moeda</td>
                        <td>Dólar australiano (AUD)</td>
                    </tr>
                    <tr>
                        <td>Data Nacional</td>
                        <td>26 de janeiro (Dia da Austrália)</td>
                    </tr>
                    <tr>
                        <td>Sistema Político</td>
                        <td> Monarquia constitucional parlamentar</td>
                    </tr>
                    <tr>
                        <td>Chefe de Estado</td>
                        <td>Rei Carlos III (representado pelo Governador-Geral)</td>
                    </tr>
                    <tr>
                        <td>Chefe de Governo</td>
                        <td>Primeiro-Ministro (atualmente Scott Morrison)</td>
                    </tr>
                    <tr>
                        <td>Sistema de Governo</td>
                        <td>Federal</td>
                    </tr>
                    <tr>
                        <td>Divisões Administrativas</td>
                        <td>6 estados e 2 territórios</td>
                    </tr>
                    <tr>
                        <td>Principais Cidades</td>
                        <td>Sydney, Melbourne, Brisbane, Perth, Adelaide, Gold Coast, Canberra, Hobart</td>
                    </tr>
                    <tr>
                        <td>Principais Recursos Naturais</td>
                        <td>Minério de ferro, carvão, ouro, gás natural, petróleo</td>
                    </tr>
                    <tr>
                        <td>Principais Exportações</td>
                        <td>Minério de ferro, carvão, ouro, gás natural, educação, turismo</td>
                    </tr>
                    <tr>
                        <td>Principais Importações</td>
                        <td>Equipamentos de transporte, máquinas e equipamentos, produtos químicos, produtos
                            manufaturados
                        </td>
                    </tr>
                    <tr>
                        <td>Sistema de Saúde</td>
                        <td>Sistema de saúde universal (Medicare)</td>
                    </tr>
                    <tr>
                        <td>Educação</td>
                        <td>Sistema de educação pública e privada, ensino obrigatório até os 16 anos</td>
                    </tr>
                    <tr>
                        <td>Forças Armadas</td>
                        <td>Forças Armadas Australianas (Exército, Marinha, Força Aérea)</td>
                    </tr>
                    <tr>
                        <td>Meios de Transporte</td>
                        <td>Rodovias, ferrovias, transporte aéreo, transporte marítimo</td>
                    </tr>
                    <tr>
                        <td>Meio Ambiente</td>
                        <td>Grande diversidade de ecossistemas, incluindo florestas tropicais, desertos,
                            savanas e recifes de
                            coral</td>
                    </tr>
                    <tr>
                        <td>Conservação</td>
                        <td>Várias áreas protegidas, incluindo parques nacionais, reservas naturais e áreas do
                            Patrimônio
                            Mundial</td>
                    </tr>
                    <tr>
                        <td>Energia</td>
                        <td>Fontes de energia variadas, incluindo carvão, gás natural, energia hidrelétrica,
                            energia solar e
                            eólica</td>
                    </tr>
                    <tr>
                        <td>Telecomunicações</td>
                        <td>Rede de telecomunicações avançada, com ampla cobertura de telefonia móvel e acesso
                            à internet de
                            alta velocidade</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php
require_once '../components/comments.php';
require_once '../components/footer.html';
?>