<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="eyebrow">Temporary static data</div>
<h1><?= esc($heading) ?></h1>
<p>These five sample staff records are supplied by the <code>Users</code> controller and rendered with a <code>foreach</code> loop.</p>
<div class="table-wrap">
    <table>
        <thead><tr><th>Username</th><th>Full name</th><th>Role</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr><td><?= esc($user['username']) ?></td><td><?= esc($user['full_name']) ?></td><td><span class="pill"><?= esc($user['role']) ?></span></td></tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
