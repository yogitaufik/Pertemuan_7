<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Toko Sepatu</title>
</head>

<body>
    <center>
            <table>
                <tr>
                    <th colspan="3">
                        Form Output Transaksi Toko Sepatu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <th>Nomor HP</th>
                    <td>:</td>
                    <td>
                        <?= $nomor; ?>
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $merk; ?>
                    </td>
                </tr>

                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <?= $ukuran; ?>  
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('Sepatu'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
