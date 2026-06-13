-- =============================================================
--  FIX: aulas do 1º ano que faltaram (111–134)
--  Execute na aba SQL do phpMyAdmin com banco "duvid" selecionado
-- =============================================================

USE duvid;

INSERT IGNORE INTO aulas (id, titulo, ano_escolar, tipo, link_texto, link_questoes, imagem) VALUES
(111,'Dinâmicas externas do relevo: intemperismo e erosão',   1,'normal',  '1ano/Textos1/Texto11/tp11.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula11.webp'),
(112,'Revisão (Aulas 07 a 11)',                               1,'revisao', NULL,                            'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(113,'Solos: formação e tipos',                               1,'normal',  '1ano/Textos1/Texto13/tp13.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula13.webp'),
(114,'Hidrografia I – ciclo e bacias',                        1,'normal',  '1ano/Textos1/Texto14/tp14.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula14.webp'),
(115,'Hidrografia II – rios brasileiros',                     1,'normal',  '1ano/Textos1/Texto15/tp15.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula15.webp'),
(116,'Climas do mundo I – fatores e tipos',                   1,'normal',  '1ano/Textos1/Texto16/tp16.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula16.webp'),
(117,'Climas do mundo II – zonas climáticas',                 1,'normal',  '1ano/Textos1/Texto17/tp17.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula17.webp'),
(118,'Domínios vegetais do mundo',                            1,'normal',  '1ano/Textos1/Texto18/tp18.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula18.webp'),
(119,'Revisão (Aulas 13 a 18)',                               1,'revisao', NULL,                            'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(120,'Questão ambiental I – desmatamento e queimadas',        1,'normal',  '1ano/Textos1/Texto20/tp20.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula20.webp'),
(121,'Questão ambiental II – água',                           1,'normal',  '1ano/Textos1/Texto21/tp21.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula21.webp'),
(122,'Questão ambiental III – atmosfera',                     1,'normal',  '1ano/Textos1/Texto22/tp22.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula22.webp'),
(123,'Desenvolvimento sustentável',                           1,'normal',  '1ano/Textos1/Texto23/tp23.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula23.webp'),
(124,'Fontes de energia I – não renováveis',                  1,'normal',  '1ano/Textos1/Texto24/tp24.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula24.webp'),
(125,'Fontes de energia II – renováveis',                     1,'normal',  '1ano/Textos1/Texto25/tp25.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula25.webp'),
(126,'Revisão (Aulas 20 a 25)',                               1,'revisao', NULL,                            'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(127,'A população mundial I – crescimento',                   1,'normal',  '1ano/Textos1/Texto27/tp27.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula27.webp'),
(128,'A população mundial II – estrutura',                    1,'normal',  '1ano/Textos1/Texto28/tp28.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula28.webp'),
(129,'A população mundial III – distribuição',                1,'normal',  '1ano/Textos1/Texto29/tp29.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula29.webp'),
(130,'Urbanização mundial',                                   1,'normal',  '1ano/Textos1/Texto30/tp30.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula30.webp'),
(131,'Revisão (Aulas 27 a 30)',                               1,'revisao', NULL,                            'questoes/modelo-questoes.php','fotoIndex/revisao.webp'),
(132,'Globalização e geopolítica',                            1,'normal',  '1ano/Textos1/Texto32/tp32.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula32.webp'),
(133,'Blocos econômicos',                                     1,'normal',  '1ano/Textos1/Texto33/tp33.php', 'questoes/modelo-questoes.php','fotoIndex/1ano/aula33.webp'),
(134,'Revisão (Aulas 31 a 33)',                               1,'revisao', NULL,                            'questoes/modelo-questoes.php','fotoIndex/revisao.webp');

-- Confirmação
SELECT ano_escolar, COUNT(*) AS total FROM aulas GROUP BY ano_escolar ORDER BY ano_escolar;
