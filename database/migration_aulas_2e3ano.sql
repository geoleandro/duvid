-- =============================================================
--  DUVID — Migration 02: Aulas do 2º e 3º ano
--  Execute após ter as aulas do 1º ano já inseridas.
--  INSERT IGNORE evita erro se rodar duas vezes.
-- =============================================================

USE duvid;

-- -------------------------------------------------------
-- 2º ANO — 36 aulas (IDs 201–236)
-- -------------------------------------------------------
INSERT IGNORE INTO aulas (id, titulo, ano_escolar, tipo, link_texto, link_questoes, imagem) VALUES
(201,'Formação territorial do Brasil',          2,'normal',  '2ano/Textos2/Texto01/ts1.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula01.webp'),
(202,'Consolidação do território brasileiro',   2,'normal',  '2ano/Textos2/Texto02/ts2.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula02.webp'),
(203,'População I – formação e estrutura',      2,'normal',  '2ano/Textos2/Texto03/ts3.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula03.webp'),
(204,'Geografia agrária I - questão fundiária', 2,'normal',  '2ano/Textos2/Texto04/ts4.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula04.webp'),
(205,'Estrutura geológica e relevo brasileiro', 2,'normal',  '2ano/Textos2/Texto05/ts5.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula05.webp'),
(206,'Revisão (Aulas 01 a 05)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(207,'Classificação do relevo e litoral',       2,'normal',  '2ano/Textos2/Texto07/ts7.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula07.webp'),
(208,'Recursos minerais do Brasil',             2,'normal',  '2ano/Textos2/Texto08/ts8.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula08.webp'),
(209,'Industrialização brasileira I',           2,'normal',  '2ano/Textos2/Texto09/ts9.php',  'questoes/modelo-questoes.php','fotoIndex/2ano/aula09.webp'),
(210,'Industrialização brasileira II',          2,'normal',  '2ano/Textos2/Texto10/ts10.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula10.webp'),
(211,'Sistema de transportes no Brasil',        2,'normal',  '2ano/Textos2/Texto11/ts11.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula11.webp'),
(212,'Revisão (Aulas 07 a 11)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(213,'Fontes de energia I',                     2,'normal',  '2ano/Textos2/Texto13/ts13.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula13.webp'),
(214,'Climas do Brasil I - Tipos',              2,'normal',  '2ano/Textos2/Texto14/ts14.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula14.webp'),
(215,'Climas do Brasil II - Problemas',         2,'normal',  '2ano/Textos2/Texto15/ts15.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula15.webp'),
(216,'Vegetação I - Domínios',                  2,'normal',  '2ano/Textos2/Texto16/ts16.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula16.webp'),
(217,'Vegetação II - Domínios',                 2,'normal',  '2ano/Textos2/Texto17/ts17.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula17.webp'),
(218,'Geografia agrária II',                    2,'normal',  '2ano/Textos2/Texto18/ts18.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula18.webp'),
(219,'Revisão (Aulas 13 a 18)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(220,'Geografia agrária III',                   2,'normal',  '2ano/Textos2/Texto20/ts20.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula20.webp'),
(221,'Hidrografia brasileira',                  2,'normal',  '2ano/Textos2/Texto21/ts21.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula21.webp'),
(222,'Fontes de energia II',                    2,'normal',  '2ano/Textos2/Texto22/ts22.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula22.webp'),
(223,'População II – Dinâmica',                 2,'normal',  '2ano/Textos2/Texto23/ts23.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula23.webp'),
(224,'População III - Atividades',              2,'normal',  '2ano/Textos2/Texto24/ts24.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula24.webp'),
(225,'População IV - Migrações',                2,'normal',  '2ano/Textos2/Texto25/ts25.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula25.webp'),
(226,'Revisão (Aulas 20 a 25)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(227,'O processo de urbanização',               2,'normal',  '2ano/Textos2/Texto27/ts27.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula27.webp'),
(228,'Redes e hierarquias urbanas',             2,'normal',  '2ano/Textos2/Texto28/ts28.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula28.webp'),
(229,'O espaço das cidades',                    2,'normal',  '2ano/Textos2/Texto29/ts29.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula29.webp'),
(230,'Problemas socioambientais urbanos',        2,'normal',  '2ano/Textos2/Texto30/ts30.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula30.webp'),
(231,'Revisão (Aulas 27 a 30)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(232,'Fontes de energia III',                   2,'normal',  '2ano/Textos2/Texto32/ts32.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula32.webp'),
(233,'Meio ambiente no Brasil',                 2,'normal',  '2ano/Textos2/Texto33/ts33.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula33.webp'),
(234,'Síntese das regiões brasileiras',         2,'normal',  '2ano/Textos2/Texto34/ts34.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula34.webp'),
(235,'Brasil na globalização',                  2,'normal',  '2ano/Textos2/Texto35/ts35.php', 'questoes/modelo-questoes.php','fotoIndex/2ano/aula35.webp'),
(236,'Revisão (Aulas 32 a 35)',                 2,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/revisao.webp');


-- -------------------------------------------------------
-- 3º ANO — 36 aulas (IDs 301–336)
-- -------------------------------------------------------
INSERT IGNORE INTO aulas (id, titulo, ano_escolar, tipo, link_texto, link_questoes, imagem) VALUES
(301,'A Geografia no período atual',            3,'normal',  '3ano/Textos3/Texto01/tt1.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula01.webp'),
(302,'A população no mundo',                    3,'normal',  '3ano/Textos3/Texto02/tt2.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula02.webp'),
(303,'Migrações internacionais',                3,'normal',  '3ano/Textos3/Texto03/tt3.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula03.webp'),
(304,'Os fatores do desenvolvimento',           3,'normal',  '3ano/Textos3/Texto04/tt4.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula04.webp'),
(305,'Como medir o desenvolvimento?',           3,'normal',  '3ano/Textos3/Texto05/tt5.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula05.webp'),
(306,'Revisão (Aulas 01 a 05)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula06.webp'),
(307,'Industrialização mundial I',              3,'normal',  '3ano/Textos3/Texto07/tt7.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula07.webp'),
(308,'Industrialização mundial II',             3,'normal',  '3ano/Textos3/Texto08/tt8.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula08.webp'),
(309,'Industrialização mundial III',            3,'normal',  '3ano/Textos3/Texto09/tt9.php',  'questoes/modelo-questoes.php','fotoIndex/3ano/aula09.webp'),
(310,'Geopolítica e regionalização I',          3,'normal',  '3ano/Textos3/Texto10/tt10.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula10.webp'),
(311,'Geopolítica e regionalização II',         3,'normal',  '3ano/Textos3/Texto11/tt11.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula11.webp'),
(312,'Revisão (Aulas 07 a 11)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula12.webp'),
(313,'Agropecuária mundial',                    3,'normal',  '3ano/Textos3/Texto13/tt13.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula13.webp'),
(314,'A urbanização mundial',                   3,'normal',  '3ano/Textos3/Texto14/tt14.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula14.webp'),
(315,'As redes do espaço geográfico',           3,'normal',  '3ano/Textos3/Texto15/tt15.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula15.webp'),
(316,'Comércio multilateral',                   3,'normal',  '3ano/Textos3/Texto16/tt16.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula16.webp'),
(317,'União Europeia I',                        3,'normal',  '3ano/Textos3/Texto17/tt17.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula17.webp'),
(318,'União Europeia II',                       3,'normal',  '3ano/Textos3/Texto18/tt18.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula18.webp'),
(319,'Revisão (Aulas 13 a 18)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula19.webp'),
(320,'América do Norte: Estados Unidos',        3,'normal',  '3ano/Textos3/Texto20/tt20.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula20.webp'),
(321,'América do Norte: Canadá e México',       3,'normal',  '3ano/Textos3/Texto21/tt21.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula21.webp'),
(322,'Américas Central e do Sul',               3,'normal',  '3ano/Textos3/Texto22/tt22.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula22.webp'),
(323,'Conflitos e política na América',         3,'normal',  '3ano/Textos3/Texto23/tt23.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula23.webp'),
(324,'Revisão (Aulas 20 a 23)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula24.webp'),
(325,'África I - Diversidade natural',          3,'normal',  '3ano/Textos3/Texto25/tt25.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula25.webp'),
(326,'África II - Panorama atual',              3,'normal',  '3ano/Textos3/Texto26/tt26.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula26.webp'),
(327,'África III - Conflitos',                  3,'normal',  '3ano/Textos3/Texto27/tt27.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula27.webp'),
(328,'Conflitos no Oriente Médio',              3,'normal',  '3ano/Textos3/Texto28/tt28.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula28.webp'),
(329,'Golfo Pérsico e Turquia',                 3,'normal',  '3ano/Textos3/Texto29/tt29.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula29.webp'),
(330,'Revisão (Aulas 25 a 29)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula30.webp'),
(331,'Subcontinente indiano',                   3,'normal',  '3ano/Textos3/Texto31/tt31.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula31.webp'),
(332,'Rússia - Características gerais',         3,'normal',  '3ano/Textos3/Texto32/tt32.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula32.webp'),
(333,'O dinamismo da China',                    3,'normal',  '3ano/Textos3/Texto33/tt33.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula33.webp'),
(334,'Conflitos internos na China',             3,'normal',  '3ano/Textos3/Texto34/tt34.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula34.webp'),
(335,'Japão, Tigres e Oceania',                 3,'normal',  '3ano/Textos3/Texto35/tt35.php', 'questoes/modelo-questoes.php','fotoIndex/3ano/aula35.webp'),
(336,'Revisão (Aulas 31 a 35)',                 3,'revisao', NULL,                             'questoes/modelo-questoes.php','fotoIndex/3ano/aula36.webp');
