<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    /**
     * @var array $pengaturan
     */
    ?>
    <title><?= esc((string)($title ?? 'SPMB')) ?> - <?= esc((string)($pengaturan['nama_sekolah'] ?? 'SPMB')) ?></title>
    <?php if (!empty($pengaturan['favicon'])): ?>
        <link rel="icon" type="image/png" href="<?= base_url('uploads/' . esc((string)$pengaturan['favicon'])) ?>">
    <?php else: ?>
        <link rel="icon" href="<?= base_url('favicon.ico') ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
</head>

<body class="bg-pattern min-h-screen flex items-center justify-center p-6 font-sans text-slate-900 antialiased">

    <main>
        <?= $this->renderSection('content') ?>

        <?= $this->renderSection('scripts') ?>
        <div class="mt-10 text-center opacity-70">
            <p class="text-xs text-slate-600">© <?= date('Y') ?> Sistem Penerimaan Peserta Didik Baru.</p>
        </div>
    </main>
</body>

</html>