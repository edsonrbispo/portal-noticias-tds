<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NoticiaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('noticias')->insert([
            [
                'titulo' => 'Laravel 12 traz melhorias de desempenho para aplicações web',
                'resumo' => 'Nova versão do framework PHP apresenta otimizações que reduzem o tempo de resposta das aplicações.',
                'conteudo' => 'A equipe responsável pelo Laravel anunciou novas melhorias de desempenho na versão 12 do framework. Entre as novidades estão otimizações no sistema de rotas, melhorias no cache e novas ferramentas para facilitar o desenvolvimento de aplicações modernas. A atualização promete reduzir o consumo de recursos do servidor e melhorar a experiência dos desenvolvedores.',
                'imagem' => 'noticias/laravel12.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'JavaScript continua liderando entre as linguagens mais utilizadas',
                'resumo' => 'Pesquisa aponta que JavaScript permanece como a linguagem favorita de desenvolvedores.',
                'conteudo' => 'Um levantamento recente mostrou que JavaScript continua sendo uma das linguagens mais utilizadas no mercado de tecnologia. Sua ampla aplicação em desenvolvimento web, mobile e backend contribui para sua popularidade. Frameworks modernos continuam impulsionando o ecossistema da linguagem.',
                'imagem' => 'noticias/javascript.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'IA generativa revoluciona a criação de conteúdo digital',
                'resumo' => 'Ferramentas de inteligência artificial estão transformando a produção de textos, imagens e vídeos.',
                'conteudo' => 'Empresas de tecnologia estão investindo cada vez mais em soluções de inteligência artificial generativa. As ferramentas permitem criar conteúdos de forma rápida e eficiente, auxiliando profissionais de marketing, design e desenvolvimento de software.',
                'imagem' => 'noticias/ia-generativa.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Assistentes virtuais ganham novos recursos com modelos avançados',
                'resumo' => 'Empresas ampliam funcionalidades de assistentes inteligentes para aumentar produtividade.',
                'conteudo' => 'Os assistentes virtuais baseados em inteligência artificial estão recebendo novos recursos capazes de interpretar contexto, gerar relatórios e automatizar tarefas complexas. Especialistas acreditam que a tendência deve acelerar nos próximos anos.',
                'imagem' => 'noticias/assistente-ia.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Nova geração de processadores promete mais eficiência energética',
                'resumo' => 'Fabricantes apresentam chips capazes de entregar maior desempenho consumindo menos energia.',
                'conteudo' => 'As principais empresas do setor de hardware anunciaram novos processadores focados em eficiência energética. A expectativa é que notebooks e desktops consigam executar tarefas mais pesadas sem comprometer a autonomia e o consumo elétrico.',
                'imagem' => 'noticias/processadores.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Mercado de SSDs apresenta queda nos preços em 2026',
                'resumo' => 'Consumidores encontram unidades de armazenamento mais rápidas e acessíveis.',
                'conteudo' => 'O mercado de armazenamento registra uma redução significativa nos preços dos SSDs. A ampliação da capacidade produtiva e o avanço tecnológico tornaram os dispositivos mais acessíveis para usuários domésticos e empresas.',
                'imagem' => 'noticias/ssd.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Empresas aceleram migração de sistemas para a nuvem',
                'resumo' => 'Cloud Computing continua sendo uma das principais estratégias de transformação digital.',
                'conteudo' => 'A adoção de serviços em nuvem cresce em diversos setores. Organizações buscam maior escalabilidade, segurança e redução de custos operacionais através da migração de aplicações e bancos de dados para ambientes cloud.',
                'imagem' => 'noticias/cloud-migracao.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Computação em nuvem híbrida ganha espaço nas empresas',
                'resumo' => 'Modelo híbrido combina infraestrutura local e serviços em nuvem pública.',
                'conteudo' => 'A nuvem híbrida vem sendo adotada por empresas que desejam manter parte de seus dados localmente enquanto aproveitam os benefícios de escalabilidade da nuvem pública. O modelo oferece flexibilidade e maior controle sobre informações sensíveis.',
                'imagem' => 'noticias/nuvem-hibrida.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Ataques de phishing continuam sendo ameaça para usuários',
                'resumo' => 'Especialistas alertam para o aumento de golpes digitais em plataformas online.',
                'conteudo' => 'Relatórios de segurança apontam crescimento no número de ataques de phishing. Os criminosos utilizam páginas falsas e mensagens fraudulentas para capturar dados pessoais e credenciais de acesso dos usuários.',
                'imagem' => 'noticias/phishing.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'titulo' => 'Autenticação multifator se torna padrão em serviços digitais',
                'resumo' => 'Empresas reforçam segurança exigindo múltiplas formas de verificação.',
                'conteudo' => 'A autenticação multifator está sendo amplamente implementada em plataformas digitais. O método adiciona camadas extras de proteção e reduz significativamente os riscos de acessos não autorizados em contas pessoais e corporativas.',
                'imagem' => 'noticias/mfa.jpg',
                'status' => 1,
                'usuario_id' => 1,
                'categoria_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
