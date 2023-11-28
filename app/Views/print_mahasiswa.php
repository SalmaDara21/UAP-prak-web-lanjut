<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama Menu</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>

        <?php $id=1;
        foreach ($info as $laporan): ?>
        <tr>
            <td><?php echo $id++?></td>
            <td><?php echo $laporan->nama_mahasiswa?></td>
            <td><?php echo $laporan->quantity?></td>
            <td><?php echo $laporan->total?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>