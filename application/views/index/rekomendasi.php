<!DOCTYPE html>
<html>
<head>
    <title>Sistem Rekomendasi TF IDF</title>
</head>
<body>
    <h1>Hasil Rekomendasi</h1>
    <table border="1">
        <tr>
            <th>ID Dokumen</th>
            <th>Skor</th>
        </tr>
        <?php foreach($results as $id => $score): ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $score; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>