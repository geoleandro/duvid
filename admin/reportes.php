<?php
// =============================================================
//  admin/reportes.php  —  Reportes de problemas em questões
// =============================================================
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../includes/conexao.php';

$pdo = getDB();

// Ação: marcar como resolvido
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['resolver'])) {
    $id = (int)$_POST['resolver'];
    $pdo->prepare("UPDATE reportes SET resolvido = 1 WHERE id = ?")->execute([$id]);
    header('Location: /admin/reportes.php');
    exit;
}

$filtro = $_GET['filtro'] ?? 'pendentes';
$where  = $filtro === 'todos' ? '' : 'WHERE r.resolvido = 0';

$reportes = $pdo->query(
    "SELECT r.id, r.aula_id, r.questao_num, r.tipo, r.mensagem,
            r.resolvido, r.criado_em,
            a.nome AS aluno_nome
     FROM reportes r
     LEFT JOIN alunos a ON a.id = r.aluno_id
     $where
     ORDER BY r.criado_em DESC
     LIMIT 200"
)->fetchAll();

$total_pendentes = $pdo->query("SELECT COUNT(*) FROM reportes WHERE resolvido = 0")->fetchColumn();

$PAGINA_ATUAL  = 'reportes';
$PAGINA_TITULO = 'Reportes';
require_once __DIR__ . '/_layout.php';

$TIPO_LABEL = [
    'gabarito'    => '❌ Gabarito errado',
    'ortografia'  => '✏️ Ortografia',
    'confusa'     => '🤔 Confusa',
    'imagem'      => '🖼️ Imagem',
    'outro'       => '💬 Outro',
];
?>

<div class="conteudo-admin">
    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;flex-wrap:wrap;gap:12px">
        <div>
            <h2 style="margin:0">⚠️ Reportes de Problemas</h2>
            <p style="margin:4px 0 0;color:var(--muted)">
                <?= $total_pendentes ?> pendente<?= $total_pendentes != 1 ? 's' : '' ?>
            </p>
        </div>
        <div style="display:flex;gap:8px">
            <a href="?filtro=pendentes"
               class="<?= $filtro === 'pendentes' ? 'btn-admin-ativo' : 'btn-admin' ?>">
               Pendentes
            </a>
            <a href="?filtro=todos"
               class="<?= $filtro === 'todos' ? 'btn-admin-ativo' : 'btn-admin' ?>">
               Todos
            </a>
        </div>
    </div>

    <?php if (empty($reportes)): ?>
        <div style="text-align:center;padding:60px;color:var(--muted)">
            <div style="font-size:48px">✅</div>
            <p>Nenhum reporte pendente!</p>
        </div>
    <?php else: ?>
    <div class="tabela-wrap">
        <table class="duvid">
            <thead>
                <tr>
                    <th>Aula / Q</th>
                    <th>Tipo</th>
                    <th>Aluno</th>
                    <th>Mensagem</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($reportes as $r): ?>
                <tr style="<?= $r['resolvido'] ? 'opacity:.45' : '' ?>">
                    <td>
                        <a href="/<?= htmlspecialchars($r['aula_id']) ?>.php"
                           target="_blank"
                           title="Abrir aula"
                           style="color:var(--accent);font-weight:bold">
                            Aula <?= htmlspecialchars($r['aula_id']) ?>
                        </a><br>
                        <small style="color:var(--muted)"><?= (int)$r['questao_num'] === 0 ? 'Texto da aula' : 'Questão ' . (int)$r['questao_num'] ?></small>
                    </td>
                    <td><?= $TIPO_LABEL[$r['tipo']] ?? htmlspecialchars($r['tipo']) ?></td>
                    <td><?= htmlspecialchars($r['aluno_nome'] ?? '—') ?></td>
                    <td style="max-width:260px;font-size:13px">
                        <?= $r['mensagem'] ? htmlspecialchars($r['mensagem']) : '<span style="color:var(--muted)">—</span>' ?>
                    </td>
                    <td style="white-space:nowrap;font-size:13px;color:var(--muted)">
                        <?= date('d/m H:i', strtotime($r['criado_em'])) ?>
                    </td>
                    <td>
                        <?php if (!$r['resolvido']): ?>
                        <form method="POST" style="margin:0">
                            <input type="hidden" name="resolver" value="<?= (int)$r['id'] ?>">
                            <button type="submit" class="btn-admin-sm"
                                    onclick="return confirm('Marcar como resolvido?')">
                                ✅ Resolver
                            </button>
                        </form>
                        <?php else: ?>
                            <span style="color:var(--muted);font-size:12px">Resolvido</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

<style>
.btn-admin, .btn-admin-ativo {
    padding: 6px 16px;
    border-radius: 6px;
    font-size: 13px;
    text-decoration: none;
    border: 1px solid var(--accent);
    color: var(--accent);
    background: none;
    cursor: pointer;
}
.btn-admin-ativo {
    background: var(--accent);
    color: #fff;
}
.btn-admin-sm {
    padding: 4px 10px;
    border-radius: 6px;
    font-size: 12px;
    border: 1px solid #4caf50;
    background: none;
    color: #4caf50;
    cursor: pointer;
    white-space: nowrap;
}
.btn-admin-sm:hover { background: #4caf50; color: #fff; }
</style>

<?php require_once __DIR__ . '/_layout_fim.php'; ?>
