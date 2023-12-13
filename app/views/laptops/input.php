<h2>Input Laptops</h2>

<form action="<?php echo URL; ?>/laptops/save" method="post">
    <table>
        <tr>
            <td>MERK</td>
            <td><input type="text" name="merk" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
            <td>RAM</td>
            <td><input type="text" name="ram" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>